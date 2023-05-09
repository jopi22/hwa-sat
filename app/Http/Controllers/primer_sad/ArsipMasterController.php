<?php

namespace App\Http\Controllers\primer_sad;

use App\Http\Controllers\Controller;
use App\Models\Absensi;
use App\Models\Breakdown;
use App\Models\Catering;
use App\Models\CateringMaster;
use App\Models\Dedicated;
use App\Models\Dokumen;
use App\Models\EquipMaster;
use App\Models\Equipment;
use App\Models\KarMaster;
use App\Models\Kas;
use App\Models\Lokasi;
use App\Models\Master;
use App\Models\PengajuanAbsensi;
use App\Models\Performa_hm;
use App\Models\Performa_ot;
use App\Models\Shift;
use App\Models\User;
use Illuminate\Http\Request;

class ArsipMasterController extends Controller
{
    public function amast_index()
    {
        $periode = date('m-Y');
        $master = Master::where('status', 'Present')->first();
        $mast = Master::orderBy('id', 'DESC')->get();
        $cek = Master::all()->count();
        return view('asset.sad.arsip.master.master', compact('mast', 'master', 'cek', 'periode'));
    }


    public function amaster_index($id)
    {
        $periode = date('m-Y');
        $master = Master::Find($id);
        $cek = Master::all()->count();
        return view('asset.sad.arsip.master.master_index', compact('master', 'cek', 'periode'));
    }


    public function abs_kelola($id)
    {
        date_default_timezone_set('Asia/Pontianak');
        $kar = User::where('status', '<>', 'Hidden')
            ->where('status', '<>', 'Delete')
            ->get();
        $master = Master::where('status', 'Validasi')->first();
        $cek = $master;
        $abs = Absensi::where('periode_id', $master->id)->take(0)->get();
        return view('asset.sad.arsip.master.absensi.kelola_absensi', compact('abs', 'kar', 'master', 'cek'));
    }


    public function pengabs_index($id)
    {
        date_default_timezone_set('Asia/Pontianak');
        $master = Master::Find($id);
        $cek = $master;
        $all = PengajuanAbsensi::where('master_id', $master->id)->get();
        $all_c = PengajuanAbsensi::where('master_id', $master->id)->count();
        $nores = PengajuanAbsensi::where('master_id', $master->id)
            ->where('respon_status', 'Belum')
            ->orderBy('id', 'DESC')
            ->get();
        $nores_c = PengajuanAbsensi::where('master_id', $master->id)
            ->where('respon_status', 'Belum')
            ->count();
        $ter = PengajuanAbsensi::where('master_id', $master->id)
            ->where('respon_status', 'Diterima')
            ->orderBy('id', 'DESC')
            ->get();
        $ter_c = PengajuanAbsensi::where('master_id', $master->id)
            ->where('respon_status', 'Diterima')
            ->count();
        $tol = PengajuanAbsensi::where('master_id', $master->id)
            ->where('respon_status', 'Ditolak')
            ->orderBy('id', 'DESC')
            ->get();
        $tol_c = PengajuanAbsensi::where('master_id', $master->id)
            ->where('respon_status', 'Ditolak')
            ->count();
        $cek_all = PengajuanAbsensi::where('master_id', $master->id)
            ->count();
        $cek_nores = PengajuanAbsensi::where('master_id', $master->id)
            ->where('respon_status', 'Belum')
            ->count();
        $cek_ter = PengajuanAbsensi::where('master_id', $master->id)
            ->where('respon_status', 'Diterima')
            ->count();
        $cek_tol = PengajuanAbsensi::where('master_id', $master->id)
            ->where('respon_status', 'Ditolak')
            ->count();
        return view('asset.sad.arsip.master.absensi.pengabs_index', compact('all', 'all_c', 'nores_c', 'ter_c', 'tol_c', 'master', 'cek', 'nores', 'ter', 'tol', 'cek_all', 'cek_nores', 'cek_ter', 'cek_tol'));
    }


