<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePenduduksTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('penduduk', function (Blueprint $table) {
            $table->id();
            $table->foreignId('keluarga_id')->constrained('kartu_keluarga');
            $table->foreignId('kewarganegaraan_id')->constrained('kewarganegaraan');
            $table->foreignId('pekerjaan_id')->constrained('pekerjaan');
            $table->foreignId('level_pendidikan_id')->constrained('level_pendidikan');

            $table->string('nama');
            $table->string('nik')->unique();
            $table->string('tempat_lahir');
            $table->date('tanggal_lahir');
            $table->string('agama');
            $table->string('jenis_kelamin');
            $table->string('status_pernikahan');
            $table->string('status_keluarga');
            $table->string('ayah');
            $table->string('ibu');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('penduduk');
    }
}
