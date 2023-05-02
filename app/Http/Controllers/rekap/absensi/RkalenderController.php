<?php

namespace App\Http\Controllers\rekap\absensi;

use App\Http\Controllers\Controller;
use App\Models\Absensi;
use App\Models\Master;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Crypt;
use Illuminate\Support\Facades\Validator;

class RkalenderController extends Controller
{
    public function masterGet()
    {
        date_default_timezone_set('Asia/Pontianak');
        $periode = date('m-Y');
        $day = date('d');
        $progres = $day * 3.3;
        $per = Master::latest()->get();
        $cek = Master::all()->count();
        return view('asset.sad.rekap.absensi.master_index', compact('per', 'progres', 'cek', 'periode'));
    }


    public function perStore(Request $request)
    {
        $messages = [
            'required' => 'Jumlah Hari Wajib Diisi',
            'unique' => 'Data Master Pada Bulan Ini Sudah Dibuat',
        ];

        $this->validate($request, [
            'periode'     => 'required|unique:hwa_master,periode',
            'total'     => 'required',
        ], $messages);

        date_default_timezone_set('Asia/Pontianak');
        $today = date('d-m-Y');
        $n = 0;
        $per['periode'] = $request->periode;
        $per['total'] = $request->total;
        $per['ket'] = $n;
        $per['status'] = $n;
        $per['created_at '] = $today;
        Master::create($per);

        return back()->with('success', 'Data Master Berhasil Dibuat');
    }


    public function perShow($id)
    {
        //return response
        $per = Master::Find($id);
        return response()->json([
            'success' => true,
            'message' => 'Detail Data Berhasil Ditampilkan',
            'data'    => $per
        ]);
    }


    public function perUpdate(Request $request, Master $per)
    {
        $validator = Validator::make($request->all(), [
            'periode'     => 'required',
            'total'     => 'required',
        ]);

        if ($validator->fails()) {
            return response()->json($validator->errors(), 422);
        }

        $per->update([
            'periode'     => $request->periode,
            'total'     => $request->total,
        ]);

        return response()->json([
            'success' => true,
            'message' => 'Data Berhasil Diudapte!',
            'data'    => $per
        ]);
    }


    public function perDelete($id)
    {
        Master::where('id', $id)->delete();

        return response()->json([
            'success' => true,
            'message' => 'Data Post Berhasil Dihapus!.',
        ]);
    }


    public function perCreateAktif(Request $request, $id)
    {
        date_default_timezone_set('Asia/Pontianak');
        $periode = date('m-Y');
        $decryptID = Crypt::decryptString($id);
        $abs = Absensi::where('periode_id', $decryptID)->take(1)->get();
        $per = Master::Find($decryptID);
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
        $jumlah = $hadir + $sakit;
        $g_pokok = $jumlah * 54.838;
        $gaji = 31 * 54.838;
        return view('asset.sad.abs.per_create_aktivasi', compact('per', 'kar', 'abs', 'g_pokok', 'gaji'));
    }
}
