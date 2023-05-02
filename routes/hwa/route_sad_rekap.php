<?php

use App\Http\Controllers\primer_sad\RekapController;
use App\Http\Controllers\rekap\absensi\RabsensiController;
use App\Http\Controllers\rekap\absensi\RkalenderController;
use App\Http\Controllers\rekap\absensi\RpengabsController;
use Illuminate\Support\Facades\Route;

Route::group(['middleware' => 'auth'], function () {

    Route::controller(RekapController::class)->group(function () {
        // Index
        Route::get('rekap_index', 'rekap_index')->name('rek.g');
    });

    Route::controller(RpengabsController::class)->group(function () {
        // Pengajuan Absensi
        Route::get('rekap_pengajuan', 'pengabs_index')->name('r.peng.g');
        Route::get('rekap_pengajuan_pengajuan_absensi_manual', 'pengAbsCreateM')->name('r.peng.abs.cm');
        Route::post('rekap_store_pengajuan_absensi_manual', 'pengAbsStoreM')->name('r.peng.abs.sm');
        Route::get('rekap_info_pengajuan_absensi/{peng}', 'pengAbsInfo')->name('r.peng.abs.i');
        Route::get('rekap_absensi_search_2', 'absSearch_2')->name('r.abs.f.2');
    });

    Route::controller(RabsensiController::class)->group(function () {
        // Absensi
        Route::get('rekap_absensi', 'abs_kelola')->name('r.abs.kel');
        Route::get('rekap_kalender', 'abs_kalender')->name('r.abs.kal');
        // Route::get('ajax_absensi_show/{abs}', 'absShow');
        // Route::put('ajax_absensi_update/{abs}', 'absUpdate');
        Route::get('absensi_search', 'absSearch')->name('r.abs.f');
        Route::post('absensi_create', 'abs_input')->name('abs.abs');
    });

    Route::controller(RkalenderController::class)->group(function () {
        // Route::get('kalender', 'abs_kalender')->name('r.abs.kal');
        // Master
        // Route::get('rekap_master_list', 'masterGet')->name('r.per.g');
        // Kalender/Periode
        // Route::post('ajax_periode_store', 'perStore')->name('master.s');
        // Route::get('absensi_create/{per}', 'perCreateAktif')->name('per.ca');
        // Route::get('ajax_periode_show/{per}', 'perShow');
        // Route::put('ajax_periode_update/{per}', 'perUpdate');
        // Route::delete('ajax_periode_delete/{per}', 'perDelete');
    });
});
