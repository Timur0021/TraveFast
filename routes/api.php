<?php

use App\Http\Controllers\User\Main\IndexController;
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

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

Route::get('/tiket', App\Http\Controllers\Api\Bilets\IndexController::class);
Route::get('/tiket/{tiket}', App\Http\Controllers\Api\Bilets\ShowController::class);
Route::get('/theme', App\Http\Controllers\Api\Theme\IndexController::class);
