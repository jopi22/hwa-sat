<?php

namespace App\Http\Controllers\master_sad\keuangan;

use App\Http\Controllers\Controller;
use App\Models\Catering;
use App\Models\CateringMaster;
use App\Models\Kas;
use App\Models\Master;
use App\Models\Navigator;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class CateringController extends Controller
{
    public function cat_list()
    {
        $nav = Navigator::where('karyawan', Auth::user()->id)->get();
        $periode = date('m-Y');
        $master = Master::where('status', 'Present')->first();
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
            return view('author.sad.kas.cat_list', compact('harga_porsi','nav', 'pagi', 'siang', 'sore', 'malam', 'total', 'harga', 'periode', 'master', 'cek', 'cek_list', 'cat_list', 'cat_m'));
        }


        return view('author.sad.kas.cat_list', compact('periode','nav', 'master', 'cek','cat_m'));
    }


    public function cat_create()
    {
        $nav = Navigator::where('karyawan', Auth::user()->id)->get();
        $periode = date('m-Y');
        $master = Master::where('status', 'Present')->first();
        $cat_m = CateringMaster::where('master_id', $master->id)->first();
        return view('author.sad.kas.cat_create', compact('periode','nav', 'master', 'cat_m'));
    }


    public function cat_store(Request $request)
    {
        // dd($request->all());
        foreach ($request->tgl as $key => $items) {
            $pagi = $request->pagi[$key];
            $siang = $request->siang[$key];
            $sore = $request->sore[$key];
            $malam = $request->malam[$key];
            $porsi_tot = $pagi + $siang + $sore + $malam;

            $cat['tgl'] = $request->tgl[$key];
            $cat['cat_id'] = $request->cat_id[$key];
            $cat['master_id'] = $request->master_id[$key];
            $cat['pagi'] = $request->pagi[$key];
            $cat['siang'] = $request->siang[$key];
            $cat['sore'] = $request->sore[$key];
            $cat['malam'] = $request->malam[$key];
            $cat['ket'] = $request->ket[$key];
            $cat['total'] = $porsi_tot;
            Catering::create($cat);
        }
        return redirect()->route('cat.l')->with('success', 'Data Catering Berhasil Disimpan');
    }


    public function cat_update(Request $request)
    {
        // dd($request->all());
        $pagi = $request->pagi;
        $siang = $request->siang;
        $sore = $request->sore;
        $malam = $request->malam;
        $porsi_tot = $pagi + $siang + $sore + $malam;
        Catering::where('id', $request->delete)->delete();
        Catering::create([
            'id' => $request->id,
            'tgl' => $request->tgl,
            'master_id' => $request->master_id,
            'cat_id' => $request->cat_id,
            'pagi' => $request->pagi,
            'siang' => $request->siang,
            'sore' => $request->sore,
            'malam' => $request->malam,
            'ket' => $request->ket,
            'total' => $porsi_tot,
        ]);
        return back()->with('success', 'Data Catering Berhasil Diupdate');
    }


    public function cat_delete(Request $request)
    {
        Catering::where('id', $request->delete)->delete();
        return back()->with('success', 'Data Catering Berhasil Dihapus');
    }


    public function cat_setting(Request $request)
    {
        // dd($request->all());
        CateringMaster::where('id', $request->delete)->delete();
        CateringMaster::create([
            'id' => $request->id,
            'master_id' => $request->master_id,
            'atas_nama' => $request->atas_nama,
            'bank' => $request->bank,
            'no_rek' => $request->no_rek,
            'porsi_harga' => $request->porsi_harga,
        ]);
        return back()->with('success', 'Data Catering Berhasil Disetting');
    }


    public function cat_refresh(Request $request)
    {
        // dd($request->all());
        CateringMaster::where('id', $request->delete)->delete();
        CateringMaster::create([
            'id' => $request->id,
            'master_id' => $request->master_id,
            'atas_nama' => $request->atas_nama,
            'bank' => $request->bank,
            'no_rek' => $request->no_rek,
            'porsi_harga' => $request->porsi_harga,
            'tot_pagi' => $request->tot_pagi,
            'tot_siang' => $request->tot_siang,
            'tot_sore' => $request->tot_sore,
            'tot_malam' => $request->tot_malam,
            'tot_porsi' => $request->tot_porsi,
            'tot_harga' => $request->tot_harga,
        ]);
        return back()->with('success', 'Data Catering Berhasil Disetting');
    }
}
