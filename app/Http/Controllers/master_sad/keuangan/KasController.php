<?php

namespace App\Http\Controllers\master_sad\keuangan;

use App\Http\Controllers\Controller;
use App\Models\Kas;
use App\Models\Master;
use Illuminate\Http\Request;

class KasController extends Controller
{
    public function kas_list()
    {
        $periode = date('m-Y');
        $master = Master::where('status', 'Present')->first();
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
        return view('author.sad.kas.kas_list', compact('periode','master','cek','kas','debit','kredit','kredit_p','saldo','grand_kredit'));
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
