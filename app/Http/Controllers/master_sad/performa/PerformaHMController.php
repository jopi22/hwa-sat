<?php

namespace App\Http\Controllers\master_sad\performa;

use App\Http\Controllers\Controller;
use App\Models\Aktivitas;
use App\Models\Category;
use App\Models\Dedicated;
use App\Models\EquipMaster;
use App\Models\Equipment;
use App\Models\Jabatan;
use App\Models\KarMaster;
use App\Models\Location;
use App\Models\Lokasi;
use App\Models\Master;
use App\Models\Mitra;
use App\Models\Navigator;
use App\Models\User;
use App\Models\Performa_hm;
use App\Models\Shift;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Crypt;
use Illuminate\Support\Facades\Validator;

class PerformaHMController extends Controller
{
    public function hm_performance()
    {
        $nav = Navigator::where('karyawan', Auth::user()->id)->get();
        $periode = date('m-Y');
        $master = Master::where('status', 'Present')->first();
        $kar_list = KarMaster::where('master_id', $master->id)
            ->where('tipe_gaji', 'AI')
            ->get();
        $cek_perform = Performa_hm::where('master_id', $master->id)
            ->count();
        $perform_list = Performa_hm::where('master_id', $master->id)
            ->get();
        $hitung_list = Performa_hm::where('master_id', $master->id)
            ->count();
        $total_hm = Performa_hm::where('master_id', $master->id)
            ->sum('hm_total');
        $equip = EquipMaster::where('master_id', $master->id)
            ->get();
        $equipment = Equipment::where('status', 'Aktif')->get();
        $lok = Lokasi::all();
        $dedi = Dedicated::all();
        $kar = User::where('status', '<>', 'Hidden')
            ->where('status', '<>', 'Delete')
            ->get();
        $shift = Shift::all();
        //Perhitungan
        $t_pot = Performa_hm::where('master_id', $master->id)
            ->sum('hm_pot');
        $t_hm = Performa_hm::where('master_id', $master->id)
            ->sum('hm_total');
        $t_jam = Performa_hm::where('master_id', $master->id)
            ->sum('jam_total');
        $hm_grand = $t_hm + $t_jam - $t_pot;
        $str_sewa = $master->biaya_sewa;
        $tot_sewa = $hm_grand * $str_sewa;
        return view('author.sad.pfm.hm_performance', compact('t_pot', 'str_sewa', 't_hm', 't_jam', 'hm_grand', 'tot_sewa', 'cek_perform', 'nav', 'total_hm', 'kar_list', 'hitung_list', 'perform_list', 'equip', 'equipment', 'kar', 'lok', 'dedi', 'shift', 'master', 'periode'));
    }


    public function hm_performance_unit()
    {
        $nav = Navigator::where('karyawan', Auth::user()->id)->get();
        $periode = date('m-Y');
        $master = Master::where('status', 'Present')->first();
        $kar_list = KarMaster::where('master_id', $master->id)
            ->where('tipe_gaji', 'AI')
            ->get();
        $cek_perform = Performa_hm::where('master_id', $master->id)
            ->count();
        $perform_list = Performa_hm::where('master_id', $master->id)
            ->get();
        $hitung_list = Performa_hm::where('master_id', $master->id)
            ->count();
        $total_hm = Performa_hm::where('master_id', $master->id)
            ->sum('hm_total');
        $equip = EquipMaster::where('master_id', $master->id)
            ->get();
        $equipment = Equipment::where('status', 'Aktif')->get();
        $lok = Lokasi::all();
        $dedi = Dedicated::all();
        $kar = User::where('status', '<>', 'Hidden')
            ->where('status', '<>', 'Delete')
            ->get();
        $shift = Shift::all();
        $mitra = Mitra::where('status', 'Utama')->first();
        return view('author.sad.pfm.hm_performance_unit', compact('cek_perform','mitra', 'nav', 'total_hm', 'kar_list', 'hitung_list', 'perform_list', 'equip', 'equipment', 'kar', 'lok', 'dedi', 'shift', 'master', 'periode'));
    }


