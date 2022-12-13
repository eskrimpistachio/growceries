<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::get('/kategori', function(){
    return view('kategori');
});

Route::get('/kategori/sayur', function(){
    return view('contohsayur');
});

Route::get('/belisekarang', function(){
    return view('belisekarang');
});

Route::get('/bayar', function(){
    return view('bayar');
});

Route::get('/bayar/prosesbayar', function(){
    return view('prosesbayar');
});

Route::get('/bayar/bayarberhasil', function(){
    return view('bayarberhasil');
});

require __DIR__.'/auth.php';
