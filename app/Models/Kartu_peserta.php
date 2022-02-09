<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Kartu_peserta extends Model
{
    use HasFactory;
    protected $table = "kartu_peserta";
    protected $visible = ['id_peserta', 'no_peserta'];
    protected $fillable = ['id_peserta', 'no_peserta'];
    public $timestamps = true;

    public function data_peserta()
    {
        return $this->belongsTo('App\Models\Data_peserta', 'id_peserta');
    }
}
