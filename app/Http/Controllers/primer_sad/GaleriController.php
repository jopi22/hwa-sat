<?php

namespace App\Http\Controllers\primer_sad;

use App\Http\Controllers\Controller;
use App\Models\FotoGaleri;
use App\Models\Galeri;
use App\Models\Master;
use App\Models\Navigator;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Crypt;

class GaleriController extends Controller
{
    public function galeri_index()
    {
        $nav = Navigator::where('karyawan', Auth::user()->id)->get();
        $periode = date('m-Y');
        $master = Master::where('status', 'Present')->count();
        $gal = Galeri::orderBy('id', 'DESC')->get();
        $cek = Galeri::all()->count();
        return view('asset.sad.arsip.galeri.galeri', compact('gal','nav', 'master', 'cek', 'periode'));
    }


    public function galeri_info($id)
    {
        $nav = Navigator::where('karyawan', Auth::user()->id)->get();
        $decryptID = Crypt::decryptString($id);
        $periode = date('m-Y');
        $master = Master::where('status', 'Present')->count();
        $gal = Galeri::Find($decryptID);
        $foto = FotoGaleri::where('galeri_id', $decryptID)->get();
        return view('asset.sad.arsip.galeri.galeri_info', compact('gal','nav', 'master', 'periode','foto'));
    }


    public function gal_save(Request $request)
    {
        // dd($request->all());
        $messages = [
            'foto.required' => 'Thumbnail Wajib Diupload',
            'tgl.required' => 'Tanggal Wajib Diisi',
        ];
        $this->validate($request, [
            'foto'     => 'required',
            'tgl'     => 'required',
        ], $messages);
        $file = $request->foto;
        $new_file = 'file' . time() . $file->getClientOriginalName();
        $file->move('file/arsip/galeri/thumbnail/', $new_file);
        Galeri::create([
            'nama' => $request->nama,
            'deskripsi' => $request->deskripsi,
            'tgl' => $request->tgl,
            'foto' => 'file/arsip/galeri/thumbnail/' . $new_file,
        ]);
        return back()->with('success', 'Galeri Berhasil Ditambahkan');
    }


    public function foto_save(Request $request)
    {
        // dd($request->all());
        $request->validate([
            'foto' => ['required']
        ]);
        if ($request->hasFile('foto')) {
            $images = $request->foto;
            foreach ($images as $image) {
                $new_image = time() . $image->getClientOriginalName();
                $image->move('file/arsip/galeri/foto/', $new_image);
                $galeri = FotoGaleri::create([
                    'galeri_id' => $request->galeri_id,
                    'foto' => 'file/arsip/galeri/foto/' . $new_image,
                ]);
            }
        }
        return back()->with('success', 'Gambar berhasil diupload');
    }


    public function galeri_delete(Request $request)
    {
        Galeri::where('id', $request->delete)->delete();
        return redirect()->route('gal.g')->with('success', 'Galeri Berhasil Dihapus');
    }


    public function foto_delete(Request $request)
    {
        FotoGaleri::where('id', $request->delete)->delete();
        return back()->with('success', 'Foto Berhasil Dihapus');
    }
}
