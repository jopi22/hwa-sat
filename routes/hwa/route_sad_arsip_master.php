<?php

use App\Http\Controllers\primer_sad\ArsipMasterController;
use App\Http\Controllers\primer_sad\PrintController;
use App\Http\Controllers\primer_sad\RekapController;
use App\Http\Controllers\rekap\absensi\RabsensiController;
use App\Http\Controllers\rekap\absensi\RpengabsController;
use App\Http\Controllers\rekap\keuangan\RcateringController;
use App\Http\Controllers\rekap\logistik\RlogistikController;
use App\Http\Controllers\rekap\performa\RbreakdownController;
use App\Http\Controllers\rekap\performa\RperformaHMController;
use App\Http\Controllers\rekap\performa\RperformaOTController;
use Illuminate\Support\Facades\Route;

Route::group(['middleware' => 'auth'], function () {

    // Master Data
    Route::controller(ArsipMasterController::class)->group(function () {
        Route::get('arsip_master_index', 'amast_index')->name('amast.g');
        Route::get('arsip_master/{arsip_master}', 'amaster_index')->name('master.gdp');

        // Absensi
        Route::get('arsip_absensi/{arsip_absensi}', 'abs_kelola')->name('a.abs.kel');
        Route::get('arsip_kalender/{arsip_kalender}', 'abs_kalender')->name('a.abs.kal');
        Route::get('arsip_absensi_search/{arsip_absensi_search}', 'absSearch')->name('a.abs.f');

        // Pengajuan Absensi
        Route::get('arsip_pengajuan/{arsip_pengajuan}', 'pengabs_index')->name('a.peng.g');
        Route::get('arsip_info_pengajuan_absensi/{peng}', 'pengAbsInfo')->name('a.peng.abs.i');

        // HM Equip
        Route::get('arsip_hm_equip/{arsip_hm_equip}', 'hm_equipment')->name('a.hm.e');
        Route::get('arsip_manual_hm/{arsip_manual_hm}', 'hmManual')->name('a.hm.m');
        Route::get('arsip_hm_Karyawan/{arsip_hm_Karyawan}', 'hm_karyawan')->name('a.hm.k');

        // Performa OT, OD, Breakdown
        Route::get('arsip_ot_list/{arsip_ot_list}', 'ot_list')->name('a.ot.l');
        Route::get('arsip_ot_Karyawan/{arsip_ot_Karyawan}', 'ot_karyawan')->name('a.ot.k');
        Route::get('arsip_bd_list/{arsip_bd_list}', 'bd_list')->name('a.bd.l');

        // Logistik
        Route::get('arsip_log_equip_list', 'log_equip_list')->name('a.log.e.l');
        Route::get('arsip_log_equip_info/{log}', 'log_equip_info')->name('a.log.e.i');
        Route::get('arsip_log_equip_edit/{log}', 'log_equip_edit')->name('a.log.e.e');
        Route::get('arsip_log_equip_create/{log}', 'log_equip_create')->name('a.log.e.c');
        Route::post('arsip_log_equip_update', 'log_equip_update')->name('a.log.e.u');
        Route::post('arsip_log_equip_store', 'log_equip_store')->name('a.log.e.s');

        // Kas
        Route::get('arsip_kas_list', 'kas_list')->name('a.kas.l');
        Route::post('arsip_kas_store', 'kas_store')->name('a.kas.s');
        Route::post('arsip_kas_update', 'kas_update')->name('a.kas.u');
        Route::post('arsip_kas_delete', 'kas_delete')->name('a.kas.d');

        // Gaji
        Route::get('arsip_gaji_list', 'gaji_list')->name('a.g.l');
        Route::get('arsip_gaji_info/{gaji}', 'gaji_info')->name('a.g.i');

        // Catering
        Route::get('arsip_catering_list', 'cat_list')->name('a.cat.l');
    });

    // Route::controller(RpengabsController::class)->group(function () {
    //     // Pengajuan Absensi
    //     Route::get('rekap_pengajuan', 'pengabs_index')->name('r.peng.g');
    //     Route::get('rekap_info_pengajuan_absensi/{peng}', 'pengAbsInfo')->name('r.peng.abs.i');
    // });

    // Route::controller(RabsensiController::class)->group(function () {
    //     // Absensi
    //     Route::get('rekap_absensi', 'abs_kelola')->name('r.abs.kel');
    //     Route::get('rekap_kalender', 'abs_kalender')->name('r.abs.kal');
    //     Route::get('rekap_absensi_search', 'absSearch')->name('r.abs.f');
    // });

    // Route::controller(RperformaHMController::class)->group(function () {
    //     // Performa HM
    //     Route::get('rekap_hm_performance', 'hm_performance')->name('r.hm.p');
    //     Route::get('rekap_manual_hm', 'hmManual')->name('r.hm.m');
    //     Route::post('rekap_hm_manual_store', 'hmManualStore')->name('r.hm.m.s');
    //     Route::post('rekap_hm_store', 'hmStore')->name('r.hm.s');
    //     Route::put('rekap_hm_update/{hm}', 'hmManualUpdate')->name('r.hm.m.u');
    //     Route::delete('rekap_hm_manual_delete/{hm}', 'hmManualDelete')->name('r.hm.m.d');
    //     // HM Equip
    //     Route::get('rekap_hm_equip', 'hm_equipment')->name('r.hm.e');
    //     Route::get('rekap_hm_equip_info/{equip}', 'hm_equip_info')->name('r.hm.e.i');
    //     Route::get('rekap_hm_equip_edit/{equip}', 'hm_equip_edit')->name('r.hm.e.e');
    //     Route::get('rekap_hm_equip_create/{equip}', 'hm_equip_create')->name('r.hm.e.c');
    //     Route::post('rekap_hm_equip_update', 'hm_equip_update')->name('r.hm.e.u');
    //     Route::post('rekap_hm_equip_storee', 'hm_equip_store')->name('r.hm.e.st');
    //     Route::post('rekap_hm_equip_refresh', 'hm_equip_refresh')->name('r.hm.e.r');
    //     // HM OD
    //     Route::get('rekap_hm_Karyawan', 'hm_karyawan')->name('r.hm.k');
    //     Route::get('print_hm_Karyawan', 'print_hm_karyawan')->name('p.hm.k');
    //     Route::get('rekap_hm_Karyawan/{kar}', 'hm_kar_info')->name('r.hm.k.i');
    //     Route::post('rekap_hm_kar_refresh', 'hm_kar_refresh')->name('r.hm.k.r');

    //     Route::post('tes', 'tes')->name('tes');
    // });

    // Route::controller(RperformaOTController::class)->group(function () {
    //     // Performa OT
    //     Route::get('rekap_ot_list', 'ot_list')->name('r.ot.l');
    //     Route::post('rekap_ot_store', 'ot_store')->name('r.ot.s');
    //     Route::post('rekap_ot_update', 'ot_update')->name('r.ot.u');
    //     Route::post('rekap_ot_delete', 'ot_delete')->name('r.ot.d');
    //     // HM OD
    //     Route::get('rekap_ot_Karyawan', 'ot_karyawan')->name('r.ot.k');
    //     Route::get('rekap_ot_Karyawan/{kar}', 'ot_kar_info')->name('r.ot.k.i');
    //     Route::post('rekap_ot_kar_refresh', 'ot_kar_refresh')->name('r.ot.k.r');
    // });

    // Route::controller(RbreakdownController::class)->group(function () {
    //     // Breakdown
    //     Route::get('rekap_bd_list', 'bd_list')->name('r.bd.l');
    //     Route::post('rekap_bd_store', 'bd_store')->name('r.bd.s');
    //     Route::post('rekap_bd_update', 'bd_update')->name('r.bd.u');
    //     Route::post('rekap_bd_delete', 'bd_delete')->name('r.bd.d');
    // });

    // Route::controller(RlogistikController::class)->group(function () {
    //     //Master Logistik
    //     Route::get('arsip_log_equip_list', 'log_equip_list')->name('a.log.e.l');
    //     Route::get('arsip_log_equip_info/{log}', 'log_equip_info')->name('a.log.e.i');
    //     Route::get('arsip_log_equip_edit/{log}', 'log_equip_edit')->name('a.log.e.e');
    //     Route::get('arsip_log_equip_create/{log}', 'log_equip_create')->name('a.log.e.c');
    //     Route::post('arsip_log_equip_update', 'log_equip_update')->name('a.log.e.u');
    //     Route::post('arsip_log_equip_store', 'log_equip_store')->name('a.log.e.s');
    // });




});
