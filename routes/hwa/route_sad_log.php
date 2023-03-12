<?php

use App\Http\Controllers\master_sad\logistik\LogistikController;
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
});
