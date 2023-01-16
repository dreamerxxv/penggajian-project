<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\GajiController;
use App\Http\Controllers\JabatanController;
use App\Http\Controllers\KaryawanController;
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

//---- Gaji ----
Route::get('/Gaji/index',[GajiController::class, 'index']);
Route::get('/Gaji/create',[GajiController::class, 'create']);
Route::get('/Gaji/edit',[GajiController::class, 'edit']);

//---- Jabatan ----
Route::get('/Jabatan/index',[JabatanController::class, 'index']);
Route::get('/Jabatan/create',[JabatanController::class, 'create']);
Route::get('/Jabatan/edit',[JabatanController::class, 'edit']);

//---- Karyawan ----
Route::get('/Karyawan/index',[KaryawanController::class, 'karyawan']);
Route::get('/Karyawan/create',[KaryawanController::class, 'karyawan']);
Route::get('/Karyawan/edit',[KaryawanController::class, 'karyawan']);

Route::get('/', function () {
    return view('dashboard');
});
