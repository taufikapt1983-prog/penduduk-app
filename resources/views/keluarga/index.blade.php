<x-app-layout>
    <div class="py-6">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">

            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg p-6">

                <h1 class="text-2xl font-bold mb-4">
                    Data Keluarga
                </h1>

                <a href="/keluarga/create"
                   style="background: blue; color: white; padding: 10px 15px; border-radius: 5px; text-decoration: none;">
                    + Tambah Keluarga
                </a>
				
				<br><br>
				
				<br><br>
			<input type="text"
					id="search"
					placeholder="Cari NIK / Nama..."
					style="width:100%; padding:12px; border:1px solid #ccc; border-radius:5px;">
				<br><br>

<div id="hasil-search"></div>
                <table class="w-full mt-6 border">
                    <thead class="bg-gray-100">
                        <tr>
                            <th class="border p-2">No</th>
                            <th class="border p-2">No KK</th>
                            <th class="border p-2">Kepala Keluarga</th>
                            <th class="border p-2">Alamat</th>
							<th class="border p-2">Anggota</th>
							<th class="border p-2">Kelola</th>
                        </tr>
                    </thead>

                    <tbody>
    @forelse ($keluargas as $item)
        <tr>

            <td class="border p-2">
                {{ $loop->iteration }}
            </td>

            <td class="border p-2">
                {{ $item->no_kk }}
            </td>

            <td class="border p-2">
                {{ $item->kepala_keluarga }}
            </td>

            <td class="border p-2">
                {{ $item->alamat }}
            </td>

            <td class="border p-2">

                <a href="/keluarga/{{ $item->id }}"
                style="background: green; color:white; padding:6px 10px; border-radius:5px; text-decoration:none;">

                Lihat Anggota

                </a>

            </td>

            <td class="border p-2">

                <a href="/keluarga/edit/{{ $item->id }}"
                style="background:orange; color:white; padding:6px 10px; border-radius:5px; text-decoration:none;">

                Edit

                </a>

                <a href="/keluarga/delete/{{ $item->id }}"
                onclick="return confirm('Yakin hapus keluarga ini?')"
                style="background:red; color:white; padding:6px 10px; border-radius:5px; text-decoration:none; margin-left:5px;">

                Hapus

                </a>

            </td>

        </tr>
    @empty
        <tr>
            <td colspan="6" class="border p-4 text-center">
                Belum ada data keluarga
            </td>
        </tr>
    @endforelse
</tbody>
                </table>

            </div>
        </div>
    </div>
	<script>

document.getElementById('search').addEventListener('keyup', function() {

    let keyword = this.value;

    fetch('/search-penduduk?keyword=' + keyword)

    .then(response => response.json())

    .then(data => {

        let html = '';

        if(data.length > 0)
        {
            data.forEach(item => {

                html += `
					<div style="padding:15px; border-bottom:1px solid #ddd">
						<b>${item.nama}</b><br>

						NIK: ${item.nik}<br>

						KK: ${item.keluarga.no_kk}<br>

						Alamat: ${item.keluarga.alamat}<br>

						RT/RW:
						${item.keluarga.rt ?? '-'}
						/
						${item.keluarga.rw ?? '-'}<br>

						Desa:
						${item.keluarga.desa ?? '-'}<br>

						Kecamatan:
						${item.keluarga.kecamatan ?? '-'}<br>

						Kabupaten:
						${item.keluarga.kabupaten ?? '-'}<br>

						Hubungan:
						${item.hubungan_keluarga}
					</div>
				`;

            });
        }
        else
        {
            html = '<div>Tidak ada data</div>';
        }

        document.getElementById('hasil-search').innerHTML = html;

    });

});

</script>
</x-app-layout>