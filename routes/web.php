<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MahasiswaController;
use App\Http\Controllers\DosenController;
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
    return view('auth.login');
});

//mahasiswa
Route::get('/ajukan', [App\Http\Controllers\MahasiswaController::class, 'ajukan']) -> middleware('auth') -> name('ajukan');
Route::get('/berkas', [App\Http\Controllers\MahasiswaController::class, 'berkas']) -> middleware('auth') -> name('berkas');
Route::get('/laporan', [App\Http\Controllers\MahasiswaController::class, 'laporan']) -> middleware('auth') -> name('laporan');
Route::get('/jadwal', [App\Http\Controllers\MahasiswaController::class, 'jadwal']) -> middleware('auth') -> name('jadwal');


//dosen
Route::get('/dashboard', [App\Http\Controllers\DosenController::class, 'index']) -> middleware('auth') -> name('dashboard');
Route::get('/laporan', [App\Http\Controllers\DosenController::class, 'laporan']) -> middleware('auth') -> name('laporan');  
Route::get('/jadwal', [App\Http\Controllers\DosenController::class, 'jadwal']) -> middleware('auth') -> name('jadwal');
Route::get('/nilai', [App\Http\Controllers\DosenController::class, 'nilai']) -> middleware('auth') -> name('nilai');
Route::get('/revisi', [App\Http\Controllers\DosenController::class, 'revisi']) -> middleware('auth') -> name('revisi');


//koordinator
Route::get('/topik', [App\Http\Controllers\KoordinatorController::class, 'topik']) -> middleware('auth') -> name('topik');



Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

