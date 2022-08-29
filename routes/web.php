<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ContactController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('components/Generate');
});
Route::get('/welcome', function () {
    return view('welcome');
});
Route::get('/gallery', function () {
    return view('components/gallery');
});
// Route::get('/email', function () {
// return view('components/email');
// });

Route::get('/email',[ContactController::class, 'index']);
Route::post('send', [ContactController::class, 'send'])->name('email.send');
