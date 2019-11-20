<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTransaksisTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('transaksis', function (Blueprint $table) {
            $table->bigIncrements('id_masuk');
            $table->string('nama_siswa');
            $table->integer('absen_siswa');
            $table->integer('jumlah_masuk');
            $table->enum('minggu',['1','2','3','4','all']);
            $table->enum('bulan',['jan','feb','mar','apr','mei','jun','jul','agu','sep','okt','nov','des']);
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
        Schema::dropIfExists('transaksis');
    }
}
