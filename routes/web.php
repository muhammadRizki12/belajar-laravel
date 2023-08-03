<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\KaryawanController;
use App\Http\Controllers\PosisiController;

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

// Basic Route
// Route::get('/test', function () {
//     return view('test');
// });

// Basic Route
// Route::view('/test', 'test');

// Route Argument
// Route::view('/test', 'test', ['nama' => 'udin', 'usia' => 20]);




// Route dengan parameter
Route::get('/test/{id}', function($id) {
    return view('test', ['id' => $id]);
});

// Karyawan
// Route::prefix('project')->group(function() {
    Route::get('/', [KaryawanController::class, 'index']);
    Route::get('/karyawan-add', [KaryawanController::class, 'addKaryawan']);
    Route::post('/karyawan', [KaryawanController::class, 'saveKaryawan']);
    Route::get('/karyawan-edit/{id}', [KaryawanController::class, 'editKaryawan']);
    Route::put('/karyawan/{id}', [KaryawanController::class, 'updateKaryawan']);
    Route::get('/karyawan-delete/{id}', [KaryawanController::class, 'deleteKaryawan']);
    Route::delete('/karyawan/{id}', [KaryawanController::class, 'destroyKaryawan']);
    Route::get('/karyawan', [KaryawanController::class, 'index']);

    // Posisi
    Route::get('/posisi', [PosisiController::class, 'index']);
    Route::get('/posisi-add', [PosisiController::class, 'add']);
    Route::post('/posisi', [PosisiController::class, 'save']);
    Route::get('/posisi-edit/{id}', [PosisiController::class, 'edit']);
    Route::put('/posisi/{id}', [PosisiController::class, 'update']);
    Route::delete('/posisi/{id}', [PosisiController::class, 'destroy']);


// });