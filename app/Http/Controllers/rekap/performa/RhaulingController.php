<?php

namespace App\Http\Controllers\rekap\performa;

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

class RhaulingController extends Controller
{
    public function hauling_list()
    {
        $nav = Navigator::where('karyawan', Auth::user()->id)->get();
        $periode = date('m-Y');
        $master = Master::where('status', 'Validasi')->first();
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
        return view('author.sad.rekap.pfm.ha_list', compact('hauling', 'nav', 'master', 'periode', 'cek', 'equip', 'kar', 'lok', 'dedi'));
    }


    public function hauling_print_excel($id)
    {
        $nav = Navigator::where('karyawan', Auth::user()->id)->get();
        $periode = date('m-Y');
        $master = Master::where('status', 'Validasi')->first();
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
        return view('asset.sad.rekap.performa.ha_print_excel', compact('hauling', 'nav', 'master', 'periode', 'cek', 'equip', 'kar', 'lok', 'dedi'));
    }
}
