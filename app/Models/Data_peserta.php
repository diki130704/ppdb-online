<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Data_peserta extends Model
{
    use HasFactory;
    protected $table = "data_peserta";
    protected $visible = ['nama', 'no_pendaftaran', 'jk', 'tempat_lahir', 'tgl_lahir', 'alamat', 'asal_sekolah',
        'jurusan', 'nama_ortu', 'pekerjaan_ortu', 'no_hp_ortu', 'alamat_ortu', 'status_pendaftaran'];
    protected $fillable = ['nama', 'no_pendaftaran', 'jk', 'tempat_lahir', 'tgl_lahir', 'alamat', 'asal_sekolah',
        'jurusan', 'nama_ortu', 'pekerjaan_ortu', 'no_hp_ortu', 'alamat_ortu', 'status_pendaftaran'];
    public $timestamps = true;

    public function berkas_peserta()
    {
        $this->hasMany('App\Models\Berkas_peserta', 'id_peserta');
    }
    public function kartu_peserta()
    {
        $this->hasMany('App\Models\Kartu_peserta', 'id_peserta');
    }

}
