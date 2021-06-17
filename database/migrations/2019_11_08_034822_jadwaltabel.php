<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class Jadwaltabel extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        {
            Schema::create('jadwaltabel', function (Blueprint $table) {
                    $table->increments('id');
                    $table->string('id_guru');
                    $table->string('pelajaran');
                    $table->string('ruang');
                    $table->string('kelas');
                    $table->string('masuk');
                    $table->string('keluar');
                    $table->string('tanggal');
                    $table->timestamps();
            });
        }
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
            Schema::dropIfExists('jadwaltabel');

    }
}
