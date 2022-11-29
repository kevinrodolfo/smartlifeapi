<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User_Health_Detail;
use App\Http\Resources\User_Health_DetailResource;

class UserProfileControllerId extends Controller
{
   public function index($id){
    $userhealthdetails = User_Health_Detail::with(['user_profiles']);
    #return User_Health_DetailResource::collection($userhealthdetails->paginate(perPage:50))->response();
    $userhealthdetails2 = new User_Health_DetailResource($userhealthdetails::where('user_id', 'like', "%{$id}%")->get());
    foreach ($userhealthdetails2 as $userhealthdetail2){
        return $userhealthdetail2;
    }    
    
   }
}
