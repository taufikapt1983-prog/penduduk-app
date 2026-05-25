<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Penduduk extends Model
{
    protected $fillable = [
        'keluarga_id',
        'nik',
        'nama',
        'jenis_kelamin',
        'tempat_lahir',
        'tanggal_lahir',
        'hubungan_keluarga',
    ];
	public function keluarga()
	{
    return $this->belongsTo(Keluarga::class);
	}
}