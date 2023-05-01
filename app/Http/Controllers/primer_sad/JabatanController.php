<?php

namespace App\Http\Controllers\primer_sad;

use App\Http\Controllers\Controller;
use App\Models\Jabatan;
use App\Models\Master;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class JabatanController extends Controller
{
    public function jab_index()
    {
        $periode = date('m-Y');
        $master = Master::where('status', 'Present')->first();
        $jab = Jabatan::all();
        return view('author.sad.kar.jab_index',compact('jab','periode','master'));
    }


    public function jab_store(Request $request)
    {
        $jab = Jabatan::create([
            'jabatan'     => $request->jabatan,
        ]);
        return response()->json([
            'success' => true,
            'message' => 'Jabatan Berhasil Disimpan!',
            'data'    => $jab
        ]);
    }


    public function jab_show($id)
    {
        $jab = Jabatan::Find($id);
        return response()->json([
            'success' => true,
            'message' => 'Detail Data Berhasil Ditampilkan',
            'data'    => $jab
        ]);
    }


    public function jab_update(Request $request, Jabatan $jab)
    {
        $jab->update([
            'jabatan'     => $request->jabatan,
        ]);
        return response()->json([
            'success' => true,
            'message' => 'Jabatan Berhasil Diudapte!',
            'data'    => $jab
        ]);
    }


    public function jab_delete($jab)
    {
        Jabatan::where('id', $jab)->delete();
        return response()->json([
            'success' => true,
            'message' => 'Jabatan Berhasil Dihapus!.',
            'data'    => $jab
        ]);
    }

}
