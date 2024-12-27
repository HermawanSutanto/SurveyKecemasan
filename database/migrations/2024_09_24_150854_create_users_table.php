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
        Schema::create('users', function (Blueprint $table) {
            $table->id();
            $table->string('nama_lengkap');
            $table->string('nama_panggilan');
            $table->date('tanggal_lahir');
            $table->string('email')->unique();
            $table->string('password');
            $table->foreignId('provinsi_id')->constrained('provinsi'); // Relasi ke tabel provinsi
            $table->foreignId('kota_id')->constrained('kota');         // Relasi ke tabel kota
            $table->text('alamat');
            $table->string('pekerjaan');
            $table->string('no_wa');
            $table->text('deskripsi_diri')->nullable();
            $table->string('foto_profil')->nullable();
            $table->string('status');

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('users');
    }
};
