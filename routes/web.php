<?php

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
//mahasiswa
Route::get('/', function () {
    return view('auth.new_login');
});

Route::get('/ajukan', function (){
    return view('mahasiswa.ajukan');
});
Route::get('/berkas', function (){
    return view('mahasiswa.berkas');
});
Route::get('/laporan', function (){
    return view('mahasiswa.laporan');
});
Route::get('/jadwal', function (){
    return view('mahasiswa.jadwal');
});


//dosen
Route::get('/dash_dosen', function (){
    return view('dosen.dashboard');
});
Route::get('/laporan_dosen', function (){
    return view('dosen.laporan');
});
Route::get('/jadwal_dosen', function (){
    return view('dosen.jadwal');
});
Route::get('/nilai', function (){
    return view('dosen.nilai');
});
Route::get('/revisi', function (){
    return view('dosen.revisi');
});

//koordinator
Route::get('/topik', function (){
    return view('koordinator.topik');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
