<?php

namespace App\Http\Controllers\master_sad\absensi;

use App\Http\Controllers\Controller;
use App\Models\Absensi;
use App\Models\KarMaster;
use App\Models\Master;
use App\Models\Navigator;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Validator;

class AbsensiController extends Controller
{
    public function abs_kelola()
    {
        $nav = Navigator::where('karyawan', Auth::user()->id)->get();
        date_default_timezone_set('Asia/Pontianak');
        $today = date('d-m-Y');
        $periode = date('m-Y');
        $kar = User::where('status', '<>', 'Hidden')
            ->where('status', '<>', 'Delete')
            ->get();
        $cek = Master::where('status', 'Present')->first();
        $master = Master::where('status', 'Present')->first();
        $abs = Absensi::where('periode_id', $master->id)
            ->where('tgl', $today)->get();
        $tgl_list = Absensi::where('periode_id', $master->id)
            ->where('karyawan', Auth::user()->id)
            ->get();
        return view('author.sad.abs.kelola_absensi', compact('abs','tgl_list', 'nav', 'kar', 'today', 'master', 'periode', 'cek'));
    }


    public function abs_kalender()
    {
        $nav = Navigator::where('karyawan', Auth::user()->id)->get();
        date_default_timezone_set('Asia/Pontianak');
        $periode = date('m-Y');
        $per = Master::where('status', 'Present')->first();
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
            return view('author.sad.abs.abs_kalender', compact('progres', 'nav', 'per', 'kar', 'abs', 'cek', 'periode', 'hadir', 'sakit_tk', 'sakit_k', 'izin_tk', 'izin_k', 'cuti', 'alpha', 'blm', 'sudah'));
        }
        return view('author.sad.abs.abs_kalender', compact('per', 'nav', 'kar', 'abs', 'cek', 'periode', 'hadir', 'sakit_tk', 'sakit_k', 'izin_tk', 'izin_k', 'cuti', 'alpha', 'blm', 'sudah'));
    }


    public function abs_input(Request $request)
    {
        // dd($request->all());
        foreach ($request->delete_id as $key => $items) {
            Absensi::where('id', $request->delete_id[$key])->delete();
        }
        foreach ($request->id as $key => $id) {
            $abs['id'] = $request->id[$key];
            $abs['tgl'] = $request->tgl[$key];
            $abs['karyawan'] = $request->karyawan[$key];
            $abs['status'] = $request->status[$key];
            $abs['periode_id'] = $request->periode_id[$key];
            $abs['kode_unik'] = $request->kode_unik[$key];
            $abs['kontrol'] = $request->kontrol[$key];
            Absensi::create($abs);
        }
        return redirect()->back()->with('success', 'Absensi Berhasil Disimpan');
    }


    public function absSearch(Request $request)
    {
        // $validator = Validator::make($request->all(), [
        //     'search'     => 'required',
        // ], [
        //     'required' => 'Tidak Boleh Kosong',
        // ]);
        // if ($validator->fails()) {
        //     return response()->json($validator->errors(), 422);
        // }
        $nav = Navigator::where('karyawan', Auth::user()->id)->get();
        $periode = date('m-Y');
        $kar = User::where('status', '<>', 'Hidden')
            ->where('status', '<>', 'Delete')
            ->get();
        $master = Master::where('status', 'Present')->first();
        $cek = $master;
        //search
        if ($request->has('search')) {
            $abs = Absensi::where('periode_id', $master->id)
                ->where('tgl', 'LIKE', '%' . $request->search . '%')->get();
        } else {
            $abs = Absensi::latest()->take(0)->get();
        }
        $tgl_list = Absensi::where('periode_id', $master->id)
            ->where('karyawan', Auth::user()->id)
            ->get();

        return view('author.sad.abs.kelola_absensi', compact('abs','tgl_list', 'nav', 'master', 'kar', 'cek', 'periode'));
    }


    public function absShow($id)
    {
        //return response
        $abs = Absensi::Find($id);
        return response()->json([
            'success' => true,
            'message' => 'Detail Data Berhasil Ditampilkan',
            'data'    => $abs
        ]);
    }


    public function absUpdate(Request $request, Absensi $abs)
    {
        $validator = Validator::make($request->all(), [
            'status'     => 'required'
        ]);
        if ($validator->fails()) {
            return response()->json($validator->errors(), 422);
        }
        $abs->update([
            'status'     => $request->status,
        ]);
        return response()->json([
            'success' => true,
            'message' => 'Data Berhasil Diudapte!',
            'data'    => $abs
        ]);
    }
}
