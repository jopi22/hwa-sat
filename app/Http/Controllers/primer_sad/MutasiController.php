<?php

namespace App\Http\Controllers\primer_sad;

use App\Helpers\LogActivity;
use App\Http\Controllers\Controller;
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

class MutasiController extends Controller
{
    public function mutasi_index()
    {
        $nav = Navigator::where('karyawan', Auth::user()->id)->get();
        $periode = date('m-Y');
        $master = Master::where('status', 'Present')->count();
        $kar = User::where('status', 'Aktif')
            ->orderBy('username', 'ASC')
            ->get();
        $site = Site::all();
        $cek = User::where('status', '<>', 'Hidden')
            ->where('status', '<>', 'Trash')
            ->count();
        $jab_f = Jabatan::all();
        return view('author.sad.kar.mutasi_index', compact('cek', 'site', 'nav', 'kar', 'jab_f', 'master', 'periode',));
    }

    public function mutasi_print($id)
    {
        $nav = Navigator::where('karyawan', Auth::user()->id)->get();
        $periode = date('m-Y');
        $master = Master::where('status', 'Present')->count();
        $kar = User::where('status', '<>', 'Hidden')
            ->where('status', '<>', 'Delete')
            ->orderBy('username', 'ASC')
            ->get();
        $site = Site::all();
        $cek = User::where('status', '<>', 'Hidden')
            ->where('status', '<>', 'Trash')
            ->count();
        $jab_f = Jabatan::all();
        return view('asset.sad.kar.mutasi_print', compact('cek', 'site', 'nav', 'kar', 'jab_f', 'master', 'periode',));
    }


    public function mutasi_store(Request $request, $id)
    {
        // dd($request->all());
        $mut = User::Find($id);
        $data = [
            'site_id' => $request->site_id,
            'tgl_mutasi' => $request->tgl_mutasi,
            'status' => $request->status,
            'password' => $request->password,
            'password_view' => $request->password_view,
        ];
        $mut->update($data);
        return back()->with('success', 'Proses Mutasi Karyawan Berhasil');
    }
}
