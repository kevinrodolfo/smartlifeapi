<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class User_profile extends Model
{
    public function user_health_details(){
        return $this->hasMany(related: User::class, foreignKey:'user_id');
    }
}
