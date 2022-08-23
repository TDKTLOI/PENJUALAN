<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('home');
});
Route::get('/Barang', function () {
    return view('Barang.index');
});
Route::get('/Kategori', function () {
    return view('Kategori.index');
});
Route::get('/Suplier', function () {
    return view('Suplier.index');
});
Route::get('/Member', function () {
    return view('Member.index');
});
Route::get('/Pembelian', function () {
    return view('Pembelian.index');
});
Route::get('/Penjualan', function () {
    return view('Penjualan.index');
});