    public function abs_kalender()
    {
        date_default_timezone_set('Asia/Pontianak');
        $periode = date('m-Y');
        $per = Master::where('status', 'Validasi')->first();
        $cek = $per;
        $abs = Absensi::where('periode_id', $per->id)->take(1)->get();
        $kar = User::where('status', '<>', 'Hidden')
            ->where('status', '<>', 'Delete')
            ->get();
        $hadir = Absensi::where('periode_id', 104)
            ->where('karyawan', 2)
            ->where('status', 1)
            ->count();
        $sakit = Absensi::where('periode_id', 104)
            ->where('karyawan', 2)
            ->where('status', 3)
            ->count();
        // Count
        $hadir = Absensi::where('periode_id', $per->id)->where('status', '1')->count();
        $sakit_tk = Absensi::where('periode_id', $per->id)->where('status', '2')->count();
        $sakit_k = Absensi::where('periode_id', $per->id)->where('status', '3')->count();
        $izin_tk = Absensi::where('periode_id', $per->id)->where('status', '4')->count();
        $izin_k = Absensi::where('periode_id', $per->id)->where('status', '5')->count();
        $cuti = Absensi::where('periode_id', $per->id)->where('status', '6')->count();
        $alpha = Absensi::where('periode_id', $per->id)->where('status', '7')->count();
        $blm = Absensi::where('periode_id', $per->id)->where('status', '8')->count();
        $sudah = Absensi::where('periode_id', $per->id)->where('status', '!=', '8')->count();
        $all = Absensi::where('periode_id', $per->id)->count();
        if ($cek->ket == 1) {
            $persentase = $sudah * 100 / $all;
            $progres = number_format($persentase);
            return view('asset.sad.arsip.master.absensi.abs_kalender', compact('progres', 'per', 'kar', 'abs', 'cek', 'periode', 'hadir', 'sakit_tk', 'sakit_k', 'izin_tk', 'izin_k', 'cuti', 'alpha', 'blm', 'sudah'));
        }
        return view('asset.sad.arsip.master.absensi.abs_kalender', compact('per', 'kar', 'abs', 'cek', 'periode', 'hadir', 'sakit_tk', 'sakit_k', 'izin_tk', 'izin_k', 'cuti', 'alpha', 'blm', 'sudah'));
    }


    public function hm_equipment($id)
    {
        $master = Master::Find($id);
        $cek_perform = Performa_hm::where('master_id', $master->id)
            ->count();
        $equip = EquipMaster::where('master_id', $master->id)
            ->get();
        $equipment = Equipment::all();
        $perform = Performa_hm::all();
        $sum = Performa_hm::all()->sum('hm_total');
        // $equip = Equipment::all();
        $lok = Lokasi::all();
        $dedi = Dedicated::all();
        $kar = User::where('status', '<>', 'Hidden')
            ->where('status', '<>', 'Delete')
            ->get();
        $shift = Shift::all();
        return view('asset.sad.arsip.master.performa.hm_equip', compact('cek_perform', 'master', 'perform', 'equipment', 'equip', 'kar', 'lok', 'dedi', 'shift', 'sum'));
    }


    public function hm_karyawan($id)
    {
        $master = Master::Find($id);
        $cek_perform = Performa_hm::where('master_id', $master->id)
            ->count();
        $kar_list = KarMaster::where('master_id', $master->id)
            ->where('tipe_gaji', 'AI')
            ->get();
        $jabatan = User::select('jabatan')->distinct()
            ->where('tipe_gaji', 'AI')->get();
        return view('asset.sad.arsip.master.performa.hm_karyawan', compact('cek_perform', 'jabatan', 'master', 'kar_list'));
    }


    public function ot_list($id)
    {
        $master = Master::Find($id);
        $cek_perform = Performa_ot::where('master_id', $id)
            ->count();
        $perform = Performa_ot::where('master_id', $id)
            ->get();
        $kar_filter = User::where('status', '<>', 'Hidden')
            ->where('status', '<>', 'Delete')
            ->where('tipe_gaji', 'AL')
            ->get();
        return view('asset.sad.arsip.master.performa.ot_list', compact('master', 'cek_perform', 'perform', 'kar_filter'));
    }

