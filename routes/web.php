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
Route::get('/pelanggan', [App\Http\Controllers\PelangganController::class, 'index']);
Route::get('/pelanggan/create', [App\Http\Controllers\PelangganController::class, 'create']);
Route::post('/pelanggan', [App\Http\Controllers\PelangganController::class, 'store']);
Route::get('/pelanggan/{id}/edit', [App\Http\Controllers\PelangganController::class, 'edit']);
Route::patch('/pelanggan/{id}', [App\Http\Controllers\PelangganController::class, 'update']);
Route::delete('/pelanggan/{id}', [App\Http\Controllers\PelangganController::class, 'destroy']);

Route::get('/room', [App\Http\Controllers\RoomController::class, 'index']);
Route::get('/room/create', [App\Http\Controllers\RoomController::class, 'create']);
Route::post('/room', [App\Http\Controllers\RoomController::class, 'store']);
Route::get('/room/{id}/edit', [App\Http\Controllers\RoomController::class, 'edit']);
Route::patch('/room/{id}', [App\Http\Controllers\RoomController::class, 'update']);
Route::delete('/room/{id}', [App\Http\Controllers\RoomController::class, 'destroy']);

Route::get('/penjualan', [App\Http\Controllers\PenjualanController::class, 'index']);
Route::get('/penjualan/create', [App\Http\Controllers\PenjualanController::class, 'create']);
Route::post('/penjualan', [App\Http\Controllers\PenjualanController::class, 'store']);
Route::get('/penjualan/{id}/edit', [App\Http\Controllers\PenjualanController::class, 'edit']);
Route::patch('/penjualan/{id}', [App\Http\Controllers\PenjualanController::class, 'update']);
Route::delete('/penjualan/{id}', [App\Http\Controllers\PenjualanController::class, 'destroy']);

Route::get('/detail', [App\Http\Controllers\DetailController::class, 'index']);
Route::get('/detail/create', [App\Http\Controllers\DetailController::class, 'create']);
Route::post('/detail', [App\Http\Controllers\DetailController::class, 'store']);
Route::get('/detail/{id}/edit', [App\Http\Controllers\DetailController::class, 'edit']);
Route::patch('/detail/{id}', [App\Http\Controllers\DetailController::class, 'update']);
Route::delete('/detail/{id}', [App\Http\Controllers\DetailController::class, 'destroy']);