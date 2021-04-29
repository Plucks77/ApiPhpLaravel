<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\AddressController;
use App\Http\Controllers\CityController;
use App\Http\Controllers\StateController;


Route::post('/login', [UserController::class, 'login'])->name('login');

Route::post('/store', [UserController::class, 'store']);
Route::get('/', [UserController::class, 'index']);

Route::middleware(['auth:sanctum'])->group(function () {
    Route::put('/update/{user}', [UserController::class, 'update']);
    Route::delete('/delete/{user}', [UserController::class, 'destroy']);
});


Route::get('/users/city/{city}', [UserController::class, 'findByCity']);
Route::get('/users/state/{state}', [UserController::class, 'findByState']);

Route::get('/addresses', [AddressController::class, 'index']);
Route::get('/address/{address}', [AddressController::class, 'find']);

Route::get('/cities', [CityController::class, 'index']);
Route::get('/city/{city}', [CityController::class, 'find']);

Route::get('/states', [StateController::class, 'index']);
Route::get('/state/{state}', [StateController::class, 'find']);

