<?php

use App\Exports\Data_pesertaExport;
use App\Exports\Kartu_pesertaExport;
use App\Http\Controllers\BerkasPesertaController;
use App\Http\Controllers\DataPesertaController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\KartuPesertaController;
use App\Http\Controllers\ReportController;
use Illuminate\Support\Facades\Route;
use Maatwebsite\Excel\Facades\Excel;

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

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::get('/', function () {
    return view('welcome');
});

// route admin
Route::group(['prefix' => 'admin', 'middleware' => ['auth', 'role:admin']],
    function () {
        Route::get('/', [HomeController::class, 'home']);

        Route::get('data_peserta', function () {
            return view('data_peserta.index');
        });
        Route::get('berkas_peserta', function () {
            return view('berkas_peserta.index');
        });
        Route::get('kartu_peserta', function () {
            return view('kartu_peserta.index');
        });
    });

Route::resource('data_peserta', DataPesertaController::class);
Route::resource('berkas_peserta', BerkasPesertaController::class);
Route::resource('kartu_peserta', KartuPesertaController::class);
Route::resource('front', FrontController::class);

Route::get('/download', [App\Http\Controllers\FrontController::class, 'download'])->name('download');

// report
Route::post('laporan-data_peserta', [ReportController::class, 'reportData_peserta'])->name('reportData_peserta');

Route::get('/export-data_peserta', function () {
    return Excel::download(new Data_pesertaExport, 'data_peserta.xlsx');
});

Route::get('/export-kartu_peserta', function () {
    return Excel::download(new Kartu_pesertaExport, 'kartu_peserta.xlsx');
});
