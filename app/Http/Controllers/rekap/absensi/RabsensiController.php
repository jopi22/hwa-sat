<?php

namespace App\Http\Controllers\rekap\absensi;

use App\Http\Controllers\Controller;
use App\Models\Absensi;
use App\Models\KarMaster;
use App\Models\Master;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class RabsensiController extends Controller
{
    public function abs_kelola()
    {
        date_default_timezone_set('Asia/Pontianak');
        $kar = User::where('status', '<>', 'Hidden')
            ->where('status', '<>', 'Delete')
            ->get();
        $master = Master::where('status', 'Validasi')->first();
        $cek = $master;
        $abs = Absensi::where('periode_id', $master->id)->take(0)->get();
        return view('asset.sad.rekap.absensi.kelola_absensi', compact('abs', 'kar', 'master', 'cek'));
    }


    public function absSearch(Request $request)
    {
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
        $master = Master::where('status', 'Validasi')->first();
        $cek = $master;
        //search
        if ($request->has('search')) {
            $abs = Absensi::where('periode_id', $master->id)
                ->where('tgl', 'LIKE', '%' . $request->search . '%')->get();
        } else {
            $abs = Absensi::latest()->take(0)->get();
        }

        return view('asset.sad.rekap.absensi.kelola_absensi', compact('abs', 'master', 'kar', 'cek'));
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
            return view('asset.sad.rekap.absensi.abs_kalender', compact('progres', 'per', 'kar', 'abs', 'cek', 'periode', 'hadir', 'sakit_tk', 'sakit_k', 'izin_tk', 'izin_k', 'cuti', 'alpha', 'blm', 'sudah'));
        }
        return view('asset.sad.rekap.absensi.abs_kalender', compact('per', 'kar', 'abs', 'cek', 'periode', 'hadir', 'sakit_tk', 'sakit_k', 'izin_tk', 'izin_k', 'cuti', 'alpha', 'blm', 'sudah'));
    }
}
