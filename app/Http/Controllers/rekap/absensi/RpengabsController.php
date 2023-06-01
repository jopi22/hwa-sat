<?php

namespace App\Http\Controllers\rekap\absensi;

use App\Http\Controllers\Controller;
use App\Models\Absensi;
use App\Models\Master;
use App\Models\PengajuanAbsensi;
use App\Models\PengajuanAbsensiList;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Crypt;
use Illuminate\Support\Facades\Validator;

class RpengabsController extends Controller
{
    public function pengabs_index()
    {
        date_default_timezone_set('Asia/Pontianak');
        $periode = date('m-Y');
        $master2 = Master::where('status', 'Present')->first();
        $master = Master::where('status', 'Validasi')->first();
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
        return view('author.sad.rekap.abs.pengabs_index', compact('all', 'all_c', 'nores_c', 'ter_c', 'tol_c', 'master', 'periode', 'cek', 'nores', 'ter', 'tol', 'cek_all', 'cek_nores', 'cek_ter', 'cek_tol'));
    }


    public function pengAbsInfo($id)
    {
        date_default_timezone_set('Asia/Pontianak');
        $master = Master::where('status', 'Validasi')->first();
        $cek = $master;
        $decryptID = Crypt::decryptString($id);
        $peng = PengajuanAbsensi::Find($decryptID);
        $penglist = Absensi::where('pengajuan_fk', $peng->pengajuan_pk)->get();
        $penglist_ = PengajuanAbsensiList::select('absensi_id')->distinct()
            ->where('pengajuan_fk', $peng->pengajuan_pk)->get();
        $all = PengajuanAbsensi::where('master_id', $master->id)->get();
        $kar = User::where('status', '<>', 'Hidden')
            ->where('status', '<>', 'Delete')
            ->get();
        return view('asset.sad.rekap.pengabs.pengabs_info', compact('peng', 'cek', 'penglist', 'penglist_', 'kar', 'all'));
    }
}
