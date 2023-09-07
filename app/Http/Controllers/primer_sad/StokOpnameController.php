<?php

namespace App\Http\Controllers\primer_sad;

use App\Http\Controllers\Controller;
use App\Models\Barang;
use App\Models\Brand;
use App\Models\EquipMaster;
use App\Models\Master;
use App\Models\Mitra;
use App\Models\Navigator;
use App\Models\Pemakaian_Barang;
use App\Models\Stok;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Crypt;

class StokOpnameController extends Controller
{
    public function barang()
    {
        $nav = Navigator::where('karyawan', Auth::user()->id)->get();
        $periode = date('m-Y');
        $master = Master::where('status', 'Present')->first();
        $cek = Barang::where('status', 'Aktif')->count();
        $bar = Barang::where('status', 'Aktif')->get();
        return view('author.sad.log.barang', compact('bar',  'cek', 'nav', 'master', 'periode'));
    }


    public function barang_excel($id)
    {
        $nav = Navigator::where('karyawan', Auth::user()->id)->get();
        $periode = date('m-Y');
        $master = Master::where('status', 'Present')->first();
        $cek = Barang::where('status', 'Aktif')->count();
        $bar = Barang::where('status', 'Aktif')->get();
        return view('asset.sad.log.barang_excel', compact('bar',  'cek', 'nav', 'master', 'periode'));
    }


    public function barang_store(Request $request)
    {
        // dd($request->all());
        $messages = [
            'kode.unique' => 'Kode Barang Sudah Terdaftar',
        ];
        $this->validate($request, [
            'kode' => 'unique:hwa_barang,kode',
        ], $messages);
        Barang::create([
            'kode' => $request->kode,
            'barang' => $request->barang,
            'kategori' => $request->kategori,
            'status' => $request->status,
            'jumlah' => $request->jumlah,
            'satuan' => $request->satuan,
        ]);
        return back()->with('success', 'Data Barang Berhasil Disimpan');
    }


    public function barang_update(Request $request, $id)
    {
        // dd($request->all());
        $ond = Barang::Find($id);
        $ond_data = [
            'kode' => $request->kode,
            'barang' => $request->barang,
            'kategori' => $request->kategori,
            'status' => $request->status,
            'jumlah' => $request->jumlah,
            'satuan' => $request->satuan,
        ];
        $ond->update($ond_data);
        return back()->with('success', 'Data Barang Berhasil Diubah');
    }


    public function barang_delete(Request $request, $id)
    {
        $ond = Barang::Find($id);
        $ond_data = [
            'status' => $request->status,
        ];
        $ond->update($ond_data);
        return back()->with('success', 'Data Onderdil Berhasil Dihapus');
    }
}
