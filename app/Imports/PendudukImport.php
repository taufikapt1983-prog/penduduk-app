<?php

namespace App\Imports;

use Carbon\Carbon;
use App\Models\Penduduk;
use App\Models\Keluarga;
use Illuminate\Support\Collection;
use Maatwebsite\Excel\Concerns\ToCollection;

class PendudukImport implements ToCollection
{
    public function collection(Collection $rows)
    {
        foreach ($rows->skip(1) as $row) {
			/*
			|--------------------------------------------------------------------------
			| VALIDASI NIK
			|--------------------------------------------------------------------------
			*/

			$nik = trim($row[1]);

			if (!$nik) {
				continue;
			}

			if (!is_numeric($nik)) {
				continue;
			}

			if (strlen($nik) != 16) {
				continue;
			}
            /*
            |--------------------------------------------------------------------------
            | SIMPAN / UPDATE KELUARGA
            |--------------------------------------------------------------------------
            */

            $keluarga = Keluarga::firstOrCreate(
                ['no_kk' => $row[0]],
                [
					'kepala_keluarga' => trim(strtoupper($row[7])) == 'KEPALA KELUARGA'
					? $row[2]
					: 'BELUM ADA',
					
                    'alamat' => $row[8],
                    'rt' => $row[9],
                    'rw' => $row[10],
                    'desa' => $row[11],
                    'kecamatan' => $row[12],
                    'kabupaten' => $row[13],
                ]
            );

            /*
            |--------------------------------------------------------------------------
            | UPDATE KEPALA KELUARGA
            |--------------------------------------------------------------------------
            */

            if (trim(strtoupper($row[7])) == 'KEPALA KELUARGA') {

				$keluarga->update([
					'kepala_keluarga' => $row[2]
				]);

			}

            /*
            |--------------------------------------------------------------------------
            | SIMPAN / UPDATE PENDUDUK
            |--------------------------------------------------------------------------
            */

            Penduduk::updateOrCreate(
                ['nik' => $row[1]],
                [
                    'keluarga_id' => $keluarga->id,
                    'nama' => $row[2],
                    'jenis_kelamin' => $row[3],
                    'tempat_lahir' => $row[4],
                    'tanggal_lahir' => Carbon::parse($row[5])->format('Y-m-d'),
                    'agama' => $row[6],
                    'hubungan_keluarga' => $row[7],
                    'alamat' => $row[8],
                    'rt' => $row[9],
                    'rw' => $row[10],
                    'desa' => $row[11],
                    'kecamatan' => $row[12],
                    'kabupaten' => $row[13],
                ]
            );
        }
    }
}