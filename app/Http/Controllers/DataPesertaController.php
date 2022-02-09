<?php

namespace App\Http\Controllers;

use App\Models\Data_peserta;
use Illuminate\Http\Request;
use Session;

class DataPesertaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data_peserta = Data_peserta::all();
        return view('data_peserta.index', compact('data_peserta'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('data_peserta.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $validated = $request->validate([
            'nama' => 'required',
            'no_pendaftaran',
            'jk' => 'required',
            'tempat_lahir' => 'required',
            'tgl_lahir' => 'required',
            'alamat' => 'required',
            'asal_sekolah' => 'required',
            'jurusan' => 'required',
            'nama_ortu' => 'required',
            'pekerjaan_ortu' => 'required',
            'no_hp_ortu' => 'required',
            'alamat_ortu' => 'required',
            'status_pendaftaran',
        ]);

        $data_peserta = new Data_peserta;
        $data_peserta->nama = $request->nama;
        $time = date('ymd');
        $random = mt_rand(1000, 9999);
        $data_peserta->no_pendaftaran = $time . $random;
        $data_peserta->jk = $request->jk;
        $data_peserta->tempat_lahir = $request->tempat_lahir;
        $data_peserta->tgl_lahir = $request->tgl_lahir;
        $data_peserta->alamat = $request->alamat;
        $data_peserta->asal_sekolah = $request->asal_sekolah;
        $data_peserta->jurusan = $request->jurusan;
        $data_peserta->nama_ortu = $request->nama_ortu;
        $data_peserta->pekerjaan_ortu = $request->pekerjaan_ortu;
        $data_peserta->no_hp_ortu = $request->no_hp_ortu;
        $data_peserta->alamat_ortu = $request->alamat_ortu;
        $data_peserta->status_pendaftaran = $request->status_pendaftaran;
        $data_peserta->save();

        Session::flash("flash_notification", [
            "level" => "success",
            "message" => "Data saved successfully",
        ]);

        return redirect()->route('berkas_peserta.create');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Data_peserta  $data_peserta
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $data_peserta = Data_peserta::findOrFail($id);
        return view('data_peserta.show', compact('data_peserta'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Data_peserta  $data_peserta
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $data_peserta = Data_peserta::findOrFail($id);
        return view('data_peserta.edit', compact('data_peserta'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Data_peserta  $data_peserta
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $validated = $request->validate([
            'status_pendaftaran' => 'required',
        ]);

        $data_peserta = Data_peserta::findOrFail($id);
        $data_peserta->status_pendaftaran = $request->status_pendaftaran;
        $data_peserta->save();

        Session::flash("flash_notification", [
            "level" => "success",
            "message" => "Data saved successfully",
        ]);

        return redirect()->route('data_peserta.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Data_peserta  $data_peserta
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $data_peserta = Data_peserta::findOrFail($id);
        $data_peserta->delete();
        return redirect()->route('data_peserta.index');
    }
}
