<x-app-layout>

    <div style="padding:30px;">

        <h1 style="font-size:30px; font-weight:bold;">
            Detail Keluarga
        </h1>

        <br>

        <table style="width:100%; border-collapse: collapse;" border="1">

            <tr>
                <td style="padding:10px;"><b>No KK</b></td>
                <td style="padding:10px;">
                    {{ $keluarga->no_kk }}
                </td>
            </tr>

            <tr>
                <td style="padding:10px;"><b>Kepala Keluarga</b></td>
                <td style="padding:10px;">
                    {{ $keluarga->kepala_keluarga }}
                </td>
            </tr>

            <tr>
                <td style="padding:10px;"><b>Alamat</b></td>
                <td style="padding:10px;">
                    {{ $keluarga->alamat }}
                </td>
            </tr>
			
			<tr>
    <td style="padding:10px;"><b>RT</b></td>
    <td style="padding:10px;">
        {{ $keluarga->rt }}
    </td>
</tr>

<tr>
    <td style="padding:10px;"><b>RW</b></td>
    <td style="padding:10px;">
        {{ $keluarga->rw }}
    </td>
</tr>

<tr>
    <td style="padding:10px;"><b>Desa</b></td>
    <td style="padding:10px;">
        {{ $keluarga->desa }}
    </td>
</tr>

<tr>
    <td style="padding:10px;"><b>Kecamatan</b></td>
    <td style="padding:10px;">
        {{ $keluarga->kecamatan }}
    </td>
</tr>

<tr>
    <td style="padding:10px;"><b>Kabupaten</b></td>
    <td style="padding:10px;">
        {{ $keluarga->kabupaten }}
    </td>
</tr>

        </table>

        <br><br>

        <h2 style="font-size:24px; font-weight:bold;">
            Anggota Keluarga
        </h2>

        <br>

        <a href="/penduduk/create/{{ $keluarga->id }}"
           style="background: blue; color:white; padding:10px 15px; border-radius:5px; text-decoration:none;">
            + Tambah Anggota
        </a>

        <br><br>

        <table style="width:100%; border-collapse: collapse;" border="1">

            <thead>

                <tr>
                    <th style="padding:10px;">No</th>
                    <th style="padding:10px;">NIK</th>
                    <th style="padding:10px;">Nama</th>
                    <th style="padding:10px;">Hubungan</th>
					<th style="padding:10px;">Aksi</th>
                </tr>

            </thead>

            <tbody>

                @forelse($penduduks as $item)

                    <tr>

                        <td style="padding:10px;">
                            {{ $loop->iteration }}
                        </td>

                        <td style="padding:10px;">
                            {{ $item->nik }}
                        </td>

                        <td style="padding:10px;">
                            {{ $item->nama }}
                        </td>

                        <td style="padding:10px;">
                            {{ $item->hubungan_keluarga }}
                        </td>
						
						<td style="padding:10px;">
							<a href="/penduduk/edit/{{ $item->id }}"
								style="background:orange; color:white; padding:5px 10px; border-radius:5px; text-decoration:none;">

								Edit
							</a>
							<a href="/penduduk/delete/{{ $item->id }}"
								onclick="return confirm('Yakin hapus data ini?')"
								style="background:red; color:white; padding:5px 10px; border-radius:5px; text-decoration:none; margin-left:5px;">

								Hapus
							</a>
						</td>

                    </tr>

                @empty

                    <tr>
                        <td colspan="4" style="padding:10px; text-align:center;">
                            Belum ada anggota keluarga
                        </td>
                    </tr>

                @endforelse

            </tbody>

        </table>

    </div>

</x-app-layout>