<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CharacterController;
use App\Http\Controllers\CartoonistController;
use App\Http\Controllers\NavController;



Route::get('/', [NavController::class, 'home']);

Route::get('/listCharacter', [NavController::class, 'listCharacter']);
Route::get('/addCharacter', [NavController::class, 'addCharacter']);
Route::post('/addCharacter', [CharacterController::class, 'create']);
Route::get('/editCharacter/{id}', [NavController::class, 'editCharacter']);
Route::post('/editCharacter', [CharacterController::class, 'edit']);
Route::post('/deleteCharacter', [CharacterController::class, 'delete']);

Route::get('/listCartoonist', [NavController::class, 'listCartoonist']);
Route::get('/addCartoonist', [NavController::class, 'addCartoonist']);
Route::post('/addCartoonist', [CartoonistController::class, 'create']);
Route::get('/editCartoonist/{id}', [NavController::class, 'editCartoonist']);
Route::post('/editCartoonist', [CartoonistController::class, 'edit']);
Route::post('/deleteCartoonist', [CartoonistController::class, 'delete']);


