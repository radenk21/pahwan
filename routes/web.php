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

Route::get('/', function () {
    return view('admin.index');
});
Route::get('/pages/kategori', function () {
    return view('admin.kategori');
});
Route::get('/pages/posts', function () {
    return view('admin.posts');
});
Route::get('/pages/profile', function () {
    return view('admin.profile');
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