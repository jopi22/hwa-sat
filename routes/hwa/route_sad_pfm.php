<?php

use App\Http\Controllers\master_sad\performa\BreakdownController;
use App\Http\Controllers\master_sad\performa\HaulingController;
use App\Http\Controllers\master_sad\performa\PerformaHMController;
use App\Http\Controllers\master_sad\performa\PerformaOTController;
use App\Http\Controllers\primer_sad\AktivitasController;
use App\Http\Controllers\primer_sad\CategoryController;
use App\Http\Controllers\primer_sad\DedicatedController;
use App\Http\Controllers\primer_sad\LocationController;
use Illuminate\Support\Facades\Route;

Route::group(['middleware' => 'auth'], function () {

    Route::controller(PerformaHMController::class)->group(function () {
        // Performa HM
        Route::get('hm_performance', 'hm_performance')->name('hm.p');
        Route::get('hm_performance_print/{hm}', 'hm_performance_print')->name('hm.p.excel');
        Route::get('hm_performance_unit_print_excel/{hm}', 'hm_performance_unit_print_excel')->name('hm.u.p.excel');
        Route::get('hm_performance_od_print_excel/{hm}', 'hm_performance_od_print_excel')->name('hm.od.p.excel');
        Route::get('hm_performance_od_cetak/{hm}', 'hm_performance_od_cetak')->name('hm.od.p.cetak');
        Route::get('hm_performance_unit', 'hm_performance_unit')->name('hm.p.u');
        Route::get('hm_performance_od', 'hm_performance_od')->name('hm.p.od');
        Route::get('manual_hm', 'hmManual')->name('hm.m');
        Route::post('hm_manual_store', 'hmManualStore')->name('hm.m.s');
        Route::post('hm_store', 'hmStore')->name('hm.s');
        Route::put('hm_update/{hm}', 'hmManualUpdate')->name('hm.m.u');
        Route::delete('hm_manual_delete/{hm}', 'hmManualDelete')->name('hm.m.d');
        // HM Equip
        Route::get('kelola_hm_index', 'kelola_hm')->name('hm.e');
        Route::get('hm_equip_info/{equip}', 'hm_equip_info')->name('hm.e.i');
        Route::get('hm_equip_print_excel/{equip}', 'hm_equip_print_excel')->name('hm.e.p.excel');
        Route::get('hm_equip_edit/{equip}', 'hm_equip_edit')->name('hm.e.e');
        Route::get('hm_equip_create/{equip}', 'hm_equip_create')->name('hm.e.c');
        Route::post('hm_equip_update', 'hm_equip_update')->name('hm.e.u');
        Route::post('hm_equip_storee', 'hm_equip_store')->name('hm.e.st');
        Route::post('hm_equip_refresh', 'hm_equip_refresh')->name('hm.e.r');
        // HM OD
        Route::get('hm_Karyawan', 'hm_karyawan')->name('hm.k');
        Route::get('hm_Karyawan/{kar}', 'hm_kar_info')->name('hm.k.i');
        Route::post('hm_kar_refresh', 'hm_kar_refresh')->name('hm.k.r');

        Route::post('tes', 'tes')->name('tes');
    });


    Route::controller(PerformaOTController::class)->group(function () {
        // Performa OT
        Route::get('ot_list', 'ot_list')->name('ot.l');
        Route::get('ot_list/{ot}', 'ot_list_excel')->name('ot.l.excel');
        Route::post('ot_store', 'ot_store')->name('ot.s');
        Route::post('ot_update', 'ot_update')->name('ot.u');
        Route::post('ot_delete', 'ot_delete')->name('ot.d');
        // HM OT
        Route::get('ot_Karyawan', 'ot_karyawan')->name('ot.k');
        Route::get('ot_Karyawan_excel/{kar}', 'ot_karyawan_excel')->name('ot.k.excel');
        Route::get('ot_Karyawan_info/{kar}', 'ot_kar_info')->name('ot.k.i');
        Route::get('ot_Karyawan_info_excel/{kar}', 'ot_kar_info_excel')->name('ot.k.i.excel');
        Route::post('ot_kar_refresh', 'ot_kar_refresh')->name('ot.k.r');
    });


    Route::controller(BreakdownController::class)->group(function () {
        // Breakdown
        Route::get('bd_list', 'bd_list')->name('bd.l');
        Route::get('bd_info/{bd}', 'bd_info')->name('bd.i');
        Route::get('bd_excel/{bd}', 'bd_excel')->name('bd.excel');
        Route::post('bd_store', 'bd_store')->name('bd.s');
        Route::post('bd_update', 'bd_update')->name('bd.u');
        Route::post('bd_delete', 'bd_delete')->name('bd.d');
    });


    Route::controller(HaulingController::class)->group(function () {
        //  Hauling
        Route::get('hauling_list', 'hauling_list')->name('ha.l');
        Route::get('hauling_print/{ha}', 'hauling_print_excel')->name('ha.p.excel');
        Route::put('hauling_update/{hauling}', 'hauling_update')->name('ha.u');
        Route::post('hauling_store', 'hauling_store')->name('ha.s');
        Route::delete('hauling_delete/{hm}', 'hauling_delete')->name('ha.d');
    });


    Route::controller(AktivitasController::class)->group(function () {
        // Jenis Aktivitas
        Route::get('aktivitas_list', 'aktivitas_index')->name('aktivitas.l');
        Route::put('aktivitas_update/{aktivitas}', 'aktivitas_update')->name('aktivitas.u');
        Route::post('aktivitas_store', 'aktivitas_store')->name('aktivitas.s');
    });


    Route::controller(LocationController::class)->group(function () {
        // Location
        Route::get('location_list', 'location_index')->name('location.l');
        Route::put('location_update/{location}', 'location_update')->name('location.u');
        Route::post('location_store', 'location_store')->name('location.s');
    });


    Route::controller(CategoryController::class)->group(function () {
        // Category
        Route::get('category_list', 'category_index')->name('category.l');
        Route::put('category_update/{category}', 'category_update')->name('category.u');
        Route::post('category_store', 'category_store')->name('category.s');
    });


    Route::controller(DedicatedController::class)->group(function () {
        // Category
        Route::get('dedicated_list', 'dedicated_index')->name('dedicated.l');
        Route::put('dedicated_update/{dedicated}', 'dedicated_update')->name('dedicated.u');
        Route::post('dedicated_store', 'dedicated_store')->name('dedicated.s');
    });
});
