<?php


use App\Http\Controllers\PelangganController;
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

Route::get('/', function () {
    return view('welcome');
});

// Registrasi dan login
Route::get('/login', [PelangganController::class, 'indexLogin'])->name('login.index');
Route::get('/register', [PelangganController::class, 'indexRegister'])->name('register.index');
Route::post('/register/store', [PelangganController::class, 'store'])->name('register.store');

