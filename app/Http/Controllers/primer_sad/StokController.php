<?php

namespace App\Http\Controllers\primer_sad;

use App\Http\Controllers\Controller;
use App\Models\Brand;
use App\Models\EquipMaster;
use App\Models\Master;
use App\Models\Mitra;
use App\Models\Navigator;
use App\Models\Stok;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Crypt;

class StokController extends Controller
{
    public function ond_list()
    {
        $nav = Navigator::where('karyawan', Auth::user()->id)->get();
        $periode = date('m-Y');
        $master = Master::where('status', 'Present')->first();
        $cek = Stok::where('jenis', 'Onderdil')->count();
        $ond = Stok::where('jenis', 'Onderdil')->get();
        $brand = Brand::all();
        return view('author.sad.log.onderdil', compact('ond','brand', 'cek', 'nav', 'master', 'periode'));
    }


    public function ond_store(Request $request)
    {
        // dd($request->all());
        Stok::create([
            'kode' => $request->kode,
            'barang' => $request->barang,
            'jenis' => $request->jenis,
            'brand' => $request->brand,
            'tipe_alat' => $request->tipe_alat,
            'jumlah' => $request->jumlah,
            'satuan' => $request->satuan,
        ]);
        return back()->with('success', 'Data Onderdil Berhasil Disimpan');
    }


    public function ond_update(Request $request, $id)
    {
        // dd($request->all());
        $ond = Stok::Find($id);
        $ond_data = [
            'kode' => $request->kode,
            'barang' => $request->barang,
            'jenis' => $request->jenis,
            'brand' => $request->brand,
            'tipe_alat' => $request->tipe_alat,
            'jumlah' => $request->jumlah,
            'satuan' => $request->satuan,
        ];
        $ond->update($ond_data);
        return back()->with('success', 'Data Onderdil Berhasil Diubah');
    }


    public function ond_delete(Request $request)
    {
        Stok::where('id', $request->delete)->delete();
        return back()->with('success', 'Data Onderdil Berhasil Dihapus');
    }


    public function liq_list()
    {
        $nav = Navigator::where('karyawan', Auth::user()->id)->get();
        $periode = date('m-Y');
        $master = Master::where('status', 'Present')->first();
        $cek = Stok::where('jenis', 'Liquid')->count();
        $liq = Stok::where('jenis', 'Liquid')->get();
        $brand = Brand::all();
        return view('author.sad.log.liquid', compact('liq','brand', 'cek', 'nav', 'master', 'periode'));
    }


    public function liq_store(Request $request)
    {
        // dd($request->all());
        Stok::create([
            'barang' => $request->barang,
            'jenis' => $request->jenis,
            'brand' => $request->brand,
            'tipe_alat' => $request->tipe_alat,
            'jumlah' => $request->jumlah,
            'satuan' => $request->satuan,
        ]);
        return back()->with('success', 'Data Liquid Berhasil Disimpan');
    }


    public function liq_update(Request $request, $id)
    {
        // dd($request->all());
        $liq = Stok::Find($id);
        $liq_data = [
            'barang' => $request->barang,
            'jenis' => $request->jenis,
            'brand' => $request->brand,
            'tipe_alat' => $request->tipe_alat,
            'jumlah' => $request->jumlah,
            'satuan' => $request->satuan,
        ];
        $liq->update($liq_data);
        return back()->with('success', 'Data Liquid Berhasil Diubah');
    }


    public function liq_delete(Request $request)
    {
        Stok::where('id', $request->delete)->delete();
        return back()->with('success', 'Data Liquid Berhasil Dihapus');
    }
}
