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
        $master = Master::where('status', 'Validasi')->first();
        return view('asset.sad.rekap.rekap_index', compact('master'));
    }

}
