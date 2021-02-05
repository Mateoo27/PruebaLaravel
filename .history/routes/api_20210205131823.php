<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\RolController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\ConfigController;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});

//Rutas de usuario-cliente
Route::get('/users',[UserController::class, 'index']);
Route::post('/users/create',[UserController::class, 'store']);
Route::get('/users0/{id}',[UserController::class, 'show']);
Route::put('/users/{id}',[UserController::class, 'update']);
Route::delete('/users/{id}', [UserController::class, 'destroy']);

