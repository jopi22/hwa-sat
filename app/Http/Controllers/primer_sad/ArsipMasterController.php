<?php

namespace App\Http\Controllers\primer_sad;

use App\Http\Controllers\Controller;
use App\Models\Absensi;
use App\Models\Breakdown;
use App\Models\Catering;
use App\Models\CateringMaster;
use App\Models\Dedicated;
use App\Models\EquipMaster;
use App\Models\Equipment;
use App\Models\KarMaster;
use App\Models\Kas;
use App\Models\Lokasi;
use App\Models\Master;
use App\Models\Navigator;
use App\Models\PengajuanAbsensi;
use App\Models\PengajuanAbsensiList;
use App\Models\Performa_hm;
use App\Models\Performa_ot;
use App\Models\Shift;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Crypt;
use Illuminate\Support\Facades\Validator;

class ArsipMasterController extends Controller
{
    public function amast_menu()
    {
        $nav = Navigator::where('karyawan', Auth::user()->id)->get();
        $mast = Master::where('status', 'Arsip')
            ->orderBy('id', 'DESC')->get();
        $cek = Master::where('status', 'Arsip')->count();
        return view('asset.sad.arsip.master.master', compact('mast','nav', 'cek'));
    }


    public function amaster_index($id)
    {
        $nav = Navigator::where('karyawan', Auth::user()->id)->get();
        $master = Master::Find($id);
        $cek = Master::Find($id)->count();
        return view('asset.sad.arsip.master.master_index', compact('master','nav', 'cek'));
    }


    public function abs_kelola($id)
    {
        $nav = Navigator::where('karyawan', Auth::user()->id)->get();
        date_default_timezone_set('Asia/Pontianak');
        $kar = User::where('status', '<>', 'Hidden')
            ->where('status', '<>', 'Delete')
            ->get();
        $master = Master::Find($id);
        $abs = Absensi::where('periode_id', $master->id)->take(0)->get();
        return view('asset.sad.arsip.master.absensi.kelola_absensi', compact('abs','nav', 'kar', 'master'));
    }


    public function absSearch(Request $request)
    {
        $nav = Navigator::where('karyawan', Auth::user()->id)->get();
        $validator = Validator::make($request->all(), [
            'search'     => 'required',
        ], [
            'required' => 'Tidak Boleh Kosong',
        ]);
        if ($validator->fails()) {
            return response()->json($validator->errors(), 422);
        }
        $kar = User::where('status', '<>', 'Hidden')
            ->where('status', '<>', 'Delete')
            ->get();
        $master = Master::where('status', 'Arsip')->first();
        //search
        if ($request->has('search')) {
            $abs = Absensi::where('periode_id', $master->id)
                ->where('tgl', 'LIKE', '%' . $request->search . '%')->get();
        } else {
            $abs = Absensi::latest()->take(0)->get();
        }

        return view('asset.sad.arsip.master.absensi.kelola_absensi', compact('abs','nav', 'master', 'kar'));
    }


    public function pengabs_index($id)
    {
        $nav = Navigator::where('karyawan', Auth::user()->id)->get();
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
        return view('asset.sad.arsip.master.absensi.pengabs_index', compact('all','nav', 'all_c', 'nores_c', 'ter_c', 'tol_c', 'master', 'cek', 'nores', 'ter', 'tol', 'cek_all', 'cek_nores', 'cek_ter', 'cek_tol'));
    }


    // public function pengAbsInfo($id)
    // {
    //     date_default_timezone_set('Asia/Pontianak');
    //     $master = Master::Find($id);
    //     $cek = $master;
    //     $decryptID = Crypt::decryptString($id);
    //     $peng = PengajuanAbsensi::Find($decryptID);
    //     $penglist = Absensi::where('pengajuan_fk', $peng->pengajuan_pk)->get();
    //     $penglist_ = PengajuanAbsensiList::select('absensi_id')->distinct()
    //         ->where('pengajuan_fk', $peng->pengajuan_pk)->get();
    //     $all = PengajuanAbsensi::where('master_id', $master->id)->get();
    //     $kar = User::where('status', '<>', 'Hidden')
    //         ->where('status', '<>', 'Delete')
    //         ->get();
    //     return view('asset.sad.rekap.pengabs.pengabs_info', compact('peng', 'cek', 'penglist', 'penglist_', 'kar', 'all'));
    // }


