<?php

namespace App\Http\Controllers;

use App\Models\Absensi;
use App\Models\Master;
use App\Models\User;
use COM;
use Illuminate\Http\Request;

class HomeController extends Controller
{

    public function __construct()
    {
        $this->middleware('auth');
    }


    public function home()
    {
        date_default_timezone_set('Asia/Pontianak');
        $periode = date('m-Y');
        $cek = Master::where('status', 'Present')->first();
        return view('home.home', compact('periode','cek'));
    }


    public function cek()
    {
        $list_kar = User::all('id');
        return view('cek', compact('list_kar'));
    }

    public function cekstore(Request $request)
    {
        // dd($request->all());
        $status = $request->status;
        $karyawan = $request->karyawan;
        $updated_at = $request->updated_at;
        $created_at = $request->created_at;

        foreach($status as $key => $no)
        {
            $input['status'] = $no[$key];
            $input['karyawan '] = $karyawan[$key];
            $input['updated_at '] = $updated_at;
            $input['created_at '] = $created_at;

            Absensi::create($input);

        }
        return back();
    }


}
