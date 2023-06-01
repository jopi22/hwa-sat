<?php

namespace App\Http\Controllers\primer_sad;

use App\Http\Controllers\Controller;
use App\Models\Event;
use App\Models\Master;
use App\Models\Mitra;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Crypt;

class EventController extends Controller
{
    public function event_index()
    {
        $periode = date('m-Y');
        $master = Master::where('status', 'Present')->first();
        $eve = Event::orderBy('id', 'DESC')->get();
        $cek = Event::all()->count();
        return view('author.sad.akt.event', compact('eve', 'periode', 'master', 'cek'));
    }


    public function event_create()
    {
        $periode = date('m-Y');
        $master = Master::where('status', 'Present')->first();
        $eve = Event::all();
        return view('author.sad.akt.event_create', compact('eve', 'periode', 'master'));
    }


    public function event_save(Request $request)
    {
        // dd($request->all());
        $messages = [
            'event.required' => 'Judul Event Wajib Diisi',
            'start.required' => 'Waktu Mulai Event Wajib Diisi',
            'finish.required' => 'Waktu Selesai Wajib Diisi',
            'foto.required' => 'Foto Event Wajib Diisi',
        ];
        $this->validate($request, [
            'event'     => 'required',
            'start'     => 'required',
            'finish'     => 'required',
            'foto'     => 'required',
        ], $messages);

        $file = $request->foto;
        $new_file = 'foto' . time() . $file->getClientOriginalName();
        $file->move('file/hwa/profil/', $new_file);

        Event::create([
            'event' => $request->event,
            'org' => $request->org,
            'start' => $request->start,
            'finish' => $request->finish,
            'location' => $request->location,
            'detail' => $request->detail,
            'foto' => 'file/hwa/profil/' . $new_file,
        ]);
        return redirect()->route('eve.g')->with('success', 'Event Berhasil Dibuat');
    }


    public function event_show($id)
    {
        $decryptID = Crypt::decryptString($id);
        $periode = date('m-Y');
        $master = Master::where('status', 'Present')->first();
        $eve = Event::Find($decryptID);
        return view('asset.sad.akt.event.event_show', compact('eve', 'master', 'periode'));
    }


    public function event_edit($id)
    {
        $decryptID = Crypt::decryptString($id);
        $periode = date('m-Y');
        $master = Master::where('status', 'Present')->first();
        $eve = Event::Find($decryptID);
        return view('asset.sad.akt.event.event_edit', compact('eve', 'master', 'periode'));
    }


    public function event_update(Request $request, $id)
    {
        // dd($request->all());
        $eve = Event::Find($id);

        if ($request->has('foto')) {
            $file = $request->foto;
            $new_file = 'foto' . time() . $file->getClientOriginalName();
            $file->move('file/hwa/profil/', $new_file);
            $data = [
                'event' => $request->event,
                'org' => $request->org,
                'start' => $request->start,
                'finish' => $request->finish,
                'location' => $request->location,
                'detail' => $request->detail,
                'foto' => 'file/hwa/profil/' . $new_file,
            ];
            $eve->update($data);
        } else {
            $data = [
                'event' => $request->event,
                'org' => $request->org,
                'start' => $request->start,
                'finish' => $request->finish,
                'location' => $request->location,
                'detail' => $request->detail,
            ];
            $eve->update($data);
        }
        return redirect()->route('eve.g')->with('success', 'Event Berhasil Dibuat');
    }

    public function event_delete(Request $request)
    {
        Event::where('id', $request->delete)->delete();
        return redirect()->route('eve.g')->with('success', 'Event Berhasil Dihapus');
    }
}
