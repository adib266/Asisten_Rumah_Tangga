<?php

namespace App\Models;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

class User extends Authenticatable
{
    use HasFactory, Notifiable;

    protected $table = 'users';
    protected $primaryKey = 'id';

    protected $fillable = ['name', 'username','password','level','email','verify_key'];

    public function pekerja()
    {
        return $this->hasMany(pekerja::class);
    }
    public function user()
    {
        return $this->belongsTo(user::class);
    }
}
