<?php

use App\Http\Controllers\primer_sad\ArsipMasterController;
use Illuminate\Support\Facades\Route;

Route::group(['middleware' => 'auth'], function () {

    Route::controller(ArsipMasterController::class)->group(function () {
        // Master Data
        Route::get('arsip_master_index', 'amast_menu')->name('amast.g');
        Route::get('arsip_master/{arsip_master}', 'amaster_index')->name('master.gdp');

        // Absensi
        Route::get('arsip_absensi/{arsip_absensi}', 'abs_kelola')->name('a.abs.kel');
        Route::get('arsip_kalender/{arsip_kalender}', 'abs_kalender')->name('a.abs.kal');
        Route::get('arsip_absensi_search', 'absSearch')->name('a.abs.f');

        // Pengajuan Absensi
        Route::get('arsip_pengajuan/{arsip_pengajuan}', 'pengabs_index')->name('a.peng.g');
        // Route::get('arsip_info_pengajuan_absensi/{peng}', 'pengAbsInfo')->name('a.peng.abs.i');

        // HM Equip
        Route::get('arsip_hm_equip/{arsip_hm_equip}', 'hm_equipment')->name('a.hm.e');
        Route::get('arsip_manual_hm/{arsip_manual_hm}', 'hmManual')->name('a.hm.m');
        Route::get('arsip_hm_Karyawan/{arsip_hm_Karyawan}', 'hm_karyawan')->name('a.hm.k');

        // Performa OT, OD, Breakdown
        Route::get('arsip_ot_list/{arsip_ot_list}', 'ot_list')->name('a.ot.l');
        Route::get('arsip_ot_Karyawan/{arsip_ot_Karyawan}', 'ot_karyawan')->name('a.ot.k');
        Route::get('arsip_bd_list/{arsip_bd_list}', 'bd_list')->name('a.bd.l');

        // Logistik
        Route::get('arsip_log_equip_list/{log}', 'log_equip_list')->name('a.log.e.l');
        // Route::get('arsip_log_equip_info/{log}', 'log_equip_info')->name('a.log.e.i');

        // Kas
        Route::get('arsip_kas_list/{kas}', 'kas_list')->name('a.kas.l');

        // Gaji
        Route::get('arsip_gaji_list/{gaji}', 'gaji_list')->name('a.g.l');
        // Route::get('arsip_gaji_info/{gaji}', 'gaji_info')->name('a.g.i');

        // Catering
        Route::get('arsip_catering_list/{cat}', 'cat_list')->name('a.cat.l');
    });
});
