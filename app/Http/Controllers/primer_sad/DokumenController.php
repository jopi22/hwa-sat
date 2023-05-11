<?php

namespace App\Http\Controllers\primer_sad;

use App\Http\Controllers\Controller;
use App\Models\Dokumen;
use App\Models\Master;
use App\Models\Navigator;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class DokumenController extends Controller
{
    public function dok_index()
    {
        $nav = Navigator::where('karyawan', Auth::user()->id)->get();
        $periode = date('m-Y');
        $master = Master::where('status', 'Present')->count();
        $dok = Dokumen::orderBy('id', 'DESC')->get();
        $cek = Dokumen::all()->count();
        $kat = Dokumen::select('kategori')->distinct()->get();
        return view('asset.sad.arsip.dokumen.dokumen', compact('dok','nav', 'master','cek','periode','kat'));
    }


    public function dok_save(Request $request)
    {
        // dd($request->all());
        $messages = [
            'kategori.required' => 'Kategori Wajib Diisi',
            'file.required' => 'File Dokumen Wajib Diupload',
        ];
        $this->validate($request, [
            'kategori'     => 'required',
            'file'     => 'required',
        ], $messages);
        $file = $request->file;
        $new_file = 'file' . time() . $file->getClientOriginalName();
        $file->move('file/arsip/dokumen/', $new_file);
        Dokumen::create([
            'nama' => $request->nama,
            'kategori' => $request->kategori,
            'file' => 'file/arsip/dokumen/' . $new_file,
        ]);
        return back()->with('success', 'File Dokumen Berhasil Ditambahkan');
    }


    public function dok_delete(Request $request)
    {
        Dokumen::where('id', $request->delete)->delete();
        return back()->with('success', 'File Dokumen Berhasil Dihapus');
    }
}
