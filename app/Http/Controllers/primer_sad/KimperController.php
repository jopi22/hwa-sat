<?php

namespace App\Http\Controllers\primer_sad;

use App\Helpers\LogActivity;
use App\Http\Controllers\Controller;
use App\Models\Bank;
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

class KimperController extends Controller
{
    public function kimper_index()
    {
        $nav = Navigator::where('karyawan', Auth::user()->id)->get();
        $periode = date('m-Y');
        $master = Master::where('status', 'Present')->count();
        $kar = User::where('status', 'Aktif')
            ->where('tipe_gaji', 'AI')
            ->orderBy('username', 'ASC')
            ->get();
        $site = Site::all();
        $cek = User::where('status', 'Aktif')
        ->where('tipe_gaji', 'AI')
            ->count();
        $jab_f = Jabatan::all();
        return view('author.sad.kar.kimper_index', compact('cek', 'site', 'nav', 'kar', 'jab_f', 'master', 'periode',));
    }

    public function kimper_print($id)
    {
        $nav = Navigator::where('karyawan', Auth::user()->id)->get();
        $periode = date('m-Y');
        $master = Master::where('status', 'Present')->count();
        $kar = User::where('status', 'Aktif')
            ->where('tipe_gaji', 'AI')
            ->orderBy('username', 'ASC')
            ->get();
        $site = Site::all();
        $cek = User::where('status', '<>', 'Hidden')
            ->where('status', '<>', 'Trash')
            ->count();
        $jab_f = Jabatan::all();
        return view('asset.sad.kar.kimper_print', compact('cek', 'site', 'nav', 'kar', 'jab_f', 'master', 'periode',));
    }


    public function kimper_update(Request $request, $id)
    {
        $messages = [
            'file_sim_a.max' => 'File Sim A Melebihi Limit 500kb!',
            'file_sim_b1.max' => 'File Sim B1 Melebihi Limit 500kb!',
            'file_sim_b2.max' => 'File Sim B2 Melebihi Limit 500kb!',
            'file_tes_medis.max' => 'File Tes Medis  Melebihi Limit 500kb!',
            'file_kimper.max' => 'File KIMPER Melebihi Limit 500kb!',
            'ed_kimper.required' => 'ED KIMPER Perlu Diisi',
        ];
        $this->validate($request, [
            'file_sim_a' => 'max:500',
            'file_sim_b1' => 'max:500',
            'file_sim_b2' => 'max:500',
            'file_tes_medis' => 'max:500',
            'file_kimper' => 'max:500',
            'ed_kimper' => 'required',
        ], $messages);

        // dd($request->all());
        $kar = User::Find($id);

        if ($request->has('file_sim_a')) {
            $file_sim_a = $request->file_sim_a;
            $sim_a = $kar->name . time() . $file_sim_a->getClientOriginalName();
            $file_sim_a->move('file/karyawan/sim_a/', $sim_a);
            $kar_data = [
                'file_sim_a' => 'file/karyawan/sim_a/' . $sim_a,
            ];
            $kar->update($kar_data);
        }

        if ($request->has('file_sim_b1')) {
            $file_sim_b1 = $request->file_sim_b1;
            $sim_b1 = $kar->name . time() . $file_sim_b1->getClientOriginalName();
            $file_sim_b1->move('file/karyawan/sim_b1/', $sim_b1);
            $kar_data = [
                'file_sim_b1' => 'file/karyawan/sim_b1/' . $sim_b1,
            ];
            $kar->update($kar_data);
        }

        if ($request->has('file_sim_b2')) {
            $file_sim_b2 = $request->file_sim_b2;
            $sim_b2 = $kar->name . time() . $file_sim_b2->getClientOriginalName();
            $file_sim_b2->move('file/karyawan/sim_b2/', $sim_b2);
            $kar_data = [
                'file_sim_b2' => 'file/karyawan/sim_b2/' . $sim_b2,
            ];
            $kar->update($kar_data);
        }

        if ($request->has('file_kimper')) {
            $file_kimper = $request->file_kimper;
            $kimper = $kar->name . time() . $file_kimper->getClientOriginalName();
            $file_kimper->move('file/karyawan/kimper/', $kimper);
            $kar_data = [
                'file_kimper' => 'file/karyawan/kimper/' . $kimper,
            ];
            $kar->update($kar_data);
        }

        if ($request->has('file_tes_medis')) {
            $file_tes_medis = $request->file_tes_medis;
            $medis = $kar->name . time() . $file_tes_medis->getClientOriginalName();
            $file_tes_medis->move('file/karyawan/medis/', $medis);
            $kar_data = [
                'file_tes_medis' => 'file/karyawan/medis/' . $medis,
            ];
            $kar->update($kar_data);
        }

        $kar_data = [
            'kimper' => $request->kimper,
            'ed_kimper' => $request->ed_kimper,
        ];
        $kar->update($kar_data);
        return back()->with('success', 'Data KIMPER Berhasil diupdate');
    }
}
