<?php
use App\Http\Resources\ActivityResource;
use App\Http\Resources\User_ProfileResource;
use App\Http\Resources\Information_Of_PartnerResource;
use App\Models\User_Profile;
use App\Models\Activity;
use App\Models\Information_of_partner;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

//Route::prefix('/v1')->group(function () {
//});

Route::get('/userprofiles', function(){
    return User_Profile::all();
});

Route::get('/userprofiles/{id}', function ($id) {
    return new User_ProfileResource(User_Profile::findOrFail($id));
});

Route::get('/activities', function(){
    return Activity::all();
});

Route::get('/activities/user/{user_id}', function ($user_id) {
    
    $users = new ActivityResource(Activity::where('user_id', 'like', "%{$user_id}%")->get());
    foreach ($users as $user){
        return $user;
    }    

});

Route::get('/partners', function(){
    return Information_of_partner::all();
});
Route::get('/partners/{id}', function($id){
    return new Information_Of_PartnerResource(Information_Of_Partner::findOrFail($id));
});

Route::get('/partners/primaryuser/{user_id}', function($user_id){
    return new Information_Of_PartnerResource(Information_Of_Partner::where('user_id', 'like', "%{$user_id}%")->first());
});