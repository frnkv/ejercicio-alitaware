<?php

namespace App\Http\Resources;

use App\Models\User;
use Illuminate\Http\Resources\Json\JsonResource;

class UserResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array
     */
    public function toArray($request)
    {
        /** @var User $resource */
        $resource = $this->resource;
        return [
            'id' => $resource->getKey(),
            'username' => $resource->getAttributeValue('username'),
            'email' => $resource->getAttributeValue('email'),
            'name' => $resource->getAttributeValue('name'),
            'surname' => $resource->getAttributeValue('surname'),
            'latitude' => $resource->getAttributeValue('latitude'),
            'longitude' => $resource->getAttributeValue('longitude')
        ];
    }
}
