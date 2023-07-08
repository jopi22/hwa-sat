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

    // Barang Masuk
    Route::controller(LogistikController::class)->group(function () {
        Route::get('log_masuk_list', 'log_m_list')->name('log.m');
        Route::get('log_masuk_create', 'log_m_create')->name('log.m.c');
        Route::post('log_masuk_store', 'log_m_store')->name('log.m.s');
        Route::post('log_masuk_delete', 'log_m_delete')->name('log.m.d');
        Route::put('log_masuk_update/{log}', 'log_m_update')->name('log.m.u');
    });


    // Stok Onderdil
    Route::controller(StokController::class)->group(function () {
        Route::get('onderdil_list', 'ond_list')->name('ond.l');
        Route::post('onderdil_store', 'ond_store')->name('ond.s');
        Route::post('onderdil_delete', 'ond_delete')->name('ond.d');
        Route::post('verifikasi_update', 'verif_update')->name('verif.u');
        Route::put('onderdil_update/{ond}', 'ond_update')->name('ond.u');
        Route::get('verifikasi_info/{ond}', 'verif_info')->name('verif.i');
    });

    // Stok Liquid
    Route::controller(StokController::class)->group(function () {
        Route::get('liquid_list', 'liq_list')->name('liq.l');
        Route::post('liquid_store', 'liq_store')->name('liq.s');
        Route::post('liquid_delete', 'liq_delete')->name('liq.d');
        Route::put('liquid_update/{liq}', 'liq_update')->name('liq.u');
    });
});
