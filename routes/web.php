<?php

use App\Http\Controllers\HwaController;
use App\Http\Controllers\SettingController;
use Illuminate\Support\Facades\Route;

include 'hwa/route_sad_kar.php';
include 'hwa/route_sad_abs.php';
include 'hwa/route_sad_pfm.php';
include 'hwa/route_sad_log.php';
include 'hwa/route_sad_keu.php';
include 'hwa/route_sad_equip.php';
include 'hwa/route_sad_master.php';
include 'hwa/route_sad_print.php';
include 'hwa/route_sad_akt.php';
include 'hwa/route_sad_arsip.php';
include 'hwa/route_sad_rekap.php';
include 'hwa/route_sad_arsip_master.php';

Route::get('/', function () {
    return view('auth.login');
});

Auth::routes();

Route::group(['middleware' => 'auth'], function () {


    Route::controller(HwaController::class)->group(function () {
        // Dashboard
        Route::get('/', 'dashboard')->name('dash');
        //HWA Profile
        Route::get('hwa_profil', 'hwaProfil')->name('hwa.g');
        Route::get('hwa_edit_profil', 'hwaEdit')->name('hwa.e');
        Route::put('hwa_Update', 'hwaUpdate')->name('hwa.u');
    });
});

Route::controller(HwaController::class)->group(function () {
    // Hwa
    Route::get('hwa_profil', 'hwaProfil')->name('hwa.g');
    Route::get('hwa_edit_profil', 'hwaEdit')->name('hwa.e');
    Route::put('hwa_Update', 'hwaUpdate')->name('hwa.u');
    Route::get('hwa_struktur', 'hwa_struktur')->name('hwa.s');
    Route::put('hwa_struktur_edit', 'hwa_struktur_update')->name('hwa.s.u');
    Route::get('hwa_peraturan', 'hwa_peraturan')->name('hwa.p');
    Route::put('hwa_peraturan_edit', 'hwa_peraturan_update')->name('hwa.p.u');
});

Route::controller(SettingController::class)->group(function () {
    //Navigator
    Route::get('navigator', 'navigator')->name('nav.g');
    Route::post('navigator_save', 'navigator_save')->name('nav.s');
    Route::put('navigator_save/{nav}', 'navigator_update')->name('nav.u');
    Route::delete('navigator_save/{nav}', 'navigator_delete')->name('nav.d');
});


Route::get('add-to-log', 'App\Http\Controllers\LogActivityController@myTestAddToLog');
Route::get('log-activity', 'App\Http\Controllers\LogActivityController@logActivity');
