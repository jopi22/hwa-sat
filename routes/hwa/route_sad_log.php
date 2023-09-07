<?php

use App\Http\Controllers\master_sad\logistik\LogistikController;
use App\Http\Controllers\primer_sad\StokController;
use App\Http\Controllers\primer_sad\StokOpnameController;
use Illuminate\Support\Facades\Route;

Route::group(['middleware' => 'auth'], function () {

    Route::controller(StokOpnameController::class)->group(function () {
        // Barang
        Route::get('barang', 'barang')->name('barang');
        Route::post('barang_store', 'barang_store')->name('barang.s');
        Route::put('barang_delete/{barang}', 'barang_delete')->name('barang.d');
        Route::put('barang_update/{barang}', 'barang_update')->name('barang.u');
        Route::get('barang_excel/{barang}', 'barang_excel')->name('barang.excel');
    });

    Route::controller(LogistikController::class)->group(function () {
        // Pemakaian
        Route::get('pemakaian_barang', 'pemakaian_barang')->name('pemakaian.barang');
        Route::post('pemakaian_store', 'pemakaian_store')->name('pemakaian.s');
        Route::delete('pemakaian_delete/{barang}', 'pemakaian_delete')->name('pemakaian.d');
        Route::put('pemakaian_update/{pemakaian}', 'pemakaian_update')->name('pemakaian.u');
        Route::get('pemakaian_excel/{barang}', 'pemakaian_excel')->name('pemakaian.excel');

        // Pemesanan Barang
        Route::get('pemesanan_barang', 'pemesanan_barang')->name('pemesanan.barang');
        Route::get('pemesanan_list/{pemesanan}', 'pemesanan_list')->name('pemesanan.l');
        Route::get('pemesanan_list_info/{pemesanan}', 'pemesanan_list_info')->name('pemesanan.l.i');
        Route::post('pemesanan_list_store', 'pemesanan_list_store')->name('pemesanan.l.s');
        Route::post('pemesanan_store', 'pemesanan_store')->name('pemesanan.s');
        Route::delete('pemesanan_delete/{pemesanan}', 'pemesanan_delete')->name('pemesanan.d');
        Route::put('pemesanan_update/{pemesanan}', 'pemesanan_update')->name('pemesanan.u');
        Route::get('pemakaian_excel/{pemesanan}', 'pemakaian_excel')->name('pemakaian.excel');
    });
});
