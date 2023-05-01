<?php

use App\Http\Controllers\master_sad\keuangan\CateringController;
use App\Http\Controllers\master_sad\keuangan\IncomeController;
use App\Http\Controllers\master_sad\keuangan\KasController;
use Illuminate\Support\Facades\Route;

Route::group(['middleware' => 'auth'], function () {

    Route::controller(KasController::class)->group(function () {
        // Kas
        Route::get('kas_list', 'kas_list')->name('kas.l');
        Route::post('kas_store', 'kas_store')->name('kas.s');
        Route::post('kas_update', 'kas_update')->name('kas.u');
        Route::post('kas_delete', 'kas_delete')->name('kas.d');
    });

    Route::controller(IncomeController::class)->group(function () {
        // Gaji
        Route::get('gaji_list', 'gaji_list')->name('g.l');
        Route::get('gaji_info/{gaji}', 'gaji_info')->name('g.i');
    });

    Route::controller(CateringController::class)->group(function () {
        // Catering
        Route::get('cat_list', 'cat_list')->name('cat.l');
        Route::get('cat_create', 'cat_create')->name('cat.c');
        Route::post('cat_store', 'cat_store')->name('cat.s');
        Route::post('cat_update', 'cat_update')->name('cat.u');
        Route::post('cat_delete', 'cat_delete')->name('cat.d');
        Route::post('cat_setting', 'cat_setting')->name('cat.set');
        Route::post('cat_refresh', 'cat_refresh')->name('cat.r');
    });

});
