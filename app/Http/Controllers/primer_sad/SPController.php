<?php

namespace App\Http\Controllers\primer_sad;

use App\Http\Controllers\Controller;
use App\Models\Master;
use App\Models\Navigator;
use App\Models\SP;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

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
        return view('author.sad.akt.sp', compact('sp','kar','master','cek','nav'));
    }


    public function sp_save(Request $request)
    {
        // dd($request->all());
        $messages = [
            'no.required' => 'Nomor Surat Wajib Diisi',
            'surat.required' => 'Surat Wajib Diupload',
            'karyawan.required' => 'Karyawan Perusahaan Wajib Diisi',
        ];
        $this->validate($request, [
            'no'     => 'required',
            'surat'     => 'required',
            'karyawan'     => 'required',
        ], $messages);
        $surat = $request->surat;
        $new_surat = 'surat' . time() . $surat->getClientOriginalName();
        $surat->move('file/aktivitas/sp/', $new_surat);
        SP::create([
            'no' => $request->no,
            'karyawan' => $request->karyawan,
            'surat' => 'file/aktivitas/sp/' . $new_surat,
        ]);
        return back()->with('success', 'Surat Peringatan Berhasil Dibuat');
    }


    public function sp_delete(Request $request)
    {
        SP::where('id', $request->delete)->delete();
        return back()->with('success', 'Surat Peringatan Berhasil Dihapus');
    }
}
