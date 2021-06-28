<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ControllerHome;
use App\Http\Controllers\ControllerLogin;
use App\Http\Controllers\ControllerUpload;
use App\Http\Controllers\KeranjangController;
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
    return view('login2');
});

Route::get('/login/Auth', [ControllerLogin::class,'login']);
Route::get('/register', [ControllerLogin::class,'register']);
Route::get('/logout', [ControllerLogin::class,'logout']);
Route::get('/admin', [ControllerHome::class,'admin']);
Route::get('/user', [ControllerHome::class,'user']);
Route::get('/baju', [ControllerHome::class,'baju']);
Route::get('/tambah_baju', [ControllerHome::class,'tambah_baju']);
// Route::post('/tambah_baju/proses', [ControllerHome::class,'proses_tambah_baju']);
Route::post('/tambah_baju/upload', [ControllerUpload::class,'proses_upload']);
Route::get('/bukti/upload', function () { return view('user.bukti');});
Route::get('/baju/keranjang/{tambah}', [ControllerHome::class,'proses_tambah_keranjang']);
Route::post('/keranjang/bayar', [ControllerHome::class,'bayar']);
Route::get('/keranjang', [KeranjangController::class,'index']);
Route::post('/keranjang/ubah', [KeranjangController::class,'ubah']);
Route::get('/keranjang/batal/{id}', [KeranjangController::class,'batal']);
Route::get('/pembayaran', [ControllerHome::class,'pembayaran']);
Route::get('/pembayaran/detail/{id}', [ControllerHome::class,'detail']);
Route::get('/admin/pembayaran/bukti/{id}', [ControllerHome::class,'detail_bukti']);
Route::get('/pembayaran/terima/{id}', [ControllerHome::class,'terima']);
Route::get('/admin/pembayaran', [ControllerHome::class,'pembayaran_admin']);
Route::get('/admin/pembayaran/kirim/{id}', [ControllerHome::class,'kirim']);
Route::get('/admin/terkirim', [ControllerHome::class,'terkirim']);
Route::get('/admin/harian', [ControllerHome::class,'harian']);

