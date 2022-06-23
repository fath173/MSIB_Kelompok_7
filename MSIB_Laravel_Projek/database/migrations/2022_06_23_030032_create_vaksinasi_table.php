<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateVaksinasiTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('vaksinasi', function (Blueprint $table) {
            $table->id();
            $table->foreignId('id_penduduk')->constrained('penduduk')->onUpdate('cascade')->onDelete('cascade');
            $table->foreignId('id_vaksin')->constrained('jenis_vaksin')->onUpdate('cascade')->onDelete('cascade');
            $table->foreignId('id_dosis')->constrained('dosis')->onUpdate('cascade')->onDelete('cascade');
            $table->date('tgl_vaksin');
            $table->string('keterangan', 50)->nullable();
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
        Schema::dropIfExists('vaksinasi');
    }
}