    public function hm_performance_od()
    {
        $nav = Navigator::where('karyawan', Auth::user()->id)->get();
        $periode = date('m-Y');
        $master = Master::where('status', 'Present')->first();
        $kar_list = KarMaster::where('master_id', $master->id)
            ->where('tipe_gaji', 'AI')
            ->get();
        $cek_perform = Performa_hm::where('master_id', $master->id)
            ->count();
        $perform_list = Performa_hm::where('master_id', $master->id)
            ->get();
        $hitung_list = Performa_hm::where('master_id', $master->id)
            ->count();
        $total_hm = Performa_hm::where('master_id', $master->id)
            ->sum('hm_total');
        $equip = EquipMaster::where('master_id', $master->id)
            ->get();
        $equipment = Equipment::all();
        $lok = Lokasi::all();
        $jab = Jabatan::all();
        $kar = User::where('status', '<>', 'Hidden')
            ->where('status', '<>', 'Delete')
            ->get();
        $shift = Shift::all();
        return view('author.sad.pfm.hm_performance_od', compact('cek_perform', 'nav', 'total_hm', 'kar_list', 'hitung_list', 'perform_list', 'equip', 'equipment', 'kar', 'lok', 'jab', 'shift', 'master', 'periode'));
    }


    public function hm_performance_od_print_excel($id)
    {
        $nav = Navigator::where('karyawan', Auth::user()->id)->get();
        $periode = date('m-Y');
        $master = Master::where('status', 'Present')->first();
        $kar_list = KarMaster::where('master_id', $master->id)
            ->where('tipe_gaji', 'AI')
            ->get();
        $cek_perform = Performa_hm::where('master_id', $master->id)
            ->count();
        $perform_list = Performa_hm::where('master_id', $master->id)
            ->get();
        $hitung_list = Performa_hm::where('master_id', $master->id)
            ->count();
        $total_hm = Performa_hm::where('master_id', $master->id)
            ->sum('hm_total');
        $equip = EquipMaster::where('master_id', $master->id)
            ->get();
        $equipment = Equipment::all();
        $lok = Lokasi::all();
        $jab = Jabatan::all();
        $kar = User::where('status', '<>', 'Hidden')
            ->where('status', '<>', 'Delete')
            ->get();
        $shift = Shift::all();
        return view('asset.sad.pfm.perform_od_print_excel', compact('cek_perform', 'nav', 'total_hm', 'kar_list', 'hitung_list', 'perform_list', 'equip', 'equipment', 'kar', 'lok', 'jab', 'shift', 'master', 'periode'));
    }


    public function hm_performance_print($id)
    {
        $nav = Navigator::where('karyawan', Auth::user()->id)->get();
        $periode = date('m-Y');
        $master = Master::where('status', 'Present')->first();
        $kar_list = KarMaster::where('master_id', $master->id)
            ->where('tipe_gaji', 'AI')
            ->get();
        $cek_perform = Performa_hm::where('master_id', $master->id)
            ->count();
        $perform_list = Performa_hm::where('master_id', $master->id)
            ->get();
        $hitung_list = Performa_hm::where('master_id', $master->id)
            ->count();
        $total_hm = Performa_hm::where('master_id', $master->id)
            ->sum('hm_total');
        $equip = EquipMaster::where('master_id', $master->id)
            ->get();
        $equipment = Equipment::all();
        $lok = Lokasi::all();
        $dedi = Dedicated::all();
        $kar = User::where('status', '<>', 'Hidden')
            ->where('status', '<>', 'Delete')
            ->get();
        $shift = Shift::all();
        return view('asset.sad.pfm.perform_hm_print_excel', compact('cek_perform', 'nav', 'total_hm', 'kar_list', 'hitung_list', 'perform_list', 'equip', 'equipment', 'kar', 'lok', 'dedi', 'shift', 'master', 'periode'));
    }


    public function hm_performance_unit_print_excel($id)
    {
        $nav = Navigator::where('karyawan', Auth::user()->id)->get();
        $periode = date('m-Y');
        $master = Master::where('status', 'Present')->first();
        $kar_list = KarMaster::where('master_id', $master->id)
            ->where('tipe_gaji', 'AI')
            ->get();
        $cek_perform = Performa_hm::where('master_id', $master->id)
            ->count();
        $perform_list = Performa_hm::where('master_id', $master->id)
            ->get();
        $hitung_list = Performa_hm::where('master_id', $master->id)
            ->count();
        $total_hm = Performa_hm::where('master_id', $master->id)
            ->sum('hm_total');
        $equip = EquipMaster::where('master_id', $master->id)
            ->get();
        $equipment = Equipment::where('status', 'Aktif')->get();
        $lok = Lokasi::all();
        $dedi = Dedicated::all();
        $kar = User::where('status', '<>', 'Hidden')
            ->where('status', '<>', 'Delete')
            ->get();
        $shift = Shift::all();
        return view('asset.sad.pfm.perform_unit_print_excel', compact('cek_perform', 'nav', 'total_hm', 'kar_list', 'hitung_list', 'perform_list', 'equip', 'equipment', 'kar', 'lok', 'dedi', 'shift', 'master', 'periode'));
    }


