<?php

namespace App\Http\Controllers\master_sad\keuangan;

use App\Http\Controllers\Controller;
use App\Models\Absensi;
use App\Models\KarMaster;
use App\Models\Master;
use App\Models\Performa_hm;
use App\Models\Performa_ot;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Crypt;

class IncomeController extends Controller
{
    public function gaji_list()
    {
        $periode = date('m-Y');
        $master = Master::where('status', 'Present')->first();
        $kar_list = KarMaster::where('master_id', $master->id)
            ->get();
        $cek_kar = KarMaster::where('master_id', $master->id)
            ->count();
        $jabatan = User::select('jabatan')->distinct()->get();
        //Perhitungan
        $hadir = Absensi::where('periode_id', $master->id)->where('status', 1)->count();
        $sakit = Absensi::where('periode_id', $master->id)->where('status', 3)->count();
        $hari_valid = $hadir + $sakit;
        $pok = $master->pokok;
        $str_bulanan = number_format($pok);

        $hitung = $master->pokok / $master->total;
        $str_harian = number_format($hitung);
        $pokok = $hitung * $hari_valid;


        $hm_total = Performa_hm::where('master_id', $master->id)->sum('hm_total');
        $insentif = $hm_total * $master->insentif;
        $jam_total = Performa_ot::where('master_id', $master->id)->sum('jam_total');
        $lemburan = $jam_total * $master->lemburan;
        $ins_lem = $insentif + $lemburan;
        $grand = $pokok + $insentif + $lemburan;
        return view('author.sad.gaji.gaji_list', compact('jabatan','cek_kar', 'grand', 'insentif', 'pokok', 'lemburan', 'master', 'periode', 'kar_list'));
    }


    public function gaji_info($id)
    {
        $periode = date('m-Y');
        $master = Master::where('status', 'Present')->first();
        $decryptID = Crypt::decryptString($id);
        $kar = User::Find($decryptID);
        $kar_m = KarMaster::where('master_id', $master->id)
            ->where('kar_id', $decryptID)->first();
        $kar_list = KarMaster::where('master_id', $master->id)
            ->get();
        $cek_kar = KarMaster::where('master_id', $master->id)
            ->count();
        //Perhitungan gaji pokok
        $abs_h = Absensi::where('karyawan', $decryptID)
            ->where('periode_id', $master->id)
            ->where('status', 1)
            ->count();
        $abs_s = Absensi::where('karyawan', $decryptID)
            ->where('periode_id', $master->id)
            ->where('status', 3)
            ->count();
        $abs_stk = Absensi::where('karyawan', $decryptID)
            ->where('periode_id', $master->id)
            ->where('status', 2)
            ->count();
        $abs_idk = Absensi::where('karyawan', $decryptID)
            ->where('periode_id', $master->id)
            ->where('status', 4)
            ->count();
        $abs_itk = Absensi::where('karyawan', $decryptID)
            ->where('periode_id', $master->id)
            ->where('status', 5)
            ->count();
        $abs_a = Absensi::where('karyawan', $decryptID)
            ->where('periode_id', $master->id)
            ->where('status', 7)
            ->count();
        $abs_c = Absensi::where('karyawan', $decryptID)
            ->where('periode_id', $master->id)
            ->where('status', 6)
            ->count();
        $abs_i = $abs_idk + $abs_itk;
        $hari_valid = $abs_h + $abs_s;
        $pok = $master->pokok;
        $str_bulanan = number_format($pok);

        $hitung = $master->pokok / $master->total;
        $str_harian = number_format($hitung);
        $gaji_pokok_raw = $hitung * $hari_valid;



        //Perhitungan Insentif
        $str_ins = number_format($master->insentif);
        $tot_hm = Performa_hm::where('master_id', $master->id)
            ->where('kar_id', $decryptID)
            ->sum('hm_total');
        $tot_jam = Performa_hm::where('master_id', $master->id)
            ->where('kar_id', $decryptID)
            ->sum('jam_total');
        $grand_tot = $tot_hm + $tot_jam;
        $ins = $grand_tot * $master->insentif;
        $insentif = number_format($ins);

        //Perhitungan Lemburan
        $str_lem = number_format($master->lemburan);
        $tot_jam_lemburan = Performa_ot::where('master_id', $master->id)
            ->where('kar_id', $decryptID)
            ->sum('jam_total');
        $lem = $tot_jam_lemburan * $master->lemburan;
        $lemburan = number_format($lem);


        //Grand Total Gaji
        $ai_raw = $gaji_pokok_raw + $ins;
        $al_raw = $gaji_pokok_raw + $lem;
        $ai = number_format($ai_raw);
        $al = number_format($al_raw);
        $a = number_format($gaji_pokok_raw);


        return view('asset.sad.gaji.gaji_info', compact('kar_list','cek_kar', 'str_harian', 'str_bulanan','str_ins','str_lem', 'a','ai','al', 'master', 'tot_hm', 'tot_jam', 'grand_tot', 'insentif', 'kar_m', 'tot_jam_lemburan', 'lemburan', 'gaji_pokok_raw', 'periode', 'kar', 'abs_h', 'abs_s', 'hari_valid', 'abs_stk', 'abs_i', 'abs_a', 'abs_c'));
    }
}
