<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\BoxController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\CashierController;
use App\Http\Controllers\TcajeroController;
use App\Http\Controllers\TclienteController;
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
//Route::get('/cajeros2',[CashierController::class, 'redirect']);


Route::get('/turnos', [TclienteController::class, 'showTurno']);
Route::post('/turnos', [TclienteController::class, 'tomarTurno'])->name('turnos');

Route::get('ticket/{id}', [TclienteController::class, 'mostrarTicket'])->name('ticket');;

Route::get('/cajeros', [CashierController::class, 'index'])->middleware(['auth'])->name('fakeLogin');
Route::get('/nuevocajero', [CashierController::class, 'showAddCajero'])->middleware(['auth'])->name('showAddCajero');

Route::get('/nuevacaja', [BoxController::class, 'showAddCaja'])->middleware(['auth'])->name('showAddCaja');

Route::get('/cajero/{id}', [CashierController::class, 'destroy'])->name('cajeros.destroy');

Route::get('/caja/{id}', [BoxController::class, 'destroy'])->name('cajas.destroy');

Route::get('/cajeros2', [TcajeroController::class, 'index'])->middleware(['auth'])->name('turno.index');

Route::get('/cajas-disponibles', [TcajeroController::class, 'showCajasDisponibles'])->middleware(['auth'])->name('showCajasDisponibles');

Route::post('/atender-turno', [TcajeroController::class, 'takeCaja'])
                ->middleware(['auth'])->name('takeCaja');

Route::get('/AbrirCaja/{id}', [TcajeroController::class, 'abrirCaja'])->middleware(['auth'])->name('atender_caja');;
Route::get('/turno-cliente', [TcajeroController::class, 'mostrarTurnos'])
                ->name('turno-cliente');

Route::POST('/empleado-caja', [BoxController::class, 'empleado_caja'])
                ->name('empleado-caja');

//                 ->middleware('guest');







// Route::get('/', function () {
//     return view('auth/login');
// })->name('inicio');

// // Route::group(['middleware' => ['auth']], function () {
// //     Route::get('/cajeros', [UserController::class, 'index'])->name('cajeros.index');
// // });

// Route::get('/cajeros', [UserController::class, 'index'])->middleware('logeado')->name('cajeros.index');
// Route::get('/cajeros/create', [UserController::class, 'create'])->middleware(['auth'])->name('cajeros.create');
// //Route::post('/cajeros/create', [UserController::class, 'store'])->middleware(['auth'])->name('cajeros.store');
// Route::get('/cajeros/{id}', [UserController::class, 'destroy'])->name('cajeros.destroy');

// Route::get('/cajeros', [CashierController::class, 'mostrarCajero'])->middleware('logeado')->name('fakeLogin');

// Route::get('/cajas', [TcajeroController::class, 'index'])->middleware('logeado')->name('cajas');

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth'])->name('dashboard');

require __DIR__.'/auth.php';
