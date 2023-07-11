<?php

namespace App\Http\Controllers\primer_sad;

use App\Helpers\LogActivity;
use App\Http\Controllers\Controller;
use App\Models\Aktivitas;
use App\Models\Bank;
use App\Models\Hwa;
use App\Models\Jabatan;
use App\Models\Location;
use App\Models\Master;
use App\Models\Navigator;
use App\Models\Site;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Crypt;

class LocationController extends Controller
{
    public function location_index()
    {
        $nav = Navigator::where('karyawan', Auth::user()->id)->get();
        $periode = date('m-Y');
        $master = Master::where('status', 'Present')->count();
        $loc = Location::where('status', '<>', 'Delete')
            ->get();
        $cek = Location::where('status', '<>', 'Delete')
            ->count();
        return view('author.sad.rental.location', compact('cek', 'nav', 'loc', 'master', 'periode',));
    }


    public function location_store(Request $request)
    {
        foreach ($request->location as $key => $value) {
            $loc['location'] = $request->location[$key];
            $loc['ket'] = $request->ket[$key];
            $loc['status'] = $request->status[$key];
            Location::create($loc);
        }
        return back()->with('success', 'Data Location Berhasil Ditambah');
    }


    public function location_update(Request $request, $id)
    {
        $loc = Location::Find($id);
        $loc->update([
            'location' => $request->location,
            'ket' => $request->ket,
            'status' => $request->status,
        ]);

        if ($request->has('hapus')) {
            return back()->with('success', 'Data Location Berhasil Dihapus');
        } else {
            return back()->with('success', 'Data Location Berhasil Diubah');
        }
    }
}
