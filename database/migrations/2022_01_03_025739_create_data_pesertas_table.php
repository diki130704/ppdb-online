<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDataPesertasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('data_peserta', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('nama');
            $table->string('no_pendaftaran');
            $table->enum('jk', ['L', 'P']);
            $table->string('tempat_lahir');
            $table->string('tgl_lahir');
            $table->string('alamat');
            $table->string('asal_sekolah');
            $table->enum('jurusan', ['RPL', 'TBSM', 'TKRO']);
            $table->string('nama_ortu');
            $table->string('pekerjaan_ortu');
            $table->string('no_hp_ortu');
            $table->string('alamat_ortu');
            $table->string('status_pendaftaran');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('data_peserta');
    }
}
