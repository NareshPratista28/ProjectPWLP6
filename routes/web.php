<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\MahasiswaController;
use Illuminate\Http\Request;

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::resource('mahasiswas', MahasiswaController::class);
Route::get('/search', [MahasiswaController::class, 'search'])->name('search');
Route::get('/nilai/{Nim}' ,[MahasiswaController::class,'nilai'])->name('mahasiswas.khs');Route::get('/khs/{Nim}', [MahasiswaController::class, 'khs'])->name('khs');
Route::get('/khs/{mahasiswa_id}/print_pdf', [MahasiswaController::class, 'print_pdf'])->name('print_pdf');