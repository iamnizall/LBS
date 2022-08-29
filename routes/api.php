<?php

use App\Http\Controllers\MainController;
use App\Http\Controllers\PostController;
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

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

Route::prefix('v1')->group(function () {
    Route::get('/lokasi', [MainController::class, 'carilokasi']);
    Route::get('/destinasi', [MainController::class, 'caridestinasi']);
    Route::get('/foto', [MainController::class, 'carifoto']);
    Route::get('/pemandu', [MainController::class, 'caripemandu']);

    Route::post('/lokasi', [MainController::class, 'storelokasi']);
    Route::post('/destinasi', [MainController::class, 'storedestinasi']);
    Route::post('/foto', [MainController::class, 'storefoto']);
    Route::post('/pemandu', [MainController::class, 'storepemandu']);
});

Route::post('/post', [PostController::class, 'post']);
