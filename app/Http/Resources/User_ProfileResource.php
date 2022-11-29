<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class User_ProfileResource extends JsonResource
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
            'name' => $this->name,
            'age' => $this->age,
            'email' => $this->email,
            'profile_picture' => $this->profile_picture,
            'is_active' => $this->is_active,
            'password' => $this->password,
            'phone_number' => $this->phone_number,
            'partner_id' => $this->partner_id,
            'created_at' => $this->created_at,
            'updated_at' => $this->updated_at,
            'user_health_details' => User_Health_DetailResource::collection($this->whenLoaded(relationship:'user_health_details')),
            ];
    }
}
