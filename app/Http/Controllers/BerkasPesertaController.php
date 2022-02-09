<?php

namespace App\Http\Controllers;

use App\Models\Berkas_peserta;
use App\Models\Data_peserta;
use Illuminate\Http\Request;
use Session;

class BerkasPesertaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $berkas_peserta = Berkas_peserta::with('data_peserta')->get();
        return view('berkas_peserta.index', compact('berkas_peserta'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $data_peserta = Data_peserta::all();
        return view('berkas_peserta.create', compact('data_peserta'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'id_peserta' => 'required',
            'ftcpy_ijazah' => 'required|image|max:2048',
            'ftcpy_akte' => 'required|image|max:2048',
            'ftcpy_kk' => 'required|image|max:2048',
        ]);

        $berkas_peserta = new Berkas_peserta;
        $berkas_peserta->id_peserta = $request->id_peserta;
        // upload image / foto
        if ($request->hasFile('ftcpy_ijazah')) {
            $image = $request->file('ftcpy_ijazah');
            $name = rand(1000, 9999) . $image->getClientOriginalName();
            $image->move('image/ijazah/', $name);
            $berkas_peserta->ftcpy_ijazah = $name;
        }
        if ($request->hasFile('ftcpy_akte')) {
            $image = $request->file('ftcpy_akte');
            $name = rand(1000, 9999) . $image->getClientOriginalName();
            $image->move('image/akte/', $name);
            $berkas_peserta->ftcpy_akte = $name;
        }
        if ($request->hasFile('ftcpy_kk')) {
            $image = $request->file('ftcpy_kk');
            $name = rand(1000, 9999) . $image->getClientOriginalName();
            $image->move('image/kk/', $name);
            $berkas_peserta->ftcpy_kk = $name;
        }
        $berkas_peserta->save();

        Session::flash("flash_notification", [
            "level" => "success",
            "message" => "Data saved successfully",
        ]);

        return redirect()->route('kartu_peserta.create');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Berkas_peserta  $berkas_peserta
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $berkas_peserta = Berkas_peserta::findOrFail($id);
        $data_peserta = Data_peserta::all();
        return view('berkas_peserta.show', compact('berkas_peserta', 'data_peserta'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Berkas_peserta  $berkas_peserta
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {

    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Berkas_peserta  $berkas_peserta
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Berkas_peserta  $berkas_peserta
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $berkas_peserta = Berkas_peserta::findOrFail($id);
        $berkas_peserta->deleteImage();
        $berkas_peserta->delete();
        return redirect()->route('berkas_peserta.index');
    }
}
