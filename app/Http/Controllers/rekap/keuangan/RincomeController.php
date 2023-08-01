<?php

namespace App\Http\Controllers\rekap\keuangan;

use App\Http\Controllers\Controller;
use App\Models\Absensi;
use App\Models\Adjustment;
use App\Models\Dedicated;
use App\Models\EquipMaster;
use App\Models\Equipment;
use App\Models\KarMaster;
use App\Models\Lokasi;
use App\Models\Master;
use App\Models\Navigator;
use App\Models\Performa_hm;
use App\Models\Performa_ot;
use App\Models\Shift;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Crypt;

class RincomeController extends Controller
{
    public function gaji_list()
    {
        $nav = Navigator::where('karyawan', Auth::user()->id)->get();
        $periode = date('m-Y');
        $master = Master::where('status', 'Validasi')->first();
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
        return view('author.sad.rekap.gaji.gaji_list', compact('jabatan', 'cek_kar', 'nav', 'grand', 'insentif', 'pokok', 'lemburan', 'master', 'periode', 'kar_list'));
    }

    public function gaji_info($id)
    {
        $nav = Navigator::where('karyawan', Auth::user()->id)->get();
        $periode = date('m-Y');
        $master = Master::where('status', 'Validasi')->first();
        $decryptID = Crypt::decryptString($id);
        $kar = User::Find($decryptID);
        $kar_m = KarMaster::where('master_id', $master->id)
            ->where('kar_id', $decryptID)->first();
        $kar_list = KarMaster::where('master_id', $master->id)
            ->get();
        $cek_kar = KarMaster::where('master_id', $master->id)
            ->count();
        //Perhitungan Adjustmen
        $tunj = Adjustment::where('master_id', $master->id)
            ->where('kar_id', $decryptID)
            ->where('kategori', 'Tunjangan')
            ->get();
        $pinj = Adjustment::where('master_id', $master->id)
            ->where('kar_id', $decryptID)
            ->where('kategori', 'Pinjaman')
            ->get();
        $tunj_t = Adjustment::where('master_id', $master->id)
            ->where('kar_id', $decryptID)
            ->where('kategori', 'Tunjangan')
            ->sum('nominal');
        $pinj_t = Adjustment::where('master_id', $master->id)
            ->where('kar_id', $decryptID)
            ->where('kategori', 'Pinjaman')
            ->sum('nominal');
        $adjust_t = $tunj_t - $pinj_t;
        $adjust = number_format($adjust_t);

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
        $gaji_pokok = $gaji_pokok_raw + $adjust_t;

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
        $ai_raw = $gaji_pokok_raw + $ins + $adjust_t;
        $al_raw = $gaji_pokok_raw + $lem + $adjust_t;
        $ai = number_format($ai_raw);
        $al = number_format($al_raw);
        $a = number_format($gaji_pokok);

        return view('asset.sad.rekap.gaji.gaji_info', compact(
            'kar_list',
            'adjust',
            'tunj',
            'pinj_t',
            'tunj_t',
            'adjust_t',
            'pinj',
            'cek_kar',
            'nav',
            'ai_raw',
            'al_raw',
            'str_harian',
            'str_bulanan',
            'str_ins',
            'str_lem',
            'a',
            'ai',
            'al',
            'ins',
            'lem',
            'master',
            'tot_hm',
            'tot_jam',
            'grand_tot',
            'insentif',
            'kar_m',
            'tot_jam_lemburan',
            'lemburan',
            'gaji_pokok_raw',
            'gaji_pokok',
            'periode',
            'kar',
            'abs_h',
            'abs_s',
            'hari_valid',
            'abs_stk',
            'abs_i',
            'abs_a',
            'abs_c'
        ));
    }

    public function adjust()
    {
        $nav = Navigator::where('karyawan', Auth::user()->id)->get();
        $periode = date('m-Y');
        $master = Master::where('status', 'Validasi')->first();
        $adjust = Adjustment::where('master_id', $master->id)->get();
        $cek = Adjustment::where('master_id', $master->id)->count();
        $kar = KarMaster::where('master_id', $master->id)->get();
        return view('author.sad.rekap.kas.adjust', compact('adjust', 'nav', 'periode', 'master', 'cek', 'kar'));
    }


