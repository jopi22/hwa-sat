<?php

namespace App\Http\Controllers\primer_sad;

use App\Helpers\LogActivity;
use App\Http\Controllers\Controller;
use App\Models\Aktivitas;
use App\Models\Bank;
use App\Models\Hwa;
use App\Models\Jabatan;
use App\Models\Master;
use App\Models\Navigator;
use App\Models\Site;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Crypt;

class AktivitasController extends Controller
{
    public function aktivitas_index()
    {
        $nav = Navigator::where('karyawan', Auth::user()->id)->get();
        $periode = date('m-Y');
        $master = Master::where('status', 'Present')->count();
        $aktivitas = Aktivitas::where('status', '<>', 'Delete')
            ->get();
        $cek = Aktivitas::where('status', '<>', 'Delete')
            ->count();
        return view('author.sad.rental.aktivitas', compact('cek', 'nav', 'aktivitas', 'master', 'periode',));
    }


    public function aktivitas_store(Request $request)
    {
        foreach ($request->aktivitas as $key => $value) {
            $kar['aktivitas'] = $request->aktivitas[$key];
            $kar['ket'] = $request->ket[$key];
            $kar['status'] = $request->status[$key];
            Aktivitas::create($kar);
        }
        return back()->with('success', 'Data Aktivitas Berhasil Ditambah');
    }


    public function aktivitas_update(Request $request, $id)
    {
        $akt = Aktivitas::Find($id);
        $akt->update([
            'aktivitas' => $request->aktivitas,
            'ket' => $request->ket,
            'status' => $request->status,
        ]);

        if ($request->has('hapus')) {
            return back()->with('success', 'Data Aktivitas Berhasil Dihapus');
        } else {
            return back()->with('success', 'Data Aktivitas Berhasil Diubah');
        }
    }
}