    public function ot_karyawan($id)
    {
        $master = Master::Find($id);
        $cek_perform = Performa_ot::where('master_id', $master->id)
            ->count();
        $kar_list = KarMaster::where('master_id', $master->id)->where('tipe_gaji', 'AL')
            ->get();
        $jabatan = User::select('jabatan')->distinct()
            ->where('tipe_gaji', 'AL')->get();
        return view('asset.sad.arsip.master.performa.ot_karyawan', compact('cek_perform', 'jabatan', 'master', 'jabatan', 'kar_list'));
    }


    public function bd_list($id)
    {
        $master = Master::Find($id);
        $cek = Breakdown::where('master_id', $master->id)->count();
        $bd = Breakdown::where('master_id', $master->id)->get();
        $equip = Equipment::where('status', 'Aktif')->get();

        return view('asset.sad.arsip.master.performa.bd_list', compact('equip', 'cek', 'master', 'bd'));
    }

    public function log_equip_list()
    {
        $master = Master::where('status', 'Validasi')->first();
        $e_list = EquipMaster::where('master_id', $master->id)->get();
        return view('asset.sad.arsip.master.log.log_equip_list', compact('e_list', 'master'));
    }

    public function kas_list()
    {
        $periode = date('m-Y');
        $master = Master::where('status', 'Present')->first();
        $cek = Kas::where('master_id', $master->id)->count();
        $kas = Kas::where('master_id', $master->id)->get();
        //Perhitungan
        $debit = Kas::where('master_id', $master->id)
            ->where('tipe', 'Debit')->sum('jumlah');
        $kredit = Kas::where('master_id', $master->id)
            ->where('tipe', 'Kredit')->sum('jumlah');
        $kredit_p = Kas::where('master_id', $master->id)
            ->where('tipe', 'Kredit Pusat')->sum('jumlah');
        $saldo = $debit - $kredit;
        $grand_kredit = $kredit_p + $kredit;
        return view('asset.sad.arsip.master.kas.kas_list', compact('periode','master','cek','kas','debit','kredit','kredit_p','saldo','grand_kredit'));
    }

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
        return view('asset.sad.arsip.master.gaji.gaji_list', compact('jabatan','cek_kar', 'grand', 'insentif', 'pokok', 'lemburan', 'master', 'periode', 'kar_list'));
    }

    public function cat_list()
    {
        $periode = date('m-Y');
        $master = Master::where('status', 'Present')->first();
        $cek = CateringMaster::where('master_id', $master->id)->count();
        $cat_m = CateringMaster::where('master_id', $master->id)->first();
        if ($cat_m) {
            $cek_list = Catering::where('cat_id', $cat_m->id)->count();
            $cat_list = Catering::where('cat_id', $cat_m->id)->get();
            $ph = $cat_m->porsi_harga;
            $harga_porsi = number_format($ph);
            // Count
            $pagi = Catering::where('cat_id', $cat_m->id)->sum('pagi');
            $siang = Catering::where('cat_id', $cat_m->id)->sum('siang');
            $sore = Catering::where('cat_id', $cat_m->id)->sum('sore');
            $malam = Catering::where('cat_id', $cat_m->id)->sum('malam');
            $total = $pagi + $siang + $sore + $malam;
            $porsi_harga = $cat_m->porsi_harga;
            $harga_raw = $total * $porsi_harga;
            $harga = number_format($harga_raw);
            return view('asset.sad.rekap.kas.cat_list', compact('harga_porsi', 'pagi', 'siang', 'sore', 'malam', 'total', 'harga', 'periode', 'master', 'cek', 'cek_list', 'cat_list', 'cat_m'));
        }


        return view('asset.sad.arsip.master.kas.cat_list', compact('periode', 'master', 'cek','cat_m'));
    }
}
