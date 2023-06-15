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

Route::get('/', function () {
    return view('admin.index');
});

Route::resource('/pages/kategori', AdminKategoriController::class);

Route::get('/pages/posts', function () {
    return view('admin.posts');
});
Route::get('/pages/profile', function () {
    return view('admin.profile');
});

Route::get('/index', function () {
    return view('index');
});

Route::get('/login', function () {
    return view('auth.login');
});

Route::get('/regist', function () {
    return view('auth.register');
});

Route::get('/pages/report-lists', function () {
    return view('admin.report-lists');
});
Route::get('/pages/user-lists', function () {
    return view('admin.user-lists');
});
Route::get('/index', function () {
    return view('index');
});

Route::get('/pertanyaan/{idKategori}', [AdminPertanyaanController::class, 'index']);
Route::resource('/pertanyaan', AdminPertanyaanController::class)->except('index');
Route::get('/jawaban/{idKategori}', [AdminJawabanController::class, 'index']);
Route::resource('/jawaban', AdminJawabanController::class)->except('index');
