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
        Schema::create('sosmed', function (Blueprint $table) {
            $table->id();
            $table->string('wa')->nullable();
            $table->string('url_wa')->nullable();
            $table->string('fb')->nullable();
            $table->string('url_fb')->nullable();
            $table->string('ig')->nullable();
            $table->string('url_ig')->nullable();
            $table->string('tt')->nullable();
            $table->string('url_tt')->nullable();
            $table->string('x')->nullable();
            $table->string('url_x')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('sosmed');
    }
};
