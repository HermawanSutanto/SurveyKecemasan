<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PelaksanaTes extends Model
{
    use HasFactory;
    protected $fillable = [
        'nama_lengkap',
        'alamat',
        'catatan'
    ];
}
