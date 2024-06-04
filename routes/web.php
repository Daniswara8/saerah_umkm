<?php

use App\Http\Controllers\DashboarduserController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\PelangganController;
use App\Http\Controllers\StripePaymentController;

Route::get('/', function () {
    return view('dashboardUsers.dashboard');
});


Route::controller(StripePaymentController::class)->group(function(){
    Route::get('stripe','stripe')->name('stripe.index');
    Route::get('stripe/checkout','stripeCheckout')->name('stripe.checkout');
    Route::get('stripe/checkout/success','stripeCheckoutSuccess')->name('stripe.checkout.success');
});

Route::controller(ProductController::class)->group(function () {
    Route::get('/user', 'index')->name('user.index');
    Route::get('/product', 'admin')->name('product.admin');
    Route::get('/product/history', 'history')->name('product.history');
    Route::get('/product/create', 'create')->name('product.create');    
    Route::post('/product/kirim', 'store')->name('product.store');
    Route::get('/product/edit/{slug_link}', 'edit')->name('product.edit');
    Route::put('/product/update/{slug_link}', 'update')->name('product.update');
    Route::get('/product/hapus/{slug_link}', 'hapus')->name('product.hapus');
    Route::put('/product/softdelete/{slug_link}', 'softdelete')->name('product.softdelete');
    Route::post('/product/restore/{slug_link}', 'restore')->name('product.restore');
    Route::delete('/product/permanent-delete/{id}', 'deletePermanent')->name('product.deletePermanent');
    Route::get('/produk/detail/{id}', 'detail')->name('produk.detail');
});

Route::controller(PelangganController::class)->group(function () {
    Route::get('/register', 'indexRegister')->name('register.index');
    Route::post('/register/kirim', 'store')->name('register.store');
    Route::get('/login', 'indexLogin')->name('login.index');
    Route::post('/login/sesi', 'proses')->name('login.proses');
    Route::get('/logout/sesi', 'logout')->name('login.logout');
    Route::get('/profile', 'editProfile')->name('profile.edit');
    Route::put('/profile/update', 'updateProfile')->name('profile.update');
    Route::get('/password', 'editPass')->name('password.edit');
    Route::put('/password/update', 'updatePassword')->name('password.update');
});

Route::controller(DashboarduserController::class)->group(function () {
    Route::get('/dashboard', 'indexdashboard')->name('dashboard.indexdashboard');
    Route::get('/lihatprofile', 'indexlihat')->name('dashboard.indexlihat');
    Route::get('/editprofile', 'indexedit')->name('dashboard.indexedit');
    Route::get('/editpass', 'indexpass')->name('dashboard.indexpass');
});

Route::controller(AdminController::class)->group(function () {
    Route::get('/tambahCustomer', 'tambahDataCustomer')->name('masterAdmin.index');
    Route::get('/customerAdmin', 'tampilDataCustomer')->name('customerAdmin.index');
    Route::get('/historiAdmin', 'historiDataCustomer')->name('historiAdmin.index');
    Route::get('/editCustomer/edit/{slug_link}', 'editDataCustomer')->name('customerAdmin.edit');
    Route::get('/softDeleteCustomer/hapus/{slug_link}', 'softDeleteDataCustomer')->name('customerAdmin.softDelete');
    Route::get('/forceDeleteCustomer/delete/{slug_link}', 'forceDeleteDataCustomer')->name('customerAdmin.forceDelete');
    Route::get('/restoreCustomer/restore/{slug_link}', 'restoreDataCustomer')->name('customerAdmin.restore');
    Route::put('/updateCustomer/edit/{slug_link}', 'update')->name('customerAdmin.update');
    Route::post('/masterAdmin/tambah', 'store')->name('masterAdmin.store');
    Route::put('/deleteCustomer/softdelete/{Slug_link}', 'softdelete')->name('customerAdmin.softDeleted');
    Route::delete('/customerAdmin/{slug}', 'destroy')->name('customerAdmin.destroy');
});
