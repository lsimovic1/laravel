<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class CustomerResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array|\Illuminate\Contracts\Support\Arrayable|\JsonSerializable
     */
    public static $wrap = 'customer';

    public function toArray($request)
    {
        return [
            'name' => $this->resource->name,
            'email' => $this->resource->email,
            'born in' => $this->resource->birth,
            'gender' => $this->resource->gender,
            'inserted by' => new UserResource($this->resource->user)
        ];
    }
}
