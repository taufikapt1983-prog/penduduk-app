@extends('adminlte::page')

@section('title', 'Dashboard')

@section('content_header')
    <h1>Dashboard Penduduk</h1>
@stop

@section('content')

<div class="row">

    <div class="col-lg-3 col-6">
        <div class="small-box bg-info">
            <div class="inner">
                <h3>{{ $totalPenduduk }}</h3>
                <p>Jumlah Penduduk</p>
            </div>
            <div class="icon">
                <i class="fas fa-users"></i>
            </div>
        </div>
    </div>

    <div class="col-lg-3 col-6">
        <div class="small-box bg-success">
            <div class="inner">
                <h3>{{ $laki }}</h3>
                <p>Laki-laki</p>
            </div>
            <div class="icon">
                <i class="fas fa-male"></i>
            </div>
        </div>
    </div>

    <div class="col-lg-3 col-6">
        <div class="small-box bg-warning">
            <div class="inner">
                <h3>{{ $perempuan }}</h3>
                <p>Perempuan</p>
            </div>
            <div class="icon">
                <i class="fas fa-female"></i>
            </div>
        </div>
    </div>

</div>

@stop