<?php

namespace App\Http\Controllers\primer_sad;

use App\Http\Controllers\Controller;
use App\Models\Catatan;
use App\Models\Dokumen;
use App\Models\Master;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Crypt;

class CatatanController extends Controller
{
    public function catatan_index()
    {
        $periode = date('m-Y');
        $master = Master::where('status', 'Present')->first();
        $cat = Catatan::orderBy('id', 'DESC')->get();
        $cek = Catatan::all()->count();
        $kat = Catatan::select('kategori')->distinct()->get();
        return view('asset.sad.arsip.catatan.catatan', compact('cat','master','cek','periode','kat'));
    }


    public function catatan_create()
    {
        $periode = date('m-Y');
        $master = Master::where('status', 'Present')->first();
        $cat = Catatan::orderBy('id', 'DESC')->get();
        $cek = Catatan::all()->count();
        return view('asset.sad.arsip.catatan.catatan_create', compact('cat','master','cek','periode'));
    }


    public function catatan_info($id)
    {
        $decryptID = Crypt::decryptString($id);
        $periode = date('m-Y');
        $master = Master::where('status', 'Present')->first();
        $catat = Catatan::Find($decryptID);
        return view('asset.sad.arsip.catatan.catatan_info', compact('catat', 'master', 'periode'));
    }


    public function catatan_edit($id)
    {
        $decryptID = Crypt::decryptString($id);
        $periode = date('m-Y');
        $master = Master::where('status', 'Present')->first();
        $catat = Catatan::Find($decryptID);
        return view('asset.sad.arsip.catatan.catatan_edit', compact('catat', 'master', 'periode'));
    }


    public function catatan_update(Request $request, $id)
    {
        // dd($request->all());
        $hwa = Catatan::Find($id);
        $hwa_data = [
            'judul' => $request->judul,
            'kategori' => $request->kategori,
            'isi' => $request->isi,
        ];
        $hwa->update($hwa_data);
        return back()->with('success', 'Catatan Berhasil Diubah');
    }



    public function catatan_save(Request $request)
    {
        // dd($request->all());
        $messages = [
            'kategori.required' => 'Kategori Wajib Diisi',
            'isi.required' => 'Isi Catatan Wajib Diisi',
        ];
        $this->validate($request, [
            'kategori'     => 'required',
            'isi'     => 'required',
        ], $messages);
        Catatan::create([
            'judul' => $request->judul,
            'kategori' => $request->kategori,
            'isi' => $request->isi,
        ]);
        return redirect()->route('catat.g')->with('success', 'Catatan Berhasil Ditambahkan');
    }


    public function catatan_delete(Request $request)
    {
        Catatan::where('id', $request->delete)->delete();
        return back()->with('success', 'Catatan Berhasil Dihapus');
    }
}
