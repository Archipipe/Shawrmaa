<?php

use App\Http\Controllers\CreateReviewController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\LoginController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;


Route::post('/login',[LoginController::class,'login']);
Route::post('/login/verify',[LoginController::class,'verify']);
Route::post('/logout',[LoginController::class,'logout']);

Route::middleware(['auth:sanctum'])->group(function(){
    Route::post('/dashboard',DashboardController::class);
    Route::post('/create_review',CreateReviewController::class);
});

