<?php

namespace App\Http\Resources;

use App\Models\Payment;
use Illuminate\Http\Resources\Json\JsonResource;

class PaymentResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array
     */
    public function toArray($request)
    {
        /** @var Payment $resource */
        $resource = $this->resource;

        return [
            'id' => $resource->getKey(),
            'user_id' => $resource->getAttributeValue('user_id'),
            'user' => $this->whenLoaded('userWhoPaid', new UserResource($resource->userWhoPaid)),
            'amount' => $resource->getAttributeValue('amount'),
            'subscriptions' => $this->whenLoaded('subscriptions', SubscriptionResource::collection($resource->subscriptions))
        ];
    }
}
