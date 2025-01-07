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
        Schema::create('hasil_tessdq', function (Blueprint $table) {
            $table->id();
            $table->string('nama_lengkap');
            $table->integer('skor_kesulitan');
            $table->integer('skor_kekuatan');
            $table->string('interpretasi_kesulitan');
            $table->string('interpretasi_kekuatan');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('hasil_tessdq');
    }
};
