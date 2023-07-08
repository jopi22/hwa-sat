<?php

namespace App\Http\Controllers\primer_sad;

use App\Http\Controllers\Controller;
use App\Models\Brand;
use App\Models\EquipMaster;
use App\Models\LogMaster;
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
        return view('author.sad.log.onderdil', compact('ond', 'brand', 'cek', 'nav', 'master', 'periode'));
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
        return view('author.sad.log.liquid', compact('liq', 'brand', 'cek', 'nav', 'master', 'periode'));
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


    public function verif_info($id)
    {
        $nav = Navigator::where('karyawan', Auth::user()->id)->get();
        $periode = date('m-Y');
        $master = Master::where('status', 'Present')->first();
        $barang = Stok::Find($id);
        $stok = $barang->jumlah;
        $log = LogMaster::where('master_id', $master->id)
            ->where('status', 'Belum')
            ->where('barang_id', $id)
            ->get();
        $cek = LogMaster::where('master_id', $master->id)
            ->where('status', 'Belum')
            ->where('barang_id', $id)
            ->count();

        $masuk = LogMaster::where('master_id', $master->id)
            ->where('status', 'Belum')
            ->where('log_tipe', 'Masuk')
            ->where('barang_id', $id)
            ->sum('jumlah');
        $keluar = LogMaster::where('master_id', $master->id)
            ->where('status', 'Belum')
            ->where('log_tipe', 'Keluar')
            ->where('barang_id', $id)
            ->sum('jumlah');

        $jum_tot = $stok + $masuk - $keluar;
        return view('author.sad.log.verif', compact('log','stok','jum_tot', 'barang','keluar', 'masuk', 'cek', 'nav', 'master', 'periode'));
    }


    public function verif_update(Request $request)
    {
        // dd($request->all());
        foreach ($request->delete_log as $key => $items) {
            LogMaster::where('id', $request->delete_log[$key])->delete();
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
            LogMaster::create($log);
        }

        Stok::where('id', $request->delete_stok)->delete();
        Stok::create([
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
