<?php

use App\Models\Contact;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\KwuController;
use App\Http\Controllers\CobaController;
use App\Http\Controllers\InfoController;
use App\Http\Controllers\MibaController;
use App\Http\Controllers\HumasController;
use App\Http\Controllers\PdsmoController;
use App\Http\Controllers\SosialController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\DeskripsiController;
use App\Http\Controllers\MedinfoController;
use App\Http\Controllers\PenristekController;
use App\Models\Deskripsi;

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



Route::get('/', [ContactController::class, 'index']);
Route::post('/store', [ContactController::class, 'store'])->name('store');

Route::get('/deskripsi', [DeskripsiController::class, 'index']);
Route::post('/deskripsi', [DeskripsiController::class, 'store']);

Route::get('/coba', [CobaController::class, 'index']);
Route::post('/coba', [CobaController::class, 'store']);


Route::get('/penristek', [PenristekController::class, 'index']);
Route::get('/humas', [HumasController::class, 'index']);
Route::get('/sosial', [SosialController::class, 'index']);
Route::get('/miba', [MibaController::class, 'index']);
Route::get('/kwu', [KwuController::class, 'index']);
Route::get('/pdsmo', [PdsmoController::class, 'index']);
Route::get('/medinfo', [MedinfoController::class, 'index']);


