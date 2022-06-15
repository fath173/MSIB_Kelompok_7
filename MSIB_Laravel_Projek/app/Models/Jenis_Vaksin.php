<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Jenis_Vaksin extends Model
{
    use HasFactory;

    protected $table = 'jenis_vaksin';

    protected $fillable = [
        'nama_vaksin'
    ];
}
