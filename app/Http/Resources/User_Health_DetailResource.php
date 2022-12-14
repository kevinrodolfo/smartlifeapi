<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class User_Health_DetailResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array|\Illuminate\Contracts\Support\Arrayable|\JsonSerializable
     */
    public function toArray($request)
    {
        $userprofile = $this->whenLoaded(relationship:'user_profiles');
        return [
            'id' => $this->id,
            'beats_per_minute' => $this->beats_per_minute,
            'blood_pressure' => $this->blood_pressure,
            'heart_rate' => $this->heart_rate,
            'oxygen' => $this->oxygen,
            'user_id' => $this->user_id,
            #'blood_cholesterols' => Blood_CholesterolResource::collection($this->whenLoaded(relationship:'blood_cholesterols')),
            #'recommended_health_values' => Recommended_Health_ValueResource::collection($this->whenLoaded()),
            'user_profiles' => new User_ProfileResource($userprofile),
        ];
    }
}
