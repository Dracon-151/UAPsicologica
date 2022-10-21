<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Web\HomeController;

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
    return view('welcome');
})->name('welcome')->middleware('guest');

Route::get('login', function () {
    return redirect('/');
})->name('login');

Route::get('/login/new-device', function () {
    return view('welcome');
})->name('login.new.device')->middleware('guest');

Route::get('register', function () {
    return redirect('/');
});

Route::get('reset-password/{token}/{email}', function () {
    return view('reset-password');
})->name('password.reset');

Route::middleware(['auth'])->group(function () {

    Route::group(['middleware' => ['role:Administrador']], function () {

        Route::get('home', [HomeController::class, 'index'])->name('home');
    
    });
});