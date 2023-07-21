<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pekerja extends Model
{
    use HasFactory;
    protected $table = 'pekerjas';
    protected $primaryKey = 'id';

    protected $fillable = ['nama','nik','alamat','desa','kecamatan','ttl','pekerjaan','kode_pos','pengalaman', 'deskripsi', 'no_hp','no_wa','foto', 'ktp', 'gaji'];

    public function user()
    {
        return $this->belongsTo(User::class);
    }
    public function pekerja()
    {
        return $this->hasMany(Pekerja::class);
    }
}


