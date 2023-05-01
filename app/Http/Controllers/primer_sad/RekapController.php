<?php

namespace App\Http\Controllers\primer_sad;

use App\Http\Controllers\Controller;
use App\Models\Absensi;
use App\Models\Master;
use App\Models\PengajuanAbsensi;
use App\Models\PengajuanAbsensiList;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Crypt;
use Illuminate\Support\Facades\Validator;

class RekapController extends Controller
{
    public function rekap_index()
    {
        $periode = date('m-Y');
        $master = Master::where('status', 'Present')->first();
        // $mit = Mitra::all();
        // $cek = Mitra::all()->count();
        return view('author.sad.rekap.rekap_index', compact( 'periode', 'master'));
    }


    public function pengabs_index()
    {
        date_default_timezone_set('Asia/Pontianak');
        $periode = date('m-Y');
        $master = Master::where('status', 'Present')->first();
        $cek = $master;
        $all = PengajuanAbsensi::where('master_id', $master->id)->get();
        $all_c = PengajuanAbsensi::where('master_id', $master->id)->count();
        $nores = PengajuanAbsensi::where('master_id', $master->id)
            ->where('respon_status', 'Belum')
            ->orderBy('id', 'DESC')
            ->get();
        $nores_c = PengajuanAbsensi::where('master_id', $master->id)
            ->where('respon_status', 'Belum')
            ->count();
        $ter = PengajuanAbsensi::where('master_id', $master->id)
            ->where('respon_status', 'Diterima')
            ->orderBy('id', 'DESC')
            ->get();
        $ter_c = PengajuanAbsensi::where('master_id', $master->id)
            ->where('respon_status', 'Diterima')
            ->count();
        $tol = PengajuanAbsensi::where('master_id', $master->id)
            ->where('respon_status', 'Ditolak')
            ->orderBy('id', 'DESC')
            ->get();
        $tol_c = PengajuanAbsensi::where('master_id', $master->id)
            ->where('respon_status', 'Ditolak')
            ->count();
        $cek_all = PengajuanAbsensi::where('master_id', $master->id)
            ->count();
        $cek_nores = PengajuanAbsensi::where('master_id', $master->id)
            ->where('respon_status', 'Belum')
            ->count();
        $cek_ter = PengajuanAbsensi::where('master_id', $master->id)
            ->where('respon_status', 'Diterima')
            ->count();
        $cek_tol = PengajuanAbsensi::where('master_id', $master->id)
            ->where('respon_status', 'Ditolak')
            ->count();
        return view('asset.sad.rekap.pengabs.pengabs_index', compact('all', 'all_c', 'nores_c', 'ter_c', 'tol_c', 'master', 'periode', 'cek', 'nores', 'ter', 'tol', 'cek_all', 'cek_nores', 'cek_ter', 'cek_tol'));
    }


    // public function mitra_store(Request $request)
    // {
    //     // dd($request->all());
    //     $messages = [
    //         'perusahaan.required' => 'Nama Perusahaan Wajib Diisi',
    //         'logo.required' => 'Logo Perusahaan Wajib Diisi',
    //     ];
    //     $this->validate($request, [
    //         'perusahaan'     => 'required',
    //         'logo'     => 'required',
    //     ], $messages);
    //     $exc = $request->sewa_exc;
    //     $dt = $request->sewa_dt;
    //     $vb = $request->sewa_vb;
    //     $lain = $request->sewa_lain;
    //     $sewa_total = $exc + $dt + $vb + $lain;

    //     $file = $request->logo;
    //     $new_file = 'file' . time() . $file->getClientOriginalName();
    //     $file->move('file/hwa/profil/', $new_file);
    //     $file2 = $request->file_kontrak;
    //     $new_file2 = 'file' . time() . $file2->getClientOriginalName();
    //     $file2->move('file/hwa/profil/', $new_file2);
    //     Mitra::create([
    //         'perusahaan' => $request->perusahaan,
    //         'tgl_kontrak' => $request->tgl_kontrak,
    //         'akhir_kontrak' => $request->akhir_kontrak,
    //         'sewa_vb' => $request->sewa_vb,
    //         'sewa_dt' => $request->sewa_dt,
    //         'sewa_exc' => $request->sewa_exc,
    //         'sewa_lain' => $request->sewa_lain,
    //         'sewa_total' => $sewa_total,
    //         'logo' => 'file/hwa/profil/' . $new_file,
    //         'file_kontrak' => 'file/hwa/profil/' . $new_file2,
    //     ]);
    //     return back()->with('success', 'Data Mitra Berhasil Disimpan');
    // }


    // public function mitra_show($id)
    // {
    //     $decryptID = Crypt::decryptString($id);
    //     $periode = date('m-Y');
    //     $master = Master::where('status', 'Present')->first();
    //     $mit = Mitra::Find($decryptID);
    //     return view('asset.sad.mitra.mitra_show', compact('mit', 'master', 'periode'));
    // }


    // public function mitra_update(Request $request, $id)
    // {
    //     // dd($request->all());
    //     $hwa = Mitra::Find($id);

    //     $exc = $request->sewa_exc;
    //     $dt = $request->sewa_dt;
    //     $vb = $request->sewa_vb;
    //     $lain = $request->sewa_lain;
    //     $sewa_total = $exc + $dt + $vb + $lain;

    //     if ($request->has('file_kontrak')) {
    //         $foto = $request->foto;
    //         $new_foto = 'foto' . time() . $foto->getClientOriginalName();
    //         $foto->move('file/hwa/profil/', $new_foto);
    //         $hwa_data = [
    //             'file_kontrak' => 'file/hwa/profil/' . $new_foto,
    //         ];
    //         $hwa->update($hwa_data);
    //     }

    //     if ($request->has('logo')) {
    //         $logo = $request->logo;
    //         $new_logo = 'logo' . time() . $logo->getClientOriginalName();
    //         $logo->move('file/hwa/profil/', $new_logo);

    //         $hwa_data = [
    //             'logo' => 'file/hwa/profil/' . $new_logo,
    //         ];
    //         $hwa->update($hwa_data);
    //     }

    //     $hwa_data = [
    //         'perusahaan' => $request->perusahaan,
    //         'tgl_kontrak' => $request->tgl_kontrak,
    //         'akhir_kontrak' => $request->akhir_kontrak,
    //         'sewa_vb' => $request->sewa_vb,
    //         'sewa_dt' => $request->sewa_dt,
    //         'sewa_exc' => $request->sewa_exc,
    //         'sewa_lain' => $request->sewa_lain,
    //         'sewa_total' => $sewa_total,
    //     ];
    //     $hwa->update($hwa_data);
    //     return back()->with('success', 'Data Mitra Berhasil Diubah');
    // }


    // public function mitra_delete(Request $request)
    // {
    //     Mitra::where('id', $request->delete)->delete();
    //     return back()->with('success', 'Data Mitra Berhasil Dihapus');
    // }
}
