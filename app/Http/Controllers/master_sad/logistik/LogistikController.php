<?php

namespace App\Http\Controllers\master_sad\logistik;

use App\Http\Controllers\Controller;
use App\Models\Barang;
use App\Models\Breakdown;
use App\Models\EquipMaster;
use App\Models\Equipment;
use App\Models\LogMaster;
use App\Models\Master;
use App\Models\Navigator;
use App\Models\Pemakaian_Barang;
use App\Models\Pemesanan_Barang;
use App\Models\Pemesanan_Barang_List;
use App\Models\Stok;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Crypt;
use Illuminate\Support\Facades\Redirect;

class LogistikController extends Controller
{
    public function pemakaian_barang()
    {
        $nav = Navigator::where('karyawan', Auth::user()->id)->get();
        $periode = date('m-Y');
        $master = Master::where('status', 'Present')->first();
        $filter = Equipment::where('status', 'Aktif')->get();
        $cek = Pemakaian_Barang::all()->count();
        $pb = Pemakaian_Barang::all();
        $barang = Barang::where('status', 'Aktif')->get();
        return view('author.sad.log.pemakaian_barang', compact('nav', 'barang', 'filter', 'pb', 'cek', 'master', 'periode'));
    }


    public function pemakaian_excel($id)
    {
        $nav = Navigator::where('karyawan', Auth::user()->id)->get();
        $periode = date('m-Y');
        $master = Master::where('status', 'Present')->first();
        $filter = Equipment::where('status', 'Aktif')->get();
        $cek = Pemakaian_Barang::all()->count();
        $pb = Pemakaian_Barang::all();
        $barang = Barang::where('status', 'Aktif')->get();
        return view('asset.sad.log.pemakaian_excel', compact('nav', 'barang', 'filter', 'pb', 'cek', 'master', 'periode'));
    }


    public function pemakaian_store(Request $request)
    {
        // dd($request->all());
        Pemakaian_Barang::create([
            'tgl' => $request->tgl,
            'equip_id' => $request->equip_id,
            'barang_id' => $request->barang_id,
            'jumlah' => $request->jumlah,
            'hmkm' => $request->hmkm,
            'ket' => $request->ket,
        ]);
        $barangID = $request->barang_id;
        $barang =  Barang::Find($barangID);
        $jumlah_pemakaian = $request->jumlah;
        $jumlah_barang = $barang->jumlah;
        $jumlah_aktual = $jumlah_barang - $jumlah_pemakaian;
        $barang->update([
            'jumlah' => $jumlah_aktual,
        ]);
        return back()->with('success', 'Data Pemakaian Barang Berhasil Disimpan');
    }


    public function pemakaian_update(Request $request, $id)
    {
        // dd($request->all());
        $pb =  Pemakaian_Barang::Find($id);
        $pb->update([
            'tgl' => $request->tgl,
            'equip_id' => $request->equip_id,
            'barang_id' => $request->barang_id,
            'jumlah' => $request->jumlah,
            'hmkm' => $request->hmkm,
            'ket' => $request->ket,
        ]);
        return back()->with('success', 'Data Pemakaian Barang Berhasil Diubah');
    }


    public function pemakaian_delete($id)
    {
        // dd($request->all());
        $pb =  Pemakaian_Barang::Find($id);
        $pb->delete();
        return back()->with('success', 'Data Pemakaian Barang Berhasil Dihapus');
    }


    public function pemesanan_barang()
    {
        $nav = Navigator::where('karyawan', Auth::user()->id)->get();
        $periode = date('m-Y');
        $master = Master::where('status', 'Present')->first();
        $cek = Pemesanan_Barang::all()->count();
        $pb = Pemesanan_Barang::all();
        $barang = Barang::where('status', 'Aktif')->get();
        return view('author.sad.log.pemesanan_barang', compact('nav', 'barang', 'pb', 'cek', 'master', 'periode'));
    }


    public function pemesanan_list($id)
    {
        $decrypID = Crypt::decryptString($id);
        $nav = Navigator::where('karyawan', Auth::user()->id)->get();
        $periode = date('m-Y');
        $master = Master::where('status', 'Present')->first();
        $pemesanan = Pemesanan_Barang::Find($decrypID);
        $barang = Barang::where('status', 'Aktif')->get();
        $cek = Pemesanan_Barang_List::where('pemesanan_id', $pemesanan->kode)->count();
        $pb = Pemesanan_Barang_List::where('pemesanan_id', $pemesanan->kode)->get();
        return view('asset.sad.log.pemesanan_barang_list', compact('nav', 'pb', 'cek', 'barang', 'master', 'periode', 'pemesanan'));
    }


