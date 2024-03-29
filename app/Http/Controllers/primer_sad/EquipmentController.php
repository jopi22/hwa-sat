<?php

namespace App\Http\Controllers\primer_sad;

use App\Helpers\LogActivity;
use App\Http\Controllers\Controller;
use App\Models\Equipment;
use App\Models\Master;
use App\Models\Navigator;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Crypt;
use Illuminate\Support\Facades\Validator;

class EquipmentController extends Controller
{
    public function heavy_index()
    {
        $nav = Navigator::where('karyawan', Auth::user()->id)->get();
        $periode = date('m-Y');
        $master = Master::where('status', 'Present')->count();
        $heavy = Equipment::where('status', '<>', 'Delete')
            ->where('jenis', 'Heavy Equipment')
            ->get();
        $equip = Equipment::where('status', '<>', 'Delete')
            ->get();
        $filter = Equipment::select('tipe')->distinct()->get();
        $cek = Equipment::where('status', '<>', 'Delete')
            ->where('jenis', 'Heavy Equipment')
            ->count();
        return view('author.sad.equip.heavy_index', compact('cek', 'nav', 'equip', 'heavy', 'master', 'periode', 'filter'));
    }


    public function heavy_print_pdf($id)
    {
        $nav = Navigator::where('karyawan', Auth::user()->id)->get();
        $periode = date('m-Y');
        $master = Master::where('status', 'Present')->count();
        $equip = Equipment::where('status', '<>', 'Delete')
            ->where('jenis', 'Heavy Equipment')
            ->get();
        $filter = Equipment::select('tipe')->distinct()->get();
        $cek = Equipment::where('status', '<>', 'Delete')
            ->where('jenis', 'Heavy Equipment')
            ->count();
        return view('asset.sad.equip.heavy_print_pdf', compact('cek', 'nav', 'equip',  'master', 'periode', 'filter'));
    }


    public function heavy_print_excel($id)
    {
        $nav = Navigator::where('karyawan', Auth::user()->id)->get();
        $periode = date('m-Y');
        $master = Master::where('status', 'Present')->count();
        $equip = Equipment::where('status', '<>', 'Delete')
            ->where('jenis', 'Heavy Equipment')
            ->get();
        $filter = Equipment::select('tipe')->distinct()->get();
        $cek = Equipment::where('status', '<>', 'Delete')
            ->where('jenis', 'Heavy Equipment')
            ->count();
        return view('asset.sad.equip.heavy_print_excel', compact('cek', 'nav', 'equip',  'master', 'periode', 'filter'));
    }


    public function vehicle_index()
    {
        $nav = Navigator::where('karyawan', Auth::user()->id)->get();
        $periode = date('m-Y');
        $master = Master::where('status', 'Present')->count();
        $vehicle = Equipment::where('status', '<>', 'Delete')
            ->where('jenis', 'Vehicle')
            ->get();
        $equip = Equipment::where('status', '<>', 'Delete')
            ->get();
        $cek = Equipment::where('status', '<>', 'Delete')
            ->where('jenis', 'Vehicle')
            ->count();
        $filter = Equipment::select('tipe')->distinct()->get();
        return view('author.sad.equip.vehicle_index', compact('cek', 'equip', 'nav', 'vehicle', 'master', 'periode', 'filter'));
    }


    public function vehicle_print_pdf($id)
    {
        $nav = Navigator::where('karyawan', Auth::user()->id)->get();
        $periode = date('m-Y');
        $master = Master::where('status', 'Present')->count();
        $equip = Equipment::where('status', '<>', 'Delete')
            ->where('jenis', 'Vehicle')
            ->get();
        $filter = Equipment::select('tipe')->distinct()->get();
        $cek = Equipment::where('status', '<>', 'Delete')
            ->where('jenis', 'Vehicle')
            ->count();
        return view('asset.sad.equip.vehicle_print_pdf', compact('cek', 'nav', 'equip', 'master', 'periode', 'filter'));
    }


    public function vehicle_print_excel($id)
    {
        $nav = Navigator::where('karyawan', Auth::user()->id)->get();
        $periode = date('m-Y');
        $master = Master::where('status', 'Present')->count();
        $equip = Equipment::where('status', '<>', 'Delete')
            ->where('jenis', 'Vehicle')
            ->get();
        $filter = Equipment::select('tipe')->distinct()->get();
        $cek = Equipment::where('status', '<>', 'Delete')
            ->where('jenis', 'Vehicle')
            ->count();
        return view('asset.sad.equip.vehicle_print_excel', compact('cek', 'nav', 'equip', 'master', 'periode', 'filter'));
    }


