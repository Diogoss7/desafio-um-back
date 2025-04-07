<?php

use App\Http\Controllers\ClientController;
use App\Http\Controllers\UserController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

Route::middleware('auth:api')->get('/client', function (Request $request) {
    return $request->user();
});

Route::post('/register', [ClientController::class, 'register']);
Route::get('/clients', [ClientController::class, 'getClients']);
Route::get('/client/{id}', [ClientController::class, 'getClientById']);
Route::put('/update/{id}', [ClientController::class, 'update']);
Route::delete('/client/{id}', [ClientController::class, 'delete']);
