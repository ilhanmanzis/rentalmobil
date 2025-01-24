<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('mobil', function (Blueprint $table) {
            $table->increments('id_mobil');
            $table->string('nama');
            $table->string('harga_lepas');
            $table->string('harga_driver');
            $table->string('jam_mulai');
            $table->string('jam_selesai');
            $table->string('pintu');
            $table->string('penumpang');
            $table->string('wilayah');
            $table->string('include');
            $table->string('foto');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('mobil');
    }
};
