<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class CarsResource extends JsonResource
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
            'type' => 'Cars',
            'attributes' => [
                'brand' => $this->brand,
                'model' => $this->model,
                'production_year' => (string)$this->production_year,
                'registration_year' => (string)$this->registration_year,
                'vin' => $this->vin,
                'plate' => $this->plate,
                'client' => $this->client,
            ]
        ];
    }
}
