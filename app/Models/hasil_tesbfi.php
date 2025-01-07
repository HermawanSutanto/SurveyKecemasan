<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class hasil_tesbfi extends Model
{
    use HasFactory;
    protected $table = 'hasil_tesbfi';

    use HasFactory;
    protected $fillable = [
        'nama_lengkap',
        'hasil_tes',
        'interpretasi',
        
    ];
}
