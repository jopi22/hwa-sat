<?php

namespace App\Http\Controllers\rekap\logistik;

use App\Http\Controllers\Controller;
use App\Models\EquipMaster;
use App\Models\Equipment;
use App\Models\LogMaster;
use App\Models\Master;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Crypt;

class RlogistikController extends Controller
{
    public function log_equip_list()
    {
        $master = Master::where('status', 'Validasi')->first();
        $e_list = EquipMaster::where('master_id', $master->id)->get();
        return view('asset.sad.rekap.log.log_equip_list', compact('e_list', 'master'));
    }


    public function log_equip_info($id)
    {
        $decryptID = Crypt::decryptString($id);
        $master = Master::where('status', 'Validasi')->first();
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
        return view('asset.sad.rekap.log.log_equip_info', compact('equip_m', 'cek_log', 'cek_all', 'equip_list', 'log_list', 'master'));
    }


    public function log_equip_edit($id)
    {
        $decryptID = Crypt::decryptString($id);
        $master = Master::where('status', 'Validasi')->first();
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
        return view('asset.sad.rekap.log.log_equip_edit', compact('equip_m', 'equip_list', 'cek_log', 'cek_all', 'log_list', 'master'));
    }


    public function log_equip_create($id)
    {
        $decryptID = Crypt::decryptString($id);
        $master = Master::where('status', 'Validasi')->first();
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
        return view('asset.sad.rekap.log.log_equip_create', compact('equip_m', 'cek_log', 'equip_list', 'cek_all', 'log_list', 'master'));
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
            $log['barang'] = $request->barang[$key];
            $log['jumlah'] = $request->jumlah[$key];
            $log['hmkm'] = $request->hmkm[$key];
            $log['ket'] = $request->ket[$key];
            $log['satuan'] = $request->satuan[$key];
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
            $log['barang'] = $request->barang[$key];
            $log['jumlah'] = $request->jumlah[$key];
            $log['hmkm'] = $request->hmkm[$key];
            $log['ket'] = $request->ket[$key];
            $log['satuan'] = $request->satuan[$key];
            LogMaster::create($log);
        }

        return back()->with('success', 'Data Logistik Berhasil Ditambah');
    }
}
