<?php

namespace App\Http\Controllers;

use App\Models\Data_peserta;
use Illuminate\Http\Request;

class ReportController extends Controller
{
    public function reportData_peserta(Request $request)
    {
        $data_peserta = Data_peserta::all();
        // dd($data_peserta);
        $pdf = \PDF::loadView('report.data_peserta_report', ['data_peserta' => $data_peserta]);
        return $pdf->download('pengumuman-ppdb-smk-assalaam-2022/2023.pdf');
    }
}
