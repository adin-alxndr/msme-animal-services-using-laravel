<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\ProdukController;
use App\Http\Controllers\GroomingController;
use App\Http\Controllers\HotelController;
use App\Http\Controllers\CekAnabulController;
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
    return view('index');
})->name('index');

Route::get('/grooming', function () {
    return view('services_grooming');
})->name('grooming');

Route::get('/hotel', function () {
    return view('services_hotel');
})->name('hotel');

Route::get('/dokter', function () {
    return view('services_dokter');
})->name('dokter');

Route::get('/reservasi_grooming', function () {
    return view('reservasi_grooming');
})->name('reservasi_grooming');

Route::get('/reservasi_hotel', function () {
    return view('reservasi_hotel');
})->name('reservasi_hotel');

Route::get('/reservasi_dokter', function () {
    return view('reservasi_dokter');
})->name('reservasi_dokter');

Route::get('/booking', function () {
    return view('booking');
})->name('booking');

Route::get('/search-grooming', [GroomingController::class, 'search'])->name('searchGrooming');
Route::get('/search-hotel', [HotelController::class, 'search'])->name('searchHotel');
Route::get('/search-anabul', [CekAnabulController::class, 'search'])->name('searchDokter');

Route::get('/product', [ProdukController::class, 'showUser'])->name('product');
Route::post('/reservasi_grooming', [GroomingController::class, 'store'])->name('grooming.store');
Route::post('/reservasi_hotel', [HotelController::class, 'store'])->name('hotel.store');
Route::post('/reservasi_dokter', [CekAnabulController::class, 'store'])->name('dokter.store');

Route::get('/login-admin', [AdminController::class, 'showLogin']);
Route::post('/login-admin', [AdminController::class, 'login'])->name('admin.login');
Route::post('/logout-admin', [AdminController::class, 'logout'])->name('admin.logout')->middleware('auth');

Route::get('/input_produk', [ProdukController::class, 'showForm'])->name('input_produk')->middleware('auth');
Route::get('/list_produk', [ProdukController::class, 'index'])->name('list_produk')->middleware('auth');
Route::post('/input_produk', [ProdukController::class, 'store'])->name('produk.store')->middleware('auth');
Route::patch('/list_produk/{id}', [ProdukController::class, 'update'])->name('produk.update')->middleware('auth');
Route::delete('/list_produk/{id}', [ProdukController::class, 'destroy'])->name('produk.destroy')->middleware('auth');

Route::get('/disetujui_grooming', [GroomingController::class, 'showDisetujui'])->name('disetujui_grooming')->middleware('auth');
Route::get('/menunggu_grooming', [GroomingController::class, 'showMenunggu'])->name('menunggu_grooming')->middleware('auth');
Route::get('/diselesaikan_grooming', [GroomingController::class, 'showRiwayat'])->name('riwayat_grooming')->middleware('auth');
Route::patch('/menunggu_grooming/{id}', [GroomingController::class, 'updateStatus'])->name('grooming.disetujui')->middleware('auth');
Route::patch('/disetujui_grooming/selesai/{id}', [GroomingController::class, 'updateStatusDone'])->name('grooming.selesai')->middleware('auth');
Route::patch('/disetujui_grooming/batalkan/{id}', [GroomingController::class, 'updateStatusFail'])->name('grooming.batalkan.disetujui')->middleware('auth');
Route::patch('/menunggu_grooming/batalkan/{id}', [GroomingController::class, 'updateStatusFail'])->name('grooming.batalkan.menunggu')->middleware('auth');

Route::get('/disetujui_hotel', [HotelController::class, 'showDisetujui'])->name('disetujui_hotel')->middleware('auth');
Route::get('/menunggu_hotel', [HotelController::class, 'showMenunggu'])->name('menunggu_hotel')->middleware('auth');
Route::get('/diselesaikan_hotel', [HotelController::class, 'showRiwayat'])->name('riwayat_hotel')->middleware('auth');
Route::patch('/menunggu_hotel/{id}', [HotelController::class, 'updateStatus'])->name('hotel.disetujui')->middleware('auth');
Route::patch('/disetujui_hotel/selesai/{id}', [HotelController::class, 'updateStatusDone'])->name('hotel.selesai')->middleware('auth');
Route::patch('/disetujui_hotel/batalkan/{id}', [HotelController::class, 'updateStatusFail'])->name('hotel.batalkan.disetujui')->middleware('auth');
Route::patch('/menunggu_hotel/batalkan/{id}', [HotelController::class, 'updateStatusFail'])->name('hotel.batalkan.menunggu')->middleware('auth');

Route::get('/disetujui_dokter', [CekAnabulController::class, 'showDisetujui'])->name('disetujui_dokter')->middleware('auth');
Route::get('/menunggu_dokter', [CekAnabulController::class, 'showMenunggu'])->name('menunggu_dokter')->middleware('auth');
Route::get('/diselesaikan_dokter', [CekAnabulController::class, 'showRiwayat'])->name('riwayat_dokter')->middleware('auth');
Route::patch('/menunggu_dokter/{id}', [CekAnabulController::class, 'updateStatus'])->name('dokter.disetujui')->middleware('auth');
Route::patch('/disetujui_dokter/selesai/{id}', [CekAnabulController::class, 'updateStatusDone'])->name('dokter.selesai')->middleware('auth');
Route::patch('/disetujui_dokter/batalkan/{id}', [CekAnabulController::class, 'updateStatusFail'])->name('dokter.batalkan.disetujui')->middleware('auth');
Route::patch('/menunggu_dokter/batalkan/{id}', [CekAnabulController::class, 'updateStatusFail'])->name('dokter.batalkan.menunggu')->middleware('auth');