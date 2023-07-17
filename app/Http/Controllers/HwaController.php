<?php

namespace App\Http\Controllers;

use App\Models\EquipMaster;
use App\Models\Equipment;
use App\Models\Hwa;
use App\Models\Master;
use App\Models\Navigator;
use App\Models\PengajuanAbsensi;
use App\Models\Performa_hm;
use App\Models\Site;
use App\Models\SP;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class HwaController extends Controller
{
    public function developer()
    {
        $rekap = Master::where('status', 'Proses Validasi')->first();
        return view('home.developer', compact('rekap'));
    }


    public function dashboard()
    {
        $nav = Navigator::where('karyawan', Auth::user()->id)->get();
        $periode = date('m-Y');
        $cek = Master::where('status', 'Present')->first();
        $master = Master::where('status', 'Present')->first();
        $cek_master = Master::where('status', 'Present')->count();
        $hwa = Site::Find(1);
        return view('home.home', compact('hwa', 'periode','cek_master','cek', 'master', 'nav'));
    }


    public function hrga()
    {
        $kar = 'asu';
        return view('home.hrga', compact('kar'));
    }


    public function pekerja()
    {
        return view('home.pekerja');
    }


    public function hwaprofil()
    {
        $nav = Navigator::where('karyawan', Auth::user()->id)->get();
        $periode = date('m-Y');
        $master = Master::where('status', 'Present')->count();
        $hwa = Site::Find(1);
        return view('author.sad.hwa.hwa_profil', compact('hwa', 'periode', 'master', 'nav'));
    }


    public function hwaEdit()
    {
        $nav = Navigator::where('karyawan', Auth::user()->id)->get();
        $periode = date('m-Y');
        $master = Master::where('status', 'Present')->count();
        $hwa = Site::Find(1);
        return view('author.sad.hwa.hwa_profil_edit', compact('hwa', 'periode', 'master', 'nav'));
    }


    public function hwaUpdate(Request $request)
    {
        // dd($request->all());
        $hwa = Site::Find(1);

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
        $nav = Navigator::where('karyawan', Auth::user()->id)->get();
        $periode = date('m-Y');
        $master = Master::where('status', 'Present')->count();
        $hwa = Site::Find(1);
        return view('author.sad.hwa.hwa_struktur', compact('hwa', 'periode', 'master', 'nav'));
    }


    public function hwa_struktur_update(Request $request)
    {
        // dd($request->all());
        $hwa = Site::Find(1);
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
        $nav = Navigator::where('karyawan', Auth::user()->id)->get();
        $periode = date('m-Y');
        $master = Master::where('status', 'Present')->count();
        $hwa = Site::Find(1);
        return view('author.sad.hwa.hwa_peraturan', compact('hwa', 'periode', 'master', 'nav'));
    }


    public function hwa_peraturan_update(Request $request)
    {
        // dd($request->all());
        $hwa = Site::Find(1);
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
