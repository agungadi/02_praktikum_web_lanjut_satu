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

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::get('/', function () {
    echo "Selamat Datang";
});

Route::get('/about', function (){
    echo " NIM : 2041723002 </br> Nama : Agung Adi Saputra";
});

Route::get('/articles/1', function(){
    echo "Halaman Artikel 1";
});
Route::get('/articles/2', function(){
    echo "Halaman Artikel 2";
});
