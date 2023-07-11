<?php

namespace App\Http\Controllers\primer_sad;

use App\Helpers\LogActivity;
use App\Http\Controllers\Controller;
use App\Models\Aktivitas;
use App\Models\Bank;
use App\Models\Dedicated;
use App\Models\Hwa;
use App\Models\Jabatan;
use App\Models\Master;
use App\Models\Navigator;
use App\Models\Site;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Crypt;

class DedicatedController extends Controller
{
    public function dedicated_index()
    {
        $nav = Navigator::where('karyawan', Auth::user()->id)->get();
        $periode = date('m-Y');
        $master = Master::where('status', 'Present')->count();
        $dedicated = Dedicated::where('status', '<>', 'Delete')
            ->get();
        $cek = Dedicated::where('status', '<>', 'Delete')
            ->count();
        return view('author.sad.rental.dedicated', compact('cek', 'nav', 'dedicated', 'master', 'periode',));
    }


    public function dedicated_store(Request $request)
    {
        foreach ($request->dedicated as $key => $value) {
            $kar['dedicated'] = $request->dedicated[$key];
            $kar['ket'] = $request->ket[$key];
            $kar['status'] = $request->status[$key];
            Dedicated::create($kar);
        }
        return back()->with('success', 'Data Dedicated Berhasil Ditambah');
    }


    public function dedicated_update(Request $request, $id)
    {
        $akt = Dedicated::Find($id);
        $akt->update([
            'dedicated' => $request->dedicated,
            'ket' => $request->ket,
            'status' => $request->status,
        ]);

        if ($request->has('hapus')) {
            return back()->with('success', 'Data Dedicated Berhasil Dihapus');
        } else {
            return back()->with('success', 'Data Dedicated Berhasil Diubah');
        }
    }
}
