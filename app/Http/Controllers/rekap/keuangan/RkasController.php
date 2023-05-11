<?php

namespace App\Http\Controllers\rekap\keuangan;

use App\Http\Controllers\Controller;
use App\Models\Kas;
use App\Models\Master;
use App\Models\Navigator;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class RkasController extends Controller
{
    public function kas_list()
    {
        $nav = Navigator::where('karyawan', Auth::user()->id)->get();
        $periode = date('m-Y');
        $master = Master::where('status', 'Validasi')->first();
        $cek = Kas::where('master_id', $master->id)->count();
        $kas = Kas::where('master_id', $master->id)->get();
        //Perhitungan
        $debit = Kas::where('master_id', $master->id)
            ->where('tipe', 'Debit')->sum('jumlah');
        $kredit = Kas::where('master_id', $master->id)
            ->where('tipe', 'Kredit')->sum('jumlah');
        $kredit_p = Kas::where('master_id', $master->id)
            ->where('tipe', 'Kredit Pusat')->sum('jumlah');
        $saldo = $debit - $kredit;
        $grand_kredit = $kredit_p + $kredit;
        return view('author.sad.rekap.kas.kas_list', compact('periode','nav', 'master','cek','kas','debit','kredit','kredit_p','saldo','grand_kredit'));
    }


    public function kas_store(Request $request)
    {
        // dd($request->all());
        Kas::create([
            'tgl' => $request->tgl,
            'master_id' => $request->master_id,
            'rincian' => $request->rincian,
            'jumlah' => $request->jumlah,
            'tipe' => $request->tipe,
        ]);
        return back()->with('success', 'Data Kas Berhasil Disimpan');
    }


    public function kas_update(Request $request)
    {
        // dd($request->all());
        Kas::where('id', $request->delete)->delete();
        Kas::create([
            'tgl' => $request->tgl,
            'master_id' => $request->master_id,
            'rincian' => $request->rincian,
            'jumlah' => $request->jumlah,
            'tipe' => $request->tipe,
        ]);
        return back()->with('success', 'Data Kas Berhasil Diupdate');
    }


    public function kas_delete(Request $request)
    {
        Kas::where('id', $request->delete)->delete();
        return back()->with('success', 'Data Kas Berhasil Dihapus');
    }
}
