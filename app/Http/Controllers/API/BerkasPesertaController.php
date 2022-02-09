<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use App\Models\Berkas_peserta;
use Illuminate\Http\Request;

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

        return response()->json([
            'success' => true,
            'message' => 'Berkas Peserta',
            'data' => $berkas_peserta,
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
        $berkas_peserta = new Berkas_peserta();
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
        return response()->json([
            'success' => true,
            'message' => 'Berkas Peserta Berhasil Dibuat',
            'data' => $berkas_peserta,
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
        $berkas_peserta = Berkas_peserta::findOrFail($id);
        if ($berkas_peserta) {
            return response()->json([
                'success' => true,
                'message' => 'Show Berkas Peserta',
                'data' => $berkas_peserta,
            ], 200);
        } else {
            return response()->json([
                'success' => false,
                'message' => 'Berkas Peserta Tidak Ditemukan',
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
        $berkas_peserta = Berkas_peserta::findOrFail($id);
        $berkas_peserta->delete();
        return response()->json([
            'success' => true,
            'message' => 'Berkas Peserta Berhasil Dihapus',
            'data' => $berkas_peserta,
        ], 200);

    }
}