    public function hm_karyawan()
    {
        $nav = Navigator::where('karyawan', Auth::user()->id)->get();
        $periode = date('m-Y');
        $master = Master::where('status', 'Present')->first();
        $cek_perform = Performa_hm::where('master_id', $master->id)
            ->count();
        $kar_list = KarMaster::where('master_id', $master->id)
            ->where('tipe_gaji', 'AI')
            ->get();
        $jabatan = User::select('jabatan')->distinct()
            ->where('tipe_gaji', 'AI')->get();
        return view('author.sad.pfm.hm_karyawan', compact('cek_perform', 'nav', 'jabatan', 'master', 'periode', 'kar_list'));
    }

    public function hm_kar_info($id)
    {
        $nav = Navigator::where('karyawan', Auth::user()->id)->get();
        $decryptID = Crypt::decryptString($id);
        $periode = date('m-Y');
        $master = Master::where('status', 'Present')->first();
        $kar = KarMaster::Find($decryptID);
        $jabatan = Jabatan::all();
        $kar_list = KarMaster::where('master_id', $master->id)
            ->where('tipe_gaji', 'AI')
            ->get();
        $cek_perform = Performa_hm::where('master_id', $master->id)
            ->count();
        $data = Performa_hm::where('master_id', $master->id)
            ->where('kar_id', $kar->kar_id)
            ->get();
        $total_hm = Performa_hm::where('master_id', $master->id)
            ->where('kar_id', $kar->kar_id)
            ->sum('hm_total');
        $total_jam = Performa_hm::where('master_id', $master->id)
            ->where('kar_id', $kar->kar_id)
            ->sum('jam_total');
        $grand_total = $total_hm + $total_jam;
        $insentif = $grand_total * $master->insentif;
        return view('asset.sad.pfm.hm_kar_info', compact('cek_perform', 'kar_list', 'nav', 'insentif', 'kar', 'jabatan', 'master', 'periode', 'data', 'total_hm', 'total_jam', 'grand_total'));
    }


    public function hm_kar_refresh(Request $request)
    {
        // dd($request->all());
        $master = Master::where('status', 'Present')->first();
        $bro = $request->bro_id;
        $kar = KarMaster::Find($bro);
        $total_hm = Performa_hm::where('master_id', $master->id)
            ->where('kar_id', $kar->kar_id)
            ->sum('hm_total');
        $total_jam = Performa_hm::where('master_id', $master->id)
            ->where('kar_id', $kar->kar_id)
            ->sum('jam_total');
        $grand_total = $total_hm + $total_jam;
        $insentif = $grand_total * 20000;

        KarMaster::where('id', $bro)->delete();
        KarMaster::create([
            'id' => $bro,
            'master_id' => $kar->master_id,
            'kode_unik' => $kar->kode_unik,
            'tipe_gaji' => $kar->tipe_gaji,
            'kar_id' => $kar->kar_id,
            'hm_total' => $grand_total,
            'gaji_total' => $kar->gaji_total,
            'jam_total' => $kar->jam_total,
            'lemburan' => $kar->lemburan,
            'abs_h' => $kar->abs_h,
            'abs_a' => $kar->abs_a,
            'abs_i' => $kar->abs_i,
            'abs_itk' => $kar->abs_itk,
            'abs_s' => $kar->abs_s,
            'abs_stk' => $kar->abs_stk,
            'abs_c' => $kar->abs_c,
            'insentif' => $insentif,

        ]);
        return back()->with('success', 'Data HM Berhasil Disinkronkan');
    }


    public function kelola_hm()
    {
        $nav = Navigator::where('karyawan', Auth::user()->id)->get();
        $periode = date('m-Y');
        $master = Master::where('status', 'Present')->first();
        $cek_perform = Performa_hm::where('master_id', $master->id)
            ->count();
        $equip = EquipMaster::where('master_id', $master->id)
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
        return view('author.sad.pfm.hm_equip', compact('cek_perform', 'nav', 'master', 'periode', 'perform', 'equipment', 'equip', 'kar', 'lok', 'dedi', 'shift', 'sum'));
    }


