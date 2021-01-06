<?php

namespace App\Http\Resources;

use App\Models\Service;
use Illuminate\Http\Resources\Json\JsonResource;

class ServiceResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array
     */
    public function toArray($request)
    {
        /** @var Service $resouce */
        $resource = $this->resource;

        return [
            'id' => $resource->getKey(),
            'name' => $resource->getAttributeValue('name'),
            'description' => $resource->getAttributeValue('description')
        ];
    }
}
