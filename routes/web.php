<?php

use App\Http\Controllers\AuthController;
use Illuminate\Support\Facades\Route;

Route::get('/login', [AuthController::class, 'login']);

Route::get('/callback', [AuthController::class, 'callback']);

Route::get('/logout', [AuthController::class, 'logout']);
