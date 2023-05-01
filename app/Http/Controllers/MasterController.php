<?php

namespace App\Http\Controllers;

use App\Models\Absensi;
use App\Models\CateringMaster;
use App\Models\EquipMaster;
use App\Models\Equipment;
use App\Models\KarMaster;
use App\Models\Master;
use App\Models\User;
use Illuminate\Http\Request;

class MasterController extends Controller
{
    public function master_generate()
    {
        $periode = date('m-Y');
        $cek = Master::where('status', 'Present')->first();
        $cek_null = Master::where('status', 'Present')->first();
        $kar = User::where('status', '<>', 'Hidden')
            ->where('status', '<>', 'Delete')
            ->get();
        $pok = $cek->pokok;
        $pokok = number_format($pok);
        $ins = $cek->insentif;
        $insentif = number_format($ins);
        $lem = $cek->lemburan;
        $lemburan = number_format($lem);
        $per = Master::where('status', 'Present')->first();
        $equip = Equipment::where('status', 'Aktif')->get();
        $cek_cat = CateringMaster::where('master_id', $cek->id)->count();
        return view('author.sad.mas.mas_generate', compact('cek', 'cek_null', 'pokok', 'cek_cat', 'insentif', 'lemburan', 'periode', 'kar', 'per', 'equip'));
    }


    public function master_kar()
    {
        $periode = date('m-Y');
        $cek = Master::where('status', 'Present')->first();
        $kar_mas = KarMaster::where('master_id', $cek->id)->get();
        $kar = User::where('status', '<>', 'Hidden')
            ->where('status', '<>', 'Delete')
            ->get();
        $per = Master::where('status', 'Present')->first();
        $equip = Equipment::where('status', 'Aktif')->get();
        $kar_m = KarMaster::where('master_id', $cek->id)->count();
        $kar_list = KarMaster::where('master_id', $cek->id)->get();
        $kar_all = KarMaster::all()->count();
        return view('author.sad.mas.mas_kar', compact('cek', 'periode', 'kar', 'per', 'equip', 'kar_m', 'kar_all', 'kar_list'));
    }


    public function master_equip()
    {
        $periode = date('m-Y');
        $cek = Master::where('status', 'Present')->first();
        $equip_list = EquipMaster::where('master_id', $cek->id)->get();
        $equip_m = EquipMaster::where('master_id', $cek->id)->count();
        $equip_all = EquipMaster::all()->count();
        $equip = Equipment::where('status', 'Aktif')->get();
        return view('author.sad.mas.mas_equip', compact('periode', 'cek', 'equip_list', 'equip_m', 'equip_all', 'equip'));
    }


    public function master_store(Request $request)
    {
        // dd($request->all());
        $messages = [
            'unique' => 'Data Master Sudah Terdaftar!',
        ];
        $this->validate($request, [
            'periode_new' => 'unique:hwa_master,periode',
        ], $messages);
        $pokok = 1700000;
        $ins = 20000;
        $lem = 15000;
        // Buat Master Baru
        Master::create([
            'total' => $request->total_new,
            'periode' => $request->periode_new,
            'status' => $request->status_new,
            'ket' => $request->ket_new,
            'pokok' => $pokok,
            'insentif' => $ins,
            'lemburan' => $lem,
            'created_at' => $request->created_at_new,
            'updated_at' => $request->updated_at_new,
        ]);
        // Rekap Master Lama
        Master::where('id', $request->delete_old)->delete();
        Master::create([
            'id' => $request->id_old,
            'total' => $request->total_old,
            'periode' => $request->periode_old,
            'status' => $request->status_old,
            'ket' => $request->ket_old,
            'pokok' => $request->pokok_old,
            'insentif' => $request->insentif_old,
            'lemburan' => $request->lemburan_old,
            'created_at' => $request->created_at_old,
            'updated_at' => $request->updated_at_old,
        ]);
        return back()->with('success', 'Update Data Master Berhasil');
    }


    public function master_store_new(Request $request)
    {
        // dd($request->all());
        $messages = [
            'unique' => 'Data Master Sudah Terdaftar!',
        ];
        $this->validate($request, [
            'periode_new' => 'unique:hwa_master,periode',
        ], $messages);
        $pokok = 1700000;
        $ins = 20000;
        $lem = 15000;
        // Buat Master Baru
        Master::create([
            'total' => $request->total_new,
            'periode' => $request->periode_new,
            'status' => $request->status_new,
            'ket' => $request->ket_new,
            'pokok' => $pokok,
            'insentif' => $ins,
            'lemburan' => $lem,
            'created_at' => $request->created_at_new,
            'updated_at' => $request->updated_at_new,
        ]);
        return back()->with('success', 'Update Data Master Berhasil');
    }


    public function master_update(Request $request)
    {
        // dd($request->all());
        Master::where('id', $request->delete_m)->delete();
        Master::create([
            'id' => $request->id_m,
            'total' => $request->total_m,
            'periode' => $request->periode_m,
            'status' => $request->status_m,
            'ket' => $request->ket_m,
            'ket1' => $request->ket1_m,
            'ket2' => $request->ket2_m,
            'pokok' => $request->pokok,
            'insentif' => $request->insentif,
            'lemburan' => $request->lemburan,
            'created_at' => $request->created_at_m,
            'updated_at' => $request->updated_at_m,
        ]);
        return back()->with('success', 'Update Setting Master Berhasil');
    }


