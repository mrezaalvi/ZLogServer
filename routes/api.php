<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\API\AuthController;
use App\Http\Controllers\API\UserController;


Route::post('login',[AuthController::class,'login']);

Route::middleware('auth:sanctum')->group(function(){
    Route::get('/user', [AuthController::class,'getUser']);

    Route::post('logout', [AuthController::class,'logout']);
});
