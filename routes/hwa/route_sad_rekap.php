<?php

use App\Http\Controllers\primer_sad\RekapController;
use Illuminate\Support\Facades\Route;

Route::group(['middleware' => 'auth'], function () {

    Route::controller(RekapController::class)->group(function () {
        // Index
        Route::get('rekap_index', 'rekap_index')->name('rek.g');

        // Pengajuan Absensi
        Route::get('rekap_pengajuan', 'pengabs_index')->name('r.peng.g');
        // Route::get('kalender', 'abs_kalender')->name('abs.kal');
        // Route::get('ajax_absensi_show/{abs}', 'absShow');
        // Route::put('ajax_absensi_update/{abs}', 'absUpdate');
        // Route::get('absensi_search', 'absSearch')->name('abs.f');
        // Route::post('absensi_create', 'abs_input')->name('abs.abs');
    });
});
