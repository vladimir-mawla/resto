<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\RestoController;



Route::get('/users', [UserController::class, 'getAllUsers']);
Route::post('/signup', [UserController::class, 'signUp']);
Route::post('/getuser', [UserController::class, 'getUserById']);
Route::post('/login', [UserController::class, 'logIn']);
Route::post('/edituser', [UserController::class, 'editUser']);

Route::post('/getresto', [RestoController::class, 'getResto']);
Route::post('/getallrestos', [RestoController::class, 'getAllRestos']);
Route::post('/addresto', [RestoController::class, 'addResto']);
Route::post('/editresto', [RestoController::class, 'editResto']);


