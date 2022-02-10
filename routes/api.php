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


//Route Service
Route::get('/returnService', ['App\Http\Controllers\ApiControllerService', 'returnServices']);
Route::post('/createService', ['App\Http\Controllers\ApiControllerService', 'createService']);
Route::put('/finishService', ['App\Http\Controllers\ApiControllerService', 'finishService']);
//Route Internaute
Route::get('/returnInternaute', ['App\Http\Controllers\ApiControllerInternaute', 'returnInternaute']);
Route::post('/createInternaute', ['App\Http\Controllers\ApiControllerInternaute', 'createInternaute']);
//Route Reponse
Route::get('/returnReponse', ['App\Http\Controllers\ApiControllerReponse', 'returnReponse']);
Route::post('/createReponse', ['App\Http\Controllers\ApiControllerReponse', 'createReponse']);
//Route Demande
Route::get('/returnDemande', ['App\Http\Controllers\ApiControllerDemande', 'returnDemande']);
Route::post('/createDemande', ['App\Http\Controllers\ApiControllerDemande', 'createDemande']);
Route::delete('/deleteDemande', ['App\Http\Controllers\ApiControllerDemande', 'deleteDemande']);
//Route Offre
Route::get('returnOffre', ['App\Http\Controllers\ApiControllerOffre', 'returnOffre']);
Route::post('returnOffre', ['App\Http\Controllers\ApiControllerOffre', 'createOffre']);
Route::delete('returnOffre', ['App\Http\Controllers\ApiControllerOffre', 'deleteOffre']);
