<?php

use App\Http\Controllers\UserController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "api" middleware group. Make something great!
|
*/

Route::get('/anything/{age?}', [UserController::class, "get_age"]);
Route::post('/test_route', [UserController::class, 'greet']);
Route::post('/insert_user', [UserController::class, 'insert_user']);
Route::post('/insert_user_2', [UserController::class, 'insert_user_way_2']);
Route::post('/insert_user_3', [UserController::class, 'insert_user_way_3']);
Route::get('/user/{id}', [UserController::class, "getUser"]);
Route::get('/users', [UserController::class, 'getUsers']);
