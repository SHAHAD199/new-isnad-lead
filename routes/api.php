<?php

use App\Http\Controllers\{AuthController, LeadController, UserController};
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

Route::get('/user', function (Request $request) {
    return $request->user();
})->middleware('auth:sanctum');


Route::middleware('auth:api')->group(function()
{
    Route::apiResource('users', UserController::class);

});

Route::apiResource('leads', LeadController::class);

Route::controller(AuthController::class)->group(function(){
    Route::post('login', 'login');
    Route::post('logout', 'logout');
});