<?php

use Illuminate\Support\Facades\Route;

// default
// Route::get('/', function () {
//     return view('welcome');
// });

// index (home)
Route::get('/', function () {
    return view('index');
})->name('index');

// Hal lain yang perlu diketahui
Route::get('/barang', function () {
    return view('barang');
})->name('barang');

Route::get('/attribute', function () {
    return view('attribute');
})->name('attribute');

Route::get('/others', function () {
    return view('others');
})->name('others');

// jurusan
Route::get('/jurusan', function () {
    return view('jurusan');
})->name('jurusan');

// timeline
Route::get('/timeline', function () {
    return view('timeline');
})->name('timeline');

// pembayaran
Route::get('/pembayaran', function () {
    return view('pembayaran');
})->name('pembayaran');

// faq
Route::get('/faq', function () {
    return view('faq');
})->name('faq');

// contact
Route::get('/contact', function () {
    return view('contact');
})->name('contact');

// pusat informasi
Route::get('/pusatinformasi', function () {
    return view('pusatinformasi');
})->name('pusatinformasi');

// panitia
Route::get('/panitia', function () {
    return view('panitia');
})->name('panitia');

// ukm
Route::get('/ukm', function () {
    return view('ukm');
})->name('ukm');

// galeri
Route::get('/galeri', function () {
    return view('galeri');
})->name('galeri');

// linktree
Route::get('/linktree', function () {
    return view('linktree');
})->name('linktree');

// pengumuman
Route::get('/pengumuman', function () {
    return view('pengumuman');
})->name('pengumuman');

