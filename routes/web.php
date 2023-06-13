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
Route::get('/pages/tables', function () {
    return view('admin.pages.tables');
});
Route::get('/pages/profile', function () {
    return view('admin.pages.profile');
});

Route::get('/index', function () {
    return view('index');
});
