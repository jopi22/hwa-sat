<?php

use App\Http\Controllers\primer_sad\AkunController;
use App\Http\Controllers\primer_sad\BankController;
use App\Http\Controllers\primer_sad\JabatanController;
use App\Http\Controllers\primer_sad\KaryawanController;
use App\Http\Controllers\primer_sad\KimperController;
use App\Http\Controllers\primer_sad\MutasiController;
use Illuminate\Support\Facades\Route;

Route::group(['middleware' => 'auth'], function () {

    //Karyawan
    Route::controller(KaryawanController::class)->group(function () {
        Route::get('karyawan_index', 'kar_index')->name('kar.g');
        Route::get('tambah_karyawan', 'kar_create')->name('kar.c');
        Route::post('karyawan_store', 'kar_store')->name('kar.s');
        Route::get('info_karyawan/{kar}', 'kar_info')->name('kar.i');
        Route::get('karyawan_print_pdf/{kar}', 'kar_print_pdf')->name('kar.p.pdf');
        Route::get('karyawan_print_excel/{kar}', 'kar_print_excel')->name('kar.p.excel');
        Route::get('info_karyawan_print_pdf/{kar}', 'kar_info_print_pdf')->name('kar.i.p.pdf');
        Route::get('edit_data_karyawan/{kar}', 'kar_edit')->name('kar.e');
        Route::put('karyawan_update/{kar}', 'kar_update')->name('kar.u');
        Route::put('karyawan_delete/{kar}', 'kar_delete')->name('kar.d');
    });

    //Mutasi
    Route::controller(MutasiController::class)->group(function () {
        Route::get('mutasi_index', 'mutasi_index')->name('mut.g');
        Route::get('mutasi_print/{mut}', 'mutasi_print')->name('mut.p.pdf');
        Route::put('mutasi_store/{site}', 'mutasi_store')->name('mut.s');
    });

    //Kimper
    Route::controller(KimperController::class)->group(function () {
        Route::get('kimper_index', 'kimper_index')->name('kim.g');
        Route::get('kimper_print/{kim}', 'kimper_print')->name('kim.p.pdf');
        Route::put('kimper_update/{kim}', 'kimper_update')->name('kim.u');
    });

    //Akun
    Route::controller(AkunController::class)->group(function () {
        Route::get('setting_akun', 'akunGet')->name('akun.g');
        Route::put('new_akun_aktif/{akun}', 'new_aktif')->name('akun.n.a');
        Route::put('akun_sakelar/{akun}', 'akun_sakelar')->name('akun.sakelar');
        Route::put('akun_update/{akun}', 'akun_update')->name('akun.u');
    });

    //Jabatan
    Route::controller(JabatanController::class)->group(function () {
        Route::get('jabatan', 'jab_index')->name('jab.g');
        Route::post('ajax_jab_store', 'jab_store');
        Route::get('ajax_jab_show/{jab}', 'jab_show');
        Route::put('ajax_jab_update/{jab}', 'jab_update');
        Route::delete('ajax_jab_delete/{jab}', 'jab_delete');
    });

    //Bank
    Route::controller(BankController::class)->group(function () {
        Route::get('bank', 'bank_index')->name('bank.g');
        Route::post('ajax_bank_store', 'bank_store');
        Route::get('ajax_bank_show/{bank}', 'bank_show');
        Route::put('ajax_bank_update/{bank}', 'bank_update');
        Route::delete('ajax_bank_delete/{bank}', 'bank_delete');
    });
});
