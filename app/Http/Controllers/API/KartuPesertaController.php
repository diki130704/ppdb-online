<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use App\Models\Kartu_peserta;
use Illuminate\Http\Request;

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

        return response()->json([
            'success' => true,
            'message' => 'Kartu Peserta',
            'data' => $kartu_peserta,
        ], 200);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $kartu_peserta = new Kartu_peserta();
        $kartu_peserta->id_peserta = $request->id_peserta;
        $time = date('ymd');
        $random = mt_rand(1000, 9999);
        $kartu_peserta->no_peserta = $time . $random;
        $kartu_peserta->save();
        return response()->json([
            'success' => true,
            'message' => 'Kartu Peserta Berhasil Dibuat',
            'data' => $kartu_peserta,
        ], 201);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $kartu_peserta = Kartu_peserta::findOrFail($id);
        if ($kartu_peserta) {
            return response()->json([
                'success' => true,
                'message' => 'Show Kartu Peserta',
                'data' => $kartu_peserta,
            ], 200);
        } else {
            return response()->json([
                'success' => false,
                'message' => 'Kartu Peserta Tidak Ditemukan',
                'data' => [],
            ], 200);
        }
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
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
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $kartu_peserta = Kartu_peserta::findOrFail($id);
        $kartu_peserta->delete();
        return response()->json([
            'success' => true,
            'message' => 'Kartu Peserta Berhasil Dihapus',
            'data' => $kartu_peserta,
        ], 200);
    }
}
