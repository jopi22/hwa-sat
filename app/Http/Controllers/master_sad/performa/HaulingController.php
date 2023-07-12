<?php

namespace App\Http\Controllers\master_sad\performa;

use App\Http\Controllers\Controller;
use App\Models\Breakdown;
use App\Models\Dedicated;
use App\Models\EquipMaster;
use App\Models\Equipment;
use App\Models\Hauling;
use App\Models\KarMaster;
use App\Models\Location;
use App\Models\Lokasi;
use App\Models\Master;
use App\Models\Navigator;
use App\Models\Performa_hm;
use App\Models\Shift;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Crypt;

class HaulingController extends Controller
{
    public function hauling_list()
    {
        $nav = Navigator::where('karyawan', Auth::user()->id)->get();
        $periode = date('m-Y');
        $master = Master::where('status', 'Present')->first();
        $cek = Hauling::where('master_id', $master->id)
            ->count();
        $hauling = Hauling::where('master_id', $master->id)
            ->get();
        $equip = Equipment::where('status', 'Aktif')
            ->where('tipe', 'Dump Truck')
            ->get();
        $lok = Location::where('status', '<>', 'Delete')->get();
        $dedi = Dedicated::where('status', '<>', 'Delete')->get();
        $kar = KarMaster::where('master_id', $master->id)
            ->get();
        return view('author.sad.pfm.ha_list', compact('hauling', 'nav', 'master', 'periode', 'cek', 'equip', 'kar', 'lok', 'dedi'));
    }


    public function hauling_update(Request $request, $id)
    {
        // dd($request->all());

        $hm = Hauling::Find($id);
        $ha_data = [
            'tgl' => $request->tgl,
            'kar_id' => $request->kar_id,
            'equip_id' => $request->equip_id,
            'dedi_id' => $request->dedi_id,
            'master_id' => $request->master_id,
            'start_loc' => $request->start_loc,
            'end_loc' => $request->end_loc,
            'timbangan' => $request->timbangan,
        ];
        $hm->update($ha_data);
        return back()->with('success', 'Data Hauling Berhasil Diupdate');
    }


    public function hauling_store(Request $request)
    {
        // dd($request->all());
        foreach ($request->tgl as $key => $value) {
            $data['tgl'] = $request->tgl[$key];
            $data['kar_id'] = $request->kar_id[$key];
            $data['equip_id'] = $request->equip_id[$key];
            $data['dedi_id'] = $request->dedi_id[$key];
            $data['master_id'] = $request->master_id[$key];
            $data['start_loc'] = $request->start_loc[$key];
            $data['end_loc'] = $request->end_loc[$key];
            $data['timbangan'] = $request->timbangan[$key];
            Hauling::create($data);
        }
        return back()->with('success', 'Data Hauling Berhasil Disimpan');
    }


    public function hauling_delete($id)
    {
        Hauling::where('id', $id)->delete();
        return back()->with('success', 'Data Hauling Berhasil Dihapus');
    }


    public function hauling_print_excel($id)
    {
        $nav = Navigator::where('karyawan', Auth::user()->id)->get();
        $periode = date('m-Y');
        $master = Master::where('status', 'Present')->first();
        $cek = Hauling::where('master_id', $master->id)
            ->count();
        $hauling = Hauling::where('master_id', $master->id)
            ->get();
        $equip = Equipment::where('status', 'Aktif')
            ->where('tipe', 'Dump Truck')
            ->get();
        $lok = Location::where('status', '<>', 'Delete')->get();
        $dedi = Dedicated::where('status', '<>', 'Delete')->get();
        $kar = KarMaster::where('master_id', $master->id)
            ->get();
        return view('asset.sad.pfm.ha_print_excel', compact('hauling', 'nav', 'master', 'periode', 'cek', 'equip', 'kar', 'lok', 'dedi'));
    }
}
