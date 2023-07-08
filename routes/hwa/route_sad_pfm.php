<?php

use App\Http\Controllers\master_sad\performa\BreakdownController;
use App\Http\Controllers\master_sad\performa\HaulingController;
use App\Http\Controllers\master_sad\performa\PerformaHMController;
use App\Http\Controllers\master_sad\performa\PerformaOTController;
use Illuminate\Support\Facades\Route;

Route::group(['middleware' => 'auth'], function () {

    Route::controller(PerformaHMController::class)->group(function () {
        // Performa HM
        Route::get('hm_performance', 'hm_performance')->name('hm.p');
        Route::get('manual_hm', 'hmManual')->name('hm.m');
        Route::post('hm_manual_store', 'hmManualStore')->name('hm.m.s');
        Route::post('hm_store', 'hmStore')->name('hm.s');
        Route::put('hm_update/{hm}', 'hmManualUpdate')->name('hm.m.u');
        Route::delete('hm_manual_delete/{hm}', 'hmManualDelete')->name('hm.m.d');
        // HM Equip
        Route::get('hm_equip', 'hm_equipment')->name('hm.e');
        Route::get('hm_equip_info/{equip}', 'hm_equip_info')->name('hm.e.i');
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
        Route::post('ot_store', 'ot_store')->name('ot.s');
        Route::post('ot_update', 'ot_update')->name('ot.u');
        Route::post('ot_delete', 'ot_delete')->name('ot.d');
        // HM OT
        Route::get('ot_Karyawan', 'ot_karyawan')->name('ot.k');
        Route::get('ot_Karyawan/{kar}', 'ot_kar_info')->name('ot.k.i');
        Route::post('ot_kar_refresh', 'ot_kar_refresh')->name('ot.k.r');
    });


    Route::controller(BreakdownController::class)->group(function () {
        // Breakdown
        Route::get('bd_list', 'bd_list')->name('bd.l');
        Route::get('bd_info/{bd}', 'bd_info')->name('bd.i');
        Route::post('bd_store', 'bd_store')->name('bd.s');
        Route::post('bd_update', 'bd_update')->name('bd.u');
        Route::post('bd_delete', 'bd_delete')->name('bd.d');
    });


    Route::controller(HaulingController::class)->group(function () {
        // Hauling
        Route::get('hauling_list', 'ha_list')->name('ha.l');
        Route::put('hauling_update/{ha}', 'ha_update')->name('ha.u');
        Route::post('hauling_delete', 'ha_delete')->name('ha.d');
    });
});
