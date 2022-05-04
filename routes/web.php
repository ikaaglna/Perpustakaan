<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\WargaController;

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

// Route::get('/about', function () {
//     return view('about');
// });

Route::get('/warga', [WargaController::class, 'index']);
Route::get('/tambahWarga', [WargaController::class, 'create']); //masuk form
Route::post('warga/tambahDataWarga', [WargaController::class, 'tambahDataWarga']); //controller simpan
Route::get('warga/{id}/ubah', [WargaController::class, 'ubah']); //masuk form
Route::put('warga/{id}', [WargaController::class, 'ubahDataWarga']); //controller ubah
Route::delete('warga/{id}', [WargaController::class, 'hapusDataWarga']);
