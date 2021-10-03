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
    return view('homepage');
});
Route::get('/profil/about', function () {
    return view('profil.about');
});
Route::get('/profil/history', function () {
    return view('profil.history');
});
Route::get('/profil/visimisi', function () {
    return view('profil.visimisi');
});
Route::get('/profil/organisasi', function () {
    return view('profil.organisasi');
});
Route::get('/berita/beritagrid', function () {
    return view('berita.beritagrid');
});
Route::get('/berita/beritasingle', function () {
    return view('berita.beritasingle');
});
Route::get('/jadwaldokter', function () {
    return view('dokter.jadwaldokter');
});
Route::get('/hubungikami', function () {
    return view('hubungikami');
});