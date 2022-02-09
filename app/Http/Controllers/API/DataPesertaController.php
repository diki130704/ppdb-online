<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use App\Models\Data_peserta;
use Illuminate\Http\Request;

class DataPesertaController extends Controller
{

    public function index()
    {
        //get data from table data_peserta
        $data_peserta = Data_peserta::all();

        //make response JSON
        return response()->json([
            'success' => true,
            'message' => 'Data Peserta',
            'data' => $data_peserta,
        ], 200);
    }

    public function create()
    {
        //
    }

    public function store(Request $request)
    {

        $data_peserta = new Data_peserta();
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
        $data_peserta->jalur_daftar = $request->jalur_daftar;
        $data_peserta->nama_ortu = $request->nama_ortu;
        $data_peserta->pekerjaan_ortu = $request->pekerjaan_ortu;
        $data_peserta->no_hp_ortu = $request->no_hp_ortu;
        $data_peserta->alamat_ortu = $request->alamat_ortu;
        $data_peserta->status_pendaftaran = $request->status_pendaftaran;
        $data_peserta->save();
        return response()->json([
            'success' => true,
            'message' => 'Data Peserta Berhasil Dibuat',
            'data' => $data_peserta,
        ], 201);

    }

    public function show($id)
    {
        $data_peserta = Data_peserta::findOrFail($id);
        if ($data_peserta) {
            return response()->json([
                'success' => true,
                'message' => 'Show Data Peserta',
                'data' => $data_peserta,
            ], 200);
        } else {
            return response()->json([
                'success' => false,
                'message' => 'Data Peserta Tidak Ditemukan',
                'data' => [],
            ], 200);
        }

    }

    public function edit($id)
    {
        //
    }

    public function update(Request $request, $id)
    {

        $data_peserta = Data_peserta::findOrFail($id);
        $data_peserta->status_pendaftaran = $request->status_pendaftaran;
        $data_peserta->save();
        return response()->json([
            'success' => true,
            'message' => 'Data Peserta Berhasil Dibuat',
            'data' => $data_peserta,
        ], 201);
    }

    public function destroy($id)
    {
        $data_peserta = Data_peserta::findOrFail($id);
        $data_peserta->delete();
        return response()->json([
            'success' => true,
            'message' => 'Data Peserta Berhasil Dihapus',
            'data' => $data_peserta,
        ], 200);

    }
}
