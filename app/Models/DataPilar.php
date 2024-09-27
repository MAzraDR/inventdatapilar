<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class DataPilar extends Model
{
    use HasFactory;
    protected $table = 'datapilar';
    protected $fillable = [
        'no_pilar',
        'kecamatan',
        'kelurahan',
        'lokasi_pilar',
        'koordinat_x',
        'koordinat_y',
        'kondisi',
        'keterangan',
        'deskripsi',
    ];
}
