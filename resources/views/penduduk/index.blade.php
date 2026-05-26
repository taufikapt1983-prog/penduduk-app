@extends('adminlte::page')

@section('title', 'Data Penduduk')

@section('content_header')
    <h1>Data Penduduk</h1>
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

        <table id="tabelPenduduk"
               class="table table-bordered table-striped table-hover">

            <thead class="table-dark">

                <tr>
                    <th>No</th>
                    <th>NIK</th>
                    <th>Nama</th>
                    <th>JK</th>
                    <th>Tempat Lahir</th>
                    <th>Tanggal Lahir</th>
                    <th>Alamat</th>
                    <th>Status</th>
                    <th width="150">Aksi</th>
                </tr>

            </thead>

            <tbody>

                @foreach($penduduks as $key => $p)

                <tr>

                    <td>{{ $key + 1 }}</td>

                    <td>{{ $p->nik }}</td>

                    <td>{{ $p->nama }}</td>

                    <td>{{ $p->jk }}</td>

                    <td>{{ $p->tempat_lahir }}</td>

                    <td>{{ $p->tanggal_lahir }}</td>

                    <td>{{ $p->alamat }}</td>

                    <td>{{ $p->status_keluarga }}</td>

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