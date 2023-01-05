<?php

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

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return 1;
});
Route::get('/user', [\App\Http\Controllers\Api\UserController::class, 'index']);
Route::put('/user/{id}', [\App\Http\Controllers\Api\UserController::class, 'update']);
Route::post('/add', [\App\Http\Controllers\Api\UserController::class, 'add']);
Route::delete('/delete/{id}', [\App\Http\Controllers\Api\UserController::class, 'detete']);

/**
 * Router::get('index') -> index lấy dữ liệu -> xây trong base
 * Router::post('create') -> de tem du lieu -> xay ham base
 * Route::put('update')
 * Router::delete('delete')
 */
