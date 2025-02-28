<?php

use App\Http\Controllers\Api\AuthController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

// Route::get('/user', function (Request $request) {
//     return $request->user();
// })->middleware('auth:sanctum');

Route::post('/register', [AuthController::class,'register']);
Route::post('/login', [AuthController::class, 'login'])->name('login');
Route::post('/logout', [AuthController::class,'logout']);
Route::post('/refresh', [AuthController::class,'refresh']);


Route::middleware('auth:api')->post('/me', [AuthController::class, 'me']);



Route::apiResource('/lowongans',App\Http\Controllers\Api\LowonganController::class);
