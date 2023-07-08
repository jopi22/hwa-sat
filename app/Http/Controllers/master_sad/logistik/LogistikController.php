<?php

namespace App\Http\Controllers\master_sad\logistik;

use App\Http\Controllers\Controller;
use App\Models\Breakdown;
use App\Models\EquipMaster;
use App\Models\Equipment;
use App\Models\LogMaster;
use App\Models\Master;
use App\Models\Navigator;
use App\Models\Stok;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Crypt;

class LogistikController extends Controller
{
    public function log_equip_list()
    {
        $nav = Navigator::where('karyawan', Auth::user()->id)->get();
        $periode = date('m-Y');
        $master = Master::where('status', 'Present')->first();
        $e_list = EquipMaster::where('master_id', $master->id)->get();
        return view('author.sad.log.log_equip_list', compact('e_list', 'nav', 'master', 'periode'));
    }


    public function log_equip_info($id)
    {
        $nav = Navigator::where('karyawan', Auth::user()->id)->get();
        $decryptID = Crypt::decryptString($id);
        $periode = date('m-Y');
        $master = Master::where('status', 'Present')->first();
        $equip_m = EquipMaster::where('master_id', $master->id)
            ->where('equip_id', $decryptID)->first();
        $equip_list = EquipMaster::where('master_id', $master->id)->get();
        $log_list = LogMaster::where('master_id', $master->id)
            ->where('equip_id', $decryptID)
            ->get();
        $cek_log = LogMaster::where('master_id', $master->id)
            ->where('equip_id', $decryptID)
            ->count();
        $cek_all = LogMaster::where('master_id', $master->id)
            ->count();
        return view('asset.sad.log.log_equip_info', compact('equip_m', 'nav', 'cek_log', 'cek_all', 'equip_list', 'log_list', 'master', 'periode'));
    }


    public function log_equip_edit($id)
    {
        $nav = Navigator::where('karyawan', Auth::user()->id)->get();
        $decryptID = Crypt::decryptString($id);
        $periode = date('m-Y');
        $master = Master::where('status', 'Present')->first();
        $equip_m = EquipMaster::where('master_id', $master->id)
            ->where('equip_id', $decryptID)->first();
        $equip_list = EquipMaster::where('master_id', $master->id)->get();
        $log_list = LogMaster::where('master_id', $master->id)
            ->where('equip_id', $decryptID)
            ->get();
        $cek_log = LogMaster::where('master_id', $master->id)
            ->where('equip_id', $decryptID)
            ->count();
        $cek_all = LogMaster::where('master_id', $master->id)
            ->count();
        $barang = Stok::all();
        return view('asset.sad.log.log_equip_edit', compact('equip_m', 'nav', 'barang', 'equip_list', 'cek_log', 'cek_all', 'log_list', 'master', 'periode'));
    }


    public function log_equip_create($id)
    {
        $nav = Navigator::where('karyawan', Auth::user()->id)->get();
        $decryptID = Crypt::decryptString($id);
        $periode = date('m-Y');
        $master = Master::where('status', 'Present')->first();
        $equip_m = EquipMaster::where('master_id', $master->id)
            ->where('equip_id', $decryptID)->first();
        $equip_list = EquipMaster::where('master_id', $master->id)->get();
        $cek_log = LogMaster::where('master_id', $master->id)
            ->where('equip_id', $decryptID)
            ->count();
        $cek_all = LogMaster::where('master_id', $master->id)
            ->count();
        $log_list = LogMaster::where('master_id', $master->id)
            ->where('equip_id', $decryptID)
            ->get();
        $barang = Stok::all();
        return view('asset.sad.log.log_equip_create', compact('equip_m', 'nav', 'barang', 'cek_log', 'equip_list', 'cek_all', 'log_list', 'master', 'periode'));
    }


    public function log_equip_update(Request $request)
    {
        // dd($request->all());
        foreach ($request->delete as $key => $items) {
            LogMaster::where('id', $request->delete[$key])->delete();
        }
        foreach ($request->id as $key => $items) {
            $log['id'] = $request->id[$key];
            $log['master_id'] = $request->master_id[$key];
            $log['equip_id'] = $request->equip_id[$key];
            $log['tgl'] = $request->tgl[$key];
            $log['barang_id'] = $request->barang[$key];
            $log['jumlah'] = $request->jumlah[$key];
            $log['hmkm'] = $request->hmkm[$key];
            $log['ket'] = $request->ket[$key];
            $log['log_tipe'] = $request->log_tipe[$key];
            LogMaster::create($log);
        }
        return back()->with('success', 'Data Logistik Berhasil Diupdate');
    }


    public function log_equip_store(Request $request)
    {
        // dd($request->all());
        foreach ($request->master_id as $key => $items) {
            $log['master_id'] = $request->master_id[$key];
            $log['equip_id'] = $request->equip_id[$key];
            $log['tgl'] = $request->tgl[$key];
            $log['barang_id'] = $request->barang[$key];
            $log['jumlah'] = $request->jumlah[$key];
            $log['hmkm'] = $request->hmkm[$key];
            $log['ket'] = $request->ket[$key];
            $log['log_tipe'] = $request->log_tipe[$key];
            LogMaster::create($log);
        }
        return back()->with('success', 'Data Logistik Berhasil Ditambah');
    }


    public function log_m_list()
    {
        $nav = Navigator::where('karyawan', Auth::user()->id)->get();
        $periode = date('m-Y');
        $master = Master::where('status', 'Present')->first();
        $log_list = LogMaster::where('master_id', $master->id)
            ->where('log_tipe', 'Masuk')
            ->get();
        $cek_log = LogMaster::where('master_id', $master->id)
            ->where('log_tipe', 'Masuk')
            ->count();
        $cek_all = LogMaster::where('master_id', $master->id)
            ->count();
            $barang = Stok::all();
        return view('asset.sad.log.log_m_info', compact('nav','barang', 'cek_log', 'cek_all','log_list', 'master', 'periode'));
    }


    public function log_m_create()
    {
        $nav = Navigator::where('karyawan', Auth::user()->id)->get();
        $periode = date('m-Y');
        $master = Master::where('status', 'Present')->first();
        $barang = Stok::all();
        return view('asset.sad.log.log_m_create', compact('nav', 'barang',  'master', 'periode'));
    }


    public function log_m_store(Request $request)
    {
        // dd($request->all());
        foreach ($request->master_id as $key => $items) {
            $log['master_id'] = $request->master_id[$key];
            $log['tgl'] = $request->tgl[$key];
            $log['barang_id'] = $request->barang[$key];
            $log['jumlah'] = $request->jumlah[$key];
            $log['ket'] = $request->ket[$key];
            $log['log_tipe'] = $request->log_tipe[$key];
            LogMaster::create($log);
        }
        return back()->with('success', 'Data Barang Berhasil Ditambah');
    }


    public function log_m_update(Request $request, $id)
    {
        // dd($request->all());
        $log_masuk = LogMaster::Find($id);
        $log_masuk_data = [
            'tgl' => $request->tgl,
            'barang_id' => $request->barang_id,
            'jumlah' => $request->jumlah,
            'ket' => $request->ket,
        ];
        $log_masuk->update($log_masuk_data);
        return back()->with('success', 'Data Barang Masuk Berhasil Diubah');
    }


    public function log_m_delete(Request $request)
    {
        LogMaster::where('id', $request->delete)->delete();
        return back()->with('success', 'Data Barang Masuk Berhasil Dihapus');
    }
}
