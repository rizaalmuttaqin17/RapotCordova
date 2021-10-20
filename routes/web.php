<?php

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

/* Route::get('/', function () {
    return view('welcome');
}); */
Route::get('/', function () {
    return view('auth.login');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::get('/guru', [App\Http\Controllers\HomeController::class, 'guru'])->name('guru');
Route::get('/guru/tambah', [App\Http\Controllers\HomeController::class, 'guruTambah'])->name('guruTambah');
Route::get('/siswa', [App\Http\Controllers\HomeController::class, 'siswa'])->name('siswa');
Route::get('/mata_pelajaran', [App\Http\Controllers\HomeController::class, 'mata_pelajaran'])->name('mata_pelajaran');
Route::get('/rapot', [App\Http\Controllers\HomeController::class, 'rapot'])->name('rapot');
