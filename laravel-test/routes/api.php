<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\RestoController;
use App\Http\Controllers\ReviewController;



Route::get('/users', [UserController::class, 'getAllUsers']);
Route::post('/signup', [UserController::class, 'signUp']);
Route::post('/getuser', [UserController::class, 'getUserById']);
Route::post('/login', [UserController::class, 'logIn']);
Route::post('/edituser', [UserController::class, 'editUser']);

Route::post('/getresto', [RestoController::class, 'getResto']);
Route::get('/getallrestos', [RestoController::class, 'getAllRestos']);
Route::post('/addresto', [RestoController::class, 'addResto']);
Route::post('/editresto', [RestoController::class, 'editResto']);
Route::post('/deleteresto', [RestoController::class, 'deleteResto']);

Route::post('/addrev', [ReviewController::class, 'addRev']);
Route::get('/get_accepted_revs', [ReviewController::class, 'getAcceptedRevs']);
Route::get('/get_pending_revs', [ReviewController::class, 'getPendingRevs']);
Route::post('/getrev', [ReviewController::class, 'getRev']);
Route::post('/acceptrev', [ReviewController::class, 'acceptRev']);
