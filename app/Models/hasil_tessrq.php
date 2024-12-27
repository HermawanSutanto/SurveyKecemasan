<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class hasil_tessrq extends Model
{     
    protected $table = 'hasil_tessrq';

    use HasFactory;
    protected $fillable = [
        'nama_lengkap',
        'hasil_tes',
        'interpretasi',
        
    ];
    
}
