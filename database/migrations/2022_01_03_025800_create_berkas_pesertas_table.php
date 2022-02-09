<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateBerkasPesertasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('berkas_peserta', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->unsignedBigInteger('id_peserta');
            $table->string('ftcpy_ijazah');
            $table->string('ftcpy_akte');
            $table->string('ftcpy_kk');
            $table->foreign('id_peserta')->references('id')
                ->on('data_peserta')->onUpdate('cascade')
                ->onDelete('cascade');
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
        Schema::dropIfExists('berkas_peserta');
    }
}
