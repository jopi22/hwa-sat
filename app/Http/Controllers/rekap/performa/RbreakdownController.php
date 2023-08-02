<?php

namespace App\Http\Controllers\rekap\performa;

use App\Http\Controllers\Controller;
use App\Models\Breakdown;
use App\Models\Dedicated;
use App\Models\EquipMaster;
use App\Models\Equipment;
use App\Models\Master;
use App\Models\Navigator;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class RbreakdownController extends Controller
{
    public function bd_list()
    {
        $nav = Navigator::where('karyawan', Auth::user()->id)->get();
        $periode = date('m-Y');
        $master = Master::where('status', 'Validasi')->first();
        $cek = Breakdown::where('master_id', $master->id)->count();
        $bd = Breakdown::orderBy('tgl', 'ASC')
            ->where('master_id', $master->id)->get();
        $e_list = EquipMaster::where('master_id', $master->id)->get();
        $equip = Equipment::where('status', 'Aktif')->get();
        $dedi = Dedicated::where('status', '<>', 'Delete')->get();
        return view('author.sad.rekap.pfm.bd_list', compact('equip', 'e_list', 'bd', 'dedi', 'nav', 'cek', 'periode', 'master'));
    }

    public function bd_excel($id)
    {
        $nav = Navigator::where('karyawan', Auth::user()->id)->get();
        $periode = date('m-Y');
        $master = Master::where('status', 'Validasi')->first();
        $cek = Breakdown::where('master_id', $master->id)->count();
        $bd = Breakdown::orderBy('tgl', 'ASC')
            ->where('master_id', $master->id)->get();
        $e_list = EquipMaster::where('master_id', $master->id)->get();
        $equip = Equipment::where('status', 'Aktif')->get();
        $dedi = Dedicated::where('status', '<>', 'Delete')->get();
        return view('asset.sad.rekap.performa.bd_excel', compact('equip', 'e_list', 'bd', 'dedi', 'nav', 'cek', 'periode', 'master'));
    }
}
