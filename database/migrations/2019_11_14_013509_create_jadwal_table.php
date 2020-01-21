<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateJadwalTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('kelas_pesawat', function (Blueprint $table) {
            $table->increments('id_kelas_pesawat');
            $table->string('jenis_kelas_pesawat');
            $table->integer('jumlah_seat');    
            $table->timestamps();
        });

        Schema::create('kelas_kereta', function (Blueprint $table) {
            $table->increments('id_kelas_kereta');
            $table->string('jenis_kelas_kereta');
            $table->integer('jumlah_kursi');
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

        Schema::dropIfExists('kelas_pesawat');
        Schema::dropIfExists('kelas_kereta');


    }
}
