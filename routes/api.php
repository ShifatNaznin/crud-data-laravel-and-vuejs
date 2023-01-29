<?php

use App\Http\Controllers\Api\UserInformationController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

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

Route::group([
    'namespace' => 'App\Http\Controllers',
    'prefix' => 'user'

], function ($router) {
    Route::get('/', [UserInformationController::class, 'index']);
    Route::post('/store', [UserInformationController::class, 'store']);
    Route::post('/update/{id}', [UserInformationController::class, 'update']);
    Route::get('/show/{id}', [UserInformationController::class, 'show']);
    Route::post('/destroy/{id}', [UserInformationController::class, 'destroy']);

});
// Route::apiResource('/user', 'App\Http\Controllers\Api\UserInformationController');