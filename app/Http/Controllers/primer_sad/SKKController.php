<?php

namespace App\Http\Controllers\primer_sad;

use App\Http\Controllers\Controller;
use App\Models\Master;
use App\Models\Navigator;
use App\Models\Resign;
use App\Models\SKK;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Crypt;

class SKKController extends Controller
{
    public function skk_index()
    {
        $nav = Navigator::where('karyawan', Auth::user()->id)->get();
        $periode = date('m-Y');
        $master = Master::where('status', 'Present')->count();
        $kar = User::where('status', '<>', 'Hidden')
            ->where('status', '<>', 'Delete')
            ->get();
        $sinkron = User::all();
        $asu = SKK::orderBy('id', 'DESC')->get();
        $cek = SKK::all()->count();
        $all = SKK::all();
        $all_c = SKK::all()->count();
        $nores = SKK::where('status', 'Belum')
            ->orderBy('id', 'DESC')
            ->get();
        $nores_c = SKK::where('status', 'Belum')
            ->count();
        $ter = SKK::where('status', 'Diterima')
            ->orderBy('id', 'DESC')
            ->get();
        $ter_c = SKK::where('status', 'Diterima')
            ->count();
        $tol = SKK::where('status', 'Ditolak')
            ->orderBy('id', 'DESC')
            ->get();
        $tol_c = SKK::where('status', 'Ditolak')
            ->count();
        $cek_all = SKK::count();
        $cek_nores = SKK::where('status', 'Belum')
            ->count();
        $cek_ter = SKK::where('status', 'Diterima')
            ->count();
        $cek_tol = SKK::where('status', 'Ditolak')
            ->count();
        return view('author.sad.akt.skk', compact('asu', 'sinkron', 'kar', 'periode', 'master', 'cek', 'nav', 'all', 'all_c', 'nores', 'nores_c', 'ter', 'ter_c', 'cek_all', 'cek_nores', 'cek_ter'));
    }


    public function skk_show($id)
    {
        $nav = Navigator::where('karyawan', Auth::user()->id)->get();
        $decryptID = Crypt::decryptString($id);
        $periode = date('m-Y');
        $master = Master::where('status', 'Present')->count();
        $res = SKK::Find($decryptID);
        return view('asset.sad.akt.pelayanan.skk_show', compact('res', 'nav', 'master', 'periode'));
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


    public function skk_terima(Request $request, $id)
    {
        // dd($request->all());
        $hwa = SKK::Find($id);

        if ($request->has('surat')) {
            $surat = $request->surat;
            $new_surat = 'surat' . time() . $surat->getClientOriginalName();
            $surat->move('file/hwa/profil/', $new_surat);
            $hwa_data = [
                'status' => 'asu',
                'surat' => 'file/hwa/profil/' . $new_surat,
            ];
            $hwa->update($hwa_data);
        }
        return back()->with('success', 'Pengajuan SKK Telah Diterima');
    }


    public function resign_delete(Request $request)
    {
        SKK::where('id', $request->delete)->delete();
        return back()->with('success', 'Data Pengajuan SKK Telah Dihapus');
    }
}
