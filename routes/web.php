<?php

use Illuminate\Support\Facades\Route;

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

use App\Http\Controllers\InfoController;
use App\Http\Controllers\AuthController;

Route::get('/', [InfoController::class, 'index'])->name('index');

Route::get('/about', [InfoController::class, 'about'])->name('about');

Route::name('user.')->group(function() {
    Route::get('/private', [AuthController::class, 'private_cabinet'])->middleware('auth')->name('private');

    Route::get('/login', [AuthController::class, 'login'])->name('login');

    Route::post('/login/check', [AuthController::class, 'login_check'])->name('login_check');

    Route::get('/registration', [AuthController::class, 'register'])->name('registration');

    Route::post('/registration/check', [AuthController::class, 'register_check'])->name('registration_check');

    Route::get('/logout', [AuthController::class, 'logout'])->name('logout');
});
