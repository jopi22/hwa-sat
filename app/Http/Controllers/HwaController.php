<?php

namespace App\Http\Controllers;

use App\Models\Hwa;
use App\Models\Master;
use Illuminate\Http\Request;

class HwaController extends Controller
{
    public function developer()
    {
        $rekap = Master::where('status', 'Proses Validasi')->first();
        return view('home.developer', compact('rekap'));
    }


    public function superadmin()
    {
        $periode = date('m-Y');
        $cek = Master::where('status', 'Present')->first();
        $cek_null = Master::where('status', 'Present')->first();
        return view('home.superadmin', compact('cek','cek_null', 'periode'));
    }


    public function admin()
    {
        return view('home.admin');
    }


    public function pekerja()
    {
        return view('home.pekerja');
    }


    public function hwaprofil()
    {
        $periode = date('m-Y');
        $master = Master::where('status', 'Present')->first();
        $hwa = Hwa::Find(1);
        return view('asset.hwa.hwa_profil', compact('hwa','periode','master'));
    }


    public function hwaEdit()
    {
        $hwa = Hwa::Find(1);
        return view('asset.hwa.hwa_edit', compact('hwa'));
    }


    public function hwaUpdate(Request $request)
    {
        // dd($request->all());
        $hwa = Hwa::Find(1);

        if ($request->has('foto')) {
            $foto = $request->foto;
            $new_foto = 'foto' . time() . $foto->getClientOriginalName();
            $foto->move('file/hwa/profil/', $new_foto);
            $hwa_data = [
                'foto' => 'file/hwa/profil/' . $new_foto,
            ];
            $hwa->update($hwa_data);
        }

        if ($request->has('logo')) {
            $logo = $request->logo;
            $new_logo = 'logo' . time() . $logo->getClientOriginalName();
            $logo->move('file/hwa/profil/', $new_logo);

            $hwa_data = [
                'logo' => 'file/hwa/profil/' . $new_logo,
            ];
            $hwa->update($hwa_data);
        }

        $hwa_data = [
            'nama' => $request->nama,
            'inisial' => $request->inisial,
            'telp' => $request->telp,
            'alamat' => $request->alamat,
            'email' => $request->email,
            'tgl_berdiri' => $request->tgl_berdiri,
            'deskripsi' => $request->deskripsi,
        ];
        $hwa->update($hwa_data);
        return back()->with('success', 'Data Profil Berhasil Diubah');
    }


    public function hwa_struktur()
    {
        $periode = date('m-Y');
        $master = Master::where('status', 'Present')->first();
        $hwa = Hwa::Find(1);
        return view('asset.hwa.hwa_struktur', compact('hwa','periode','master'));
    }


    public function hwa_struktur_update(Request $request)
    {
        // dd($request->all());
        $hwa = Hwa::Find(1);

            $foto = $request->foto;
            $new_foto = 'foto' . time() . $foto->getClientOriginalName();
            $foto->move('file/hwa/profil/', $new_foto);
            $hwa_data = [
                'foto' => 'file/hwa/profil/' . $new_foto,
            ];
            $hwa->update($hwa_data);
        return back()->with('success', 'Data Struktur Berhasil Diubah');
    }


    public function hwa_peraturan()
    {
        $periode = date('m-Y');
        $master = Master::where('status', 'Present')->first();
        $hwa = Hwa::Find(1);
        return view('asset.hwa.hwa_peraturan', compact('hwa','periode','master'));
    }


    public function hwa_peraturan_update(Request $request)
    {
        // dd($request->all());
        $hwa = Hwa::Find(1);

            $foto = $request->foto;
            $new_foto = 'foto' . time() . $foto->getClientOriginalName();
            $foto->move('file/hwa/profil/', $new_foto);
            $hwa_data = [
                'foto2' => 'file/hwa/profil/' . $new_foto,
            ];
            $hwa->update($hwa_data);
        return back()->with('success', 'Data Peraturan Berhasil Diubah');
    }
}