    public function abs_kalender($id)
    {
        $nav = Navigator::where('karyawan', Auth::user()->id)->get();
        date_default_timezone_set('Asia/Pontianak');
        $periode = date('m-Y');
        $per = Master::Find($id);
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
            return view('asset.sad.arsip.master.absensi.abs_kalender', compact('progres','nav', 'per', 'kar', 'abs', 'cek', 'periode', 'hadir', 'sakit_tk', 'sakit_k', 'izin_tk', 'izin_k', 'cuti', 'alpha', 'blm', 'sudah'));
        }
        return view('asset.sad.arsip.master.absensi.abs_kalender', compact('per','nav', 'kar', 'abs', 'cek', 'periode', 'hadir', 'sakit_tk', 'sakit_k', 'izin_tk', 'izin_k', 'cuti', 'alpha', 'blm', 'sudah'));
    }


    public function hm_equipment($id)
    {
        $nav = Navigator::where('karyawan', Auth::user()->id)->get();
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
        return view('asset.sad.arsip.master.performa.hm_equip', compact('cek_perform','nav', 'master', 'perform', 'equipment', 'equip', 'kar', 'lok', 'dedi', 'shift', 'sum'));
    }


    public function hm_karyawan($id)
    {
        $nav = Navigator::where('karyawan', Auth::user()->id)->get();
        $master = Master::Find($id);
        $cek_perform = Performa_hm::where('master_id', $master->id)
            ->count();
        $kar_list = KarMaster::where('master_id', $master->id)
            ->where('tipe_gaji', 'AI')
            ->get();
        $jabatan = User::select('jabatan')->distinct()
            ->where('tipe_gaji', 'AI')->get();
        return view('asset.sad.arsip.master.performa.hm_karyawan', compact('cek_perform','nav', 'jabatan', 'master', 'kar_list'));
    }


    public function ot_list($id)
    {
        $nav = Navigator::where('karyawan', Auth::user()->id)->get();
        $master = Master::Find($id);
        $cek_perform = Performa_ot::where('master_id', $id)
            ->count();
        $perform = Performa_ot::where('master_id', $id)
            ->get();
        $kar_filter = User::where('status', '<>', 'Hidden')
            ->where('status', '<>', 'Delete')
            ->where('tipe_gaji', 'AL')
            ->get();
        return view('asset.sad.arsip.master.performa.ot_list', compact('master','nav', 'cek_perform', 'perform', 'kar_filter'));
    }

    public function ot_karyawan($id)
    {
        $nav = Navigator::where('karyawan', Auth::user()->id)->get();
        $master = Master::Find($id);
        $cek_perform = Performa_ot::where('master_id', $master->id)
            ->count();
        $kar_list = KarMaster::where('master_id', $master->id)->where('tipe_gaji', 'AL')
            ->get();
        $jabatan = User::select('jabatan')->distinct()
            ->where('tipe_gaji', 'AL')->get();
        return view('asset.sad.arsip.master.performa.ot_karyawan', compact('cek_perform','nav', 'jabatan', 'master', 'jabatan', 'kar_list'));
    }


    public function bd_list($id)
    {
        $nav = Navigator::where('karyawan', Auth::user()->id)->get();
        $master = Master::Find($id);
        $cek = Breakdown::where('master_id', $master->id)->count();
        $bd = Breakdown::where('master_id', $master->id)->get();
        $equip = Equipment::where('status', 'Aktif')->get();
        return view('asset.sad.arsip.master.performa.bd_list', compact('equip','nav', 'cek', 'master', 'bd'));
    }


    public function log_equip_list($id)
    {
        $nav = Navigator::where('karyawan', Auth::user()->id)->get();
        $master = Master::Find($id);
        $e_list = EquipMaster::where('master_id', $master->id)->get();
        return view('asset.sad.arsip.master.log.log_equip_list', compact('e_list','nav', 'master'));
    }

    public function kas_list($id)
    {
        $nav = Navigator::where('karyawan', Auth::user()->id)->get();
        $periode = date('m-Y');
        $master = Master::Find($id);
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
        return view('asset.sad.arsip.master.kas.kas_list', compact('periode','nav', 'master', 'cek', 'kas', 'debit', 'kredit', 'kredit_p', 'saldo', 'grand_kredit'));
    }

    public function gaji_list($id)
    {
        $nav = Navigator::where('karyawan', Auth::user()->id)->get();
        $periode = date('m-Y');
        $master = Master::Find($id);
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
        return view('asset.sad.arsip.master.gaji.gaji_list', compact('jabatan','nav', 'cek_kar', 'grand', 'insentif', 'pokok', 'lemburan', 'master', 'periode', 'kar_list'));
    }

    public function cat_list($id)
    {
        $nav = Navigator::where('karyawan', Auth::user()->id)->get();
        $master = Master::Find($id);
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
            return view('asset.sad.arsip.master.kas.cat_list', compact('harga_porsi','nav', 'pagi', 'siang', 'sore', 'malam', 'total', 'harga', 'master', 'cek', 'cek_list', 'cat_list', 'cat_m'));
        }


        return view('asset.sad.arsip.master.kas.cat_list', compact( 'master','nav', 'cek', 'cat_m'));
    }
}
