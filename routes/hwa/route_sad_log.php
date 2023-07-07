<?php

use App\Http\Controllers\master_sad\logistik\LogistikController;
use App\Http\Controllers\primer_sad\StokController;
use Illuminate\Support\Facades\Route;

Route::group(['middleware' => 'auth'], function () {

    Route::controller(LogistikController::class)->group(function () {
        //Master Logistik
        Route::get('log_equip_list', 'log_equip_list')->name('log.e.l');
        Route::get('log_equip_info/{log}', 'log_equip_info')->name('log.e.i');
        Route::get('log_equip_edit/{log}', 'log_equip_edit')->name('log.e.e');
        Route::get('log_equip_create/{log}', 'log_equip_create')->name('log.e.c');
        Route::post('log_equip_update', 'log_equip_update')->name('log.e.u');
        Route::post('log_equip_store', 'log_equip_store')->name('log.e.s');
    });

    // Stok Onderdil
    Route::controller(StokController::class)->group(function () {
        Route::get('onderdil_list', 'ond_list')->name('ond.l');
        Route::post('onderdil_store', 'ond_store')->name('ond.s');
        Route::post('onderdil_delete', 'ond_delete')->name('ond.d');
        Route::put('onderdil_update/{ond}', 'ond_update')->name('ond.u');
    });

    // Stok Liquid
    Route::controller(StokController::class)->group(function () {
        Route::get('liquid_list', 'liq_list')->name('liq.l');
        Route::post('liquid_store', 'liq_store')->name('liq.s');
        Route::post('liquid_delete', 'liq_delete')->name('liq.d');
        Route::put('liquid_update/{liq}', 'liq_update')->name('liq.u');
    });
});
