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
use App\Models\SoData;
use App\Models\SoPeriode;
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


    public function so_periode()
    {
        $nav = Navigator::where('karyawan', Auth::user()->id)->get();
        $periode = date('m-Y');
        $master = Master::where('status', 'Present')->first();
        $cek = SoPeriode::all()->count();
        $so = SoPeriode::orderBy('tgl', 'DESC')->get();
        $barang = Barang::where('status', 'Aktif')->get();
        return view('author.sad.log.so_periode', compact('nav', 'barang', 'so', 'cek', 'master', 'periode'));
    }


    public function so_store(Request $request)
    {
        // dd($request->all());
        $messages = [
            'tgl.unique' => 'Tanggal SO Sudah Terdaftar',
            'kode.unique' => 'Kode SO Sudah Terdaftar',
        ];
        $this->validate($request, [
            'tgl' => 'unique:hwa_so_periode,tgl',
            'kode' => 'unique:hwa_so_periode,kode',
        ], $messages);
        SoPeriode::create([
            'tgl' => $request->tgl,
            'kode' => $request->kode,
        ]);
        foreach ($request->barang_id as $key => $value) {
            $so = $request->kode;
            $data['barang_id'] = $request->barang_id[$key];
            $data['stok_awal'] = $request->stok_awal[$key];
            $data['so_id'] = $so;
            SoData::create($data);
        }
        return back()->with('success', 'Data SO Berhasil Dibuat');
    }


    public function so_update(Request $request, $id)
    {
        // dd($request->all());
        $so = SoPeriode::Find($id);
        $so->update([
            'tgl' => $request->tgl,
        ]);
        return back()->with('success', 'Data SO Berhasil Diubah');
    }


    public function so_delete(Request $request, $id)
    {
        SoPeriode::where('id', $id)->delete();
        return back()->with('success', 'Data SO Berhasil Dihapus');
    }


    public function cetak_pertama($id)
    {
        $decrypID = Crypt::decryptString($id);
        $nav = Navigator::where('karyawan', Auth::user()->id)->get();
        $periode = date('m-Y');
        $master = Master::where('status', 'Present')->first();
        $so = SoPeriode::Find($decrypID);
        $barang = Barang::where('status', 'Aktif')->get();
        $cek = SoData::where('so_id', $so->kode)->count();
        $pb = SoData::where('so_id', $so->kode)->get();
        return view('asset.sad.log.cetak_pertama', compact('nav', 'pb', 'cek', 'barang', 'master', 'periode', 'so'));
    }


    public function cetak_kedua($id)
    {
        $decrypID = Crypt::decryptString($id);
        $nav = Navigator::where('karyawan', Auth::user()->id)->get();
        $periode = date('m-Y');
        $master = Master::where('status', 'Present')->first();
        $so = SoPeriode::Find($decrypID);
        $barang = Barang::where('status', 'Aktif')->get();
        $cek = SoData::where('so_id', $so->kode)->count();
        $pb = SoData::where('so_id', $so->kode)->get();
        return view('asset.sad.log.cetak_kedua', compact('nav', 'pb', 'cek', 'barang', 'master', 'periode', 'so'));
    }


    public function cetak_pertama_store(Request $request)
    {
        // dd($request->all());
        SoPeriode::where('id', $request->periode_del)->delete();
        SoPeriode::create([
            'id' => $request->periode_id,
            'tgl' => $request->tgl,
            'kode' => $request->kode,
            'hasil' => $request->hasil,
            'status' => $request->status,
        ]);

        foreach ($request->data_del as $key => $items) {
            SoData::where('id', $request->data_del[$key])->delete();
        }
        foreach ($request->data_id as $key => $value) {
            $stok_awal = $request->stok_awal[$key];
            $stok_aktual = $request->stok_aktual[$key];
            $selisih = $stok_aktual - $stok_awal;
            $data['id'] = $request->data_id[$key];
            $data['barang_id'] = $request->barang_id[$key];
            $data['so_id'] = $request->so_id[$key];
            $data['stok_awal'] = $request->stok_awal[$key];
            $data['stok_cetak1'] = $request->stok_aktual[$key];
            $data['selisih'] = $selisih;
            SoData::create($data);
        }
        return redirect()->route('so.periode');
    }


    public function cetak_kedua_store(Request $request)
    {
        // dd($request->all());
        SoPeriode::where('id', $request->periode_del)->delete();
        SoPeriode::create([
            'id' => $request->periode_id,
            'tgl' => $request->tgl,
            'kode' => $request->kode,
            'hasil' => $request->hasil,
            'status' => $request->status,
        ]);

        foreach ($request->data_del as $key => $items) {
            SoData::where('id', $request->data_del[$key])->delete();
        }
        foreach ($request->data_id as $key => $value) {
            $stok_awal = $request->stok_awal[$key];
            $stok_cetak1 = $request->stok_cetak1[$key];
            $stok_cetak2 = $request->stok_cetak2[$key];
            $stok_so = $stok_cetak1 + $stok_cetak2;
            $selisih = $stok_so - $stok_awal;
            $data['id'] = $request->data_id[$key];
            $data['barang_id'] = $request->barang_id[$key];
            $data['so_id'] = $request->so_id[$key];
            $data['stok_awal'] = $request->stok_awal[$key];
            $data['stok_cetak1'] = $request->stok_cetak1[$key];
            $data['stok_cetak2'] = $request->stok_cetak2[$key];
            $data['selisih'] = $selisih;
            SoData::create($data);
        }
        return redirect()->route('so.periode');
    }


    public function so_adjust($id)
    {
        $decrypID = Crypt::decryptString($id);
        $nav = Navigator::where('karyawan', Auth::user()->id)->get();
        $periode = date('m-Y');
        $master = Master::where('status', 'Present')->first();
        $so = SoPeriode::Find($decrypID);
        $barang = Barang::where('status', 'Aktif')->get();
        $cek = SoData::where('so_id', $so->kode)->count();
        $pb = SoData::where('so_id', $so->kode)->get();
        return view('asset.sad.log.so_adjust', compact('nav', 'pb', 'cek', 'barang', 'master', 'periode', 'so'));
    }


    public function so_adjust_store(Request $request)
    {
        // dd($request->all());
        foreach ($request->data_del as $key => $items) {
            SoData::where('id', $request->data_del[$key])->delete();
        }
        foreach ($request->data_id as $key => $value) {
            $stok_awal = $request->stok_awal[$key];
            $stok_cetak1 = $request->stok_cetak1[$key];
            $stok_cetak2 = $request->stok_cetak2[$key];
            $stok_so = $stok_cetak1 + $stok_cetak2;
            $selisih = $stok_so - $stok_awal;
            $data['id'] = $request->data_id[$key];
            $data['barang_id'] = $request->barang_id[$key];
            $data['so_id'] = $request->so_id[$key];
            $data['stok_awal'] = $request->stok_awal[$key];
            $data['stok_cetak1'] = $request->stok_cetak1[$key];
            $data['stok_cetak2'] = $request->stok_cetak2[$key];
            $data['selisih'] = $selisih;
            SoData::create($data);
        }
        SoPeriode::where('id', $request->periode_del)->delete();
        SoPeriode::create([
            'id' => $request->periode_id,
            'tgl' => $request->tgl,
            'kode' => $request->kode,
            'hasil' => $selisih,
            'status' => $request->status,
        ]);
        foreach ($request->barang_del as $key => $items) {
            Barang::where('id', $request->barang_del[$key])->delete();
        }
        foreach ($request->barang_db as $key => $value) {
            $data['id'] = $request->barang_db[$key];
            $data['barang'] = $request->barang[$key];
            $data['kode'] = $request->kode_barang[$key];
            $data['kategori'] = $request->kategori[$key];
            $data['status'] = $request->status_barang[$key];
            $data['satuan'] = $request->satuan[$key];
            $data['jumlah'] = $stok_so;
            Barang::create($data);
        }
        return redirect()->route('so.periode');
    }
}
