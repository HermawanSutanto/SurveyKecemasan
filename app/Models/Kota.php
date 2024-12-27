<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Kota extends Model
{
    use HasFactory;
    protected $table = 'kota';


    protected $fillable = [
        'nama_kota',
        'provinsi_id',
    ];

    // Relasi ke model Provinsi
    public function provinsi()
    {
        return $this->belongsTo(Provinsi::class);
    }

    // Relasi ke model User
    public function users()
    {
        return $this->hasMany(User::class);
    }
}
