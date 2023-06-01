<?php

namespace App\Http\Controllers\rekap\performa;

use App\Http\Controllers\Controller;
use App\Models\Jabatan;
use App\Models\KarMaster;
use App\Models\Master;
use App\Models\Performa_ot;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Crypt;

class RperformaOTController extends Controller
{
    public function ot_list()
    {
        $master = Master::where('status', 'Validasi')->first();
        $cek_perform = Performa_ot::where('master_id', $master->id)
            ->count();
        $perform = Performa_ot::where('master_id', $master->id)
            ->get();
        $kar_filter = User::where('status', '<>', 'Hidden')
            ->where('status', '<>', 'Delete')
            ->where('tipe_gaji', 'AL')
            ->get();
        return view('author.sad.rekap.pfm.ot_list', compact('master', 'cek_perform', 'perform', 'kar_filter'));
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
        if ($request->has('jam_pot')) {
            Performa_ot::create([
                'tgl' => $request->tgl,
                'kar_id' => $request->kar_id,
                'master_id' => $master->id,
                'remark' => $request->remark,
                'jam_mulai' => $request->jam_mulai,
                'jam_selesai' => $request->jam_selesai,
                'jam_pot' => $request->jam_pot,
                'jam_total' => $tot_jam_bersih,
            ]);
        } else {
            Performa_ot::create([
                'tgl' => $request->tgl,
                'kar_id' => $request->kar_id,
                'master_id' => $master->id,
                'remark' => $request->remark,
                'jam_mulai' => $request->jam_mulai,
                'jam_selesai' => $request->jam_selesai,
                'jam_pot' => $request->jam_pot,
                'jam_total' => $tot_jam_kotor,
            ]);
        }
        return back()->with('success', 'Data OverTime Berhasil Ditambahkan');
    }


    public function ot_update(Request $request)
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
        if ($request->has('jam_pot')) {
            Performa_ot::where('id', $request->delete)->delete();
            Performa_ot::create([
                'id' => $request->id,
                'tgl' => $request->tgl,
                'kar_id' => $request->kar_id,
                'master_id' => $master->id,
                'remark' => $request->remark,
                'jam_mulai' => $request->jam_mulai,
                'jam_selesai' => $request->jam_selesai,
                'jam_pot' => $request->jam_pot,
                'jam_total' => $tot_jam_bersih,
            ]);
        } else {
            Performa_ot::where('id', $request->delete)->delete();
            Performa_ot::create([
                'id' => $request->id,
                'tgl' => $request->tgl,
                'kar_id' => $request->kar_id,
                'master_id' => $master->id,
                'remark' => $request->remark,
                'jam_mulai' => $request->jam_mulai,
                'jam_selesai' => $request->jam_selesai,
                'jam_pot' => $request->jam_pot,
                'jam_total' => $tot_jam_kotor,
            ]);
        }

        return back()->with('success', 'Data OverTime Berhasil Diupdate');
    }


    public function ot_delete(Request $request)
    {
        Performa_ot::where('id', $request->delete)->delete();
        return back()->with('success', 'Data OverTime Berhasil Dihapus');
    }


    public function ot_karyawan()
    {
        $master = Master::where('status', 'Validasi')->first();
        $cek_perform = Performa_ot::where('master_id', $master->id)
            ->count();
        $kar_list = KarMaster::where('master_id', $master->id)
            ->where('tipe_gaji', 'AL')
            ->get();
        $jabatan = User::select('jabatan')->distinct()
            ->where('tipe_gaji', 'AL')->get();
        return view('author.sad.rekap.pfm.ot_karyawan', compact('cek_perform', 'jabatan', 'master', 'jabatan', 'kar_list'));
    }

    public function ot_kar_info($id)
    {
        $decryptID = Crypt::decryptString($id);
        $master = Master::where('status', 'Validasi')->first();
        $kar = KarMaster::Find($decryptID);
        $jabatan = Jabatan::all();
        $cek_perform = Performa_ot::where('master_id', $master->id)
            ->count();
        $data = Performa_ot::where('master_id', $master->id)
            ->where('kar_id', $kar->kar_id)
            ->get();
        $kar_list = KarMaster::where('master_id', $master->id)
            ->where('tipe_gaji', 'AL')
            ->get();
        $total_jam = Performa_ot::where('master_id', $master->id)
            ->where('kar_id', $kar->kar_id)
            ->sum('jam_total');
        $lemburan = $total_jam * $master->lemburan;
        return view('asset.sad.rekap.performa.ot_kar_info', compact('cek_perform', 'kar_list', 'lemburan', 'kar', 'jabatan', 'master',  'data', 'total_jam'));
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
}
