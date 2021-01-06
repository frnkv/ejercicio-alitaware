<?php

namespace App\Http\Resources;

use App\Models\Subscription;
use Illuminate\Http\Resources\Json\JsonResource;
use Illuminate\Support\Carbon;

class SubscriptionResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array
     */
    public function toArray($request)
    {
        /** @var Subscription $resource */
        $resource = $this->resource;

        return [
            'id' => $resource->getKey(),
            'user_id' => $resource->getAttributeValue('user_id'),
            'user' => $this->whenLoaded('subscriber', new UserResource($resource->subscriber()->getResults())),
            'service_id' => $resource->getAttributeValue('service_id'),
            'service' => $this->whenLoaded('service', new ServiceResource($resource->service()->getResults())),
            'payment_id' => $resource->getAttributeValue('payment_id'),
            'payment' => $this->whenLoaded('payment', new PaymentResource($resource->payment()->getResults())),
            'created_at' => $resource->getAttributeValue('created_at'),
            'updated_at' => $resource->getAttributeValue('updated_at'),
            'due_date' => $this->getDueDate($resource)

        ];
    }

    private function getDueDate(Subscription $resource): string
    {
        $created_at = $resource->getAttributeValue('created_at');

        return (new Carbon($created_at))->addMonths()->format('Y-m-d H:i:s');
    }
}
