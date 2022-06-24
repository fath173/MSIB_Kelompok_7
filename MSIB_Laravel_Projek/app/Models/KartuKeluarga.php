<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class KartuKeluarga extends Model
{
    use HasFactory;
    protected $table = 'kartu_keluarga';

    protected $fillable = [
        'no_kk',
        'foto_kk',
    ];

    public function pendudukFk()
    {
        $detail = $this->hasMany(Penduduk::class, 'id_kk', 'id');
        return $detail;
    }
}
