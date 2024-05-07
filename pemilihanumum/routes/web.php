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

Route::get('/login', function () {
    return view('login');
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