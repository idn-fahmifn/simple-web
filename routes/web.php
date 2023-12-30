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

Route::get('nama', [App\Http\Controllers\SiswaController::class, 'nama']);
Route::get('alamat', [App\Http\Controllers\SiswaController::class, 'alamat']);

Route::get('nama-guru', [App\Http\Controllers\GuruController::class, 'nama']);

Route::resource('/makanan', App\Http\Controllers\MakananController::class);
Route::resource('/pesanan', App\Http\Controllers\PesananController::class);