    public function kal_generate(Request $request)
    {
        // dd($request->all());
        $messages = [
            'unique' => 'Generate Gagal, Mungkin Sudah Digenerate',
        ];
        $this->validate($request, [
            'kode_unik' => 'unique:hwa_absensi,kode_unik',
        ], $messages);
        // Edit Master
        Master::where('id', $request->delete_id)->delete();
        $master['id'] = $request->id;
        $master['periode'] = $request->periode;
        $master['total'] = $request->total;
        $master['status'] = $request->status_;
        $master['ket'] = $request->ket;
        $master['ket1'] = $request->ket1;
        $master['ket2'] = $request->ket2;
        $master['pokok'] = $request->pokok;
        $master['insentif'] = $request->insentif;
        $master['lemburan'] = $request->lemburan;
        $master['created_at '] = $request->created_at;
        Master::create($master);
        // Generate Kalender
        foreach ($request->karyawan as $key => $items) {
            $estimatesAdd['karyawan']            = $items;
            $estimatesAdd['status']     = $request->status[$key];
            $estimatesAdd['kode_unik']     = $request->kode_unik[$key];
            $estimatesAdd['tgl']     = $request->tgl[$key];
            $estimatesAdd['periode_id']     = $request->periode_id[$key];
            Absensi::create($estimatesAdd);
        }
        return back()->with('success', 'Generate Kalender Berhasil');
    }


    public function kar_generate(Request $request)
    {
        // dd($request->all());
        $messages = [
            'unique' => 'Generate Gagal',
        ];
        $this->validate($request, [
            'kode_unik' => 'unique:hwa_kar_master,kode_unik',
        ], $messages);
        // Edit Master
        Master::where('id', $request->delete_id)->delete();
        $master['id'] = $request->id;
        $master['periode'] = $request->periode;
        $master['total'] = $request->total;
        $master['status'] = $request->status_;
        $master['ket'] = $request->ket;
        $master['ket1'] = $request->ket1;
        $master['ket2'] = $request->ket2;
        $master['pokok'] = $request->pokok;
        $master['insentif'] = $request->insentif;
        $master['lemburan'] = $request->lemburan;
        $master['created_at '] = $request->created_at;
        Master::create($master);
        // Generate Karyawan
        foreach ($request->kode_unik as $key => $items) {
            $estimatesAdd['kode_unik']            = $request->kode_unik[$key];
            $estimatesAdd['master_id']     = $request->master_id[$key];
            $estimatesAdd['kar_id']     = $request->kar_id[$key];
            $estimatesAdd['tipe_gaji']     = $request->tipe_gaji[$key];
            KarMaster::create($estimatesAdd);
        }
        return back()->with('success', 'Generate Data Karyawan Berhasil');
    }


    public function equip_generate(Request $request)
    {
        // dd($request->all());
        $messages = [
            'unique' => 'Generate Gagal',
        ];
        $this->validate($request, [
            'kode_unik' => 'unique:hwa_equip_master,kode_unik',
        ], $messages);
        // Edit Master
        Master::where('id', $request->delete_id)->delete();
        $master['id'] = $request->id;
        $master['periode'] = $request->periode;
        $master['total'] = $request->total;
        $master['status'] = $request->status_;
        $master['ket'] = $request->ket;
        $master['ket1'] = $request->ket1;
        $master['ket2'] = $request->ket2;
        $master['pokok'] = $request->pokok;
        $master['insentif'] = $request->insentif;
        $master['lemburan'] = $request->lemburan;
        $master['created_at '] = $request->created_at;
        Master::create($master);
        // Generate Equipment
        foreach ($request->kode_unik as $key => $items) {
            $estimatesAdd['kode_unik']            = $request->kode_unik[$key];
            $estimatesAdd['master_id']     = $request->master_id[$key];
            $estimatesAdd['equip_id']     = $request->equip_id[$key];
            EquipMaster::create($estimatesAdd);
        }
        return back()->with('success', 'Generate Data Equipment Berhasil');
    }


    public function cat_generate(Request $request)
    {
        // dd($request->all());
        $messages = [
            'unique' => 'Generate Gagal',
        ];
        $this->validate($request, [
            'master_id' => 'unique:hwa_catering_master,master_id',
        ], $messages);
        $master['master_id'] = $request->master_id;
        CateringMaster::create($master);
        return back()->with('success', 'Generate Data Catering Berhasil');
    }


    public function kar_gen_manual(Request $request)
    {
        // dd($request->all());
        $messages = [
            'unique' => 'Generate Gagal, Mungkin Sudah Digenerate',
            'required' => 'Generate Gagal',
        ];
        $this->validate($request, [
            'kode_unik' => 'unique:hwa_kar_master,kode_unik',
            'kar_id' => 'required',
        ], $messages);
        // Generate
        KarMaster::create([
            'kode_unik' => $request->kode_unik,
            'master_id' => $request->master_id,
            'kar_id' => $request->kar_id,
            'tipe_gaji' => $request->tipe_gaji,
        ]);
        return back()->with('success', 'Generate Data Karyawan Berhasil');
    }


    public function equip_gen_manual(Request $request)
    {
        // dd($request->all());
        $messages = [
            'unique' => 'Generate Gagal, Mungkin Sudah Digenerate',
            'required' => 'Generate Gagal',
        ];
        $this->validate($request, [
            'kode_unik' => 'unique:hwa_equip_master,kode_unik',
            'equip_id' => 'required',
        ], $messages);
        // Generate
        EquipMaster::create([
            'kode_unik' => $request->kode_unik,
            'master_id' => $request->master_id,
            'equip_id' => $request->equip_id,
        ]);
        return back()->with('success', 'Generate Data Equipment Berhasil');
    }

}
