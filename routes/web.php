<?php

use App\Http\Controllers\HomeController;
use App\Http\Controllers\HwaController;
use App\Http\Controllers\pfm\PerformaHMController;
use Illuminate\Support\Facades\Route;

include 'hwa/route_sad_kar.php';
include 'hwa/route_sad_abs.php';
include 'hwa/route_sad_pfm.php';
include 'hwa/route_sad_log.php';
include 'hwa/route_sad_keu.php';
include 'hwa/route_sad_equip.php';
include 'hwa/route_sad_master.php';
include 'hwa/route_sad_print.php';

Route::get('/', function () {
    return view('auth.login');
});

Auth::routes();

Route::group(['middleware' => 'auth'], function () {


    Route::controller(HwaController::class)->group(function () {
        // Dashboard
        Route::get('/', 'superadmin')->name('dash');
        //HWA Profile
        Route::get('hwa_profil', 'hwaProfil')->name('hwa.g');
        Route::get('hwa_edit_profil', 'hwaEdit')->name('hwa.e');
        Route::put('hwa_Update', 'hwaUpdate')->name('hwa.u');
    });
});

Route::controller(HwaController::class)->group(function () {
    Route::get('hwa_profil', 'hwaProfil')->name('hwa.g');
    Route::get('hwa_edit_profil', 'hwaEdit')->name('hwa.e');
    Route::put('hwa_Update', 'hwaUpdate')->name('hwa.u');
});


Route::get('add-to-log', 'App\Http\Controllers\LogActivityController@myTestAddToLog');
Route::get('log-activity', 'App\Http\Controllers\LogActivityController@logActivity');
