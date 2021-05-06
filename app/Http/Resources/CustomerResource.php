<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class CustomerResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array
     */
    public function toArray($request)
    {
        return [
            'firstname' => $this->first_name,
            'email' => $this->email,
            'phone' => $this->phone,
            'company' => $this->company,
            'date' => $this->date,
        ];
    }
}
