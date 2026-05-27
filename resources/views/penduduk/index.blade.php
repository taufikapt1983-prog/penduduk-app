@extends('adminlte::page')

@section('title', 'Data Penduduk')

@section('content_header')
    <h1>Data Penduduk</h1>
@if(session('success'))
<div class="alert alert-success">
    {{ session('success') }}
</div>
@endif
@stop

@section('content')

<div class="card">

    <div class="card-header">

        <a href="{{ url('/penduduk/create') }}"
           class="btn btn-primary">
            <i class="fas fa-plus"></i> Tambah Penduduk
        </a>

    </div>

    <div class="card-body">

        <div class="table-responsive">

			<table id="tabelPenduduk"
				class="table table-bordered table-striped table-hover nowrap"
				style="width:100%; white-space: nowrap;">

            <thead class="table-dark">

                <tr>
                    <th>No</th>
                    <th>NIK</th>
					<th>No KK</th>
                    <th>Nama</th>
                    <th>JK</th>
                    <th>Tempat Lahir</th>
                    <th>Tanggal Lahir</th>
                    <th>Alamat Lengkap</th>
					<th>RT</th>
					<th>RW</th>
					<th>Desa</th>
					<th>Kecamatan</th>
                    <th>Hubungan Keluarga</th>
                    <th width="150">Aksi</th>
                </tr>

            </thead>

            <tbody>

                @foreach($penduduks as $key => $p)

                <tr>

                    <td>{{ $key + 1 }}</td>

                    <td>{{ $p->nik }}</td>
					
					<td>{{ $p->keluarga->no_kk ?? '-' }}</td>

                    <td>{{ $p->nama }}</td>

                    <td>{{ $p->jenis_kelamin }}</td>

                    <td>{{ $p->tempat_lahir }}</td>

                    <td>{{ $p->tanggal_lahir }}</td>

                    <td>
						{{ $p->keluarga->alamat ?? '-' }}
					</td>

					<td>
						{{ $p->keluarga->rt ?? '-' }}
					</td>

					<td>
						{{ $p->keluarga->rw ?? '-' }}
					</td>
					
					<td>
						{{ $p->keluarga->desa ?? '-' }}
					</td>
					
					<td>
						{{ $p->keluarga->kecamatan ?? '-' }}
					</td>

                    <td>{{ $p->hubungan_keluarga }}</td>

                    <td>

                        <a href="{{ url('/penduduk/edit/'.$p->id) }}"
                           class="btn btn-warning btn-sm">

                            <i class="fas fa-edit"></i>

                        </a>

                        <a href="{{ url('/penduduk/delete/'.$p->id) }}"
                           class="btn btn-danger btn-sm"
                           onclick="return confirm('Yakin hapus data?')">

                            <i class="fas fa-trash"></i>

                        </a>

                    </td>

                </tr>

                @endforeach

            </tbody>

        </table>
		
		</div>

    </div>

</div>

@stop

@section('css')

<style>

.table td,
.table th{
    vertical-align: middle;
}

</style>

@stop

@section('js')

<script>

$(document).ready(function() {

    $('#tabelPenduduk').DataTable({

        responsive: true,

        autoWidth: false,

        language: {

            search: "Cari:",

            lengthMenu: "Tampilkan _MENU_ data",

            zeroRecords: "Data tidak ditemukan",

            info: "Menampilkan _START_ sampai _END_ dari _TOTAL_ data",

            infoEmpty: "Data kosong",

            paginate: {
                first: "Awal",
                last: "Akhir",
                next: "›",
                previous: "‹"
            }

        }

    });

});

</script>

@stop