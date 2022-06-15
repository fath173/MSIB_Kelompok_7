<?php

use App\Http\Controllers\Admin\HomeCtrl as homeAdmin;
use App\Http\Controllers\Admin\Jenis_VaksinCtrl;
use App\Http\Controllers\Admin\MyProfileCtrl;
use App\Http\Controllers\Admin\PendudukCtrl;
use App\Http\Controllers\Admin\PetugasCtrl;
use App\Http\Controllers\Landing\HomeCtrl;
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


// middleware akan jalan ketika sudah login
Route::group(['middleware' => ['auth', 'verified']], function () {
    Route::get('/beranda', [homeAdmin::class, 'index'])->name('admin-home');
    Route::get('/penduduk', [PendudukCtrl::class, 'index'])->name('admin-penduduk');
    Route::post('/penduduk-hapus', [PendudukCtrl::class, 'store'])->name('admin-pendudukHapus');

    // CRUD My Profile
    Route::get('/profile', [MyProfileCtrl::class, 'index'])->name('admin-profile');
    Route::post('/profile-update/{id}', [MyProfileCtrl::class, 'update'])->name('admin-profileUpdate');

    // CRUD Jenis Vaksin
    Route::get('/jenis-vaksin', [Jenis_VaksinCtrl::class, 'index'])->name('admin-jenis-vaksin');
    Route::post('/jenis-vaksin-tambah', [Jenis_VaksinCtrl::class, 'store'])->name('admin-jenis-vaksin-tambah');
    Route::post('/jenis-vaksin-update/{id}', [Jenis_VaksinCtrl::class, 'update'])->name('admin-jenis-vaksin-update');
    Route::post('/jenis-vaksin-hapus/{id}', [Jenis_VaksinCtrl::class, 'destroy'])->name('admin-jenis-vaksin-hapus');

    Route::get('/petugas', [PetugasCtrl::class, 'index'])->name('admin-petugas');
});
