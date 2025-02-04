<?php

use App\Http\Controllers;
use Illuminate\Support\Facades\Route;

Route::get('/', [Controllers\JobController::class, 'index']);

Route::get('/register', [Controllers\RegisteredUserController::class, 'create']);
Route::post('/register', [Controllers\RegisteredUserController::class, 'store']);

Route::get('/login', [Controllers\RegisteredUserController::class, 'create']);
Route::post('/login', [Controllers\RegisteredUserController::class, 'store']);
Route::delete('/logout', [Controllers\RegisteredUserController::class, 'destroy']);
