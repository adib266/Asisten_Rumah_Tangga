<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\GoogleMapsController;

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
// Client
Route::get('/', [HomeController::class, 'index'])->name('/');
Route::get('/kontak', [HomeController::class, 'kontak'])->name('/kontak');
Route::get('/service', [HomeController::class, 'service'])->name('/service');
Route::get('/tambah', [HomeController::class, 'tambah'])->name('/tambah');
Route::post('/action_tambah', [HomeController::class, 'action_tambah'])->name('action_tambah');
Route::post('/update', [HomeController::class, 'update'])->name('update');

//             Login           //
Route::get('/login', [UserController::class, 'login'])->name('login');
Route::post('actionlogin', [UserController::class, 'actionlogin'])->name('actionlogin');
Route::get('/logout', [UserController::class, 'actionlogout'])->name('actionlogout');
Route::get('register', [UserController::class, 'register'])->name('register');
Route::post('register/action', [UserController::class, 'actionregister'])->name('actionregister');

Route::group(['middleware' => ['auth','ceklevel:Admin']],function(){
    Route::get('/verifikasi', [HomeController::class, 'verifikasi'])->name('/verifikasi');
    Route::get('/upprove/{id}', [HomeController::class, 'upprove']);
    Route::get('/hapus/{id}', [HomeController::class, 'hapus'])->name('hapus');
    Route::get('/edit/{id}', [HomeController::class, 'viewData']);
    Route::put('/edit-pekerja/{id}', [HomeController::class, 'updatePekerja']);
    Route::get('/home', [HomeController::class, 'home'])->name('/home')->middleware('auth');
    Route::get('/history_majikan', [HomeController::class, 'history_majikan'])->name('/history_majikan');
});
Route::group(['middleware' => ['auth','ceklevel:Pegawai']],function(){
    Route::get('/pegawai', [HomeController::class, 'pegawai'])->name('/pegawai');
    Route::get('/pendaftaran_pekerja', [HomeController::class, 'pendaftaran_pekerja'])->name('/pendaftaran_pekerja');
    Route::post('/action_pekerja', [HomeController::class, 'action_pekerja'])->name('action_pekerja');
    Route::get('/acc/{id}', [HomeController::class, 'acc']);
    Route::get('/hapus_boking/{id}', [HomeController::class, 'hapus_bokingp'])->name('hapus_bokingp');
    Route::get('/edit_pekerja/{id}', [HomeController::class, 'edit_pekerja'])->name('edit_pekerja');
    Route::get('/orderan_anda', [HomeController::class, 'orderan_anda'])->name('orderan_anda');   
});
//             Majikan          //
Route::group(['middleware' => ['auth','ceklevel:Majikan']],function(){
    Route::get('/majikan', [HomeController::class, 'majikan'])->name('/majikan');
    Route::get('/boking/{id}', [HomeController::class, 'boking'])->name('/boking');
    Route::get('/data_boking', [HomeController::class, 'data_boking'])->name('/data_boking');
    Route::post('/action_boking', [HomeController::class, 'action_boking'])->name('action_boking');
    Route::post('/update_boking', [HomeController::class, 'update'])->name('update_boking');
    Route::get('/hapus_boking/{id}', [HomeController::class, 'hapus_boking'])->name('hapus_boking');
    Route::get('/edit_boking/{id}', [HomeController::class, 'edit_boking'])->name('edit_boking');
    Route::get('/supir', [HomeController::class, 'supir'])->name('/supir');
    Route::get('/satpam', [HomeController::class, 'satpam'])->name('/satpam');
    Route::get('/pembantu', [HomeController::class, 'pembantu'])->name('/pembantu');
    Route::get('/baby', [HomeController::class, 'baby'])->name('/baby');
    Route::get('/kebun', [HomeController::class, 'kebun'])->name('/kebun');
    Route::get('/{id}', [HomeController::class, 'detail'])->name('detail');
});