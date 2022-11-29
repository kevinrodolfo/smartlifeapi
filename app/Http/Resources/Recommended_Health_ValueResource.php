<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class Recommended_Health_ValueResource extends JsonResource
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
            'id' => $this->id,
            'beats_per_minute' => $this->beats_per_minute,
            'blood_pressure' => $this->blood_pressure,
            'moisture' => $this->moisture,
            'oxygen' => $this->oxygen,
        ];
    }
}
