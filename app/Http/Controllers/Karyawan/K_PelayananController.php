<?php

namespace App\Http\Controllers\Karyawan;

use App\Http\Controllers\Controller;
use App\Models\Absensi;
use App\Models\Master;
use App\Models\PengajuanAbsensi;
use App\Models\Resign;
use App\Models\SKK;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class K_PelayananController extends Controller
{
    public function peng_absensi()
    {
        date_default_timezone_set('Asia/Pontianak');
        $periode = date('m-Y');
        $today = date('d-m-Y');
        $time = date('H:i');
        $master = Master::where('status', 'Present')->first();
        $bro = $master->created_at->format(' m-Y');
        $tgl_list = Absensi::where('periode_id', $master->id)
            ->where('karyawan', Auth::user()->id)
            ->where('tgl', '>', $today)
            ->get();
        $peng_list = PengajuanAbsensi::where('karyawan', Auth::user()->id)
            ->get();
        $cek = PengajuanAbsensi::where('karyawan', Auth::user()->id)
            ->count();
        return view('asset.karyawan.peng_absen', compact(
            'cek',
            'periode',
            'master',
            'tgl_list',
            'peng_list',
            'today',
            'time'
        ));
    }


    public function peng_resign()
    {
        date_default_timezone_set('Asia/Pontianak');
        $periode = date('m-Y');
        $today = date('d-m-Y');
        $time = date('H:i');
        $master = Master::where('status', 'Present')->first();
        $bro = $master->created_at->format(' m-Y');
        $tgl_list = Absensi::where('periode_id', $master->id)
            ->where('karyawan', Auth::user()->id)
            ->where('tgl', '>', $today)
            ->get();
        $peng_list = Resign::where('karyawan', Auth::user()->id)
            ->get();
        $cek = Resign::where('karyawan', Auth::user()->id)
            ->count();
        return view('asset.karyawan.peng_resign', compact(
            'cek',
            'periode',
            'master',
            'tgl_list',
            'peng_list',
            'today',
            'time'
        ));
    }

    public function peng_resign_store(Request $request)
    {
        // dd($request->all());
        $user = Auth::user()->id;
        $status = 'Belum';

        $file = $request->surat;
        $new_file = 'file' . time() . $file->getClientOriginalName();
        $file->move('file/karyawan/pelayanan/resign/', $new_file);
        Resign::create([
            'karyawan' => $user,
            'status' => $status,
            'surat' => 'file/karyawan/pelayanan/resign/' . $new_file,
        ]);
        return back()->with('success', 'Surat Permohonan Resign Berhasil Terkirim');
    }


    public function peng_skk()
    {
        $master = Master::where('status', 'Present')->first();
        $bro = $master->created_at->format(' m-Y');
        $peng_list = SKK::where('kar_id', Auth::user()->id)
            ->get();
        $cek = SKK::where('kar_id', Auth::user()->id)
            ->count();
        return view('asset.karyawan.peng_skk', compact(
            'cek',
            'master',
            'peng_list',
        ));
    }


    public function peng_skk_store(Request $request)
    {
        // dd($request->all());
        $user = Auth::user()->id;
        $status = 'Belum';
        SKK::create([
            'kar_id' => $user,
            'status' => $status,
            'email' => $request->email,
            'no_hp' => $request->no_hp,
            'jabatan' => $request->jabatan,
            'lama' => $request->lama,
            'perihal' => $request->perihal,
        ]);
        return back()->with('success', 'Pengajuan SKK Berhasil Terkirim');
    }
}
