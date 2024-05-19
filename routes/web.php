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
    return view('home');
});

Route::get('/penristek', function () {
    return view('penristek');
});

Route::get('/humas', function () {
    return view('humas');
});

Route::get('/medinfo', function () {
    return view('medinfo');
});

Route::get('/miba', function () {
    return view('miba');
});

Route::get('/kwu', function () {
    return view('kwu');
});

Route::get('/sosial', function () {
    return view('sosial');
});