    public function hm_equip_info($id)
    {
        $nav = Navigator::where('karyawan', Auth::user()->id)->get();
        $decryptID = Crypt::decryptString($id);
        $periode = date('m-Y');
        $master = Master::where('status', 'Present')->first();
        $equip_list = EquipMaster::where('master_id', $master->id)
            ->get();
        $equip_m = EquipMaster::where('equip_id', $decryptID)->first();
        $kar_filter = Performa_hm::select('kar_id')
            ->distinct()
            ->where('equip_id', $decryptID)
            ->where('master_id', $master->id)->get();
        $list = Performa_hm::where('equip_id', $decryptID)
            ->orderBy('id', 'ASC')
            ->where('master_id', $master->id)
            ->get();
        $cek = Performa_hm::where('equip_id', $decryptID)
            ->where('master_id', $master->id)->distinct('tgl')
            ->count();
        $cek_hm = Performa_hm::where('equip_id', $decryptID)
            ->where('master_id', $master->id)
            ->where('tipe', 'HM')
            ->count();
        $cek_manual = Performa_hm::where('equip_id', $decryptID)
            ->where('master_id', $master->id)
            ->where('tipe', 'Manual')
            ->count();
        $sum = Performa_hm::where('equip_id', $decryptID)
            ->where('master_id', $master->id)
            ->sum('hm_total');
        $max = Performa_hm::where('equip_id', $decryptID)
            ->where('master_id', $master->id)
            ->min('hm_awal');
        if ($cek > 0) {
            $rata2 = $sum / $cek;
            return view('asset.sad.pfm.hm_equip_info', compact('list', 'rata2', 'nav', 'master', 'periode', 'equip_list', 'cek_hm', 'cek_manual', 'kar_filter', 'equip_m', 'cek', 'sum', 'max'));
        } else {
            return view('asset.sad.pfm.hm_equip_info', compact('list', 'nav', 'master', 'periode', 'equip_list', 'cek_hm', 'cek_manual', 'kar_filter', 'equip_m', 'cek', 'sum', 'max'));
        }
    }


    public function hm_equip_print_excel($id)
    {
        $nav = Navigator::where('karyawan', Auth::user()->id)->get();
        $decryptID = Crypt::decryptString($id);
        $periode = date('m-Y');
        $master = Master::where('status', 'Present')->first();
        $equip_list = EquipMaster::where('master_id', $master->id)
            ->get();
        $equip_m = EquipMaster::where('equip_id', $decryptID)->first();
        $kar_filter = Performa_hm::select('kar_id')
            ->distinct()
            ->where('equip_id', $decryptID)
            ->where('master_id', $master->id)->get();
        $list = Performa_hm::where('equip_id', $decryptID)
            ->where('master_id', $master->id)
            ->get();
        $cek = Performa_hm::where('equip_id', $decryptID)
            ->where('master_id', $master->id)
            ->count();
        $cek_hm = Performa_hm::where('equip_id', $decryptID)
            ->where('master_id', $master->id)
            ->where('tipe', 'HM')
            ->count();
        $cek_manual = Performa_hm::where('equip_id', $decryptID)
            ->where('master_id', $master->id)
            ->where('tipe', 'Manual')
            ->count();
        $sum = Performa_hm::where('equip_id', $decryptID)
            ->where('master_id', $master->id)
            ->sum('hm_total');
        $max = Performa_hm::where('equip_id', $decryptID)
            ->where('master_id', $master->id)
            ->min('hm_awal');
        return view('asset.sad.pfm.hm_equip_print_excel', compact('list', 'nav', 'master', 'periode', 'equip_list', 'cek_hm', 'cek_manual', 'kar_filter', 'equip_m', 'cek', 'sum', 'max'));
    }


    public function hm_equip_edit($id)
    {
        $nav = Navigator::where('karyawan', Auth::user()->id)->get();
        $decryptID = Crypt::decryptString($id);
        $perform = EquipMaster::Find($decryptID);
        $periode = date('m-Y');
        $master = Master::where('status', 'Present')
            ->where('periode', $periode)
            ->first();
        $equip_list = EquipMaster::where('master_id', $master->id)
            ->get();
        $equip_m = EquipMaster::where('equip_id', $decryptID)->first();
        $kar_filter = Performa_hm::select('kar_id')
            ->distinct()
            ->where('equip_id', $decryptID)
            ->where('master_id', $master->id)->get();
        $first = Performa_hm::where('equip_id', $decryptID)
            ->where('master_id', $master->id)
            ->first();
        $list = Performa_hm::where('equip_id', $decryptID)
            ->where('tipe', 'HM')
            ->where('master_id', $master->id)
            ->get();
        $cek = Performa_hm::where('equip_id', $decryptID)
            ->where('master_id', $master->id)
            ->count();
        $total = Performa_hm::where('equip_id', $decryptID)
            ->where('master_id', $master->id)
            ->sum('hm_total');
        $total_pot = Performa_hm::where('equip_id', $decryptID)
            ->where('master_id', $master->id)
            ->sum('hm_pot');
        $hm_awal = Performa_hm::where('equip_id', $decryptID)
            ->where('master_id', $master->id)
            ->min('hm_awal');
        $hm_akhir = Performa_hm::where('equip_id', $decryptID)
            ->where('master_id', $master->id)
            ->max('hm_akhir');
        $shift = Shift::all();
        $kar = User::where('status', 'Aktif')
            ->where('tipe_gaji', 'AI')
            ->get();
        $lok = Location::where('status', '<>', 'Delete')->get();
        $dedi = Dedicated::where('status', '<>', 'Delete')->get();
        $category = Category::where('status', '<>', 'Delete')->get();
        $aktivitas = Aktivitas::where('status', '<>', 'Delete')->get();
        return view('asset.sad.pfm.hm_equip_edit', compact('list', 'category', 'aktivitas', 'nav', 'master', 'periode', 'equip_list', 'equip_m', 'kar_filter', 'perform', 'first', 'cek', 'total', 'hm_awal', 'hm_akhir', 'total_pot', 'master', 'shift', 'kar', 'dedi', 'lok'));
    }


