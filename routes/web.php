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
    return view('admin.welcome');
});

Route::get('/login', function () {
    return view('admin.login');
});

Route::get('/admin', function () {
    return view('admin.admin');
});

Route::get('/register', function () {
    return view('admin.register');
});

Route::get('/user', function () {
    return view('admin.user');
});

Route::get('/kategori', function () {
    return view('admin.kategori');
});


Route::get('/buku', function () {
    return view('admin.buku');
});

Route::get('/peminjam', function () {
    return view('admin.peminjam');
});

Route::get('/test', function () {
    return view('test');
});