<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Vaksinasi extends Model
{
    use HasFactory;
    protected $table = 'vaksinasi';

    protected $fillable = [
        'id_penduduk',
        'id_vaksin',
        'tgl_vaksin',
        'dosis',
        'keterangan',
    ];

    // belongsTo dari tabel FK ke PK
    public function jenisVaksinFk()
    {
        return $this->belongsTo(Jenis_Vaksin::class, 'id_vaksin', 'id');
    }

    // belongsTo dari tabel FK ke PK
    public function pendudukFk()
    {
        return $this->belongsTo(Penduduk::class, 'id_penduduk', 'id');
    }
}
