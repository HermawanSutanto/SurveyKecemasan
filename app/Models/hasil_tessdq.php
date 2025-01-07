<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class hasil_tessdq extends Model
{
    use HasFactory;
    protected $table = 'hasil_tessdq';

    use HasFactory;
    protected $fillable = [
        'nama_lengkap',
        'skor_kesulitan',
        'skor_kekuatan',
        'interpretasi_kesulitan',
        'interpretasi_kekuatan',
        
    ];
}
