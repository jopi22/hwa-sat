<?php

use App\Http\Controllers\master_sad\absensi\AbsensiController;
use App\Http\Controllers\master_sad\absensi\KalenderController;
use App\Http\Controllers\master_sad\absensi\PengajuanAbsController;
use Illuminate\Support\Facades\Route;

Route::group(['middleware' => 'auth'], function () {

    Route::controller(AbsensiController::class)->group(function () {
        // Absensi
        Route::get('kelola_absensi', 'abs_kelola')->name('abs.kel');
        Route::get('kalender', 'abs_kalender')->name('abs.kal');
        Route::get('ajax_absensi_show/{abs}', 'absShow');
        Route::put('ajax_absensi_update/{abs}', 'absUpdate');
        Route::get('absensi_search', 'absSearch')->name('abs.f');
        Route::post('absensi_create', 'abs_input')->name('abs.abs');
    });


    Route::controller(KalenderController::class)->group(function () {
        // Master
        Route::get('master_list', 'masterGet')->name('per.g');
        // Kalender/Periode
        Route::post('ajax_periode_store', 'perStore')->name('master.s');
        Route::get('absensi_create/{per}', 'perCreateAktif')->name('per.ca');
        Route::get('ajax_periode_show/{per}', 'perShow');
        Route::put('ajax_periode_update/{per}', 'perUpdate');
        Route::delete('ajax_periode_delete/{per}', 'perDelete');
    });

    Route::controller(PengajuanAbsController::class)->group(function () {
        // Pengajuan Absensi
        Route::get('pengajuan_absensi', 'pengAbsGet')->name('peng.abs.g');
        Route::get('buat_pengajuan_absensi', 'pengAbsCreate')->name('peng.abs.c');
        Route::get('buat_pengajuan_absensi_manual', 'pengAbsCreateM')->name('peng.abs.cm');
        Route::post('store_pengajuan_absensi', 'pengAbsStore')->name('peng.abs.s');
        Route::post('store_pengajuan_absensi_manual', 'pengAbsStoreM')->name('peng.abs.sm');
        Route::get('Info_pengajuan_absensi/{peng}', 'pengAbsInfo')->name('peng.abs.i');
        Route::get('print_surat_pengajuan/{peng}', 'pengAbsPrint')->name('peng.abs.p');
        // Pengajuan Ditolak
        Route::put('pengajuan_ditolak/{peng}', 'pengTolak')->name('peng.abs.tolak');
        Route::put('pengajuan_diterima/{peng}', 'pengTerimaManual')->name('peng.abs.terima.m');
        Route::post('pengajuan_diterima', 'pengTerima')->name('peng.abs.terima');
        Route::get('absensi_search_2', 'absSearch_2')->name('abs.f.2');
    });

});
