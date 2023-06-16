<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AdminJawabanController;
use App\Http\Controllers\AdminKategoriController;
use App\Http\Controllers\AdminPertanyaanController;

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

// ADMIN ROUTES
Route::get('/admin', function () {
    return view('admin.index');
});

Route::resource('/admin/kategori', AdminKategoriController::class);
Route::get('/admin/pertanyaan-list', function () {
    return view('admin.pertanyaan-list');
});
Route::get('/admin/report-list', function () {
    return view('admin.report-list');
});
Route::get('/admin/user-list', function () {
    return view('admin.user-list');
});

Route::get('/pertanyaan/{idKategori}', [AdminPertanyaanController::class, 'index']);
Route::resource('/pertanyaan', AdminPertanyaanController::class)->except('index');
Route::get('/jawaban/{idKategori}', [AdminJawabanController::class, 'index']);
Route::resource('/jawaban', AdminJawabanController::class)->except('index');

// MAIN ROUTES
Route::get('/index', function () {
    return view('index');
});

Route::get('/login', function () {
    return view('auth.login');
});

Route::get('/regist', function () {
    return view('auth.register');
});

Route::get('/choose-categories', function() {
    return view('auth.categories');
});