<?php

use App\Http\Controllers\master_sad\absensi\AbsensiController;
use App\Http\Controllers\master_sad\absensi\KalenderController;
use App\Http\Controllers\master_sad\absensi\PengajuanAbsController;
use Illuminate\Support\Facades\Route;

Route::group(['middleware' => 'auth'], function () {

    Route::controller(AbsensiController::class)->group(function () {
        // Absensi
        Route::get('absensi', 'abs_list')->name('abs.g');
        Route::get('kalender', 'abs_kalender')->name('abs.kal');
        Route::get('ajax_absensi_show/{abs}', 'absShow');
        Route::put('ajax_absensi_update/{abs}', 'absUpdate');
        Route::get('absensi_search', 'absSearch')->name('abs.f');
        Route::post('absensi_create', 'abs_input')->name('abs.abs');
    });

});
