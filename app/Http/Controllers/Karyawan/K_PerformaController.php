<?php

namespace App\Http\Controllers\Karyawan;

use App\Http\Controllers\Controller;
use App\Models\Absensi;
use App\Models\Adjustment;
use App\Models\EquipMaster;
use App\Models\Equipment;
use App\Models\Hwa;
use App\Models\Master;
use App\Models\Navigator;
use App\Models\PengajuanAbsensi;
use App\Models\Performa_hm;
use App\Models\Performa_ot;
use App\Models\Site;
use App\Models\SP;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class K_PerformaController extends Controller
{
    public function jadwal_kar()
    {
        return view('asset.karyawan.jadwal');
    }


    public function absensi_kar()
    {
        $periode = date('m-Y');
        $master = Master::where('status', 'Present')->first();
        $cek_master = Master::where('status', 'Present')->count();
        $absen = Absensi::where('karyawan', Auth::user()->id)->where('periode_id', $master->id)
            ->orderBy('id', 'ASC')
            ->get();
        $abs_h = Absensi::where('karyawan', Auth::user()->id)
            ->where('periode_id', $master->id)
            ->where('status', 1)
            ->count();
        $abs_s = Absensi::where('karyawan', Auth::user()->id)
            ->where('periode_id', $master->id)
            ->where('status', 3)
            ->count();
        $abs_stk = Absensi::where('karyawan', Auth::user()->id)
            ->where('periode_id', $master->id)
            ->where('status', 2)
            ->count();
        $abs_idk = Absensi::where('karyawan', Auth::user()->id)
            ->where('periode_id', $master->id)
            ->where('status', 4)
            ->count();
        $abs_itk = Absensi::where('karyawan', Auth::user()->id)
            ->where('periode_id', $master->id)
            ->where('status', 5)
            ->count();
        $abs_a = Absensi::where('karyawan', Auth::user()->id)
            ->where('periode_id', $master->id)
            ->where('status', 7)
            ->count();
        $abs_c = Absensi::where('karyawan', Auth::user()->id)
            ->where('periode_id', $master->id)
            ->where('status', 6)
            ->count();
        $abs_skt = $abs_s + $abs_stk;
        $abs_iz = $abs_idk + $abs_itk;

        return view('asset.karyawan.absensi', compact(
            'periode',
            'master',
            'cek_master',
            'absen',
            'abs_h',
            'abs_a',
            'abs_s',
            'abs_stk',
            'abs_idk',
            'abs_itk',
            'abs_c',
            'abs_skt',
            'abs_iz',
        ));
    }


    public function hm_kar()
    {
        $periode = date('m-Y');
        $master = Master::where('status', 'Present')->first();
        $cek_master = Master::where('status', 'Present')->count();
        $list = Performa_hm::where('kar_id', Auth::user()->id)
            ->orderBy('id', 'ASC')
            ->where('master_id', $master->id)
            ->get();
        $total_hm = Performa_hm::where('kar_id', Auth::user()->id)
            ->where('master_id', $master->id)
            ->sum('hm_total');
        return view('asset.karyawan.hm', compact(
            'periode',
            'master',
            'cek_master',
            'list',
            'total_hm',
        ));
    }


    public function rekap_penghasilan_kar()
    {
        $periode = date('m-Y');
        $master = Master::where('status', 'Present')->first();

        //Perhitungan Adjustmen
        $tunj = Adjustment::where('master_id', $master->id)
            ->where('kar_id', Auth::user()->id)
            ->where('kategori', 'Tunjangan')
            ->get();
        $pinj = Adjustment::where('master_id', $master->id)
            ->where('kar_id', Auth::user()->id)
            ->where('kategori', 'Pinjaman')
            ->get();
        $tunj_t = Adjustment::where('master_id', $master->id)
            ->where('kar_id', Auth::user()->id)
            ->where('kategori', 'Tunjangan')
            ->sum('nominal');
        $pinj_t = Adjustment::where('master_id', $master->id)
            ->where('kar_id', Auth::user()->id)
            ->where('kategori', 'Pinjaman')
            ->sum('nominal');
        $adjust_t = $tunj_t - $pinj_t;
        $adjust = number_format($adjust_t);

        //Perhitungan gaji pokok
        $abs_h = Absensi::where('karyawan', Auth::user()->id)
            ->where('periode_id', $master->id)
            ->where('status', 1)
            ->count();
        $abs_s = Absensi::where('karyawan', Auth::user()->id)
            ->where('periode_id', $master->id)
            ->where('status', 3)
            ->count();
        $abs_stk = Absensi::where('karyawan', Auth::user()->id)
            ->where('periode_id', $master->id)
            ->where('status', 2)
            ->count();
        $abs_idk = Absensi::where('karyawan', Auth::user()->id)
            ->where('periode_id', $master->id)
            ->where('status', 4)
            ->count();
        $abs_itk = Absensi::where('karyawan', Auth::user()->id)
            ->where('periode_id', $master->id)
            ->where('status', 5)
            ->count();
        $abs_a = Absensi::where('karyawan', Auth::user()->id)
            ->where('periode_id', $master->id)
            ->where('status', 7)
            ->count();
        $abs_c = Absensi::where('karyawan', Auth::user()->id)
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
        $gaji_pokok = $gaji_pokok_raw + $adjust_t;

        //Perhitungan Insentif
        $str_ins = number_format($master->insentif);
        $tot_hm = Performa_hm::where('master_id', $master->id)
            ->where('kar_id', Auth::user()->id)
            ->sum('hm_total');
        $tot_jam = Performa_hm::where('master_id', $master->id)
            ->where('kar_id', Auth::user()->id)
            ->sum('jam_total');
        $grand_tot = $tot_hm + $tot_jam;
        $ins = $grand_tot * $master->insentif;
        $insentif = number_format($ins);

        //Perhitungan Lemburan
        $str_lem = number_format($master->lemburan);
        $tot_jam_lemburan = Performa_ot::where('master_id', $master->id)
            ->where('kar_id', Auth::user()->id)
            ->sum('jam_total');
        $lem = $tot_jam_lemburan * $master->lemburan;
        $lemburan = number_format($lem);

        //Grand Total Gaji
        $ai_raw = $gaji_pokok_raw + $ins + $adjust_t;
        $al_raw = $gaji_pokok_raw + $lem + $adjust_t;
        $ai = number_format($ai_raw);
        $al = number_format($al_raw);
        $a = number_format($gaji_pokok);

        return view('asset.karyawan.rekap_penghasilan', compact(
            'adjust',
            'tunj',
            'pinj_t',
            'tunj_t',
            'adjust_t',
            'pinj',
            'str_harian',
            'str_bulanan',
            'str_ins',
            'str_lem',
            'a',
            'ai',
            'ai_raw',
            'al',
            'master',
            'tot_hm',
            'tot_jam',
            'grand_tot',
            'insentif',
            'ins',
            'lem',
            'tot_jam_lemburan',
            'lemburan',
            'gaji_pokok_raw',
            'gaji_pokok',
            'periode',
            'abs_h',
            'abs_s',
            'hari_valid',
            'abs_stk',
            'abs_i',
            'abs_a',
            'abs_c'
        ));
    }


    public function gaji_pokok()
    {
        $periode = date('m-Y');
        $master = Master::where('status', 'Present')->first();

        //Perhitungan gaji pokok
        $abs_h = Absensi::where('karyawan', Auth::user()->id)
            ->where('periode_id', $master->id)
            ->where('status', 1)
            ->count();
        $abs_s = Absensi::where('karyawan', Auth::user()->id)
            ->where('periode_id', $master->id)
            ->where('status', 3)
            ->count();
        $abs_stk = Absensi::where('karyawan', Auth::user()->id)
            ->where('periode_id', $master->id)
            ->where('status', 2)
            ->count();
        $abs_idk = Absensi::where('karyawan', Auth::user()->id)
            ->where('periode_id', $master->id)
            ->where('status', 4)
            ->count();
        $abs_itk = Absensi::where('karyawan', Auth::user()->id)
            ->where('periode_id', $master->id)
            ->where('status', 5)
            ->count();
        $abs_a = Absensi::where('karyawan', Auth::user()->id)
            ->where('periode_id', $master->id)
            ->where('status', 7)
            ->count();
        $abs_c = Absensi::where('karyawan', Auth::user()->id)
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
        // $gaji_pokok = $gaji_pokok_raw + $adjust_t;
        // $a = number_format($gaji_pokok);

        return view('asset.karyawan.gaji_pokok', compact(
            'str_harian',
            'str_bulanan',
            'master',
            'gaji_pokok_raw',
            'periode',
            'abs_h',
            'abs_s',
            'hari_valid',
            'abs_stk',
            'abs_i',
            'abs_a',
            'abs_c',
        ));
    }

    public function insentif()
    {
        $periode = date('m-Y');
        $master = Master::where('status', 'Present')->first();

        //Perhitungan Adjustmen
        $tunj = Adjustment::where('master_id', $master->id)
            ->where('kar_id', Auth::user()->id)
            ->where('kategori', 'Tunjangan')
            ->get();
        $pinj = Adjustment::where('master_id', $master->id)
            ->where('kar_id', Auth::user()->id)
            ->where('kategori', 'Pinjaman')
            ->get();
        $tunj_t = Adjustment::where('master_id', $master->id)
            ->where('kar_id', Auth::user()->id)
            ->where('kategori', 'Tunjangan')
            ->sum('nominal');
        $pinj_t = Adjustment::where('master_id', $master->id)
            ->where('kar_id', Auth::user()->id)
            ->where('kategori', 'Pinjaman')
            ->sum('nominal');
        $adjust_t = $tunj_t - $pinj_t;
        $adjust = number_format($adjust_t);

        //Perhitungan gaji pokok
        $abs_h = Absensi::where('karyawan', Auth::user()->id)
            ->where('periode_id', $master->id)
            ->where('status', 1)
            ->count();
        $abs_s = Absensi::where('karyawan', Auth::user()->id)
            ->where('periode_id', $master->id)
            ->where('status', 3)
            ->count();
        $abs_stk = Absensi::where('karyawan', Auth::user()->id)
            ->where('periode_id', $master->id)
            ->where('status', 2)
            ->count();
        $abs_idk = Absensi::where('karyawan', Auth::user()->id)
            ->where('periode_id', $master->id)
            ->where('status', 4)
            ->count();
        $abs_itk = Absensi::where('karyawan', Auth::user()->id)
            ->where('periode_id', $master->id)
            ->where('status', 5)
            ->count();
        $abs_a = Absensi::where('karyawan', Auth::user()->id)
            ->where('periode_id', $master->id)
            ->where('status', 7)
            ->count();
        $abs_c = Absensi::where('karyawan', Auth::user()->id)
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
        $gaji_pokok = $gaji_pokok_raw + $adjust_t;

        //Perhitungan Insentif
        $str_ins = number_format($master->insentif);
        $tot_hm = Performa_hm::where('master_id', $master->id)
            ->where('kar_id', Auth::user()->id)
            ->sum('hm_total');
        $tot_jam = Performa_hm::where('master_id', $master->id)
            ->where('kar_id', Auth::user()->id)
            ->sum('jam_total');
        $grand_tot = $tot_hm + $tot_jam;
        $ins = $grand_tot * $master->insentif;
        $insentif = number_format($ins);

        //Perhitungan Lemburan
        $str_lem = number_format($master->lemburan);
        $tot_jam_lemburan = Performa_ot::where('master_id', $master->id)
            ->where('kar_id', Auth::user()->id)
            ->sum('jam_total');
        $lem = $tot_jam_lemburan * $master->lemburan;
        $lemburan = number_format($lem);

        //Grand Total Gaji
        $ai_raw = $gaji_pokok_raw + $ins + $adjust_t;
        $al_raw = $gaji_pokok_raw + $lem + $adjust_t;
        $ai = number_format($ai_raw);
        $al = number_format($al_raw);
        $a = number_format($gaji_pokok);

        return view('asset.karyawan.insentif', compact(
            'adjust',
            'tunj',
            'pinj_t',
            'tunj_t',
            'adjust_t',
            'pinj',
            'str_harian',
            'str_bulanan',
            'str_ins',
            'str_lem',
            'a',
            'ai',
            'ai_raw',
            'al',
            'master',
            'tot_hm',
            'tot_jam',
            'grand_tot',
            'insentif',
            'ins',
            'lem',
            'tot_jam_lemburan',
            'lemburan',
            'gaji_pokok_raw',
            'gaji_pokok',
            'periode',
            'abs_h',
            'abs_s',
            'hari_valid',
            'abs_stk',
            'abs_i',
            'abs_a',
            'abs_c'
        ));
    }

    public function adjust_kar()
    {
        $periode = date('m-Y');
        $master = Master::where('status', 'Present')->first();

        //Perhitungan Adjustmen
        $tunj = Adjustment::where('master_id', $master->id)
            ->where('kar_id', Auth::user()->id)
            ->where('kategori', 'Tunjangan')
            ->get();
        $pinj = Adjustment::where('master_id', $master->id)
            ->where('kar_id', Auth::user()->id)
            ->where('kategori', 'Pinjaman')
            ->get();
        $tunj_t = Adjustment::where('master_id', $master->id)
            ->where('kar_id', Auth::user()->id)
            ->where('kategori', 'Tunjangan')
            ->sum('nominal');
        $pinj_t = Adjustment::where('master_id', $master->id)
            ->where('kar_id', Auth::user()->id)
            ->where('kategori', 'Pinjaman')
            ->sum('nominal');
        $adjust_t = $tunj_t - $pinj_t;
        $adjust = number_format($adjust_t);

        //Perhitungan gaji pokok
        $abs_h = Absensi::where('karyawan', Auth::user()->id)
            ->where('periode_id', $master->id)
            ->where('status', 1)
            ->count();
        $abs_s = Absensi::where('karyawan', Auth::user()->id)
            ->where('periode_id', $master->id)
            ->where('status', 3)
            ->count();
        $abs_stk = Absensi::where('karyawan', Auth::user()->id)
            ->where('periode_id', $master->id)
            ->where('status', 2)
            ->count();
        $abs_idk = Absensi::where('karyawan', Auth::user()->id)
            ->where('periode_id', $master->id)
            ->where('status', 4)
            ->count();
        $abs_itk = Absensi::where('karyawan', Auth::user()->id)
            ->where('periode_id', $master->id)
            ->where('status', 5)
            ->count();
        $abs_a = Absensi::where('karyawan', Auth::user()->id)
            ->where('periode_id', $master->id)
            ->where('status', 7)
            ->count();
        $abs_c = Absensi::where('karyawan', Auth::user()->id)
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
        $gaji_pokok = $gaji_pokok_raw + $adjust_t;

        //Perhitungan Insentif
        $str_ins = number_format($master->insentif);
        $tot_hm = Performa_hm::where('master_id', $master->id)
            ->where('kar_id', Auth::user()->id)
            ->sum('hm_total');
        $tot_jam = Performa_hm::where('master_id', $master->id)
            ->where('kar_id', Auth::user()->id)
            ->sum('jam_total');
        $grand_tot = $tot_hm + $tot_jam;
        $ins = $grand_tot * $master->insentif;
        $insentif = number_format($ins);

        //Perhitungan Lemburan
        $str_lem = number_format($master->lemburan);
        $tot_jam_lemburan = Performa_ot::where('master_id', $master->id)
            ->where('kar_id', Auth::user()->id)
            ->sum('jam_total');
        $lem = $tot_jam_lemburan * $master->lemburan;
        $lemburan = number_format($lem);

        //Grand Total Gaji
        $ai_raw = $gaji_pokok_raw + $ins + $adjust_t;
        $al_raw = $gaji_pokok_raw + $lem + $adjust_t;
        $ai = number_format($ai_raw);
        $al = number_format($al_raw);
        $a = number_format($gaji_pokok);

        return view('asset.karyawan.adjust_kar', compact(
            'adjust',
            'tunj',
            'pinj_t',
            'tunj_t',
            'adjust_t',
            'pinj',
            'str_harian',
            'str_bulanan',
            'str_ins',
            'str_lem',
            'a',
            'ai',
            'ai_raw',
            'al',
            'master',
            'tot_hm',
            'tot_jam',
            'grand_tot',
            'insentif',
            'ins',
            'lem',
            'tot_jam_lemburan',
            'lemburan',
            'gaji_pokok_raw',
            'gaji_pokok',
            'periode',
            'abs_h',
            'abs_s',
            'hari_valid',
            'abs_stk',
            'abs_i',
            'abs_a',
            'abs_c'
        ));
    }

}
