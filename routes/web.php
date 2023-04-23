<?php

use App\Http\Controllers\RegisterController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/
Route::middleware('guest')->group(function () {
    Route::get('/', function () {
        return view('login');
    })->middleware('guest');

    Route::get('/register',[RegisterController::class, 'index']);
    Route::post('/register',[RegisterController::class, 'store']);
});


Route::middleware('auth')->group(function () {
    Route::get('/profile', function () {
        return view('profile');
    });
});


