<?php

namespace App\Http\Controllers\rekap\performa;

use App\Http\Controllers\Controller;
use App\Models\EquipMaster;
use App\Models\Equipment;
use App\Models\Jabatan;
use App\Models\KarMaster;
use App\Models\Master;
use App\Models\Navigator;
use App\Models\Performa_ot;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Crypt;

class RperformaOTController extends Controller
{
    public function ot_list()
    {
        $nav = Navigator::where('karyawan', Auth::user()->id)->get();
        $periode = date('m-Y');
        $master = Master::where('status', 'Validasi')->first();
        $cek_perform = Performa_ot::where('master_id', $master->id)
            ->count();
        $perform = Performa_ot::where('master_id', $master->id)
            ->get();
        $equip_filter = EquipMaster::where('master_id', $master->id)
            ->get();
        $kar = KarMaster::where('master_id', $master->id)
            ->where('tipe_gaji', 'AL')
            ->get();
        $equip = Equipment::where('status', 'Aktif')
            ->get();
        return view('author.sad.rekap.pfm.ot_list', compact('periode', 'equip', 'kar', 'equip_filter', 'nav', 'master', 'cek_perform', 'perform'));
    }


    public function ot_karyawan()
    {
        $nav = Navigator::where('karyawan', Auth::user()->id)->get();
        $periode = date('m-Y');
        $master = Master::where('status', 'Validasi')->first();
        $cek_perform = Performa_ot::where('master_id', $master->id)
            ->count();
        $kar_list = KarMaster::where('master_id', $master->id)
            ->where('tipe_gaji', 'AL')
            ->get();
        $jabatan = User::select('jabatan')->distinct()
            ->where('tipe_gaji', 'AL')->get();
        return view('author.sad.rekap.pfm.ot_karyawan', compact('cek_perform', 'nav', 'jabatan', 'master', 'jabatan', 'periode', 'kar_list'));
    }


    public function ot_kar_info($id)
    {
        $nav = Navigator::where('karyawan', Auth::user()->id)->get();
        $decryptID = Crypt::decryptString($id);
        $periode = date('m-Y');
        $master = Master::where('status', 'Validasi')->first();
        $kar = KarMaster::Find($decryptID);
        $jabatan = Jabatan::all();
        $cek_perform = Performa_ot::where('master_id', $master->id)
            ->count();
        $data = Performa_ot::where('master_id', $master->id)
            ->where('kar_id', $kar->kar_id)
            ->get();
        $cek = Performa_ot::where('master_id', $master->id)
            ->where('kar_id', $kar->kar_id)
            ->count();
        $kar_list = KarMaster::where('master_id', $master->id)
            ->where('tipe_gaji', 'AL')
            ->get();
        $total_jam = Performa_ot::where('master_id', $master->id)
            ->where('kar_id', $kar->kar_id)
            ->sum('jam_total');
        $lemburan = $total_jam * $master->lemburan;
        return view('asset.sad.rekap.performa.ot_kar_info', compact('cek_perform','cek', 'nav', 'kar_list', 'lemburan', 'kar', 'jabatan', 'master', 'periode', 'data', 'total_jam'));
    }


    public function ot_store(Request $request)
    {
        // dd($request->all());
        $messages = [
            'tgl.required' => 'Tanggal Wajib Diisi',
            'jam_mulai.required' => 'Jam Mulai Wajib Diisi',
            'jam_selesai.required' => 'Jam Selesai Wajib Diisi',
        ];
        $this->validate($request, [
            'tgl'     => 'required',
            'jam_mulai'     => 'required',
            'jam_selesai'     => 'required',
        ], $messages);

        $awal = strtotime($request->jam_mulai);
        $akhir = strtotime($request->jam_selesai);
        $tot_detik = $akhir - $awal;
        $tot_jam_kotor = floor($tot_detik / (60 * 60));
        $pot = $request->jam_pot;
        $tot_jam_bersih = $tot_jam_kotor - $pot;

        $master = Master::where('status', 'Validasi')->first();
        Performa_ot::create([
            'tgl' => $request->tgl,
            'kar_id' => $request->kar_id,
            'equip_id' => $request->equip_id,
            'master_id' => $master->id,
            'remark' => $request->remark,
            'jam_mulai' => $request->jam_mulai,
            'jam_selesai' => $request->jam_selesai,
            'jam_pot' => $request->jam_pot,
            'jam_total' => $tot_jam_kotor,
        ]);
        return back()->with('success', 'Data Helper Berhasil Ditambahkan');
    }


