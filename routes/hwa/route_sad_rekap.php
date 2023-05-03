<?php

use App\Http\Controllers\primer_sad\RekapController;
use App\Http\Controllers\rekap\absensi\RabsensiController;
use App\Http\Controllers\rekap\absensi\RpengabsController;
use App\Http\Controllers\rekap\performa\RbreakdownController;
use App\Http\Controllers\rekap\performa\RperformaHMController;
use App\Http\Controllers\rekap\performa\RperformaOTController;
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

    Route::controller(RperformaHMController::class)->group(function () {
        // Performa HM
        Route::get('rekap_hm_performance', 'hm_performance')->name('r.hm.p');
        Route::get('rekap_manual_hm', 'hmManual')->name('r.hm.m');
        Route::post('rekap_hm_manual_store', 'hmManualStore')->name('r.hm.m.s');
        Route::post('rekap_hm_store', 'hmStore')->name('r.hm.s');
        Route::put('rekap_hm_update/{hm}', 'hmManualUpdate')->name('r.hm.m.u');
        Route::delete('rekap_hm_manual_delete/{hm}', 'hmManualDelete')->name('r.hm.m.d');
        // HM Equip
        Route::get('rekap_hm_equip', 'hm_equipment')->name('r.hm.e');
        Route::get('rekap_hm_equip_info/{equip}', 'hm_equip_info')->name('r.hm.e.i');
        Route::get('rekap_hm_equip_edit/{equip}', 'hm_equip_edit')->name('r.hm.e.e');
        Route::get('rekap_hm_equip_create/{equip}', 'hm_equip_create')->name('r.hm.e.c');
        Route::post('rekap_hm_equip_update', 'hm_equip_update')->name('r.hm.e.u');
        Route::post('rekap_hm_equip_storee', 'hm_equip_store')->name('r.hm.e.st');
        Route::post('rekap_hm_equip_refresh', 'hm_equip_refresh')->name('r.hm.e.r');
        // HM OD
        Route::get('rekap_hm_Karyawan', 'hm_karyawan')->name('r.hm.k');
        Route::get('rekap_hm_Karyawan/{kar}', 'hm_kar_info')->name('r.hm.k.i');
        Route::post('rekap_hm_kar_refresh', 'hm_kar_refresh')->name('r.hm.k.r');

        Route::post('tes', 'tes')->name('tes');
    });

    Route::controller(RperformaOTController::class)->group(function () {
        // Performa OT
        Route::get('rekap_ot_list', 'ot_list')->name('r.ot.l');
        Route::post('rekap_ot_store', 'ot_store')->name('r.ot.s');
        Route::post('rekap_ot_update', 'ot_update')->name('r.ot.u');
        Route::post('rekap_ot_delete', 'ot_delete')->name('r.ot.d');
        // HM OD
        Route::get('rekap_ot_Karyawan', 'ot_karyawan')->name('r.ot.k');
        Route::get('rekap_ot_Karyawan/{kar}', 'ot_kar_info')->name('r.ot.k.i');
        Route::post('rekap_ot_kar_refresh', 'ot_kar_refresh')->name('r.ot.k.r');
    });

    Route::controller(RbreakdownController::class)->group(function () {
        // Breakdown
        Route::get('rekap_bd_list', 'bd_list')->name('r.bd.l');
        Route::post('rekap_bd_store', 'bd_store')->name('r.bd.s');
        Route::post('rekap_bd_update', 'bd_update')->name('r.bd.u');
        Route::post('rekap_bd_delete', 'bd_delete')->name('r.bd.d');
    });

});
