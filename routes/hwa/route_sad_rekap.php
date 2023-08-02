<?php

use App\Http\Controllers\master_sad\keuangan\KasController;
use App\Http\Controllers\rekap\performa\RhaulingController;
use App\Http\Controllers\primer_sad\RekapController;
use App\Http\Controllers\rekap\absensi\RabsensiController;
use App\Http\Controllers\rekap\absensi\RpengabsController;
use App\Http\Controllers\rekap\keuangan\RcateringController;
use App\Http\Controllers\rekap\keuangan\RincomeController;
use App\Http\Controllers\rekap\keuangan\RkasController;
use App\Http\Controllers\rekap\logistik\RlogistikController;
use App\Http\Controllers\rekap\performa\RbreakdownController;
use App\Http\Controllers\rekap\performa\RperformaHMController;
use App\Http\Controllers\rekap\performa\RperformaOTController;
use Illuminate\Support\Facades\Route;

Route::group(['middleware' => 'auth'], function () {

    Route::controller(RekapController::class)->group(function () {
        // Index
        Route::get('rekap_index', 'rekap_index')->name('rek.g');
        Route::put('arsip_save/{arsip_save}', 'arsip_save')->name('r.arsip');
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
        Route::get('hm_create', 'hm_create')->name('hm.create');
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
        Route::get('print_hm_Karyawan', 'print_hm_karyawan')->name('p.hm.k');
        Route::get('rekap_hm_Karyawan/{kar}', 'hm_kar_info')->name('r.hm.k.i');
        Route::post('rekap_hm_kar_refresh', 'hm_kar_refresh')->name('r.hm.k.r');
        //Print
        Route::get('rekap_hm_performance_print/{hm}', 'hm_performance_print')->name('r.hm.p.excel');
        Route::get('rekap_hm_performance_unit_print_excel/{hm}', 'hm_performance_unit_print_excel')->name('r.hm.u.p.excel');
        Route::get('rekap_hm_performance_od_print_excel/{hm}', 'hm_performance_od_print_excel')->name('r.hm.od.p.excel');

        Route::post('tes', 'tes')->name('tes');

        Route::get('rekap_hm_performance_print/{hm}', 'hm_performance_print')->name('r.hm.p.excel');
        Route::get('rekap_hm_performance_unit_print_excel/{hm}', 'hm_performance_unit_print_excel')->name('r.hm.u.p.excel');
        Route::get('rekap_hm_performance_od_print_excel/{hm}', 'hm_performance_od_print_excel')->name('r.hm.od.p.excel');
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
        // Print
        Route::get('rekap.ot_list/{ot}', 'ot_list_excel')->name('r.ot.l.excel');
        Route::get('rekap.ot_Karyawan_excel/{kar}', 'ot_karyawan_excel')->name('r.ot.k.excel');
        Route::get('rekap.ot_Karyawan_info_excel/{kar}', 'ot_kar_info_excel')->name('r.ot.k.i.excel');
    });

    Route::controller(RbreakdownController::class)->group(function () {
        // Breakdown
        Route::get('rekap_bd_list', 'bd_list')->name('r.bd.l');
        Route::post('rekap_bd_store', 'bd_store')->name('r.bd.s');
        Route::post('rekap_bd_update', 'bd_update')->name('r.bd.u');
        Route::post('rekap_bd_delete', 'bd_delete')->name('r.bd.d');
        Route::get('rekap_bd_excel/{bd}', 'bd_excel')->name('r.bd.excel');

    });

    Route::controller(RlogistikController::class)->group(function () {
        //Master Logistik
        Route::get('rekap_log_equip_list', 'log_equip_list')->name('r.log.e.l');
        Route::get('rekap_log_equip_info/{log}', 'log_equip_info')->name('r.log.e.i');
        Route::get('rekap_log_equip_edit/{log}', 'log_equip_edit')->name('r.log.e.e');
        Route::get('rekap_log_equip_create/{log}', 'log_equip_create')->name('r.log.e.c');
        Route::post('rekap_log_equip_update', 'log_equip_update')->name('r.log.e.u');
        Route::post('rekap_log_equip_store', 'log_equip_store')->name('r.log.e.s');
    });

    Route::controller(RcateringController::class)->group(function () {
        // Catering
        Route::get('rekap_cat_list', 'cat_list')->name('r.cat.l');
        Route::get('rekap_cat_create', 'cat_create')->name('r.cat.c');
        Route::get('rekap_cat_excel/{cat}', 'cat_excel')->name('r.cat.excel');
    });

    Route::controller(RkasController::class)->group(function () {
        // Kas
        Route::get('rekap_kas_list', 'kas_list')->name('r.kas.l');
        Route::post('rekap_kas_store', 'kas_store')->name('r.kas.s');
        Route::post('rekap_kas_update', 'kas_update')->name('r.kas.u');
        Route::post('rekap_kas_delete', 'kas_delete')->name('r.kas.d');
        Route::get('kas_excel/{kas}', 'kas_excel')->name('kas.excel');
    });

    Route::controller(RincomeController::class)->group(function () {
        // Gaji
        Route::get('rekap_gaji_list', 'gaji_list')->name('r.g.l');
        Route::get('rekap_gaji_info/{gaji}', 'gaji_info')->name('r.g.i');
        Route::get('rekap_adjust', 'adjust')->name('r.adjust');
        Route::get('rekap_hm_sewa', 'hm_sewa')->name('r.hm.sewa');
        Route::get('rekap_unit_sewa', 'unit_sewa')->name('r.unit.sewa');
        Route::get('rekap_unit_sewa/{hm}', 'unit_sewa_info')->name('r.unit.sewa.i');
    });

    Route::controller(RhaulingController::class)->group(function () {
        //  Hauling
        Route::get('rekap_hauling_list', 'hauling_list')->name('r.ha.l');
        Route::get('rekap_hauling_print/{ha}', 'hauling_print_excel')->name('r.ha.p.excel');
    });
});