    public function hm_equip_create($id)
    {
        $nav = Navigator::where('karyawan', Auth::user()->id)->get();
        $decryptID = Crypt::decryptString($id);
        $perform = EquipMaster::Find($decryptID);
        $periode = date('m-Y');
        $master = Master::where('status', 'Present')
            ->where('periode', $periode)
            ->first();
        $equip_list = EquipMaster::where('master_id', $master->id)
            ->get();
        $equip_m = EquipMaster::where('equip_id', $decryptID)->first();
        $first = Performa_hm::where('equip_id', $decryptID)
            ->where('master_id', $master->id)
            ->first();
        $list = Performa_hm::where('equip_id', $decryptID)
            ->where('master_id', $master->id)
            ->get();
        $cek = Performa_hm::where('equip_id', $decryptID)
            ->where('master_id', $master->id)
            ->count();
        $total = Performa_hm::where('equip_id', $decryptID)
            ->where('master_id', $master->id)
            ->sum('hm_total');
        $total_pot = Performa_hm::where('equip_id', $decryptID)
            ->where('master_id', $master->id)
            ->sum('hm_pot');
        $hm_awal = Performa_hm::where('equip_id', $decryptID)
            ->where('master_id', $master->id)
            ->min('hm_awal');
        $hm_akhir = Performa_hm::where('equip_id', $decryptID)
            ->where('master_id', $master->id)
            ->max('hm_akhir');
        $shift = Shift::all();
        $kar = User::where('status', 'Aktif')
            ->where('tipe_gaji', 'AI')
            ->get();
        $lok = Location::where('status', '<>', 'Delete')->get();
        $dedi = Dedicated::where('status', '<>', 'Delete')->get();
        $category = Category::where('status', '<>', 'Delete')->get();
        $aktivitas = Aktivitas::where('status', '<>', 'Delete')->get();
        return view('asset.sad.pfm.hm_equip_create', compact('list', 'nav', 'periode', 'category', 'aktivitas', 'equip_m', 'equip_list', 'perform', 'first', 'cek', 'total', 'hm_awal', 'hm_akhir', 'total_pot', 'master', 'shift', 'kar', 'dedi', 'lok'));
    }


