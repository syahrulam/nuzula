<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PenggunaController;
use App\Http\Controllers\HomeController;

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

Route::get('/', [App\Http\Controllers\PenggunaController::class, 'index'])->name('home');
Route::get('/sejarah', [App\Http\Controllers\PenggunaController::class, 'sejarah'])->name('sejarah');
Route::get('/visi-misi', [App\Http\Controllers\PenggunaController::class, 'visimisi'])->name('visi-misi');
Route::get('/struktur-organisasi', [App\Http\Controllers\PenggunaController::class, 'strukturorganisasi'])->name('struktur-organisasi');
Route::get('/jadwal-layanan-rawat-inap', [App\Http\Controllers\PenggunaController::class, 'jadwal'])->name('jadwal-layanan-rawat-inap');
Route::get('/igd', [App\Http\Controllers\PenggunaController::class, 'igd'])->name('igd');
Route::get('/rawat-jalan', [App\Http\Controllers\PenggunaController::class, 'rawatjalan'])->name('rawat-jalan');
Route::get('/rawat-inap', [App\Http\Controllers\PenggunaController::class, 'rawatinap'])->name('rawat-inap');
Route::get('/fasilitas-umum', [App\Http\Controllers\PenggunaController::class, 'fasilitasumum'])->name('fasilitas-umum');
Route::get('/chatbot', [App\Http\Controllers\PenggunaController::class, 'chatbot'])->name('chatbot');
Route::get('/kontak', [App\Http\Controllers\PenggunaController::class, 'kontak'])->name('kontak');

Auth::routes();
Route::get('/admin', [App\Http\Controllers\HomeController::class, 'index'])->name('admin');
