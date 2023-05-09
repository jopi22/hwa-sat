<?php

namespace App\Http\Controllers\primer_sad;

use App\Http\Controllers\Controller;
use App\Models\Master;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Crypt;
use Illuminate\Support\Facades\Validator;

class RekapController extends Controller
{
    public function rekap_index()
    {
        $master = Master::where('status', 'Validasi')->first();
        $cek = Master::where('status', 'Validasi')->count();
        return view('asset.sad.rekap.rekap_index', compact('master','cek'));
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
