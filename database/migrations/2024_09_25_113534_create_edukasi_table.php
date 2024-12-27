<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up()
    {
        Schema::create('edukasi', function (Blueprint $table) {
            $table->id(); // Primary key
            $table->string('judul'); // Kolom untuk judul edukasi
            $table->string('gambar')->nullable(); // Kolom untuk gambar edukasi (opsional)
            $table->date('tanggal'); // Kolom untuk tanggal edukasi
            $table->text('isi'); // Kolom untuk isi artikel edukasi
            $table->string('penulis'); // Kolom untuk penulis artikel edukasi
            $table->string('referensi')->nullable(); // Kolom untuk referensi (opsional)
            $table->timestamps(); // created_at dan updated_at
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('edukasi');
    }
};
