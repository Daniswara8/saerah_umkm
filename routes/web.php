<?php

use App\Http\Controllers\DashboarduserController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\PelangganController;
use App\Http\Controllers\KeranjangController;
use App\Http\Controllers\PembayaranController;

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

// Public Routes
// Route::get('/home', [ProductController::class, 'index']);

Route::controller(HomeController::class)->group(function () {
    Route::get('/', 'index')->name('index');
    Route::get('/product/{id}', 'show')->name('product.show');
});

// Pelanggan Routes
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

// Protected Routes
Route::middleware(['auth'])->group(function () {
    // Admin Routes 
    Route::middleware(['ceklevel:admin'])->group(function () {

        // admin User
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
            Route::put('/deleteCustomer/softdelete/{slug_link}', 'softdelete')->name('customerAdmin.softDeleted');
            Route::delete('/customerAdmin/{slug}', 'destroy')->name('customerAdmin.destroy');
        });

        // admin Product
        // Route::controller(ProductController::class)->group(function () {
        //     Route::get('/user', 'index')->name('user.index');
        //     Route::get('/product', 'admin')->name('product.admin');
        //     Route::get('/historyproduct', 'history')->name('masterAdmin.history');
        //     Route::get('/tambahProduct', 'tambahDataProduct')->name('masterAdmin.plus');
        //     Route::post('/product/kirim', 'store')->name('product.store');
        //     Route::get('/product/edit/{slug_link}', 'edit')->name('product.edit');
        //     Route::put('/product/update/{slug_link}', 'update')->name('product.update');
        //     Route::get('/product/hapus/{slug_link}', 'hapus')->name('product.hapus');
        //     Route::put('/product/softdelete/{slug_link}', 'softdelete')->name('product.softdelete');
        //     Route::post('/product/restore/{slug_link}', 'restore')->name('product.restore');
        //     Route::delete('/product/permanent-delete/{id}', 'deletePermanent')->name('product.deletePermanent');
        //     Route::get('/produk/detail/{id}', 'detail')->name('produk.detail');
        //     // button pencarian
        //     Route::get('/search', 'search')->name('search');
        // });
    });

    // User Routes
    Route::middleware(['ceklevel:user'])->group(function () {
        Route::controller(KeranjangController::class)->group(function () {
            Route::get('/keranjang', 'index')->name('keranjang.index');
            Route::post('/keranjang/add/{productId}', 'tambahKeranjang')->name('keranjang.add');
            Route::delete('/keranjang/remove/{cartId}', 'hapusKeranjang')->name('keranjang.remove');
            Route::post('/keranjang/update/{cartId}', 'updateQuantity')->name('keranjang.update');
        });

        Route::controller(PembayaranController::class)->group(function () {
            Route::get('/pembayaran/create', 'create')->name('pembayaran.create');
            Route::post('/pembayaran/store', 'store')->name('pembayaran.store');
            Route::get('/pembayaran/{id}', 'show')->name('pembayaran.show');
            Route::get('/checkout', 'checkout')->name('checkout');
        });

        Route::controller(DashboarduserController::class)->group(function () {
            Route::get('/dashboard', 'indexdashboard')->name('dashboard.indexdashboard');
            Route::get('/lihatprofile', 'indexlihat')->name('dashboard.indexlihat');
            Route::get('/editprofile', 'indexedit')->name('dashboard.indexedit');
            Route::get('/editpass', 'indexpass')->name('dashboard.indexpass');
        });
    });
});

Route::controller(ProductController::class)->group(function () {
    Route::get('/user', 'index')->name('user.index');
    Route::get('/product', 'admin')->name('product.admin');
    Route::get('/historyproduct', 'history')->name('masterAdmin.history');
    Route::get('/tambahProduct', 'tambahDataProduct')->name('masterAdmin.plus');
    Route::post('/product/kirim', 'store')->name('product.store');
    Route::get('/product/edit/{slug_link}', 'edit')->name('product.edit');
    Route::put('/product/update/{slug_link}', 'update')->name('product.update');
    Route::get('/product/hapus/{slug_link}', 'hapus')->name('product.hapus');
    Route::put('/product/softdelete/{slug_link}', 'softdelete')->name('product.softdelete');
    Route::post('/product/restore/{slug_link}', 'restore')->name('product.restore');
    Route::delete('/product/permanent-delete/{id}', 'deletePermanent')->name('product.deletePermanent');
    Route::get('/produk/detail/{id}', 'detail')->name('produk.detail');
    // button pencarian
    Route::get('/search', 'search')->name('search');
});
