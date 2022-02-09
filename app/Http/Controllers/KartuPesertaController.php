<?php

namespace App\Http\Controllers;

use App\Models\Data_peserta;
use App\Models\Kartu_peserta;
use Illuminate\Http\Request;
use Session;

class KartuPesertaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $kartu_peserta = Kartu_peserta::with('data_peserta')->get();
        return view('kartu_peserta.index', compact('kartu_peserta'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $data_peserta = Data_peserta::all();
        return view('kartu_peserta.create', compact('data_peserta'));
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
        ]);

        $kartu_peserta = new Kartu_peserta;
        $kartu_peserta->id_peserta = $request->id_peserta;
        $time = date('ymd');
        $random = mt_rand(1000, 9999);
        $kartu_peserta->no_peserta = $time . $random;
        $kartu_peserta->save();

        Session::flash("flash_notification", [
            "level" => "success",
            "message" => "Data saved successfully",
        ]);

        return redirect('/');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Kartu_peserta  $kartu_peserta
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Kartu_peserta  $kartu_peserta
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Kartu_peserta  $kartu_peserta
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Kartu_peserta  $kartu_peserta
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $kartu_peserta = Kartu_peserta::findOrFail($id);
        $kartu_peserta->delete();
        return redirect()->route('kartu_peserta.index');
    }
}
