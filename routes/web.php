<?php


use App\Http\Controllers\PelangganController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProductController;

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



// Route::controller(ProductController::class)->group(function () {
//     Route::get('/user', 'index')->name('user.index');
// });

// product
// Route::get('/user', function () {
//     return view('user.product');
// });

Route::controller(ProductController::class)->group(function () {
    Route::get('/user', 'index')->name('user.index');
    
    Route::get('/product', 'admin')->name('product.admin');
    Route::get('/product/history', 'history')->name('product.history');
    Route::get('/product/create', 'create')->name('product.create');
    Route::post('/product/kirim', 'store')->name('product.store');
    Route::get('/product/edit/{Slug_link}', 'edit')->name('product.edit');
    Route::put('/product/update/{Slug_link}', 'update')->name('product.update');
    Route::get('/product/hapus/{Slug_link}', 'hapus')->name('product.hapus');
    Route::put('/product/softdelete/{Slug_link}', 'softdelete')->name('product.softdelete');
    Route::post('/product/restore/{Slug_link}', 'restore')->name('product.restore');
    Route::delete('/product/permanent-delete/{id}', 'deletePermanent')->name('product.deletePermanent');
});

Route::controller(PelangganController::class)->group(function () {
    // register
    Route::get('/register', 'indexRegister')->name('register.index');
    Route::post('/register/kirim', 'store')->name('register.store');

    // login
    Route::get('/login', 'indexLogin')->name('login.index');
    Route::post('/login/sesi', 'proses')->name('login.proses');
});
