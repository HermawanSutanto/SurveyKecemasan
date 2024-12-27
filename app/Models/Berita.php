<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Berita extends Model
{
    use HasFactory;
    // Tentukan nama tabel jika berbeda dari konvensi default
    protected $table = 'berita';

    // Tentukan kolom yang dapat diisi (mass assignable)
    protected $fillable = [
        'judul',
        'gambar',
        'tanggal',
        'isi',
        'penulis',
        'referensi',
    ];

    // Jika kolom tanggal menggunakan format timestamp Laravel (created_at, updated_at), tidak perlu mengubah apa pun
    public $timestamps = true;
}
