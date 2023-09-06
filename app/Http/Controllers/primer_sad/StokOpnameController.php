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




    public function liq_list()
    {
        $nav = Navigator::where('karyawan', Auth::user()->id)->get();
        $periode = date('m-Y');
        $master = Master::where('status', 'Present')->first();
        $cek = Barang::where('jenis', 'Liquid')->count();
        $liq = Barang::where('jenis', 'Liquid')->get();
        $brand = Brand::all();
        return view('author.sad.log.liquid', compact('liq', 'brand', 'cek', 'nav', 'master', 'periode'));
    }


    public function liq_store(Request $request)
    {
        // dd($request->all());
        Barang::create([
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
        $liq = Barang::Find($id);
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
        Barang::where('id', $request->delete)->delete();
        return back()->with('success', 'Data Liquid Berhasil Dihapus');
    }


    public function verif_info($id)
    {
        $nav = Navigator::where('karyawan', Auth::user()->id)->get();
        $periode = date('m-Y');
        $master = Master::where('status', 'Present')->first();
        $barang = Barang::Find($id);
        $Barang = $barang->jumlah;
        $log = Pemakaian_Barang::where('master_id', $master->id)
            ->where('status', 'Belum')
            ->where('barang_id', $id)
            ->get();
        $cek = Pemakaian_Barang::where('master_id', $master->id)
            ->where('status', 'Belum')
            ->where('barang_id', $id)
            ->count();

        $masuk = Pemakaian_Barang::where('master_id', $master->id)
            ->where('status', 'Belum')
            ->where('log_tipe', 'Masuk')
            ->where('barang_id', $id)
            ->sum('jumlah');
        $keluar = Pemakaian_Barang::where('master_id', $master->id)
            ->where('status', 'Belum')
            ->where('log_tipe', 'Keluar')
            ->where('barang_id', $id)
            ->sum('jumlah');

        $jum_tot = $Barang + $masuk - $keluar;
        return view('author.sad.log.verif', compact('log', 'Barang', 'jum_tot', 'barang', 'keluar', 'masuk', 'cek', 'nav', 'master', 'periode'));
    }


    public function verif_update(Request $request)
    {
        // dd($request->all());
        foreach ($request->delete_log as $key => $items) {
            Pemakaian_Barang::where('id', $request->delete_log[$key])->delete();
        }
        foreach ($request->id as $key => $items) {
            $log['id'] = $request->id[$key];
            $log['master_id'] = $request->master_id[$key];
            $log['equip_id'] = $request->equip_id[$key];
            $log['tgl'] = $request->tgl[$key];
            $log['barang_id'] = $request->barang_id[$key];
            $log['jumlah'] = $request->jumlah[$key];
            $log['hmkm'] = $request->hmkm[$key];
            $log['ket'] = $request->ket[$key];
            $log['log_tipe'] = $request->log_tipe[$key];
            $log['status'] = $request->status[$key];
            Pemakaian_Barang::create($log);
        }

        Barang::where('id', $request->delete_Barang)->delete();
        Barang::create([
            'id' => $request->id_stok,
            'barang' => $request->barang,
            'jenis' => $request->jenis,
            'brand' => $request->brand,
            'tipe_alat' => $request->tipe_alat,
            'jumlah' => $request->jum_tot,
            'satuan' => $request->satuan,
        ]);

        return back()->with('success', 'Data Berhasil Di Verifikasi');
    }
}
