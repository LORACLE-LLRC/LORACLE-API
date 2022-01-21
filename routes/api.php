<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;


/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. Theses
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/


Route::get('/service', ['App\Http\Controllers\ApiControllerService', 'listService']);
Route::post('/service', ['App\Http\Controllers\ApiControllerService', 'createService']);

Route::get('/internaute', ['App\Http\Controllers\ApiControllerInternaute', 'returnInternaute']);
Route::post('/internaute', ['App\Http\Controllers\ApiControllerInternaute', 'createInternaute']);

Route::get('/reponse', ['App\Http\Controllers\ApiControllerReponse', 'returnReponse']);
Route::post('/reponse', ['App\Http\Controllers\ApiControllerReponse', 'createReponse']);
