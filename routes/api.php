<?php

use App\Http\Controllers\UserController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

Route::post('/register', [UserController::class, 'register']);
Route::get('/users', [UserController::class, 'getUsers']);
Route::put('/update/{id}', [UserController::class, 'update']);
Route::put('/user/{id}', [UserController::class, 'delete']);
