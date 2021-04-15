<?php

use App\Http\Controllers\KendaraanController;
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

// Route::get('/', function () {
//     return view('welcome');
// });
Route::get('/', [KendaraanController::class, 'home']);
Route::get('/list-kendaraan', [KendaraanController::class, 'home']);
Route::get('/form-tambah', function () {
    return view('form-tambah');
});
Route::post('/tambah', [KendaraanController::class, 'tambah']);
Route::get('/hapus-kendaraan/{id}', [KendaraanController::class, 'hapus']);
Route::get('/ubah-kendaraan/{id}', [KendaraanController::class, 'formUbah']);
Route::post('/ubah-kendaraan', [KendaraanController::class, 'ubah']);
