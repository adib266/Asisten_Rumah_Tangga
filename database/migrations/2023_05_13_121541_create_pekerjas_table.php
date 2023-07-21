<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePekerjasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('pekerjas', function (Blueprint $table) {
            $table->id();
            $table->integer('id_user')->nullable();
            $table->integer('id_pekerjaans')->nullable();
            $table->string('nama');
            $table->integer('nik');
            $table->date('ttl');
            $table->string('alamat');
            $table->string('desa');
            $table->string('kecamatan');
            $table->integer('kode_pos');
            $table->string('pekerjaan');
            $table->string('pengalaman');
            $table->string('no_hp');
            $table->string('no_wa');
            $table->string('deskripsi');
            $table->string('foto');
            $table->string('ktp');
            $table->integer('gaji');
            $table->string('status')->nullable();;
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
        Schema::dropIfExists('pekerjas');
    }
}
