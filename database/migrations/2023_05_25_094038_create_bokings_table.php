<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateBokingsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('bokings', function (Blueprint $table) {
            $table->id();
            $table->string('id_pekerja');
            $table->string('nama_majikan');
            $table->string('nama_pekerja');
            $table->string('jenis_art');
            $table->integer('tawar_gaji');
            $table->string('foto_ktp');
            $table->string('acc')->nullable();;
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
        Schema::dropIfExists('bokings');
    }
}
