<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

use App\Http\Controllers\TestController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\RestoController;

Route::get('/', [TestController::class, 'sayHi'])->name("say-hi");
Route::get('/bye', [TestController::class, 'sayBye']);//->name("say-bye");
Route::get('/all_users/{id?}', [UserController::class, 'getAllUsers']);
Route::post('/register/{user_type_id}', [UserController::class, 'signUp']);

Route::get('/restaurants/{id?}', [RestoController::class, 'getAllRestos']);
Route::get('/search/{name}', [RestoController::class, 'getRestoByName']);

Route::post('/add_resto', [RestoController::class, 'addResto']);
