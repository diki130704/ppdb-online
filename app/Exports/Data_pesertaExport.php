<?php

namespace App\Exports;

use App\Models\Data_peserta;
use Maatwebsite\Excel\Concerns\FromCollection;

class Data_pesertaExport implements FromCollection
{
    /**
    * @return \Illuminate\Support\Collection
    */
    public function collection()
    {
        return Data_peserta::all();
    }
}