    public function hm_equip_update(Request $request)
    {
        // dd($request->all());
        $hm = 'HM';

        foreach ($request->delete_id as $key => $items) {
            Performa_hm::where('id', $request->delete_id[$key])->delete();
        }
        foreach ($request->tgl as $key => $items) {
            $awal = $request->hm_awal[$key];
            $akhir = $request->hm_akhir[$key];
            $tot_hm_kotor = $akhir - $awal;
            $pot = $request->hm_pot[$key];
            $tot_hm_bersih = $tot_hm_kotor - $pot;

            $hm_data['id'] = $request->id[$key];
            $hm_data['tgl'] = $request->tgl[$key];
            $hm_data['equip_id'] = $request->equip_id[$key];
            $hm_data['shift_id'] = $request->shift_id[$key];
            $hm_data['kar_id'] = $request->kar_id[$key];
            $hm_data['dedicated_id'] = $request->dedicated_id[$key];
            $hm_data['aktivitas_id'] = $request->aktivitas_id[$key];
            $hm_data['category_id'] = $request->category_id[$key];
            $hm_data['rest_time'] = $request->rest_time[$key];
            $hm_data['lokasi_id'] = $request->lokasi_id[$key];
            $hm_data['remark'] = $request->remark[$key];
            $hm_data['hm_awal'] = $request->hm_awal[$key];
            $hm_data['hm_akhir'] = $request->hm_akhir[$key];
            $hm_data['hm_pot'] = $request->hm_pot[$key];
            $hm_data['hm_total'] = $tot_hm_kotor;
            $hm_data['tipe'] = $hm;
            $hm_data['master_id']     = $request->master_id[$key];
            Performa_hm::create($hm_data);
        }

        $periode = date('m-Y');
        $master = Master::where('status', 'Present')
            ->where('periode', $periode)
            ->first();
        $bro = $request->equip_id_bro;
        $total_hm = Performa_hm::where('equip_id', $bro)
            ->where('master_id', $master->id)
            ->sum('hm_total');
        $total_jam = Performa_hm::where('equip_id', $bro)
            ->where('master_id', $master->id)
            ->sum('jam_total');
        $total_pot_hm = Performa_hm::where('equip_id', $bro)
            ->where('master_id', $master->id)
            ->sum('hm_pot');
        $total_pot_jam = Performa_hm::where('equip_id', $bro)
            ->where('master_id', $master->id)
            ->sum('jam_pot');
        $hm_awal = Performa_hm::where('equip_id', $bro)
            ->where('master_id', $master->id)
            ->min('hm_awal');
        $hm_akhir = Performa_hm::where('equip_id', $bro)
            ->where('master_id', $master->id)
            ->max('hm_akhir');
        $total_all = $total_jam + $total_hm;
        $total_pot = $total_pot_jam + $total_pot_hm;

        EquipMaster::where('id', $request->delete_id_m)->delete();
        EquipMaster::create([
            'id' => $request->id_m,
            'master_id' => $request->master_id_m,
            'equip_id' => $request->equip_id_m,
            'kode_unik' => $request->kode_unik,
            'hm_awal' => $hm_awal,
            'hm_akhir' => $hm_akhir,
            'total_pot' => $total_pot,
            'total_jam' => $total_jam,
            'total_hm' => $total_hm,
            'grand_total' => $total_all,
        ]);

        return back()->with('success', 'Data HM Berhasil Diupdate');
    }


    public function hm_equip_store(Request $request)
    {
        // dd($request->all());
        $hm = 'HM';

        foreach ($request->tgl as $key => $items) {
            $awal = $request->hm_awal[$key];
            $akhir = $request->hm_akhir[$key];
            $tot_hm_kotor = $akhir - $awal;
            $pot = $request->hm_pot[$key];

            $hm_data['tgl'] = $request->tgl[$key];
            $hm_data['equip_id'] = $request->equip_id[$key];
            $hm_data['shift_id'] = $request->shift_id[$key];
            $hm_data['kar_id'] = $request->kar_id[$key];
            $hm_data['rest_time'] = $request->rest_time[$key];
            $hm_data['dedicated_id'] = $request->dedicated_id[$key];
            $hm_data['lokasi_id'] = $request->lokasi_id[$key];
            $hm_data['category_id'] = $request->category_id[$key];
            $hm_data['remark'] = $request->remark[$key];
            $hm_data['hm_awal'] = $request->hm_awal[$key];
            $hm_data['hm_akhir'] = $request->hm_akhir[$key];
            $hm_data['hm_pot'] = $request->hm_pot[$key];
            $hm_data['aktivitas_id'] = $request->aktivitas_id[$key];
            $hm_data['hm_total'] = $tot_hm_kotor;
            $hm_data['tipe'] = $hm;
            $hm_data['master_id']     = $request->master_id[$key];
            Performa_hm::create($hm_data);
        }

        $periode = date('m-Y');
        $master = Master::where('status', 'Present')
            ->where('periode', $periode)
            ->first();
        $bro = $request->equip_id_bro;
        $total_hm = Performa_hm::where('equip_id', $bro)
            ->where('master_id', $master->id)
            ->sum('hm_total');
        $total_jam = Performa_hm::where('equip_id', $bro)
            ->where('master_id', $master->id)
            ->sum('jam_total');
        $total_pot_hm = Performa_hm::where('equip_id', $bro)
            ->where('master_id', $master->id)
            ->sum('hm_pot');
        $total_pot_jam = Performa_hm::where('equip_id', $bro)
            ->where('master_id', $master->id)
            ->sum('jam_pot');
        $hm_awal = Performa_hm::where('equip_id', $bro)
            ->where('master_id', $master->id)
            ->min('hm_awal');
        $hm_akhir = Performa_hm::where('equip_id', $bro)
            ->where('master_id', $master->id)
            ->max('hm_akhir');
        $total_all = $total_jam + $total_hm;
        $total_pot = $total_pot_jam + $total_pot_hm;

        EquipMaster::where('id', $request->delete_id_m)->delete();
        EquipMaster::create([
            'id' => $request->id_m,
            'master_id' => $request->master_id_m,
            'equip_id' => $request->equip_id_m,
            'kode_unik' => $request->kode_unik,
            'hm_awal' => $hm_awal,
            'hm_akhir' => $hm_akhir,
            'total_pot' => $total_pot,
            'total_jam' => $total_jam,
            'total_hm' => $total_hm,
            'grand_total' => $total_all,
            'ot_total' => $request->ot_total,
            'valid' => $request->valid,
            'tipe' => $request->tipe,
            'hauling' => $request->hauling,
            'alokasi' => $request->alokasi,
        ]);
        return back()->with('success', 'Data HM Berhasil Ditambahkan');
    }


