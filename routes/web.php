<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\client\homecontroller;
use App\Http\Controllers\client\kontakkcontroller;
use App\Http\Controllers\client\produkolahancontroller;
use App\Http\Controllers\client\produkpertaniancontroller;
use App\Http\Controllers\client\produktentangcontroller;
use App\Http\Controllers\Admin\BarangController;
use App\Http\Controllers\Admin\GaleriController;
use App\Http\Controllers\Admin\KategoriController;
use App\Http\Controllers\Admin\KontakController;
use App\Http\Controllers\Admin\PedagangController;
use App\Http\Controllers\Admin\PelatihanController;
use App\Http\Controllers\Admin\ProfilController;
use App\Http\Controllers\Admin\TentangController;
use App\Http\Controllers\Auth\LoginController;

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

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('dashboard');
Route::get('/', [homecontroller::class,'home'])->name('home');
Route::get('/produk', [produkolahancontroller::class,'home'])->name('produk');
Route::get('/kontak', [kontakkcontroller::class,'home'])->name('kontak');
Route::get('/tentang', [produktentangcontroller::class,'home'])->name('tentang');
// Pelatihan
Route::get('/pelatihans', [PelatihanController::class,'index'])->name('pelatihan.index');
Route::get('/pelatihans/create', [PelatihanController::class,'create'])->name('pelatihan.create');
Route::post('/pelatihans/store', [PelatihanController::class,'store'])->name('pelatihan.store');
Route::get('/pelatihans/edit/{id}', [PelatihanController::class,'edit'])->name('pelatihan.edit');
Route::patch('/pelatihans/update/{id}', [PelatihanController::class,'update'])->name('pelatihan.update');
Route::get('/pelatihans/delete/{id}', [PelatihanController::class,'delete'])->name('pelatihan.delete');

// Galeri
Route::get('/galeris', [GaleriController::class,'index'])->name('galeri.index');
Route::get('/galeris/create', [GaleriController::class,'create'])->name('galeri.create');
Route::post('/galeris/store', [GaleriController::class,'store'])->name('galeri.store');
Route::get('/galeris/edit/{id}', [GaleriController::class,'edit'])->name('galeri.edit');
Route::patch('/galeris/update/{id}', [GaleriController::class,'update'])->name('galeri.update');
Route::get('/galeris/delete/{id}', [GaleriController::class,'delete'])->name('galeri.delete');

// Pedagang
Route::get('/pedagangs', [PedagangController::class,'index'])->name('pedagang.index');
Route::get('/pedagangs/create', [PedagangController::class,'create'])->name('pedagang.create');
Route::post('/pedagangs/store', [PedagangController::class,'store'])->name('pedagang.store');
Route::get('/pedagangs/edit/{id}', [PedagangController::class,'edit'])->name('pedagang.edit');
Route::patch('/pedagangs/update/{id}', [PedagangController::class,'update'])->name('pedagang.update');
Route::get('/pedagangs/delete/{id}', [PedagangController::class,'delete'])->name('pedagang.delete');

// Kategori
Route::get('/kategoris', [KategoriController::class,'index'])->name('kategori.index');
Route::get('/kategoris/create', [KategoriController::class,'create'])->name('kategori.create');
Route::post('/kategoris/store', [KategoriController::class,'store'])->name('kategori.store');
Route::get('/kategoris/edit/{id}', [KategoriController::class,'edit'])->name('kategori.edit');
Route::patch('/kategoris/update/{id}', [KategoriController::class,'update'])->name('kategori.update');
Route::get('/kategoris/delete/{id}', [KategoriController::class,'delete'])->name('kategori.delete');

// Tentang
Route::get('/tentangs', [TentangController::class,'index'])->name('tentang.index');
Route::get('/tentangs/create', [TentangController::class,'create'])->name('tentang.create');
Route::post('/tentangs/store', [TentangController::class,'store'])->name('tentang.store');
Route::get('/tentangs/edit/{id}', [TentangController::class,'edit'])->name('tentang.edit');
Route::patch('/tentangs/update/{id}', [TentangController::class,'update'])->name('tentang.update');
Route::get('/tentangs/delete/{id}', [TentangController::class,'delete'])->name('tentang.delete');

// Barang
Route::get('/barangs', [BarangController::class,'index'])->name('barang.index');
Route::get('/barangs/create', [BarangController::class,'create'])->name('barang.create');
Route::post('/barangs/store', [BarangController::class,'store'])->name('barang.store');
Route::get('/barangs/edit/{id}', [BarangController::class,'edit'])->name('barang.edit');
Route::patch('/barangs/update/{id}', [BarangController::class,'update'])->name('barang.update');
Route::get('/barangs/delete/{id}', [BarangController::class,'delete'])->name('barang.delete');

// Profil
Route::get('/profils', [ProfilController::class,'index'])->name('profil.index');
Route::get('/profils/create', [ProfilController::class,'create'])->name('profil.create');
Route::post('/profils/store', [ProfilController::class,'store'])->name('profil.store');
Route::get('/profils/edit/{id}', [ProfilController::class,'edit'])->name('profil.edit');
Route::patch('/profils/update/{id}', [ProfilController::class,'update'])->name('profil.update');
Route::get('/profils/delete/{id}', [ProfilController::class,'delete'])->name('profil.delete');

// Kontak
Route::get('/kontaks', [KontakController::class,'index'])->name('kontak.index');
Route::get('/kontaks/create', [KontakController::class,'create'])->name('kontak.create');
Route::post('/kontaks/store', [KontakController::class,'store'])->name('kontak.store');
Route::get('/kontaks/edit/{id}', [KontakController::class,'edit'])->name('kontak.edit');
Route::patch('/kontaks/update/{id}', [KontakController::class,'update'])->name('kontak.update');
Route::get('/kontaks/delete/{id}', [KontakController::class,'delete'])->name('kontak.delete');

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