    public function support_index()
    {
        $nav = Navigator::where('karyawan', Auth::user()->id)->get();
        $periode = date('m-Y');
        $master = Master::where('status', 'Present')->count();
        $support = Equipment::where('status', '<>', 'Delete')
            ->where('jenis', 'Support Equipment')
            ->get();
        $equip = Equipment::where('status', '<>', 'Delete')
            ->get();
        $cek = Equipment::where('status', '<>', 'Delete')
            ->where('jenis', 'Support Equipment')
            ->count();
        $filter = Equipment::select('tipe')->distinct()->get();
        return view('author.sad.equip.support_index', compact('cek','equip', 'nav', 'support', 'master', 'periode', 'filter'));
    }

    public function support_print_excel($id)
    {
        $nav = Navigator::where('karyawan', Auth::user()->id)->get();
        $periode = date('m-Y');
        $master = Master::where('status', 'Present')->count();
        $equip = Equipment::where('status', '<>', 'Delete')
            ->where('jenis', 'Support Equipment')
            ->get();
        $filter = Equipment::select('tipe')->distinct()->get();
        $cek = Equipment::where('status', '<>', 'Delete')
            ->where('jenis', 'Vehicle')
            ->count();
        return view('asset.sad.equip.support_print_excel', compact('cek', 'nav', 'equip', 'master', 'periode', 'filter'));
    }


    public function support_print_pdf($id)
    {
        $nav = Navigator::where('karyawan', Auth::user()->id)->get();
        $periode = date('m-Y');
        $master = Master::where('status', 'Present')->count();
        $equip = Equipment::where('status', '<>', 'Delete')
            ->where('jenis', 'Support Equipment')
            ->get();
        $filter = Equipment::select('tipe')->distinct()->get();
        $cek = Equipment::where('status', '<>', 'Delete')
            ->where('jenis', 'Vehicle')
            ->count();
        return view('asset.sad.equip.support_print_pdf', compact('cek', 'nav', 'equip', 'master', 'periode', 'filter'));
    }


    public function heavy_create()
    {
        $nav = Navigator::where('karyawan', Auth::user()->id)->get();
        $periode = date('m-Y');
        $master = Master::where('status', 'Present')->count();
        return view('author.sad.equip.heavy_create', compact('master', 'nav', 'periode',));
    }


    public function vehicle_create()
    {
        $nav = Navigator::where('karyawan', Auth::user()->id)->get();
        $periode = date('m-Y');
        $master = Master::where('status', 'Present')->count();
        return view('author.sad.equip.vehicle_create', compact('master', 'nav', 'periode',));
    }


    public function support_create()
    {
        $nav = Navigator::where('karyawan', Auth::user()->id)->get();
        $periode = date('m-Y');
        $master = Master::where('status', 'Present')->count();
        return view('author.sad.equip.support_create', compact('master', 'nav', 'periode',));
    }


    public function equip_info($id)
    {
        $nav = Navigator::where('karyawan', Auth::user()->id)->get();
        $periode = date('m-Y');
        $master = Master::where('status', 'Present')->count();
        $decryptID = Crypt::decryptString($id);
        $equip = Equipment::Find($decryptID);
        return view('asset.sad.equip.equip_info', compact('master', 'nav', 'periode', 'equip'));
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


    public function equip_update(Request $request, $id)
    {
        $equip = Equipment::Find($id);
        $equip->update([
            'no_unit' => $request->no_unit,
            'kode_unit' => $request->kode_unit,
            'brand' => $request->brand,
            'tipe' => $request->tipe,
            'model' => $request->model,
            'no_rangka' => $request->no_rangka,
        ]);
        return back()->with('success', 'Data Berhasil Diupdate');
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
            $data['no_rangka'] = $request->no_rangka[$key];
            $data['start_op'] = $request->start_op[$key];
            $data['status'] = $request->status[$key];
            $data['token'] = $token;
            $data['author'] = Auth::user()->id;
            Equipment::create($data);
        }
        // LogActivity::addToLog('Menambahkan Data Equipment (Primer)');
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


    public function equip_delete(Request $request, $id)
    {
        $equip = Equipment::Find($id);
        $equip->update([
            'status' => $request->status,
        ]);
        return back()->with('success', 'Equipment Berhasil Dihapus');
    }


    public function equip_sakelar(Request $request, $id)
    {
        $equip = Equipment::Find($id);
        $equip_data = [
            'status' => $request->status,
            'end_op' => $request->end_op,
        ];
        $equip->update($equip_data);
        if ($request->has('on')) {
            return back()->with('success', 'Equipment Berhasil Diaktifkan');
        } else {
            return back()->with('success', 'Equipment Berhasil Dimatikan');
        }
    }
}
