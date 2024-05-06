<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AdminController;

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


Route::get('/konten', function () {
    return view('admin.content');
});

// menampilkan data yang sudah dibuat
Route::get('/admin', [AdminController::class, 'index'])->name('admin');   

// menambahkan data
Route::get('/tambahdata', [AdminController::class, 'tambahdata'])->name('tambahdata');   
Route::post('/insertdata', [AdminController::class, 'insertdata'])->name('insertdata'); 

// edit data
Route::get('/tampilkandata/{id}', [AdminController::class, 'tampilkandata'])->name('tampilkandata');   
Route::post('/updatedata/{id}', [AdminController::class, 'updatedata'])->name('updatedata');  
