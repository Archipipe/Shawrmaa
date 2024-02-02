<?php

use App\Http\Controllers\DashboardController;
use App\Http\Controllers\LoginController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;


Route::post('/login',[LoginController::class,'login']);
Route::post('/login/verify',[LoginController::class,'verify']);
Route::post('/logout',[LoginController::class,'logout']);

Route::post('/dashboard',DashboardController::class)->middleware('auth:sanctum');
