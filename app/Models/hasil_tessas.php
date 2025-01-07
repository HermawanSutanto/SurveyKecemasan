<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class hasil_tessas extends Model
{
    use HasFactory;

    protected $table = 'hasil_tessas';

    use HasFactory;
    protected $fillable = [
        'nama_lengkap',
        'hasil_tes',
        'interpretasi',
        
    ];
}
