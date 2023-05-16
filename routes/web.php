<?php

use App\Http\Controllers\PerangDuniaController;
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

Route::get('/', [PerangDuniaController::class, 'index']);
Route::get('/tambah', [PerangDuniaController::class, 'tambah']);
Route::post('/tambah', [PerangDuniaController::class, 'store']);
Route::get('/hapus/{id}', [PerangDuniaController::class, 'hapus']);
Route::get('/edit/{id}', [PerangDuniaController::class, 'edit']);
Route::post('/edit/{id}', [PerangDuniaController::class, 'update']);
Route::get('/lihat/{id}', [PerangDuniaController::class, 'lihat']);