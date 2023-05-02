<?php

use App\Http\Controllers\primer_sad\RekapController;
use App\Http\Controllers\rekap\absensi\RabsensiController;
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
        Route::get('rekap_info_pengajuan_absensi/{peng}', 'pengAbsInfo')->name('r.peng.abs.i');
    });

    Route::controller(RabsensiController::class)->group(function () {
        // Absensi
        Route::get('rekap_absensi', 'abs_kelola')->name('r.abs.kel');
        Route::get('rekap_kalender', 'abs_kalender')->name('r.abs.kal');
        Route::get('rekap_absensi_search', 'absSearch')->name('r.abs.f');
    });

});
