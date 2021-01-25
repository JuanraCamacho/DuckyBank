<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\CashierController;
use App\Http\Controllers\fakeLoginController;

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
    return view('auth/login');
});

Route::get('/', function () {
    return view('auth/login');
})->name('inicio');

// Route::group(['middleware' => ['auth']], function () {
//     Route::get('/cajeros', [UserController::class, 'index'])->name('cajeros.index');
// });

Route::get('/cajeros', [UserController::class, 'index'])->middleware('logeado')->name('cajeros.index');
Route::get('/cajeros/create', [UserController::class, 'create'])->middleware(['auth'])->name('cajeros.create');
//Route::post('/cajeros/create', [UserController::class, 'store'])->middleware(['auth'])->name('cajeros.store');
Route::get('/cajeros/{id}', [UserController::class, 'destroy'])->name('cajeros.destroy');

Route::get('/cajeros', [CashierController::class, 'mostrarCajero'])->middleware('logeado')->name('fakeLogin');

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth'])->name('dashboard');

require __DIR__.'/auth.php';
