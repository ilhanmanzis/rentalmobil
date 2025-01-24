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
        Schema::create('profile', function (Blueprint $table) {
            $table->id();
            $table->string('nama');
            $table->string('slogan');
            $table->string('banner1');
            $table->string('banner2');
            $table->text('banner3');
            $table->text('sekilas_tittle');
            $table->text('sekilas');
            $table->text('tentang');
            $table->text('tentang_mengapa');
            $table->text('alamat');
            $table->string('logo');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('profile');
    }
};
