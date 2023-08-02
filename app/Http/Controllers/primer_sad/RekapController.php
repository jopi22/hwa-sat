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
        $master = Master::where('status', 'Validasi')->first();
        $val = Master::where('status', 'Validasi')->count();
        $pres = Master::where('status', 'Present')->count();
        return view('author.sad.rekap.rekap_index', compact('master','pres','val', 'nav'));
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
