<?php

namespace App\Http\Controllers\primer_sad;

use App\Http\Controllers\Controller;
use App\Models\Master;
use App\Models\Navigator;
use App\Models\Resign;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Crypt;

class ResignController extends Controller
{
    public function resign_index()
    {
        $nav = Navigator::where('karyawan', Auth::user()->id)->get();
        $periode = date('m-Y');
        $master = Master::where('status', 'Present')->count();
        $kar = User::where('status', '<>', 'Hidden')
            ->where('status', '<>', 'Delete')
            ->get();
        $sinkron = User::all();
        $asu = Resign::orderBy('id', 'DESC')->get();
        $cek = Resign::all()->count();
        $all = Resign::all();
        $all_c = Resign::all()->count();
        $nores = Resign::where('status', 'Belum')
            ->orderBy('id', 'DESC')
            ->get();
        $nores_c = Resign::where('status', 'Belum')
            ->count();
        $ter = Resign::where('status', 'Diterima')
            ->orderBy('id', 'DESC')
            ->get();
        $ter_c = Resign::where('status', 'Diterima')
            ->count();
        $tol = Resign::where('status', 'Ditolak')
            ->orderBy('id', 'DESC')
            ->get();
        $tol_c = Resign::where('status', 'Ditolak')
            ->count();
        $cek_all = Resign::count();
        $cek_nores = Resign::where('status', 'Belum')
            ->count();
        $cek_ter = Resign::where('status', 'Diterima')
            ->count();
        $cek_tol = Resign::where('status', 'Ditolak')
            ->count();
        return view('author.sad.akt.resign', compact('asu', 'sinkron', 'kar', 'periode', 'master', 'cek', 'nav', 'all', 'all_c', 'nores', 'nores_c', 'ter', 'ter_c', 'cek_all', 'cek_nores', 'cek_ter'));
    }


    public function resign_show($id)
    {
        $decryptID = Crypt::decryptString($id);
        $periode = date('m-Y');
        $master = Master::where('status', 'Present')->count();
        $res = Resign::Find($decryptID);
        return view('asset.sad.akt.resign.resign_show', compact('res', 'master', 'periode'));
    }


    public function resign_sinkron(Request $request, $id)
    {
        // dd($request->all());
        $res = User::Find($id);
        $data = [
            'status' => $request->status,
        ];
        $res->update($data);
        return back()->with('success', 'Data Pengajuan Resign Telah Tersinkron Dengan Data User');
    }


    public function resign_terima(Request $request, $id)
    {
        // dd($request->all());
        $res = Resign::Find($id);
        $data = [
            'status' => $request->status,
        ];
        $res->update($data);
        return back()->with('success', 'Data Pengajuan Resign Telah Diterima');
    }


    public function resign_delete(Request $request)
    {
        Resign::where('id', $request->delete)->delete();
        return back()->with('success', 'Data Pengajuan Resign Telah Dihapus');
    }
}
