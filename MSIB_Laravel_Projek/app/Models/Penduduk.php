<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Penduduk extends Model
{
    use HasFactory;
    protected $table = 'penduduk';

    protected $fillable = [
        'id_kk',
        'nik',
        'nama',
        'tempat_lahir',
        'tanggal_lahir',
        'status',
        'alamat',
    ];

    // belongsTo dari tabel FK ke PK
    public function kartuKeluargaFk()
    {
        return $this->belongsTo(KartuKeluarga::class, 'id_kk', 'id');
    }
}
