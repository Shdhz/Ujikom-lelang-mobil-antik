<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\GuestController;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\BerandaController;
use App\Http\Controllers\BarangController;
use App\Http\Controllers\BerandaAdminController;
use App\Http\Controllers\BerandaPembeliController;
use App\Http\Controllers\CrudPembeliController;
use App\Http\Controllers\CrudPenjual;
use App\Http\Controllers\DataLelangController;
use App\Http\Controllers\HistoytawaranController;
use App\Http\Controllers\NotFoundController;
use App\Http\Controllers\printController;
use App\Http\Controllers\RiwayatAdminController;
use App\Http\Controllers\RiwayatController;
use App\Http\Controllers\TamuController;

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
// not found
Route::get('', [NotFoundController::class, 'index'])->name('notfound');
// user tamu
// Route::get('beranda', [GuestController::class, 'beranda'])->name('beranda-user')->middleware('guest');
Route::get('beranda/auction-info', [GuestController::class, 'info'])->name('informasi')->middleware('guest');
Route::resource('beranda', TamuController::class)->middleware('guest');


// Login
Route::controller(LoginController::class)->group(function(){
    
    Route::get('login', 'login')->name('login')->middleware('guest');
    Route::post('login/Auth', 'Authenticate')->name('Authlogin');
    Route::post('logout','logout')->name('logout');
});

// Register pembeli
    Route::get('register-pembeli', [RegisterController::class, 'pembeli'])->name('reg-pembeli')->middleware('guest');
    Route::post('register-pembeli/store', [RegisterController::class, 'store'])->name('store')->middleware('guest');

// Register penjual
    Route::get('register-penjual', [RegisterController::class, 'penjual'])->name('reg-penjual')->middleware('guest');
    Route::post('register-penjual/store', [RegisterController::class, 'store_penjual'])->name('penjual')->middleware('guest');

// Route beranda 3 user
Route::middleware(['auth', 'CekUserLogin:pembeli'])->group(function () {
    // Route::get('beranda/informasi-lelang', 'informasi_lelang')->name('informasi-lelang');
    // // Route::get('beranda', 'index')->name('beranda-user-login');
    Route::resource('beranda-pembeli', BerandaPembeliController::class);
    Route::get('tawaran-saya', [HistoytawaranController::class, 'index'])->name('tawaran-saya');
    
});
// route penjual
Route::middleware(['auth'])->group(function () {
Route::middleware(['CekUserLogin:penjual'])->group(function () {
    Route::resource('beranda-penjual', BerandaController::class);
    Route::resource('barang', BarangController::class);
    Route::resource('data-lelang', DataLelangController::class);
    Route::resource('history', RiwayatController::class);
    
});
});

// route admin
Route::middleware(['auth'])->group(function () {
Route::middleware(['CekUserLogin:admin'])->group(function () {
    Route::get('beranda-admin', [BerandaAdminController::class, 'index'])->name('beranda-admin')->middleware('guest');
    Route::resource('Seller-data', CrudPenjual::class);
    Route::resource('bidder-data', CrudPembeliController::class);
    Route::resource('Auction-history', RiwayatAdminController::class);
});
});

Route::controller(BerandaAdminController::class)->group(function(){
    Route::get('beranda-admin', 'index')->name('beranda-admin');
});


Route::resource('print', printController::class);
