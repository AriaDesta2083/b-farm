<?php

use App\Http\Controllers\PendapatanController;
use App\Http\Controllers\PengingatController;
use App\Http\Controllers\RekomendasiController;
use App\Http\Controllers\WebProfileController;
use App\Http\Controllers\RiwayatController;
use App\Models\Rekomendasi;
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

Route::group(['middleware' => ['auth']], function () {

    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');

    Route::group(['prefix' => 'kelola-keuangan'], function () {
        Route::resource('pengingat', PengingatController::class);
        Route::resource('pendapatan', PendapatanController::class);
    });
    Route::resource('rekomendasi', RekomendasiController::class);
    Route::get('web-profile', [WebProfileController::class, 'index'])->name('web-profile.index');
    Route::put('web-profile', [WebProfileController::class, 'update'])->name('web-profile.update');
    Route::get('riwayat', [RiwayatController::class, 'index'])->name('riwayat.index');
    Route::get('riwayat-get', [RiwayatController::class, 'show'])->name('riwayat.show');
});

require __DIR__ . '/auth.php';
