<?php

namespace App\Http\Controllers;

use App\Models\Hwa;
use App\Models\Master;
use App\Models\Navigator;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class SettingController extends Controller
{
    public function navigator()
    {
        $periode = date('m-Y');
        $master = Master::where('status', 'Present')->count();
        $nav = Navigator::where('karyawan', Auth::user()->id)->get();
        return view('asset.setting.navigator', compact('nav', 'periode', 'master'));
    }


    public function navigator_save(Request $request)
    {
        // dd($request->all());
        if ($request->has('logo')) {
            $logo = $request->logo;
            $new_logo = 'logo' . time() . $logo->getClientOriginalName();
            $logo->move('file/setting/nav/logo/', $new_logo);
            Navigator::create([
                'name' => $request->name,
                'link' => $request->link,
                'karyawan' => $request->karyawan,
                'logo' => 'file/setting/nav/logo/' . $new_logo,
            ]);
        } else {
            Navigator::create([
                'name' => $request->name,
                'link' => $request->link,
                'karyawan' => $request->karyawan,
            ]);
        }
        return back()->with('success', 'Link Navigasi Berhasil Ditambah');
    }


    public function navigator_update(Request $request, $id)
    {
        // dd($request->all());
        $nav = Navigator::Find($id);
        if ($request->has('logo')) {
            $logo = $request->logo;
            $new_logo = 'logo' . time() . $logo->getClientOriginalName();
            $logo->move('file/setting/nav/logo/', $new_logo);
            $nav_data = [
                'name' => $request->name,
                'link' => $request->link,
                'karyawan' => $request->karyawan,
                'logo' => 'file/setting/nav/logo/' . $new_logo,
            ];
            $nav->update($nav_data);
        }else{
            $nav_data = [
                'name' => $request->name,
                'link' => $request->link,
                'karyawan' => $request->karyawan,
            ];
            $nav->update($nav_data);
        }
        return back()->with('success', 'Link Navigasi Berhasil Diubah');
    }


    public function navigator_delete($id)
    {
        $nav = Navigator::Find($id);
        $nav->delete();
        return back()->with('success', 'Link Navigasi Berhasil Dihapus');
    }



}
