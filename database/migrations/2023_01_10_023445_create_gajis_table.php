<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateGajisTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('gajis', function (Blueprint $table) {
            $table->id('id_gajis');
            $table->integer('gaji_kotor');
            $table->integer('jumlah_lembur');
            $table->integer('pajak');
            $table->integer('total_tunjangan');
            $table->integer('gaji_bersih');
            $table->string('bulan');
            $table->integer('tahun');
            $table->integer('id_karyawan');
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
        Schema::dropIfExists('gajis');
    }
}
