<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PemilihController; // Menambahkan use statement untuk PemilihController

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

Route::get('/login', function () {
    return view('/login');
});

Route::get('/headers', function () {
    return view('headers');
});

Route::get('/features', function () {
    return view('features');
});

Route::get('/footers', function () {
    return view('footers');
});

Route::get('/dashboard', function () {
    return view('dashboard');
});

Route::get('pemilihan/login', function () {
    return view('pemilihan/login');
})->name('loginpemilihan');

Route::get('pemilihan/register', function () {
    return view('pemilihan/register');
})->name('registerpemilihan');

Route::get('pemilihan/home', function () {
    return view('pemilihan/home');
});

Route::post('pemilihan/register', [PemilihController::class, 'register']);
Route::post('pemilihan/login', [PemilihController::class, 'login']);