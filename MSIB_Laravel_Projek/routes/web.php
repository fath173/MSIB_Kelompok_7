<?php

use App\Http\Controllers\Admin\DosisCtrl;
use App\Http\Controllers\Admin\HomeCtrl as homeAdmin;
use App\Http\Controllers\Admin\Jenis_VaksinCtrl;
use App\Http\Controllers\Admin\KartuKeluargaCtrl;
use App\Http\Controllers\Admin\MyProfileCtrl;
use App\Http\Controllers\Admin\PendudukCtrl;
use App\Http\Controllers\Admin\PetugasCtrl;
use App\Http\Controllers\Admin\VaksinasiCtrl;
use App\Http\Controllers\Landing\HomeCtrl;
use App\Http\Controllers\Landing\SearchByCtrl;
use App\Http\Controllers\Landing\SearchByNikCtrl;
use App\Http\Controllers\MultiUser;
use Illuminate\Support\Facades\Auth;
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

// Route::get('/', function () {
//     return view('welcome');
// });
Auth::routes();

// ketika belum login
Route::get('/', [MultiUser::class, 'index'])->name('/');
Route::get('/home', [HomeCtrl::class, 'index'])->name('landing-home');
Route::view('/about', 'content-landing.about.about')->name('landing-about');

// Search By kk & nik
Route::view('/search-kk', 'content-landing.kk.kk')->name('landing-kk');
Route::view('/search-nik', 'content-landing.nik.nik')->name('landing-nik');
Route::post('/getSearchByNik', [SearchByCtrl::class, 'getByNIK'])->name('landing-getByNik');
Route::post('/getSearchByKK', [SearchByCtrl::class, 'getByKK'])->name('landing-getByKK');


// middleware akan jalan ketika sudah login
Route::group(['middleware' => ['auth', 'verified']], function () {
    Route::get('/beranda', [homeAdmin::class, 'index'])->name('admin-home');

    // CRUD Penduduk
    Route::get('/penduduk', [PendudukCtrl::class, 'index'])->name('admin-penduduk');
    Route::post('/penduduk-tambah', [PendudukCtrl::class, 'store'])->name('admin-pendudukTambah');
    Route::post('/penduduk-update/{id}', [PendudukCtrl::class, 'update'])->name('admin-pendudukUpdate');
    Route::post('/penduduk-hapus/{id}', [PendudukCtrl::class, 'destroy'])->name('admin-pendudukHapus');

    // CRUD My Profile
    Route::get('/profile', [MyProfileCtrl::class, 'index'])->name('admin-profile');
    Route::post('/profile-password/{id}', [MyProfileCtrl::class, 'updatePassword'])->name('admin-updatePassword');
    Route::post('/profile-update/{id}', [MyProfileCtrl::class, 'update'])->name('admin-profileUpdate');

    // CRUD Jenis Vaksin
    Route::get('/jenis-vaksin', [Jenis_VaksinCtrl::class, 'index'])->name('admin-jenis-vaksin');
    Route::post('/jenis-vaksin-tambah', [Jenis_VaksinCtrl::class, 'store'])->name('admin-jenis-vaksin-tambah');
    Route::post('/jenis-vaksin-update/{id}', [Jenis_VaksinCtrl::class, 'update'])->name('admin-jenis-vaksin-update');
    Route::post('/jenis-vaksin-hapus/{id}', [Jenis_VaksinCtrl::class, 'destroy'])->name('admin-jenis-vaksin-hapus');

    // CRUD Jenis Vaksin
    Route::get('/dosis', [DosisCtrl::class, 'index'])->name('admin-dosis');
    Route::post('/dosis-tambah', [DosisCtrl::class, 'store'])->name('admin-dosis-tambah');
    Route::post('/dosis-update/{id}', [DosisCtrl::class, 'update'])->name('admin-dosis-update');
    Route::post('/dosis-hapus/{id}', [DosisCtrl::class, 'destroy'])->name('admin-dosis-hapus');

    // CRUD Petugas
    Route::get('/petugas', [PetugasCtrl::class, 'index'])->name('admin-petugas');
    Route::post('/petugas-tambah', [PetugasCtrl::class, 'store'])->name('admin-petugas-tambah');
    Route::post('/petugas-update/{id}', [PetugasCtrl::class, 'update'])->name('admin-petugas-update');
    Route::post('/petugas-hapus/{id}', [PetugasCtrl::class, 'destroy'])->name('admin-petugas-hapus');

    //CRUD Kartu Keluarga
    Route::get('/kartu-keluarga', [KartuKeluargaCtrl::class, 'index'])->name('admin-kk');
    Route::post('/kartu-keluarga-update/{id}', [KartuKeluargaCtrl::class, 'update'])->name('admin-kkUpdate');
    Route::post('/kartu-keluarga-hapus/{id}', [KartuKeluargaCtrl::class, 'destroy'])->name('admin-kkHapus');

    // CRUD Vaksinasi
    Route::get('/vaksinasi', [VaksinasiCtrl::class, 'index'])->name('admin-vaksinasi');
    Route::post('/vaksinasi-tambah', [VaksinasiCtrl::class, 'store'])->name('admin-vaksinasiTambah');
    Route::post('/vaksinasi-update/{id}', [VaksinasiCtrl::class, 'update'])->name('admin-vaksinasiUpdate');
    Route::post('/vaksinasi-hapus/{id}', [VaksinasiCtrl::class, 'destroy'])->name('admin-vaksinasiHapus');
    Route::post('/vaksinasi-getJenisVaksin', [VaksinasiCtrl::class, 'getJenisVaksin'])->name('admin-getJenisVaksin');
});
