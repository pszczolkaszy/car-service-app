<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class ClientsResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array|\Illuminate\Contracts\Support\Arrayable|\JsonSerializable
     */
    public function toArray($request)
    {
        return [
            'id' => (string)$this->id,
            'type' => 'Clients',
            'attributes' => [
                'name' => $this->name,
                'nip' => $this->nip,
                'email' => $this->email,
                'phone' => $this->phone,
                'address_city' => $this->address_city,
                'address_code' => $this->address_code,
                'address_street' => $this->address_street,
                'address_number' => $this->address_number,
                'address_local' => $this->address_local,
                'cars' => $this->cars,
            ]
        ];
    }
}
