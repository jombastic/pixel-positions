<?php

use App\Http\Controllers;
use Illuminate\Support\Facades\Route;

Route::get('/', [Controllers\JobController::class, 'index']);

Route::get('/jobs/create', [Controllers\JobController::class, 'create'])->middleware('auth');
Route::post('/jobs', [Controllers\JobController::class, 'store'])->middleware('auth');

Route::get('/search', Controllers\SearchController::class);
Route::get('/tags/{tag:slug}', Controllers\TagController::class);

Route::middleware('guest')->group(function () {
    Route::get('/register', [Controllers\RegisteredUserController::class, 'create']);
    Route::post('/register', [Controllers\RegisteredUserController::class, 'store']);

    Route::get('/login', [Controllers\SessionController::class, 'create']);
    Route::post('/login', [Controllers\SessionController::class, 'store']);
});


Route::delete('/logout', [Controllers\SessionController::class, 'destroy'])->middleware('auth');
