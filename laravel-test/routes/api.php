<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;



Route::post('/users', [UserController::class, 'getAllUsers']);
//Route::get('/n', [UserController::class, 'hi']);

Route::post('/signup', [UserController::class, 'signUp']);
Route::get('/bi', [UserController::class, 'getUserById']);