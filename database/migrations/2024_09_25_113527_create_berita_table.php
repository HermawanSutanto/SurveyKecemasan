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
        Schema::create('berita', function (Blueprint $table) {
            $table->id(); // Primary key
            $table->string('judul'); // Kolom untuk judul berita
            $table->string('gambar')->nullable(); // Kolom untuk gambar berita (opsional)
            $table->date('tanggal'); // Kolom untuk tanggal berita
            $table->text('isi'); // Kolom untuk isi berita
            $table->string('penulis'); // Kolom untuk penulis berita
            $table->string('referensi')->nullable(); // Kolom untuk referensi (opsional)
            $table->timestamps(); // created_at dan updated_at
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('berita');
    }
};
