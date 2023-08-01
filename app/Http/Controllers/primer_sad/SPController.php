<?php

namespace App\Http\Controllers\primer_sad;

use App\Http\Controllers\Controller;
use App\Models\Master;
use App\Models\Navigator;
use App\Models\SP;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Crypt;

class SPController extends Controller
{
    public function sp_index()
    {
        $nav = Navigator::where('karyawan', Auth::user()->id)->get();
        $master = Master::where('status', 'Present')->count();
        $kar = User::where('status', '<>', 'Hidden')
            ->where('status', '<>', 'Delete')
            ->get();
        $sp = SP::all();
        $cek = SP::all()->count();
        return view('author.sad.akt.sp', compact('sp', 'kar', 'master', 'cek', 'nav'));
    }


    public function sp_info($id)
    {
        $decryptID = Crypt::decryptString($id);
        $nav = Navigator::where('karyawan', Auth::user()->id)->get();
        $master = Master::where('status', 'Present')->count();
        $kar = User::where('status', '<>', 'Hidden')
            ->where('status', '<>', 'Delete')
            ->get();
        $sp = SP::Find($decryptID);
        $cek = SP::all()->count();
        return view('asset.sad.akt.sp.sp_info', compact('sp', 'kar', 'master', 'cek', 'nav'));
    }


    public function sp_save(Request $request)
    {
        // dd($request->all());
        $messages = [
            'no.required' => 'Nomor Surat Wajib Diisi',
            'surat.required' => 'Surat Wajib Diupload',
            'kar_id.required' => 'Karyawan Perusahaan Wajib Diisi',
            'kar_id.unique' => 'Karyawan Sudah Terdaftar, Harap Hapus Data Lama Terlebih Dahulu',
        ];
        $this->validate($request, [
            'no'     => 'required',
            'surat'     => 'required',
            'kar_id'     => ['required', 'unique:hwa_sp,kar_id'],
        ], $messages);
        $surat = $request->surat;
        $new_surat = 'surat' . time() . $surat->getClientOriginalName();
        $surat->move('file/hrga/sp/', $new_surat);
        SP::create([
            'no' => $request->no,
            'kar_id' => $request->kar_id,
            'jenis' => $request->jenis,
            'surat' => 'file/hrga/sp/' . $new_surat,
        ]);
        return back()->with('success', 'Surat Peringatan Berhasil Dibuat');
    }


    public function sp_phk(Request $request, $id)
    {
        $kar = User::Find($id);
        $kar->update([
            'status' => $request->status
        ]);
        return back()->with('success', 'Karyawan Berhasil Di PHK');
    }


    public function sp_delete(Request $request)
    {
        SP::where('id', $request->delete)->delete();
        return back()->with('success', 'Surat Peringatan Berhasil Dihapus');
    }
}
