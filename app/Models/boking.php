<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class boking extends Model
{
    use HasFactory;
    protected $fillable =[
        'nama_majikan',
        'nama_pekerja',
        'jenis_art',
        'tawar_gaji',
        'foto_ktp',
        'acc',
        'awal_kontrak',
        'akhir_kontrak',
        'id_pekerja'
    ];
}