    public function ot_kar_refresh(Request $request)
    {
        // dd($request->all());
        $master = Master::where('status', 'Validasi')->first();
        $bro = $request->bro_id;
        $kar = KarMaster::Find($bro);
        $total_jam = Performa_ot::where('master_id', $master->id)
            ->where('kar_id', $kar->kar_id)
            ->sum('jam_total');
        $lemburan = $total_jam * 15000;

        KarMaster::where('id', $bro)->delete();
        KarMaster::create([
            'id' => $bro,
            'master_id' => $kar->master_id,
            'kode_unik' => $kar->kode_unik,
            'tipe_gaji' => $kar->tipe_gaji,
            'kar_id' => $kar->kar_id,
            'hm_total' => $kar->grand_total,
            'gaji_total' => $kar->gaji_total,
            'jam_total' => $total_jam,
            'lemburan' => $lemburan,
            'abs_h' => $kar->abs_h,
            'abs_a' => $kar->abs_a,
            'abs_i' => $kar->abs_i,
            'abs_itk' => $kar->abs_itk,
            'abs_s' => $kar->abs_s,
            'abs_stk' => $kar->abs_stk,
            'abs_c' => $kar->abs_c,
            'insentif' => $kar->insentif,

        ]);
        return back()->with('success', 'Data Over Time Berhasil Disinkronkan');
    }


    public function ot_list_excel($id)
    {
        $nav = Navigator::where('karyawan', Auth::user()->id)->get();
        $periode = date('m-Y');
        $master = Master::where('status', 'Validasi')->first();
        $cek_perform = Performa_ot::where('master_id', $master->id)
            ->count();
        $perform = Performa_ot::where('master_id', $master->id)
            ->get();
        $equip_filter = EquipMaster::where('master_id', $master->id)
            ->get();
        $kar = KarMaster::where('master_id', $master->id)
            ->where('tipe_gaji', 'AL')
            ->get();
        $equip = Equipment::where('status', 'Aktif')
            ->get();
        return view('asset.sad.rekap.performa.ot_list_excel', compact('periode', 'equip', 'kar', 'equip_filter', 'nav', 'master', 'cek_perform', 'perform'));
    }


    public function ot_karyawan_excel($id)
    {
        $nav = Navigator::where('karyawan', Auth::user()->id)->get();
        $periode = date('m-Y');
        $master = Master::where('status', 'Validasi')->first();
        $cek_perform = Performa_ot::where('master_id', $master->id)
            ->count();
        $kar_list = KarMaster::where('master_id', $master->id)
            ->where('tipe_gaji', 'AL')
            ->get();
        $jabatan = User::select('jabatan')->distinct()
            ->where('tipe_gaji', 'AL')->get();
        return view('asset.sad.rekap.performa.ot_kar_excel', compact('cek_perform', 'nav', 'jabatan', 'master', 'jabatan', 'periode', 'kar_list'));
    }


    public function ot_kar_info_excel($id)
    {
        $nav = Navigator::where('karyawan', Auth::user()->id)->get();
        $decryptID = Crypt::decryptString($id);
        $periode = date('m-Y');
        $master = Master::where('status', 'Validasi')->first();
        $kar = KarMaster::Find($decryptID);
        $jabatan = Jabatan::all();
        $cek_perform = Performa_ot::where('master_id', $master->id)
            ->count();
        $data = Performa_ot::where('master_id', $master->id)
            ->where('kar_id', $kar->kar_id)
            ->get();
        $cek = Performa_ot::where('master_id', $master->id)
            ->where('kar_id', $kar->kar_id)
            ->count();
        $kar_list = KarMaster::where('master_id', $master->id)
            ->where('tipe_gaji', 'AL')
            ->get();
        $total_jam = Performa_ot::where('master_id', $master->id)
            ->where('kar_id', $kar->kar_id)
            ->sum('jam_total');
        $lemburan = $total_jam * $master->lemburan;
        return view('asset.sad.rekap.performa.ot_kar_info_excel', compact('cek_perform','cek', 'nav', 'kar_list', 'lemburan', 'kar', 'jabatan', 'master', 'periode', 'data', 'total_jam'));
    }
}
