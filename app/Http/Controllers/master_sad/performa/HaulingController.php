<?php

namespace App\Http\Controllers\master_sad\performa;

use App\Http\Controllers\Controller;
use App\Models\Breakdown;
use App\Models\Dedicated;
use App\Models\EquipMaster;
use App\Models\Equipment;
use App\Models\Lokasi;
use App\Models\Master;
use App\Models\Navigator;
use App\Models\Performa_hm;
use App\Models\Shift;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class HaulingController extends Controller
{
    public function ha_list()
    {
        $nav = Navigator::where('karyawan', Auth::user()->id)->get();
        $periode = date('m-Y');
        $master = Master::where('status', 'Present')->first();
        $cek_perform = Performa_hm::where('master_id', $master->id)
            ->count();
        $equip = EquipMaster::where('master_id', $master->id)
            ->where('tipe', 'Dump Truck')
            ->get();
        $equipment = Equipment::all();
        $perform = Performa_hm::all();
        $sum = Performa_hm::all()->sum('hm_total');
        // $equip = Equipment::all();
        $lok = Lokasi::all();
        $dedi = Dedicated::all();
        $kar = User::where('status', '<>', 'Hidden')
            ->where('status', '<>', 'Delete')
            ->get();
        $shift = Shift::all();
        return view('author.sad.pfm.ha_list', compact('cek_perform', 'nav', 'master', 'periode', 'perform', 'equipment', 'equip', 'kar', 'lok', 'dedi', 'shift', 'sum'));
    }



    public function ha_update(Request $request, $id)
    {
        // dd($request->all());

        $hm = EquipMaster::Find($id);
        $ha_data = [
            'hauling' => $request->hauling,
        ];
        $hm->update($ha_data);
        return back()->with('success', 'Data Hauling Berhasil Diupdate');
    }

}
