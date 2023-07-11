<?php

use App\Http\Controllers\primer_sad\EquipmentController;
use Illuminate\Support\Facades\Route;

Route::group(['middleware' => 'auth'], function () {

    //Equipment
    Route::controller(EquipmentController::class)->group(function () {
        // Equipment
        Route::get('heavy_index', 'heavy_index')->name('heavy.l');
        Route::get('heavy_create', 'heavy_create')->name('heavy.c');
        Route::get('heavy_print_pdf/{heavy}', 'heavy_print_pdf')->name('heavy.p.pdf');
        Route::get('heavy_print_excel/{heavy}', 'heavy_print_excel')->name('heavy.p.excel');
        Route::get('vehicle_print_pdf/{vehicle}', 'vehicle_print_pdf')->name('vehicle.p.pdf');
        Route::get('vehicle_print_excel/{vehicle}', 'vehicle_print_excel')->name('vehicle.p.excel');
        Route::get('support_print_pdf/{support}', 'support_print_pdf')->name('support.p.pdf');
        Route::get('support_print_excel/{support}', 'support_print_excel')->name('support.p.excel');
        Route::get('vehicle_index', 'vehicle_index')->name('vehicle.l');
        Route::get('vehicle_create', 'vehicle_create')->name('vehicle.c');
        Route::get('support_index', 'support_index')->name('support.l');
        Route::get('support_create', 'support_create')->name('support.c');
        Route::post('equip_store', 'equip_store')->name('equip.s');
        Route::get('ajax_equip_info/{equip}', 'equip_info')->name('equip.i');
        Route::get('ajax_equip_show/{equip}', 'equip_show');
        Route::put('ajax_equip_update/{equip}', 'equip_update')->name('equip.u');
        Route::put('ajax_equip_delete/{equip}', 'equip_delete')->name('equip.d');
        Route::put('equip_sakelar/{equip}', 'equip_sakelar')->name('equip.sakelar');
    });

});
