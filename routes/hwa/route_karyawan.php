<?php

use App\Http\Controllers\Karyawan\K_PelayananController;
use App\Http\Controllers\Karyawan\K_PerformaController;
use Illuminate\Support\Facades\Route;

Route::group(['middleware' => 'auth'], function () {

    Route::controller(K_PerformaController::class)->group(function () {
        // Performa
        Route::get('jadwal_kar', 'jadwal_kar')->name('jadwal.kar');
        Route::get('absensi_kar', 'absensi_kar')->name('absensi.kar');
        Route::get('hm_kar', 'hm_kar')->name('hm.kar');
        //Penghasilan
        Route::get('rekap_penghasilan_kar', 'rekap_penghasilan_kar')->name('rekap.penghasilan.kar');
        Route::get('gaji_pokok', 'gaji_pokok')->name('gaji.pokok');
        Route::get('insentif', 'insentif')->name('insentif');
        Route::get('adjust_kar', 'adjust_kar')->name('adjust_kar');
    });

    Route::controller(K_PelayananController::class)->group(function () {
        //Pelayanan
        Route::get('peng_absensi', 'peng_absensi')->name('peng.absensi');
        Route::get('peng_resign', 'peng_resign')->name('peng.resign');
        Route::post('peng_resign_store', 'peng_resign_store')->name('peng.resign.s');
        Route::get('peng_skk', 'peng_skk')->name('peng.skk');
        Route::post('peng_skk_store', 'peng_skk_store')->name('peng.skk.s');
    });
});
