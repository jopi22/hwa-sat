<?php

namespace App\Http\Controllers\master_sad\performa;

use App\Http\Controllers\Controller;
use App\Models\Breakdown;
use App\Models\Equipment;
use App\Models\Master;
use App\Models\Navigator;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class BreakdownController extends Controller
{
    public function bd_list()
    {
        $nav = Navigator::where('karyawan', Auth::user()->id)->get();
        $periode = date('m-Y');
        $master = Master::where('status', 'Present')->first();
        $cek = Breakdown::where('master_id', $master->id)->count();
        $bd = Breakdown::where('master_id', $master->id)->get();
        $equip = Equipment::where('status', 'Aktif')->get();

        return view('author.sad.pfm.bd_list', compact('equip','nav', 'cek','periode','master','bd'));
    }


    public function bd_store(Request $request)
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
        $jam_total = floor($tot_detik / (60 * 60));

        Breakdown::create([
            'tgl' => $request->tgl,
            'equip_id' => $request->equip_id,
            'master_id' => $request->master_id,
            'jam_mulai' => $request->jam_mulai,
            'jam_selesai' => $request->jam_selesai,
            'jam_total' => $jam_total,
            'deskripsi' => $request->deskripsi,
            'remark' => $request->remark,
        ]);

        return back()->with('success', 'Data BreakDown Berhasil Disimpan');
    }


    public function bd_update(Request $request)
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

        Breakdown::where('id', $request->delete)->delete();
        $awal = strtotime($request->jam_mulai);
        $akhir = strtotime($request->jam_selesai);
        $tot_detik = $akhir - $awal;
        $jam_total = floor($tot_detik / (60 * 60));

        Breakdown::create([
            'id' => $request->id,
            'tgl' => $request->tgl,
            'equip_id' => $request->equip_id,
            'master_id' => $request->master_id,
            'jam_mulai' => $request->jam_mulai,
            'jam_selesai' => $request->jam_selesai,
            'jam_total' => $jam_total,
            'deskripsi' => $request->deskripsi,
            'remark' => $request->remark,
        ]);

        return back()->with('success', 'Data BreakDown Berhasil Diupdate');
    }


    public function bd_delete(Request $request)
    {
        Breakdown::where('id', $request->delete)->delete();
        return back()->with('success', 'Data BreakDown Berhasil Dihapus');
    }
}
