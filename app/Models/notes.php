<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class notes extends Model
{
    use HasFactory;
    protected $table = 'notess';
    protected $primaryKey = 'id';
    protected $fillable = ['id_transaction', 'id_users','note','verify_key'];
}
