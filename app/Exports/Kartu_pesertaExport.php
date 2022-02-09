<?php

namespace App\Exports;

use App\Models\Kartu_peserta;
use Maatwebsite\Excel\Concerns\FromCollection;

class Kartu_pesertaExport implements FromCollection
{
    /**
    * @return \Illuminate\Support\Collection
    */
    public function collection()
    {
        return Kartu_peserta::all();
    }
}
