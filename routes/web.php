<?php

use App\Http\Controllers\DashboarduserController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\PelangganController;
use App\Http\Controllers\KeranjangController;
use App\Http\Controllers\PembayaranController;
use App\Http\Controllers\HistoryPembelianController;
use App\Http\Controllers\AdminOrderController;


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
// Route::get('/pesanan', function () {
//     return view('admin.dataOrder.pesananbaru');
// })->name('pesanan.index');

// Public Routes
Route::get('/user', [ProductController::class, 'index'])->name('user.index');
Route::get('/produk/detail/{id}', [ProductController::class, 'detail'])->name('produk.detail');

Route::controller(HomeController::class)->group(function () {
    Route::get('/', 'index')->name('home.index');
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
        });

        Route::controller(DashboarduserController::class)->group(function () {
            Route::get('/dashboard', 'indexdashboard')->name('dashboard.indexdashboard');
            Route::get('/lihatprofile', 'indexlihat')->name('dashboard.indexlihat');
            Route::get('/editprofile', 'indexedit')->name('dashboard.indexedit');
            Route::get('/editpass', 'indexpass')->name('dashboard.indexpass');
        });



    });
});




// untuk sementara, admin bagian product tidak diberi middleware
// karena untuk keperluan history, sering menggunakan migrate:fresh
Route::controller(ProductController::class)->group(function () {
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
    // button pencarian
    Route::get('/search', 'search')->name('search');
});


Route::controller(HistoryPembelianController::class)->group(function () {
    // route history user
    Route::get('/history', 'index')->name('history.index');
    Route::get('/history/{id}', 'show')->name('history.show');

    // untuk admin
    Route::get('/admin/orders', 'PesananBaru')->name('adminOrder.index');
    Route::get('/admin/orders/dikemas', 'PesananDikemas')->name('adminOrder.dikemas');
    Route::get('/admin/orders/dibatalkan', 'PesananDibatalkan')->name('adminOrder.dibatalkan');
    Route::get('/admin/orders/dikirim', 'PesananDikirim')->name('adminOrder.dikirim');
    Route::get('/admin/orders/tiba', 'PesananTiba')->name('adminOrder.tiba');

    Route::post('/update-status/{id}', 'updateStatusPembelianPengemasan')->name('updateStatus.dikemas');
    Route::post('/update-status-dibatalkan/{id}', 'updateStatusPembelianDibatalkan')->name('updateStatus.dibatalkan');
    Route::post('/update-status-dipulihkan/{id}', 'updateStatusPembelianDipulihkan')->name('updateStatus.dipulihkan');
    Route::post('/update-status-dikirim/{id}', 'updateStatusPembelianDikirim')->name('updateStatus.dikirim');
    Route::post('/update-status-tiba/{id}', 'updateStatusPembelianTiba')->name('updateStatus.tiba');
});




