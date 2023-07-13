<?php

use App\Http\Controllers\master_sad\keuangan\CateringController;
use App\Http\Controllers\master_sad\keuangan\IncomeController;
use App\Http\Controllers\master_sad\keuangan\KasController;
use Illuminate\Support\Facades\Route;

Route::group(['middleware' => 'auth'], function () {

    Route::controller(KasController::class)->group(function () {
        // Kas
        Route::get('kas_list', 'kas_list')->name('kas.l');
        Route::get('kas_excel/{kas}', 'kas_excel')->name('kas.excel');
        Route::post('kas_store', 'kas_store')->name('kas.s');
        Route::post('kas_update', 'kas_update')->name('kas.u');
        Route::post('kas_delete', 'kas_delete')->name('kas.d');
    });

    Route::controller(IncomeController::class)->group(function () {
        // Gaji
        Route::get('gaji_list', 'gaji_list')->name('g.l');
        Route::get('hm_sewa', 'hm_sewa')->name('hm.sewa');
        Route::get('unit_sewa', 'unit_sewa')->name('unit.sewa');
        Route::get('unit_sewa/{hm}', 'unit_sewa_info')->name('unit.sewa.i');
        // Adjustment
        Route::get('adjust', 'adjust')->name('adjust');
        Route::post('adjust_store', 'adjust_store')->name('adjust.s');
        Route::put('adjust_update/{adjust}', 'adjust_update')->name('adjust.u');
        Route::delete('adjust_delete/{adjust}', 'adjust_delete')->name('adjust.d');
        Route::get('gaji_info/{gaji}', 'gaji_info')->name('g.i');
    });

    Route::controller(CateringController::class)->group(function () {
        // Catering
        Route::get('cat_list', 'cat_list')->name('cat.l');
        Route::get('cat_excel/{cat}', 'cat_excel')->name('cat.excel');
        Route::get('cat_create', 'cat_create')->name('cat.c');
        Route::post('cat_store', 'cat_store')->name('cat.s');
        Route::post('cat_update', 'cat_update')->name('cat.u');
        Route::post('cat_delete', 'cat_delete')->name('cat.d');
        Route::post('cat_setting', 'cat_setting')->name('cat.set');
        Route::post('cat_refresh', 'cat_refresh')->name('cat.r');
    });

});
