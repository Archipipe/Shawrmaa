<?php

use App\Http\Controllers\ReviewController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\GetRestaurantsController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\UserController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;


Route::post('/login',[LoginController::class,'login']);
Route::post('/login/verify',[LoginController::class,'verify']);

Route::middleware(['auth:sanctum'])->group(function(){
    Route::post('/logout',[LoginController::class,'logout']);

    Route::post('/review/create',[ReviewController::class,'store']);
    Route::delete('/review/delete',[ReviewController::class,'delete']);

    Route::get('/restaurants',GetRestaurantsController::class);

    Route::get('/user',[UserController::class,'index']);
    Route::put('/user',[UserController::class,'update']);
});

