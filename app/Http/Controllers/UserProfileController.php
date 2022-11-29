<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User_Health_Detail;
use App\Http\Resources\User_Health_DetailResource;

class UserProfileController extends Controller
{
   public function index(){
    $userhealthdetails = User_Health_Detail::with(['user_profiles']);
    return User_Health_DetailResource::collection($userhealthdetails->paginate(perPage:50))->response();

    
   }
}
