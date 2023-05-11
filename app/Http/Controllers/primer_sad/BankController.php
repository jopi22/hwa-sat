<?php

namespace App\Http\Controllers\primer_sad;

use App\Http\Controllers\Controller;
use App\Models\Bank;
use App\Models\Master;
use App\Models\Navigator;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Validator;

class BankController extends Controller
{
    public function bank_index()
    {
        $nav = Navigator::where('karyawan', Auth::user()->id)->get();
        $periode = date('m-Y');
        $master = Master::where('status', 'Present')->count();
        $bank = Bank::all();
        return view('author.sad.kar.bank_index',compact('bank','master','periode','nav'));
    }


    public function bank_store(Request $request)
    {
        $bank = Bank::create([
            'bank'     => $request->bank,
        ]);
        return response()->json([
            'success' => true,
            'message' => 'Data Berhasil Disimpan!',
            'data'    => $bank
        ]);
    }


    public function bank_show($id)
    {
        $bank = Bank::Find($id);
        return response()->json([
            'success' => true,
            'message' => 'Detail Data Berhasil Ditampilkan',
            'data'    => $bank
        ]);
    }


    public function bank_update(Request $request, Bank $bank)
    {
        $bank->update([
            'bank'     => $request->bank,
        ]);
        return response()->json([
            'success' => true,
            'message' => 'Data Berhasil Diudapte!',
            'data'    => $bank
        ]);
    }


    public function bank_delete($id)
    {
        Bank::where('id', $id)->delete();
        return response()->json([
            'success' => true,
            'message' => 'Data Post Berhasil Dihapus!.',
        ]);
    }

}
