<?php

use App\Http\Controllers\primer_sad\ArsipMasterController;
use App\Http\Controllers\primer_sad\CatatanController;
use App\Http\Controllers\primer_sad\DokumenController;
use App\Http\Controllers\primer_sad\EventController;
use App\Http\Controllers\primer_sad\GaleriController;
use App\Http\Controllers\primer_sad\MitraController;
use App\Http\Controllers\primer_sad\ResignController;
use App\Http\Controllers\primer_sad\SPController;
use App\Http\Controllers\primer_sad\TamuController;
use Illuminate\Support\Facades\Route;

Route::group(['middleware' => 'auth'], function () {
    // Dokumen
    Route::controller(DokumenController::class)->group(function () {
        Route::get('dokumen_index', 'dok_index')->name('dok.g');
        Route::post('dokumen_save', 'dok_save')->name('dok.s');
        Route::post('kategori_save', 'kat_save')->name('kat.s');
        Route::post('dok_delete', 'dok_delete')->name('dok.d');
    });

   // Catatan
    Route::controller(CatatanController::class)->group(function () {
        Route::get('catatan_index', 'catatan_index')->name('catat.g');
        Route::get('catatan_create', 'catatan_create')->name('catat.c');
        Route::get('catatan_info/{catatan_info}', 'catatan_info')->name('catat.i');
        Route::get('catatan_edit/{catatan_edit}', 'catatan_edit')->name('catat.e');
        Route::put('catatan_update/{catatan_update}', 'catatan_update')->name('catat.u');
        Route::post('catatan_save', 'catatan_save')->name('catat.s');
        Route::post('kategori_save', 'kat_save')->name('kat.s');
        Route::post('catatan_delete', 'catatan_delete')->name('catat.d');
    });

    // Galeri
    Route::controller(GaleriController::class)->group(function () {
        Route::get('galeri', 'galeri_index')->name('gal.g');
        Route::post('galeri_save', 'gal_save')->name('gal.s');
        Route::post('foto_save', 'foto_save')->name('foto.s');
        Route::get('galeri_info/{galeri_info}', 'galeri_info')->name('gal.i');
        Route::post('foto_delete', 'foto_delete')->name('foto.d');
        Route::post('galeri_delete', 'galeri_delete')->name('gal.d');
    });
});
