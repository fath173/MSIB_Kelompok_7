<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Kk extends Model
{
    use HasFactory;
    protected $table = 'kartu_keluarga';

    protected $fillable = [
        'no_kk',
        'foto_kk',
    ];
}
