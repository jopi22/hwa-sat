<?php

namespace App\Http\Controllers\primer_sad;

use App\Http\Controllers\Controller;
use App\Models\Dokumen;
use App\Models\Master;
use Illuminate\Http\Request;

class ArsipMasterController extends Controller
{
    public function amast_index()
    {
        $periode = date('m-Y');
        $master = Master::where('status', 'Present')->first();
        $mast = Master::orderBy('id', 'DESC')->get();
        $cek = Master::all()->count();
        $kat = Dokumen::select('kategori')->distinct()->get();
        return view('asset.sad.arsip.master.master', compact('mast','master','cek','periode','kat'));
    }

}
