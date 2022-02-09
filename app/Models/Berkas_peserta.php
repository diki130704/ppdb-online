<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Berkas_peserta extends Model
{
    use HasFactory;
    protected $table = "berkas_peserta";
    protected $visible = ['id_peserta', 'ftcpy_ijazah', 'ftcpy_akte', 'ftcpy_kk'];
    protected $fillable = ['id_peserta', 'ftcpy_ijazah', 'ftcpy_akte', 'ftcpy_kk'];
    public $timestamps = true;

    public function data_peserta()
    {
        return $this->belongsTo('App\Models\Data_peserta', 'id_peserta');
    }
    public function image()
    {
        if ($this->ftcpy_ijazah && file_exists('image/ijazah/' . $this->ftcpy_ijazah)) {
            return asset('image/ijazah/' . $this->ftcpy_ijazah);
        } else {
            return asset('image/no_image.png');
        }
    }
    public function image_akte()
    {
        if ($this->ftcpy_akte && file_exists('image/akte/' . $this->ftcpy_akte)) {
            return asset('image/akte/' . $this->ftcpy_akte);
        } else {
            return asset('image/no_image.png');
        }
    }
    public function image_kk()
    {
        if ($this->ftcpy_kk && file_exists('image/kk/' . $this->ftcpy_kk)) {
            return asset('image/kk/' . $this->ftcpy_kk);
        } else {
            return asset('image/no_image.png');
        }
    }
    public function deleteImage()
    {
        if ($this->ftcpy_ijazah && file_exists(public_path('image/ijazah/' . $this->ftcpy_ijazah))) {
            return unlink(public_path('image/ijazah/' . $this->ftcpy_ijazah));
        } elseif ($this->ftcpy_akte && file_exists(public_path('image/akte/' . $this->ftcpy_akte))) {
            return unlink(public_path('image/akte/' . $this->ftcpy_akte));
        } elseif ($this->ftcpy_kk && file_exists(public_path('image/kk/' . $this->ftcpy_kk))) {
            return unlink(public_path('image/kk/' . $this->ftcpy_kk));
        }

    }
}
