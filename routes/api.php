<?php

use App\Http\Controllers\PenggunaController;
use App\Http\Controllers\KontenController;
use App\Http\Controllers\RulesController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "api" middleware group. Make something great!
|
*/

Route::get('/pengguna', [PenggunaController::class, 'index']);
Route::post('/pengguna', [PenggunaController::class, 'penggunanya']);
Route::get('/konten', [KontenController::class, 'index']);
Route::get('/konten/{id_konten}', [KontenController::class, 'data']);
Route::post('/konten', [KontenController::class, 'kontennya']);
Route::get('/rules', [RulesController::class, 'index']);
Route::post('/rules', [RulesController::class, 'rulesnya']);
 