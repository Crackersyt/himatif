<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HumasController;
use App\Http\Controllers\KwuController;
use App\Http\Controllers\MedinfoController;
use App\Http\Controllers\MibaController;
use App\Http\Controllers\PdsmoController;
use App\Http\Controllers\PenristekController;
use App\Http\Controllers\SosialController;

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

Route::get('/penristek', [PenristekController::class, 'index']);
Route::get('/humas', [HumasController::class, 'index']);
Route::get('/sosial', [SosialController::class, 'index']);
Route::get('/miba', [MibaController::class, 'index']);
Route::get('/kwu', [KwuController::class, 'index']);
Route::get('/pdsmo', [PdsmoController::class, 'index']);
Route::get('/medinfo', [MedinfoController::class, 'index']);


