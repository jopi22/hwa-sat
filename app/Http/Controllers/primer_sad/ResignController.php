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
        $asu = Resign::orderBy('id', 'DESC')->get();
        $cek = Resign::all()->count();
        return view('author.sad.akt.resign', compact('asu','kar','periode','master','cek','nav'));
    }


    public function resign_show($id)
    {
        $decryptID = Crypt::decryptString($id);
        $periode = date('m-Y');
        $master = Master::where('status', 'Present')->count();
        $res = Resign::Find($decryptID);
        return view('asset.sad.akt.resign.resign_show', compact('res','master','periode'));
    }


    public function resign_tolak(Request $request, $id)
    {
        // dd($request->all());
        $res = Resign::Find($id);
        $data = [
            'status' => $request->status,
        ];
        $res->update($data);
        return back()->with('success', 'Data Pengajuan Resign Telah Ditolak');
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