    public function hm_sewa()
    {
        $nav = Navigator::where('karyawan', Auth::user()->id)->get();
        $periode = date('m-Y');
        $master = Master::where('status', 'Validasi')->first();
        $kar_list = KarMaster::where('master_id', $master->id)
            ->where('tipe_gaji', 'AI')
            ->get();
        $cek_perform = Performa_hm::where('master_id', $master->id)
            ->count();
        $perform_list = Performa_hm::where('master_id', $master->id)
            ->get();
        $hitung_list = Performa_hm::where('master_id', $master->id)
            ->count();
        $total_hm = Performa_hm::where('master_id', $master->id)
            ->sum('hm_total');
        $equip = EquipMaster::where('master_id', $master->id)
            ->get();
        $equipment = Equipment::where('status', 'Aktif')->get();
        $lok = Lokasi::all();
        $dedi = Dedicated::all();
        $kar = User::where('status', '<>', 'Hidden')
            ->where('status', '<>', 'Delete')
            ->get();
        $shift = Shift::all();
        //Perhitungan
        $t_pot = Performa_hm::where('master_id', $master->id)
            ->sum('hm_pot');
        $t_hm = Performa_hm::where('master_id', $master->id)
            ->sum('hm_total');
        $t_jam = Performa_hm::where('master_id', $master->id)
            ->sum('jam_total');
        $hm_grand = $t_hm + $t_jam - $t_pot;
        $str_sewa = $master->biaya_sewa;
        $tot_sewa = $hm_grand * $str_sewa;
        return view('author.sad.rekap.kas.hm_sewa', compact('t_pot', 'str_sewa', 't_hm', 't_jam', 'hm_grand', 'tot_sewa', 'cek_perform', 'nav', 'total_hm', 'kar_list', 'hitung_list', 'perform_list', 'equip', 'equipment', 'kar', 'lok', 'dedi', 'shift', 'master', 'periode'));
    }


    public function unit_sewa()
    {
        $nav = Navigator::where('karyawan', Auth::user()->id)->get();
        $periode = date('m-Y');
        $master = Master::where('status', 'Validasi')->first();
        $kar_list = KarMaster::where('master_id', $master->id)
            ->where('tipe_gaji', 'AI')
            ->get();
        $cek_perform = Performa_hm::where('master_id', $master->id)
            ->count();
        $perform_list = Performa_hm::where('master_id', $master->id)
            ->get();
        $hitung_list = Performa_hm::where('master_id', $master->id)
            ->count();
        $total_hm = Performa_hm::where('master_id', $master->id)
            ->sum('hm_total');
        $equip = EquipMaster::where('master_id', $master->id)
            ->get();
        $equipment = Equipment::where('status', 'Aktif')->get();
        $lok = Lokasi::all();
        $dedi = Dedicated::all();
        $kar = User::where('status', '<>', 'Hidden')
            ->where('status', '<>', 'Delete')
            ->get();
        $shift = Shift::all();
        return view('author.sad.rekap.kas.unit_sewa', compact('cek_perform', 'nav', 'total_hm', 'kar_list', 'hitung_list', 'perform_list', 'equip', 'equipment', 'kar', 'lok', 'dedi', 'shift', 'master', 'periode'));
    }

    public function unit_sewa_info($id)
    {
        $nav = Navigator::where('karyawan', Auth::user()->id)->get();
        $decryptID = Crypt::decryptString($id);
        $periode = date('m-Y');
        $master = Master::where('status', 'Validasi')->first();
        $equip_list = EquipMaster::where('master_id', $master->id)
            ->get();
        $equip_m = EquipMaster::where('equip_id', $decryptID)->first();
        $kar_filter = Performa_hm::select('kar_id')
            ->distinct()
            ->where('equip_id', $decryptID)
            ->where('master_id', $master->id)->get();
        $list = Performa_hm::where('equip_id', $decryptID)
            ->where('master_id', $master->id)
            ->get();
        $cek = Performa_hm::where('equip_id', $decryptID)
            ->where('master_id', $master->id)
            ->count();
        $cek_hm = Performa_hm::where('equip_id', $decryptID)
            ->where('master_id', $master->id)
            ->where('tipe', 'HM')
            ->count();
        $cek_manual = Performa_hm::where('equip_id', $decryptID)
            ->where('master_id', $master->id)
            ->where('tipe', 'Manual')
            ->count();
        $sum = Performa_hm::where('equip_id', $decryptID)
            ->where('master_id', $master->id)
            ->sum('hm_total');
        $max = Performa_hm::where('equip_id', $decryptID)
            ->where('master_id', $master->id)
            ->min('hm_awal');
        //Perhitungan
        $hm_total = $equip_m->total_hm;
        $hm_jam = $equip_m->total_jam;
        $hm_pot = $equip_m->total_pot;
        $hm_grand = $hm_total + $hm_jam - $hm_pot;
        $str_sewa = $master->biaya_sewa;
        $tot_sewa = $hm_grand * $str_sewa;
        return view('asset.sad.rekap.kas.unit_sewa_Info', compact('list', 'hm_total', 'hm_jam', 'hm_pot', 'hm_grand', 'str_sewa', 'tot_sewa', 'nav', 'master', 'periode', 'equip_list', 'cek_hm', 'cek_manual', 'kar_filter', 'equip_m', 'cek', 'sum', 'max'));
    }
}
