<?php

use App\Http\Controllers\AdminDashboardController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AdminJawabanController;
use App\Http\Controllers\AdminKategoriController;
use App\Http\Controllers\AdminPertanyaanController;
use App\Http\Controllers\AdminPertanyaanListController;
use App\Http\Controllers\AdminUserListController;

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
//Admin Dashboard 
Route::get('/admin', [AdminDashboardController::class, 'index']);
Route::resource('/admin/kategori', AdminKategoriController::class);
Route::get('/admin/pertanyaan-list', [AdminPertanyaanListController::class, 'index']);
Route::get('/admin/user-list', [AdminUserListController::class, 'index']);

Route::get('/admin/pertanyaan/{idKategori}', [AdminPertanyaanController::class, 'index']);
Route::resource('/admin/pertanyaan', AdminPertanyaanController::class)->except('index');
Route::get('/admin/jawaban/{idKategori}', [AdminJawabanController::class, 'index']);
Route::resource('/admin/jawaban', AdminJawabanController::class)->except('index');
Route::get('/admin/pengguna/{idPengguna}', [AdminUserListController::class, 'index']);
Route::resource('/admin/pengguna', AdminUserListController::class)->except('index');

Route::get('/admin/report-list', function () {
    return view('admin.report-list');
});
// MAIN ROUTES
Route::get('/index', function () {
    return view('index');
})->name('index');

Route::get('/login', function () {
    return view('auth.login');
});

Route::get('/regist', function () {
    return view('auth.register');
});

Route::get('/following', function () {
    return view('following');
});

Route::get('/question', function () {
    return view('question');
})->name('question');

// tes routes
Route::get('/tes', function () {
    return view('admin.tes');
});

// All Categories
Route::get('/categories', function () {
    return view('all-categories');
})->name('categories');

// Leaderboard
Route::get('/leaderboard', function () {
    return view('leaderboard');
})->name('leaderboard');

// My Profile
Route::get('/profile', function () {
    return view('profile');
})->name('profile');
