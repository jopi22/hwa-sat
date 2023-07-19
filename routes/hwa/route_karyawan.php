<?php

use App\Http\Controllers\karyawan\K_PerformaController;
use Illuminate\Support\Facades\Route;

Route::group(['middleware' => 'auth'], function () {

    //Jadwal
    Route::controller(K_PerformaController::class)->group(function () {
        // Absensi
        Route::get('jadwal_kar', 'jadwal_kar')->name('jadwal.kar');
        Route::get('absensi_kar', 'absensi_kar')->name('absensi.kar');
        Route::get('hm_kar', 'hm_kar')->name('hm.kar');
        Route::get('rekap_penghasilan_kar', 'rekap_penghasilan_kar')->name('rekap.penghasilan.kar');
        Route::get('gaji_pokok', 'gaji_pokok')->name('gaji.pokok');
        Route::get('insentif', 'insentif')->name('insentif');
        Route::get('adjust_kar', 'adjust_kar')->name('adjust_kar');
    });
});
