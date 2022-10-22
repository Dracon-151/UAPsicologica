<?php

use App\Http\Controllers\RegisterController;
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

Route::get('/', function () {
    return view('welcome');
})->name('welcome')->middleware('guest');

Route::get('login', function () {
    return redirect('/');
})->name('login');
 
Route::middleware(['auth'])->group(function () {

    Route::group(['middleware' => ['role:Administrador']], function () {

        Route::get('buscar', [RegisterController::class, 'index'])->name('home');
    
    });

    Route::get('buscar', [RegisterController::class, 'index'])->name('register.index');
    Route::get('registrar', [RegisterController::class, 'create'])->name('register.create');
    Route::put('registros/{id}', [RegisterController::class, 'update'])->name('register.update');
    Route::delete('registros/{id}', [RegisterController::class, 'destroy'])->name('register.destroy');
    Route::get('registros/{id}/editar', [RegisterController::class, 'edit'])->name('register.edit');
    Route::get('registros/{id}', [RegisterController::class, 'show'])->name('register.show');
    Route::post('registros', [RegisterController::class, 'store'])->name('register.store');
});
