<?php

namespace App\Http\Controllers\primer_sad;

use App\Helpers\LogActivity;
use App\Http\Controllers\Controller;
use App\Models\Equipment;
use App\Models\Master;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Crypt;
use Illuminate\Support\Facades\Validator;

class EquipmentController extends Controller
{
    public function heavy_index()
    {
        $periode = date('m-Y');
        $master = Master::where('status', 'Present')->first();
        $heavy = Equipment::where('status', '<>', 'Delete')
            ->where('jenis', 'Heavy Equipment')
            ->get();
        $equip = Equipment::where('status', '<>', 'Delete')
            ->where('jenis', 'Heavy Equipment')
            ->get();
        $filter = Equipment::select('tipe')->distinct()->get();
        $cek = Equipment::where('status', '<>', 'Delete')
            ->where('jenis', 'Heavy Equipment')
            ->count();
        return view('author.sad.equip.heavy_index', compact('cek', 'heavy', 'master', 'periode', 'filter'));
    }


    public function vehicle_index()
    {
        $periode = date('m-Y');
        $master = Master::where('status', 'Present')->first();
        $vehicle = Equipment::where('status', '<>', 'Delete')
            ->where('jenis', 'Vehicle')
            ->get();
        $cek = Equipment::where('status', '<>', 'Delete')
            ->where('jenis', 'Vehicle')
            ->count();
        $filter = Equipment::select('tipe')->distinct()->get();
        return view('author.sad.equip.vehicle_index', compact('cek', 'vehicle', 'master', 'periode', 'filter'));
    }


    public function support_index()
    {
        $periode = date('m-Y');
        $master = Master::where('status', 'Present')->first();
        $support = Equipment::where('status', '<>', 'Delete')
            ->where('jenis', 'Support Equipment')
            ->get();
        $cek = Equipment::where('status', '<>', 'Delete')
            ->where('jenis', 'Support Equipment')
            ->count();
        $filter = Equipment::select('tipe')->distinct()->get();
        return view('author.sad.equip.support_index', compact('cek', 'support', 'master', 'periode', 'filter'));
    }


    public function heavy_create()
    {
        $periode = date('m-Y');
        $master = Master::where('status', 'Present')->first();
        return view('author.sad.equip.heavy_create', compact('master', 'periode',));
    }


    public function vehicle_create()
    {
        $periode = date('m-Y');
        $master = Master::where('status', 'Present')->first();
        return view('author.sad.equip.vehicle_create', compact('master', 'periode',));
    }


    public function support_create()
    {
        $periode = date('m-Y');
        $master = Master::where('status', 'Present')->first();
        return view('author.sad.equip.support_create', compact('master', 'periode',));
    }


    public function equip_info($id)
    {
        $periode = date('m-Y');
        $master = Master::where('status', 'Present')->first();
        $decryptID = Crypt::decryptString($id);
        $equip = Equipment::Find($decryptID);
        return view('asset.sad.equip.equip_info', compact('master', 'periode', 'equip'));
    }


    public function equip_show($id)
    {
        $equip = Equipment::Find($id);
        return response()->json([
            'success' => true,
            'message' => 'Detail Data Berhasil Ditampilkan',
            'data'    => $equip
        ]);
    }


    public function equip_update(Request $request, Equipment $equip)
    {
        $equip->update([
            'no_unit' => $request->no_unit,
            'kode_unit' => $request->kode_unit,
            'brand' => $request->brand,
            'tipe' => $request->tipe,
            'model' => $request->model,
        ]);
        return response()->json([
            'success' => true,
            'message' => 'Data Berhasil Diupdapte',
            'data'    => $equip
        ]);
    }


    public function equip_store(Request $request)
    {
        // dd($request->all());
        $date = date("YdmHi");
        $user_id = auth()->user()->id;
        $token = $user_id . $date;
        foreach ($request->no_unit as $key => $value) {
            $data['no_unit'] = $request->no_unit[$key];
            $data['kode_unit'] = $request->kode_unit[$key];
            $data['model'] = $request->model[$key];
            $data['jenis'] = $request->jenis[$key];
            $data['tipe'] = $request->tipe[$key];
            $data['brand'] = $request->brand[$key];
            $data['start_op'] = $request->start_op[$key];
            $data['status'] = $request->status[$key];
            $data['token'] = $token;
            $data['author'] = Auth::user()->id;
            Equipment::create($data);
        }
        LogActivity::addToLog('Menambahkan Data Equipment (Primer)');
        if ($request->has('heavy')) {
            return redirect()->route('heavy.l')->with('success', 'Heavy Equipment Berhasil ditambahkan');
        } else {
            if ($request->has('vehicle')) {
                return redirect()->route('vehicle.l')->with('success', 'Vehicle Berhasil ditambahkan');
            } else {
                if ($request->has('support')) {
                    return redirect()->route('support.l')->with('success', 'Support Equipment Berhasil ditambahkan');
                }
            }
        }
    }


    public function equip_delete(Request $request, Equipment $equip)
    {
        $equip->update([
            'status' => $request->status,
        ]);
        return response()->json([
            'success' => true,
            'message' => 'Data Berhasil Diupdapte',
            'data'    => $equip
        ]);
    }


    public function equip_sakelar(Request $request, $id)
    {
        $equip = Equipment::Find($id);
        $equip_data = [
            'status' => $request->status,
        ];
        $equip->update($equip_data);
        if ($request->has('on')) {
            return back()->with('success', 'Equipment Berhasil Diaktifkan');
        } else {
            return back()->with('success', 'Equipment Berhasil Dimatikan');
        }
    }
}
