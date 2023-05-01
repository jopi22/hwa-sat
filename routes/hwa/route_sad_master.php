<?php

use App\Http\Controllers\MasterController;
use Illuminate\Support\Facades\Route;

Route::group(['middleware' => 'auth'], function () {

    Route::controller(MasterController::class)->group(function () {
        // Master
        Route::get('master_setting', 'master_generate')->name('mas.g');
        Route::get('master_karyawan', 'master_kar')->name('mas.k');
        Route::get('master_equipment', 'master_equip')->name('mas.e');
        // Master Generate
        Route::post('master_store', 'master_store')->name('mas.s');
        Route::post('master_store_new', 'master_store_new')->name('mas.s.n');
        Route::post('master_update', 'master_update')->name('mas.u');
        Route::post('kalender_absensi_generate', 'kal_generate')->name('kal.gen');
        Route::post('kar_generate', 'kar_generate')->name('kar.gen');
        Route::post('equip_generate', 'equip_generate')->name('equip.gen');
        Route::post('cat_generate', 'cat_generate')->name('cat.gen');
        Route::post('kar_gen_manual', 'kar_gen_manual')->name('kar.gen.m');
        Route::post('equip_gen_manual', 'equip_gen_manual')->name('equip.gen.m');
        Route::post('kal_gen_manual', 'kal_gen_manual')->name('kal.gen.m');
    });

});
