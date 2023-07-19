<?php

namespace App\Http\Controllers\master_sad\absensi;

use App\Http\Controllers\Controller;
use App\Models\Absensi;
use App\Models\Master;
use App\Models\Navigator;
use App\Models\PengajuanAbsensi;
use App\Models\PengajuanAbsensiList;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Crypt;
use Illuminate\Support\Facades\Validator;

class PengajuanAbsController extends Controller
{
    public function pengAbsGet()
    {
        $nav = Navigator::where('karyawan', Auth::user()->id)->get();
        date_default_timezone_set('Asia/Pontianak');
        $periode = date('m-Y');
        $master = Master::where('status', 'Present')->first();
        $master2 = Master::where('status', 'Present')->count();
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
        return view('author.sad.abs.pengabs_index', compact('all','nav','master2', 'all_c', 'nores_c', 'ter_c', 'tol_c', 'master', 'periode', 'cek', 'nores', 'ter', 'tol', 'cek_all', 'cek_nores', 'cek_ter', 'cek_tol'));
    }


    public function pengAbsCreate()
    {
        $nav = Navigator::where('karyawan', Auth::user()->id)->get();
        date_default_timezone_set('Asia/Pontianak');
        $periode = date('m-Y');
        $today = date('d-m-Y');
        $time = date('H:i');
        $master = Master::where('status', 'Present')->first();
        $cek = $master;
        $tgl_list = Absensi::where('periode_id', $master->id)
            ->where('karyawan', Auth::user()->id)
            ->where('tgl', '>', $today)
            ->get();
        $kar = User::where('status', '<>', 'Hidden')
            ->where('status', '<>', 'Delete')
            ->get();
        return view('author.sad.abs.pengabs_create', compact('kar','nav', 'cek', 'periode', 'master', 'tgl_list', 'today', 'time'));
    }


    public function pengAbsCreateM()
    {
        $nav = Navigator::where('karyawan', Auth::user()->id)->get();
        date_default_timezone_set('Asia/Pontianak');
        $periode = date('m-Y');
        $today = date('d-m-Y');
        $time = date('H:i');
        $master = Master::where('periode', $periode)->first();
        $cek = $master;
        $abs = Absensi::where('id', $today)->take(0)->get();
        $kar = User::where('status', '<>', 'Hidden')
            ->where('status', '<>', 'Delete')
            ->get();
        return view('author.sad.abs.pengabs_create_m', compact('kar','nav', 'cek', 'periode', 'master', 'today', 'time', 'abs'));
    }


    public function absSearch_2(Request $request)
    {
        $nav = Navigator::where('karyawan', Auth::user()->id)->get();
        $validator = Validator::make($request->all(), [
            'search'     => 'required',
        ], [
            'required' => 'Tidak Boleh Kosong',
        ]);

        if ($validator->fails()) {
            return response()->json($validator->errors(), 422);
        }
        date_default_timezone_set('Asia/Pontianak');
        $periode = date('m-Y');
        $today = date('d-m-Y');
        $time = date('H:i');
        $master = Master::where('status', 'Present')->first();
        $cek = $master;
        $kar = User::where('status', '<>', 'Hidden')
            ->where('status', '<>', 'Delete')
            ->get();

        if ($request->has('search')) {
            $abs = Absensi::where('karyawan', 'LIKE', $request->search)
                ->where('periode_id', $master->id)
                ->where('tgl', '>', $today)
                ->get();
        } else {
            $abs = Absensi::latest()->take(0)->get();
        }

        return view('author.sad.abs.pengabs_create_m', compact('abs','nav', 'cek', 'kar', 'today', 'time', 'periode', 'master'));
    }


    public function pengAbsStore(Request $request)
    {
        // dd($request->all());
        $messages = [
            'required' => 'File Tidak Boleh Kosong!',
        ];

        $this->validate($request, [
            'file' => 'required',
        ], $messages);

        date_default_timezone_set('Asia/Pontianak');
        $periode = date('m-Y');
        $respon = 'Belum';

        if ($request->has('file')) {
            $file = $request->file;
            $new_file = time() . $file->getClientOriginalName();
            $file->move('uploads/pengajuan_absensi/', $new_file);
            PengajuanAbsensi::create([
                'pengajuan_pk' => $request->pengajuan_pk,
                'status' => $request->status,
                'surat' => $request->surat,
                'karyawan' => $request->karyawan,
                'master_id' => $request->master_id,
                'periode_id' => $periode,
                'respon_status' => $respon,
                'file' => 'uploads/pengajuan_absensi/' . $new_file,
            ]);
        } else {
            PengajuanAbsensi::create([
                'pengajuan_pk' => $request->pengajuan_pk,
                'status' => $request->status,
                'surat' => $request->surat,
                'respon_status' => $respon,
                'periode_id' => $periode,
                'karyawan' => $request->karyawan,
                'master_id' => $request->master_id,
            ]);
        }


        foreach ($request->absensi_id as $key => $items) {
            $list['absensi_id']            = $items;
            $list['pengajuan_fk']     = $request->pengajuan_fk[$key];

            PengajuanAbsensiList::create($list);
        }
        return back()->with('success', 'Pengajuan Surat Berhasil Ditambah, Harap Ente Segera Merespon Data Tersebut');
    }


