<?php

use App\Http\Controllers\DaftarController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\KasirController;
use App\Http\Controllers\OrderController;
use App\Http\Controllers\PegawaiController;
use App\Http\Controllers\ProductController;
use Illuminate\Support\Facades\Route;

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
// Kasir 
Route::get('/orderkasir',[KasirController::class, 'index']);
Route::get('/ordermejas',[KasirController::class, 'create']);
Route::post('torder',[KasirController::class, 'store'])->name('torder');

//Login
Route::get('/',[LoginController::class, 'index']);
Route::get('kasir/home',[LoginController::class, 'kasirhome'])->name('kasir.home')->middleware('role');
Route::post('/login',[LoginController::class, 'Authenticate']);
Route::post('logout',[LoginController::class, 'logout'])->name('logout');

//Daftar
Route::get('/ayodaftar',[DaftarController::class, 'index']);
Route::post('ayodaftar',[DaftarController::class, 'store'])->name('ayodaftar');

//category
Route::get('/category',[CategoryController::class, 'index']);//revisi(belum jadi)
Route::get('/tambahcategory',[CategoryController::class, 'create']);
Route::post('tcategory',[CategoryController::class, 'store'])->name('tcategory');
Route::resource('categorys',CategoryController::class);


//Menu
Route::get('/product',[ProductController::class, 'index']);//revisi(belum jadi)
Route::get('/tambahmenu',[ProductController::class, 'create']);
Route::post('tmenu',[ProductController::class, 'store'])->name('tmenu');

//pegawai
Route::get('/pegawai',[PegawaiController::class, 'index']);//revisi(belum jadi)
Route::get('tambahpegawai',[PegawaiController::class, 'create']);
Route::post('tpegawai',[PegawaiController::class, 'store'])->name('tpegawai');

//order
Route::get('/order',[OrderController::class,'index']);
Route::get('/ordermeja',[OrderController::class, 'create']);
Route::post('pesan',[OrderController::class, 'store'])->name('pesan');

//navbar
Route::get('/navbar', function(){
    return view('user.navbar.main');
});

//dashboard
Route::get('/dashboard', function () {
    return view('user.dashboard.index');
});