<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Keluarga extends Model
{
    protected $table = 'keluargas';

    protected $fillable = [
        'no_kk',
        'kepala_keluarga',
        'alamat',
        'rt',
        'rw',
        'dusun',
        'desa',
        'kecamatan'
    ];

    public function penduduks()
    {
        return $this->hasMany(Penduduk::class);
    }
}