    public function pengAbsStoreM(Request $request)
    {
        // dd($request->all());
        $request->validate([
            'tgl' => ['required'],
            'file' => ['max:5000', 'required']
        ], [
            'tgl.required' => 'Masukan Tanggal Pengajian',
            'file.required' => 'Masukan Bukti Surat',
            'file.max' => 'Ukuran gambar maksimal 5 mb',
        ]);
        $respon = 'Diterima';
        date_default_timezone_set('Asia/Pontianak');
        $periode = date('m-Y');
        if ($request->has('file')) {
            $file = $request->file;
            $new_file = time() . $file->getClientOriginalName();
            $file->move('uploads/pengajuan_absensi/', $new_file);
            PengajuanAbsensi::create([
                'pengajuan_pk' => $request->pengajuan_pk,
                'status' => $request->status,
                'karyawan' => $request->karyawan,
                'master_id' => $request->master_id,
                'periode_id' => $periode,
                'respon_status' => $respon,
                'file' => 'uploads/pengajuan_absensi/' . $new_file,
            ]);
        } else {
            PengajuanAbsensi::create([
                'pengajuan_pk' => $request->pengajuan_pk,
                'status' => $request->status,
                'respon_status' => $respon,
                'karyawan' => $request->karyawan,
                'master_id' => $request->master_id,
                'periode_id' => $periode,
            ]);
        }

        /** delete record */
        foreach ($request->delete_id as $key => $items) {
            Absensi::where('id', $request->delete_id[$key])->delete();
        }
        /** insert new record */
        foreach ($request->id as $key => $id) {
            $abs['id'] = $request->id[$key];
            $abs['tgl'] = $request->tgl[$key];
            $abs['karyawan'] = $request->karyawan_[$key];
            $abs['status'] = $request->status_[$key];
            $abs['periode_id'] = $request->periode_id[$key];
            $abs['pengajuan_fk'] = $request->pengajuan_fk[$key];
            $abs['kode_unik'] = $request->kode_unik[$key];

            Absensi::create($abs);
        }
        return redirect()->route('peng.abs.g')->with('success', 'Pengajuan Berhasil Dibuat');
    }


    public function pengAbsInfo($id)
    {
        $nav = Navigator::where('karyawan', Auth::user()->id)->get();
        date_default_timezone_set('Asia/Pontianak');
        $periode = date('m-Y');
        $master = Master::where('status', 'Present')->first();
        $cek = $master;
        $decryptID = Crypt::decryptString($id);
        $peng = PengajuanAbsensi::Find($decryptID);
        $penglist = Absensi::where('pengajuan_fk', $peng->pengajuan_pk)->get();
        $penglist_ = PengajuanAbsensiList::select('absensi_id')->distinct()
            ->where('pengajuan_fk', $peng->pengajuan_pk)->get();
        $all = PengajuanAbsensi::where('periode_id', $periode)->get();
        $kar = User::where('status', '<>', 'Hidden')
            ->where('status', '<>', 'Delete')
            ->get();
        return view('asset.sad.abs.pengabs_info', compact('peng','nav', 'cek', 'periode', 'penglist', 'penglist_', 'kar', 'all'));
    }


    public function pengAbsPrint($id)
    {
        $nav = Navigator::where('karyawan', Auth::user()->id)->get();
        $decryptID = Crypt::decryptString($id);
        $peng = PengajuanAbsensi::Find($decryptID);
        $penglist = Absensi::where('pengajuan_fk', $peng->pengajuan_pk)->get();
        $penglist_ = PengajuanAbsensiList::select('absensi_id')->distinct()
            ->where('pengajuan_fk', $peng->pengajuan_pk)->get();
        $kar = User::where('status', '<>', 'Hidden')
            ->where('status', '<>', 'Delete')
            ->get();
        return view('asset.sad.abs.pengabs_surat', compact('peng','nav', 'penglist', 'penglist_', 'kar'));
    }


    public function pengTerima(Request $request)
    {
        // dd($request->all());
        $respon = 'Diterima';
        PengajuanAbsensi::where('id', $request->delete_pengabs)->delete();
        $pengabs['id'] = $request->id_peng;
        $pengabs['master_id'] = $request->master_id;
        $pengabs['karyawan'] = $request->karyawan_peng;
        $pengabs['surat'] = $request->surat;
        $pengabs['file'] = $request->file;
        $pengabs['status'] = $request->status_peng;
        $pengabs['pengajuan_pk'] = $request->pengajuan_pk;
        $pengabs['created_at'] = $request->created_at;
        $pengabs['respon_status'] = $respon;
        $pengabs['periode_id'] = $request->periode_id_;
        PengajuanAbsensi::create($pengabs);
        /** delete record */
        foreach ($request->delete_id as $key => $items) {
            Absensi::where('id', $request->delete_id[$key])->delete();
        }
        /** insert new record */
        foreach ($request->id as $key => $id) {
            $abs['id'] = $request->id[$key];
            $abs['tgl'] = $request->tgl[$key];
            $abs['karyawan'] = $request->karyawan[$key];
            $abs['status'] = $request->status[$key];
            $abs['periode_id'] = $request->periode_id[$key];
            $abs['kode_unik'] = $request->kode_unik[$key];
            Absensi::create($abs);
        }
        return back()->with('success', 'Pengajuan Berhasil diterima');
    }


    public function pengTolak($id)
    {
        $respon = 'Ditolak';
        $peng = PengajuanAbsensi::Find($id);
        $peng_data = [
            'respon_status' => $respon
        ];
        $peng->update($peng_data);
        return back()->with('success', 'Pengajuan Berhasil Ditolak');
    }


    public function pengTerimaManual($id)
    {
        $respon = 'Diterima';
        $peng = PengajuanAbsensi::Find($id);
        $peng_data = [
            'respon_status' => $respon
        ];
        $peng->update($peng_data);
        return back()->with('success', 'Pengajuan Berhasil Diterima, Pastikan Anda Telah Sinkronkan Tanggal Absen Yang Diajukan');
    }
}
