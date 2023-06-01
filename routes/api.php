<?php

use GuzzleHttp\Middleware;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
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

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});
Route::middleware('cors')->group(function () {
    Route::post('/login', [\App\Http\Controllers\AuthController::class, 'login']);
    Route::get('/services', [\App\Http\Controllers\ServiceController::class, 'index']);
});
Route::middleware(['cors', 'auth:sanctum'])->group(function () {
    Route::post('/services', [\App\Http\Controllers\ServiceController::class, 'store'])->middleware('admin');
    Route::put('/change-password', [\App\Http\Controllers\UserController::class, 'ChangePassword']);
    Route::put('/change-email', [\App\Http\Controllers\UserController::class, 'ChangeEmail']);
    Route::post('/logout',[\App\Http\Controllers\AuthController::class,'logout']);
    
    Route::put('/service/{id}', [\App\Http\Controllers\ServiceController::class, 'update'])->middleware('admin');
    Route::delete('/service/{id}', [\App\Http\Controllers\ServiceController::class, 'delete'])->middleware('admin');
    

});
