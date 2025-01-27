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
        Schema::create('wisata', function (Blueprint $table) {
            $table->increments('id_wisata');
            $table->unsignedInteger('id_mobil');
            $table->string('nama');
            $table->string('harga');
            $table->string('wilayah');
            $table->string('include');
            $table->string('daftar_wisata');
            $table->string('foto');
            $table->timestamps();

            $table->foreign('id_mobil')->references('id_mobil')->on('mobil');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('wisata');
    }
};
