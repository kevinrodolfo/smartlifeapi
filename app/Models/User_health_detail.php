<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class User_health_detail extends Model
{
    #use HasFactory;
    public function user_profiles(){
        #return $this->hasMany(Blood_cholesterol::class, foreignKey: 'user_id');
        #return $this->belongsTo(Blood_cholesterol::class, foreignKey: 'blood_cholesterol_id');
        return $this->belongsTo(User_profile::class, foreignKey: 'user_id');
    }
}
