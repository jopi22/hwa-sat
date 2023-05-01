<?php

use App\Http\Controllers\primer_sad\EventController;
use App\Http\Controllers\primer_sad\MitraController;
use App\Http\Controllers\primer_sad\ResignController;
use App\Http\Controllers\primer_sad\SPController;
use App\Http\Controllers\primer_sad\TamuController;
use Illuminate\Support\Facades\Route;

Route::group(['middleware' => 'auth'], function () {
    // Surat Peringatan
    Route::controller(SPController::class)->group(function () {
        Route::get('surat_peringatan', 'sp_index')->name('sp.g');
        Route::post('sp_save', 'sp_save')->name('sp.s');
        Route::post('sp_delete', 'sp_delete')->name('sp.d');
    });

    // Surat Resign
    Route::controller(ResignController::class)->group(function () {
        Route::get('permohonan_resign', 'resign_index')->name('res.g');
        Route::get('resign_show/{resign_show}', 'resign_show')->name('res.i');
        Route::put('resign_tolak/{resign_tolak}', 'resign_tolak')->name('res.tol');
        Route::put('resign_terima/{resign_terima}', 'resign_terima')->name('res.ter');
        Route::post('resign_delete', 'resign_delete')->name('res.d');
    });

    // Event
    Route::controller(EventController::class)->group(function () {
        Route::get('event', 'event_index')->name('eve.g');
        Route::get('event_create', 'event_create')->name('eve.c');
        Route::post('event_save', 'event_save')->name('eve.s');
        Route::post('event_delete', 'event_delete')->name('eve.d');
        Route::get('event_show/{event_show}', 'event_show')->name('eve.i');
        Route::get('event_edit/{event_edit}', 'event_edit')->name('eve.e');
        Route::put('event_update/{event_edit}', 'event_update')->name('eve.u');
    });

    // Mutasi Karyawan
    Route::controller(MitraController::class)->group(function () {
        Route::get('mitra_perusahaan', 'mitra_index')->name('mit.g');
        Route::post('mitra_store', 'mitra_store')->name('mit.s');
        Route::post('mitra_delete', 'mitra_delete')->name('mit.d');
        Route::put('mitra_show', 'mitra_show')->name('mit.sh');
        Route::put('mitra_update/{mitra_update}', 'mitra_update')->name('mit.u');
    });
});
