<?php

namespace App\Http\Controllers\primer_sad;

use App\Helpers\LogActivity;
use App\Http\Controllers\Controller;
use App\Models\Bank;
use App\Models\Hwa;
use App\Models\Jabatan;
use App\Models\Master;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Crypt;

class KaryawanController extends Controller
{
    public function kar_index()
    {
        $periode = date('m-Y');
        $master = Master::where('status', 'Present')->first();
        $kar = User::where('status', '<>', 'Hidden')
            ->where('status', '<>', 'Delete')
            ->get();
        $cek = User::where('status', '<>', 'Hidden')
            ->where('status', '<>', 'Trash')
            ->count();
        $jab_f = Jabatan::all();
        return view('author.sad.kar.kar_index', compact('cek', 'kar', 'jab_f', 'master', 'periode',));
    }


    public function kar_info($id)
    {
        $decryptID = Crypt::decryptString($id);
        $periode = date('m-Y');
        $master = Master::where('status', 'Present')->first();
        $kar = User::Find($decryptID);
        $bnk = Bank::all();
        $jab = Jabatan::all();
        $kar_list = User::where('status', '<>', 'Hidden')
            ->where('status', '<>', 'Trash')
            ->get();
        $cek = User::where('status', '<>', 'Hidden')
            ->where('status', '<>', 'Trash')
            ->count();
        $hwa = Hwa::where('id', 1)->first();
        // History
        $h_user = User::where('author', $decryptID)->get();
        return view('asset.sad.kar.kar_info', compact('kar', 'jab', 'bnk','master', 'periode', 'hwa', 'kar_list', 'cek','h_user'));
    }


    public function kar_create()
    {
        $periode = date('m-Y');
        $master = Master::where('status', 'Present')->first();
        $bank = Bank::all();
        $jabatan = Jabatan::all();
        return view('author.sad.kar.kar_create', compact('jabatan', 'bank', 'periode', 'master'));
    }


    public function kar_edit($id)
    {
        $decryptID = Crypt::decryptString($id);
        $periode = date('m-Y');
        $master = Master::where('status', 'Present')->first();
        $kar_list = User::where('status', '<>', 'Hidden')
            ->where('status', '<>', 'Trash')
            ->get();
        $cek = User::where('status', '<>', 'Hidden')
            ->where('status', '<>', 'Trash')
            ->count();
        $kar = User::Find($decryptID);
        $bank = Bank::all();
        $jab = Jabatan::all();
        return view('asset.sad.kar.kar_edit', compact('kar', 'jab', 'bank', 'master', 'periode', 'master', 'kar_list', 'cek'));
    }


    public function kar_store(Request $request)
    {
        // dd($request->all());
        $date = date("YdmHi");
        $user_id = auth()->user()->id;
        $token = $user_id . $date;
        foreach ($request->name as $key => $value) {
            $kar['name'] = $request->name[$key];
            $kar['tipe_gaji'] = $request->tipe_gaji[$key];
            $kar['jabatan'] = $request->jabatan[$key];
            $kar['tgl_gabung'] = $request->tgl_gabung[$key];
            $kar['status'] = $request->status[$key];
            $kar['token'] = $token;
            $kar['author'] = Auth::user()->id;
            User::create($kar);
        }
        LogActivity::addToLog('Menambahkan Data Karyawan');

        return redirect()->route('kar.g')->with('success', 'Data Karyawan Berhasil di Tambahkan');
    }


    public function kar_update(Request $request, $id)
    {
        $messages = [
            'image.max' => 'Photo Melebihi Limit 500kb!',
            'file_sim_a.max' => 'Sim A Melebihi Limit 500kb!',
            'file_sim_b1.max' => 'Sim B1 Melebihi Limit 500kb!',
            'file_sim_b2.max' => 'Sim B2 Melebihi Limit 500kb!',
            'file_sertifikat.max' => 'Sertifikat Melebihi Limit 500kb!',
            'name.required' => 'Nama Harus Diisi',
            'tipe_gaji.required' => 'Tipe Income Harus Diisi',
            'tgl_gabung.required' => 'Tanggal Bergabung Harus Diisi',
        ];
        $this->validate($request, [
            'image' => 'max:500',
            'file_sim_a' => 'max:500',
            'file_sim_b1' => 'max:500',
            'file_sim_b2' => 'max:500',
            'file_sertifikat' => 'max:500',
            'name' => 'required',
            'jabatan' => 'required',
            'tipe_gaji' => 'required',
            'tgl_gabung' => 'required',
        ], $messages);

        // dd($request->all());
        $kar = User::Find($id);

        if ($request->has('image')) {
            $image = $request->image;
            $new_image = $kar->name . time() . $image->getClientOriginalName();
            $image->move('file/karyawan/avatar/', $new_image);
            $kar_data = [
                'image' => 'file/karyawan/avatar/' . $new_image,
            ];
            $kar->update($kar_data);
        }

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

        if ($request->has('file_sertifikat')) {
            $file_sertifikat = $request->file_sertifikat;
            $sertifikat = $kar->name . time() . $file_sertifikat->getClientOriginalName();
            $file_sertifikat->move('file/karyawan/sertifikat/', $sertifikat);
            $kar_data = [
                'file_sertifikat' => 'file/karyawan/sertifikat/' . $sertifikat,
            ];
            $kar->update($kar_data);
        }

        $kar_data = [
            'name' => $request->name,
            'tgl_lahir' => $request->tgl_lahir,
            'email' => $request->email,
            'alamat' => $request->alamat,
            'jenis_kelamin' => $request->jenis_kelamin,
            'tipe_gaji' => $request->tipe_gaji,
            'no_hp' => $request->no_hp,
            'no_ktp' => $request->no_ktp,
            'no_sim_a' => $request->no_sim_a,
            'no_sim_b1' => $request->no_sim_b1,
            'no_sim_b2' => $request->no_sim_b2,
            'no_bpjs' => $request->no_bpjs,
            'no_rek' => $request->no_rek,
            'bank' => $request->bank,
            'tgl_gabung' => $request->tgl_gabung,
            'tgl_resign' => $request->tgl_resign,
            'status' => $request->status,
            'asal' => $request->asal,
            'jabatan' => $request->jabatan,
        ];
        $kar->update($kar_data);
        return back()->with('success', 'Data Karyawan Berhasil di Update');
    }


    public function kar_delete(Request $request, $id)
    {
        $kar = User::Find($id);
        $kar_data = [
            'status' => $request->status,
        ];
        $kar->update($kar_data);
        return back()->with('success', 'Data Karyawan Berhasil dihapus');
    }

}