    public function hm_equip_refresh(Request $request)
    {
        // dd($request->all());
        $periode = date('m-Y');
        $master = Master::where('status', 'Present')
            ->where('periode', $periode)
            ->first();
        $bro = $request->equip_id_bro;
        $total_hm = Performa_hm::where('equip_id', $bro)
            ->where('master_id', $master->id)
            ->sum('hm_total');
        $total_jam = Performa_hm::where('equip_id', $bro)
            ->where('master_id', $master->id)
            ->sum('jam_total');
        $total_pot_hm = Performa_hm::where('equip_id', $bro)
            ->where('master_id', $master->id)
            ->sum('hm_pot');
        $total_pot_jam = Performa_hm::where('equip_id', $bro)
            ->where('master_id', $master->id)
            ->sum('jam_pot');
        $hm_awal = Performa_hm::where('equip_id', $bro)
            ->where('master_id', $master->id)
            ->min('hm_awal');
        $hm_akhir = Performa_hm::where('equip_id', $bro)
            ->where('master_id', $master->id)
            ->max('hm_akhir');
        $total_all = $total_jam + $total_hm;
        $total_pot = $total_pot_jam + $total_pot_hm;

        EquipMaster::where('id', $request->delete_id_m)->delete();
        EquipMaster::create([
            'id' => $request->id_m,
            'master_id' => $request->master_id_m,
            'equip_id' => $request->equip_id_m,
            'kode_unik' => $request->kode_unik,
            'hm_awal' => $hm_awal,
            'hm_akhir' => $hm_akhir,
            'total_pot' => $total_pot,
            'total_jam' => $total_jam,
            'total_hm' => $total_hm,
            'grand_total' => $total_all,
        ]);
        return back()->with('success', 'Data HM Berhasil Disinkronkan');
    }


    public function hmManual()
    {
        $awal = strtotime("2020-12-01 22:00:00");
        $akhir = strtotime("2020-12-02 01:00:00");
        $diff = $akhir - $awal;
        $jam    = floor($diff / (60 * 60));

        $nav = Navigator::where('karyawan', Auth::user()->id)->get();
        $periode = date('m-Y');
        $master2 = Master::where('periode', $periode)
            ->where('status', 'Present')
            ->first();
        $master = Master::where('status', 'Present')->first();
        $cek = Performa_hm::where('master_id', $master->id)
            ->where('tipe', 'Manual')
            ->count();
        $all = Performa_hm::where('master_id', $master->id)
            ->where('tipe', 'Manual')
            ->get();
        $equip = EquipMaster::where('master_id', $master->id)->get();
        $shift = Shift::all();
        $kar = User::where('status', 'Aktif')
            ->where('tipe_gaji', 'AI')
            ->get();
        $lok = Location::where('status', '<>', 'Delete')->get();
        $dedi = Dedicated::where('status', '<>', 'Delete')->get();
        $category = Category::where('status', '<>', 'Delete')->get();
        $aktivitas = Aktivitas::where('status', '<>', 'Delete')->get();
        return view('author.sad.pfm.hm_manual', compact('cek', 'category', 'aktivitas', 'nav', 'shift', 'all', 'kar', 'periode', 'equip', 'lok', 'dedi', 'master', 'diff', 'jam'));
    }


    public function hmManualStore(Request $request)
    {
        // dd($request->all());
        $messages = [
            'jam_awal.required' => 'Jam Mulai Wajib Diisi',
            'jam_akhir.required' => 'Jam Selesai Wajib Diisi',
        ];
        $this->validate($request, [
            'jam_awal'     => 'required',
            'jam_akhir'     => 'required',
        ], $messages);

        $awal = strtotime($request->jam_awal);
        $akhir = strtotime($request->jam_akhir);
        $tot_detik = $akhir - $awal;
        $tot_jam_kotor = floor($tot_detik / (60 * 60));
        $pot = $request->jam_pot;
        $tot_jam_bersih = $tot_jam_kotor - $pot;

        $master = Master::where('status', 'Present')->first();
        $manual = 'Manual';

        Performa_hm::create([
            'tgl' => $request->tgl,
            'shift_id' => $request->shift_id,
            'kar_id' => $request->kar_id,
            'master_id' => $request->master_bro,
            'equip_id' => $request->equip_id,
            'lokasi_id' => $request->lokasi_id,
            'dedicated_id' => $request->dedicated_id,
            'remark' => $request->remark,
            'category_id' => $request->category_id,
            'aktivitas_id' => $request->aktivitas_id,
            'rest_time' => $request->rest_time,
            'tipe' => $manual,
            'jam_awal' => $request->jam_awal,
            'jam_akhir' => $request->jam_akhir,
            'hm_pot' => $request->hm_pot,
            'jam_total' => $tot_jam_kotor,
        ]);

        return back()->with('success', 'Data HM Manual Berhasil Ditambahkan');
    }


