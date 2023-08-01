<?php

namespace App\Http\Controllers\master_sad\keuangan;

use App\Http\Controllers\Controller;
use App\Models\Kas;
use App\Models\Master;
use App\Models\Navigator;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class KasController extends Controller
{
    public function kas_list()
    {
        $nav = Navigator::where('karyawan', Auth::user()->id)->get();
        $periode = date('m-Y');
        $master = Master::where('status', 'Present')->first();
        $kas = Kas::where('master_id', $master->id)->get();
        //Cek
        $cek = Kas::where('master_id', $master->id)->count();
        $cek_debit = Kas::where('master_id', $master->id)
            ->where('tipe', 'Debit')->count();
        $cek_kredit = Kas::where('master_id', $master->id)
            ->where('tipe', 'Kredit')->count();
        $cek_site = $cek_debit + $cek_kredit;

        $cek_debit_pusat = Kas::where('master_id', $master->id)
            ->where('tipe', 'Debit Pusat')->count();
        $cek_kredit_pusat = Kas::where('master_id', $master->id)
            ->where('tipe', 'Kredit Pusat')->count();
        $cek_pusat = $cek_debit_pusat + $cek_kredit_pusat;
        //Perhitungan
        $debit_pusat = Kas::where('master_id', $master->id)
            ->where('tipe', 'Debit Pusat')->sum('jumlah');
        $kredit_pusat = Kas::where('master_id', $master->id)
            ->where('tipe', 'Kredit Pusat')->sum('jumlah');
        $debit = Kas::where('master_id', $master->id)
            ->where('tipe', 'Debit')->sum('jumlah');
        $kredit = Kas::where('master_id', $master->id)
            ->where('tipe', 'Kredit')->sum('jumlah');
        $kredit_p = Kas::where('master_id', $master->id)
            ->where('tipe', 'Kredit Pusat')->sum('jumlah');

        $saldo = $debit - $kredit;
        $saldo_pusat = $debit_pusat - $kredit_pusat;
        $total = $debit + $kredit;
        $total_pusat = $debit_pusat + $kredit_pusat;
        $grand_kredit = $kredit_p + $kredit;


        $per_debit_raw = $debit * 100 / $total;
        $per_kredit_raw = $kredit * 100 / $total;
        $per_debit = number_format($per_debit_raw);
        $per_kredit = number_format($per_kredit_raw);

        $per_debit_pusat_raw = $debit_pusat * 100 / $total_pusat;
        $per_kredit_pusat_raw = $kredit_pusat * 100 / $total_pusat;
        $per_debit_pusat = number_format($per_debit_pusat_raw);
        $per_kredit_pusat = number_format($per_kredit_pusat_raw);

        return view('author.sad.kas.kas_list', compact('periode', 'per_debit', 'per_kredit', 'per_debit_pusat', 'per_kredit_pusat', 'saldo_pusat', 'nav', 'master', 'cek', 'kas', 'debit', 'kredit', 'debit_pusat', 'kredit_pusat', 'kredit_p', 'saldo', 'grand_kredit'));
    }


    public function kas_excel()
    {
        $nav = Navigator::where('karyawan', Auth::user()->id)->get();
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
        return view('asset.sad.kas.kas_excel', compact('periode', 'nav', 'master', 'cek', 'kas', 'debit', 'kredit', 'kredit_p', 'saldo', 'grand_kredit'));
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
