<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CashierController;

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

// Route::get('/', function () {
//     return view('welcome');
// });
Route::get('/', function () {
    return view('auth/login');
});

Route::get('/cashier', [CashierController::Class, 'index']);
Route::get('/cashier/create', [CashierController::Class, 'create']);
Route::get('/cashier/{cashier}', [CashierController::Class, 'show']);

Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function () {
    return view('dashboard');
})->name('dashboard');


