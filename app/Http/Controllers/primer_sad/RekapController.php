<?php

namespace App\Http\Controllers\primer_sad;

use App\Http\Controllers\Controller;
use App\Models\Absensi;
use App\Models\Master;
use App\Models\PengajuanAbsensi;
use App\Models\PengajuanAbsensiList;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Crypt;
use Illuminate\Support\Facades\Validator;

class RekapController extends Controller
{
    public function rekap_index()
    {
        $periode = date('m-Y');
        $master = Master::where('status', 'Present')->first();
        // $mit = Mitra::all();
        // $cek = Mitra::all()->count();
        return view('author.sad.rekap.rekap_index', compact( 'periode', 'master'));
    }

}
