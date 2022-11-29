<?php

namespace App\Http\Controllers;

use App\Models\User_health_detail;
use App\Http\Resources\User_Health_DetailResource;
use Illuminate\Http\Request;


class User_Health_DetailController extends Controller
{
   public function index(){
      #$userhealthdetails = User_Health_Detail::with(['blood_cholesterols','blood_glucoses','blood_pressures','body_heights','body_weights']);
      
      #$user_health_details = User_health_detail::with(['blood_cholesterols']);
      #return User_Health_DetailResource::collection($user_health_details->paginate(perPage:50))->response();
   }
}
