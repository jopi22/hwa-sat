<?php

namespace App\Http\Controllers\primer_sad;

use App\Http\Controllers\Controller;
use App\Models\Master;
use App\Models\User;
use Illuminate\Http\Request;

class AkunController extends Controller
{
    public function akunGet()
    {
        $periode = date('m-Y');
        $master = Master::where('status', 'Present')->first();
        $kar = User::where('status', '<>', 'Delete')
            ->get();
        $cek = User::where('status', '<>', 'Delete')
            ->count();
        $off = User::where('username', null)
            ->count();
        $on = User::where('username', '<>', null)
            ->count();
        return view('author.sad.kar.akun_index', compact('kar', 'cek', 'periode', 'master','off','on'));
    }


    public function new_aktif(Request $request, $id)
    {
        // dd($request->all());
        $akun = User::Find($id);
        $akun_data = [
            'username' => $request->username,
            'email' => $request->username,
            'password' => bcrypt($request->password),
            'password_view' => $request->password,
            'level' => $request->level,
        ];
        $akun->update($akun_data);
        return back()->with('success', 'Akun Baru Berhasil Diaktifkan');
    }


    public function akun_update(Request $request, $id)
    {
        $akun = User::Find($id);
        $akun_data = [
            'username' => $request->username,
            'email' => $request->username,
            'password' => bcrypt($request->password),
            'password_view' => $request->password,
            'level' => $request->level,
        ];
        $akun->update($akun_data);
        return back()->with('success', 'Akun Berhasil Diupdate');
    }


    public function akun_sakelar(Request $request, $id)
    {
        $akun = User::Find($id);
        $akun_data = [
            'username' => $request->username,
        ];
        $akun->update($akun_data);
        return back()->with('success', 'Akun Berhasil Diaktifkan');
    }

}
