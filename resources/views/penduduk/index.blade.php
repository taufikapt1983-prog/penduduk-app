@extends('adminlte::page')

@section('title', 'Data Penduduk')

@section('content_header')
    <h1>Data Penduduk</h1>
@stop

@section('content')

<div class="card">
    <div class="card-header">
        <a href="#" class="btn btn-primary">
            Tambah Penduduk
        </a>
    </div>

    <div class="card-body">

        <table id="tabelPenduduk" class="table table-bordered table-striped">
            <thead>
                <tr>
                    <th>NIK</th>
                    <th>Nama</th>
                    <th>JK</th>
                    <th>Alamat</th>
                </tr>
            </thead>

            <tbody>

                @foreach($penduduks as $p)

                <tr>
                    <td>{{ $p->nik }}</td>
                    <td>{{ $p->nama }}</td>
                    <td>{{ $p->jk }}</td>
                    <td>{{ $p->alamat }}</td>
                </tr>

                @endforeach

            </tbody>
        </table>

    </div>
</div>

@stop

@section('js')

<script>

$(document).ready(function() {
    $('#tabelPenduduk').DataTable();
});

</script>

@stop