<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePendudukTable extends Migration
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
            $table->foreignId('id_kk')->constrained('kartu_keluarga')->onUpdate('cascade')->onDelete('cascade');
            $table->string('nik', 50);
            $table->string('nama', 50);
            $table->string('tempat_lahir', 50);
            $table->string('tanggal_lahir', 50);
            $table->enum('gender', ['L', 'P']);
            $table->enum('status', ['kepala keluarga', 'istri', 'anak']);
            $table->text('alamat');
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
        Schema::dropIfExists('penduduk');
    }
}
