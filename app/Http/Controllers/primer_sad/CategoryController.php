<?php

namespace App\Http\Controllers\primer_sad;

use App\Helpers\LogActivity;
use App\Http\Controllers\Controller;
use App\Models\Aktivitas;
use App\Models\Bank;
use App\Models\Category;
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

class CategoryController extends Controller
{
    public function category_index()
    {
        $nav = Navigator::where('karyawan', Auth::user()->id)->get();
        $periode = date('m-Y');
        $master = Master::where('status', 'Present')->count();
        $category = Category::where('status', '<>', 'Delete')
            ->get();
        $cek = Category::where('status', '<>', 'Delete')
            ->count();
        return view('author.sad.rental.category', compact('cek', 'nav', 'category', 'master', 'periode',));
    }


    public function category_store(Request $request)
    {
        foreach ($request->category as $key => $value) {
            $kar['category'] = $request->category[$key];
            $kar['ket'] = $request->ket[$key];
            $kar['status'] = $request->status[$key];
            Category::create($kar);
        }
        return back()->with('success', 'Data Category Berhasil Ditambah');
    }


    public function category_update(Request $request, $id)
    {
        $akt = Category::Find($id);
        $akt->update([
            'category' => $request->category,
            'ket' => $request->ket,
            'status' => $request->status,
        ]);

        if ($request->has('hapus')) {
            return back()->with('success', 'Data Category Berhasil Dihapus');
        } else {
            return back()->with('success', 'Data Category Berhasil Diubah');
        }
    }
}
