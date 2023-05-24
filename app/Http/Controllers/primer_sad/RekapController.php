<?php

namespace App\Http\Controllers\primer_sad;

use App\Http\Controllers\Controller;
use App\Models\Master;
use App\Models\Navigator;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Crypt;
use Illuminate\Support\Facades\Validator;

class RekapController extends Controller
{
    public function rekap_index()
    {
        $nav = Navigator::where('karyawan', Auth::user()->id)->get();
        $master = Master::where('status', 'Present')->count();
        $cek = Master::where('status', 'Validasi')->count();
        return view('asset.sad.rekap.rekap_index', compact('master','cek','nav'));
    }


    public function arsip_save(Request $request, $id)
    {
        // dd($request->all());
        $rekap = Master::Find($id);
        $rekap_data = [
            'status' => $request->status,
        ];
        $rekap->update($rekap_data);
        return back()->with('success', 'Master Data Berhasil Diarsipkan');
    }
}
