<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddImageFieldToUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('users', function (Blueprint $table) {
            $table->string('alamat', 100)->nullable();
            $table->string('foto', 100)->nullable();
            $table->foreignId('id_level')->constrained('level')->onUpdate('cascade')->onDelete('cascade')->nullable();
            $table->foreignId('id_kecamatan')->constrained('kecamatan')->onUpdate('cascade')->onDelete('cascade')->nullable(); // fungsi cascade ketika diupdate/delete dia ikut update/delete
            $table->foreignId('id_kategori')->constrained('kategori')->onUpdate('cascade')->onDelete('cascade')->nullable();
            $table->foreignId('id_desa')->constrained('desa')->onUpdate('cascade')->onDelete('cascade')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('users', function (Blueprint $table) {
            //
        });
    }
}
