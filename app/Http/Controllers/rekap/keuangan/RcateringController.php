<?php

namespace App\Http\Controllers\rekap\keuangan;

use App\Http\Controllers\Controller;
use App\Models\Catering;
use App\Models\CateringMaster;
use App\Models\Kas;
use App\Models\Master;
use App\Models\Navigator;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class RcateringController extends Controller
{
    public function cat_list()
    {
        $nav = Navigator::where('karyawan', Auth::user()->id)->get();
        $periode = date('m-Y');
        $master = Master::where('status', 'Validasi')->first();
        $cek = CateringMaster::where('master_id', $master->id)->count();
        $cat_m = CateringMaster::where('master_id', $master->id)->first();
        if ($cat_m) {
            $cek_list = Catering::where('cat_id', $cat_m->id)->count();
            $cat_list = Catering::where('cat_id', $cat_m->id)->get();
            $ph = $cat_m->porsi_harga;
            $harga_porsi = number_format($ph);
            // Count
            $pagi = Catering::where('cat_id', $cat_m->id)->sum('pagi');
            $siang = Catering::where('cat_id', $cat_m->id)->sum('siang');
            $sore = Catering::where('cat_id', $cat_m->id)->sum('sore');
            $malam = Catering::where('cat_id', $cat_m->id)->sum('malam');
            $total = $pagi + $siang + $sore + $malam;
            $porsi_harga = $cat_m->porsi_harga;
            $harga_raw = $total * $porsi_harga;
            $harga = number_format($harga_raw);
            return view('author.sad.rekap.kas.cat_list', compact('harga_porsi', 'nav', 'pagi', 'siang', 'sore', 'malam', 'total', 'harga', 'periode', 'master', 'cek', 'cek_list', 'cat_list', 'cat_m'));
        }
        return view('author.sad.rekap.kas.cat_list', compact('periode', 'nav', 'master', 'cek', 'cat_m'));
    }


    public function cat_create()
    {
        $nav = Navigator::where('karyawan', Auth::user()->id)->get();
        $periode = date('m-Y');
        $master = Master::where('status', 'Validasi')->first();
        $cat_m = CateringMaster::where('master_id', $master->id)->first();
        return view('author.sad.rekap.kas.cat_create', compact('periode', 'nav', 'master', 'cat_m'));
    }


    public function cat_excel($id)
    {
        $nav = Navigator::where('karyawan', Auth::user()->id)->get();
        $periode = date('m-Y');
        $master = Master::where('status', 'Validasi')->first();
        $cek = CateringMaster::where('master_id', $master->id)->count();
        $cat_m = CateringMaster::where('master_id', $master->id)->first();
        if ($cat_m) {
            $cek_list = Catering::where('cat_id', $cat_m->id)->count();
            $cat_list = Catering::where('cat_id', $cat_m->id)->get();
            $ph = $cat_m->porsi_harga;
            $harga_porsi = number_format($ph);
            // Count
            $pagi = Catering::where('cat_id', $cat_m->id)->sum('pagi');
            $siang = Catering::where('cat_id', $cat_m->id)->sum('siang');
            $sore = Catering::where('cat_id', $cat_m->id)->sum('sore');
            $malam = Catering::where('cat_id', $cat_m->id)->sum('malam');
            $total = $pagi + $siang + $sore + $malam;
            $porsi_harga = $cat_m->porsi_harga;
            $harga_raw = $total * $porsi_harga;
            $harga = number_format($harga_raw);
            return view('asset.sad.rekap.kas.cat_excel', compact('harga_porsi', 'nav', 'pagi', 'siang', 'sore', 'malam', 'total', 'harga', 'periode', 'master', 'cek', 'cek_list', 'cat_list', 'cat_m'));
        }
        return view('asset.sad.rekap.kas.cat_excel', compact('periode', 'nav', 'master', 'cek', 'cat_m'));
    }
}