    public function hmManualUpdate(Request $request, $id)
    {
        // dd($request->all());
        $messages = [
            'jam_awal.required' => 'Jam Mulai Wajib Diisi',
            'jam_akhir.required' => 'Jam Selesai Wajib Diisi',
        ];
        $this->validate($request, [
            'jam_awal'     => 'required',
            'jam_akhir'     => 'required',
        ], $messages);

        $awal = strtotime($request->jam_awal);
        $akhir = strtotime($request->jam_akhir);
        $tot_detik = $akhir - $awal;
        $tot_jam_kotor = floor($tot_detik / (60 * 60));
        $pot = $request->jam_pot;
        $tot_jam_bersih = $tot_jam_kotor - $pot;

        $master = Master::where('status', 'Present')->first();
        $manual = 'Manual';
        $hm = Performa_hm::Find($id);
        $hm_data = [
            'tgl' => $request->tgl,
            'shift_id' => $request->shift_id,
            'kar_id' => $request->kar_id,
            'master_id' => $master->id,
            'equip_id' => $request->equip_id,
            'lokasi_id' => $request->lokasi_id,
            'dedicated_id' => $request->dedicated_id,
            'remark' => $request->remark,
            'category_id' => $request->category_id,
            'aktivitas_id' => $request->aktivitas_id,
            'rest_time' => $request->rest_time,
            'tipe' => $manual,
            'jam_awal' => $request->jam_awal,
            'jam_akhir' => $request->jam_akhir,
            'hm_pot' => $request->hm_pot,
            'jam_total' => $tot_jam_kotor,
        ];
        $hm->update($hm_data);
        return back()->with('success', 'Data HM Manual Berhasil Diupdate');
    }


    public function hmManualDelete($id)
    {
        Performa_hm::where('id', $id)->delete();
        return back()->with('success', 'Data HM Manual Berhasil Dihapus');
    }


    public function hmStore(Request $request)
    {
        // dd($request->all());
        $messages = [
            'tgl.required' => 'Tanggal Wajib Diisi',
            'hm_awal.required' => 'HM Awal Wajib Diisi',
            'hm_akhir.required' => 'HM Akhir Wajib Diisi',
        ];

        $this->validate($request, [
            'tgl'     => 'required',
            'hm_awal'     => 'required',
            'hm_akhir'     => 'required',
        ], $messages);

        $awal = $request->hm_awal;
        $akhir = $request->hm_akhir;
        $tot_hm_kotor = $akhir - $awal;
        $pot = $request->hm_pot;
        $tot_hm_bersih = $tot_hm_kotor - $pot;

        $master = Master::where('status', 'Present')->first();
        $hm = 'HM';
        if ($request->has('hm_pot')) {
            Performa_hm::create([
                'tgl' => $request->tgl,
                'shift_id' => $request->shift_id,
                'kar_id' => $request->kar_id,
                'master_id' => $master->id,
                'equip_id' => $request->equip_id,
                'lokasi_id' => $request->lokasi_id,
                'dedicated_id' => $request->dedicated_id,
                'remark' => $request->remark,
                'tipe' => $hm,
                'hm_awal' => $request->hm_awal,
                'hm_akhir' => $request->hm_akhir,
                'hm_pot' => $request->hm_pot,
                'hm_total' => $tot_hm_bersih,
            ]);
        } else {
            Performa_hm::create([
                'tgl' => $request->tgl,
                'shift_id' => $request->shift_id,
                'kar_id' => $request->kar_id,
                'master_id' => $master->id,
                'equip_id' => $request->equip_id,
                'lokasi_id' => $request->lokasi_id,
                'dedicated_id' => $request->dedicated_id,
                'remark' => $request->remark,
                'tipe' => $hm,
                'hm_awal' => $request->hm_awal,
                'hm_akhir' => $request->hm_akhir,
                'hm_pot' => $request->hm_pot,
                'hm_total' => $tot_hm_kotor,
            ]);
        }
        return back()->with('success', 'Data HM Berhasil Ditambahkan');
    }
}