    public function cek_barang($id)
    {
        $decrypID = Crypt::decryptString($id);
        $nav = Navigator::where('karyawan', Auth::user()->id)->get();
        $periode = date('m-Y');
        $master = Master::where('status', 'Present')->first();
        $pemesanan = Pemesanan_Barang::Find($decrypID);
        $barang = Barang::where('status', 'Aktif')->get();
        $cek = Pemesanan_Barang_List::where('pemesanan_id', $pemesanan->kode)->count();
        $pb = Pemesanan_Barang_List::where('pemesanan_id', $pemesanan->kode)->get();
        return view('asset.sad.log.cek_barang', compact('nav', 'pb', 'cek', 'barang', 'master', 'periode', 'pemesanan'));
    }


    // public function pemesanan_excel($id)
    // {
    //     $decrypID = Crypt::BcryptString($id);
    //     $nav = Navigator::where('karyawan', Auth::user()->id)->get();
    //     $periode = date('m-Y');
    //     $master = Master::where('status', 'Present')->first();
    //     $pemesanan = Pemesanan_Barang::Find($id);
    //     $cek = Pemesanan_Barang_List::where('pemesanan_id', $pemesanan->kode)->count;
    //     $pb = Pemesanan_Barang_List::where('pemesanan_id', $pemesanan->kode)->count;
    //     return view('asset.sad.log.pemakaian_excel', compact('nav', 'barang', 'filter', 'pb', 'cek', 'master', 'periode'));
    // }


    public function pemesanan_store(Request $request)
    {
        // dd($request->all());
        $messages = [
            'kode.unique' => 'Kode Pemesanan Sudah Terdaftar',
        ];
        $this->validate($request, [
            'kode' => 'unique:hwa_pemesanan_barang,kode',
        ], $messages);
        Pemesanan_Barang::create([
            'tgl' => $request->tgl,
            'kode' => $request->kode,
        ]);
        foreach ($request->barang_id as $key => $value) {
            $kode = $request->kode;
            $data['barang_id'] = $request->barang_id[$key];
            $data['pemesanan_id'] = $kode;
            Pemesanan_Barang_List::create($data);
        }
        return redirect()->route('pemesanan.barang');
    }


    public function adjust_barang(Request $request, $id)
    {
        // dd($request->all());
        $cek =  Pemesanan_Barang_List::Find($id);
        $cek->update([
            'token' => $request->token,
        ]);
        $barangDatang = $request->pesanan;
        $barangLama = $request->stok;
        $adjust = $barangDatang + $barangLama;

        $barangID = $cek->barang_id;
        $bro =  Barang::Find($barangID);
        $bro->update([
            'jumlah' => $adjust,
        ]);
        return back();
    }


    public function pemesanan_list_store(Request $request)
    {
        // dd($request->all());
        Pemesanan_Barang::where('id', $request->del_faktur)->delete();
        Pemesanan_Barang::create([
            'id' => $request->id_faktur,
            'tgl' => $request->tgl,
            'kode' => $request->kode,
            'status' => $request->status,
        ]);
        foreach ($request->del_barang as $key => $items) {
            Pemesanan_Barang_List::where('id', $request->del_barang[$key])->delete();
        }
        foreach ($request->id_barang as $key => $value) {
            $data['id'] = $request->id_barang[$key];
            $data['barang_id'] = $request->barang_id[$key];
            $data['pemesanan_id'] = $request->pemesanan_id[$key];
            $data['jumlah'] = $request->jumlah[$key];
            Pemesanan_Barang_List::create($data);
        }
        return redirect()->route('pemesanan.barang');
    }


    public function pemesanan_final(Request $request, $id)
    {
        // dd($request->all());
        $pb =  Pemesanan_Barang::Find($id);
        $pb->update([
            'status' => $request->status,
        ]);
        return back()->with('success', 'Faktur Pemesanan Berhasil Ditutup');
    }


    public function pemesanan_delete($id)
    {
        // dd($request->all());
        $pb =  Pemesanan_Barang::Find($id);
        $pb->delete();
        return back()->with('success', 'Faktur Pemesanan Barang Berhasil Dihapus');
    }
}
