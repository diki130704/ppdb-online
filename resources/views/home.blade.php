@extends('adminlte::page')

@section('css')
@endsection

@section('title', 'Dashboard')

@section('content_header')

<div class="content-header">
    <div class="container-fluid">
        <div class="row mb-2">
            <div class="col-sm-12">
                <h1 class="m-0">PPDB Online</h1>
            </div>
        </div>
    </div>
</div>

@endsection

@section('content')

<div class="container">
    <div class="row">
        <div class="col">
            <div class="small-box bg-gradient-primary">
                <div class="inner">
                    <h3>{{ DB::table('data_peserta')->count() }}</h3>
                    <p>Jumlah Pendaftar</p>
                </div>
                <div class="icon">
                    <i class="fas fa-users"></i>
                </div>
                <a href="#" class="small-box-footer">
                    More info <i class="fas fa-arrow-circle-right"></i>
                </a>
            </div>
        </div>
        <div class="col">
            <div class="small-box bg-gradient-secondary">
                <div class="inner">
                    <h3>{{ DB::table('data_peserta')->where('status_pendaftaran', 'Belum Ditentukan')->count() }}</h3>
                    <p>Belum Ditentukan</p>
                </div>
                <div class="icon">
                    <i class="fas fa-user"></i>
                </div>
                <a href="#" class="small-box-footer">
                    More info <i class="fas fa-arrow-circle-right"></i>
                </a>
            </div>
        </div>
        <div class="col">
            <div class="small-box bg-gradient-success">
                <div class="inner">
                    <h3>
                        {{ DB::table('data_peserta')->where('status_pendaftaran', 'Diterima')->count() }}
                    </h3>
                    <p>Diterima</p>
                </div>
                <div class="icon">
                    <i class="fas fa-user-check"></i>
                </div>
                <a href="#" class="small-box-footer">
                    More info <i class="fas fa-arrow-circle-right"></i>
                </a>
            </div>
        </div>
        <div class="col">
            <div class="small-box bg-gradient-danger">
                <div class="inner">
                    <h3>{{ DB::table('data_peserta')->where('status_pendaftaran', 'Tidak Diterima')->count() }}</h3>
                    <p>Tidak Diterima</p>
                </div>
                <div class="icon">
                    <i class="fas fa-user-times"></i>
                </div>
                <a href="#" class="small-box-footer">
                    More info <i class="fas fa-arrow-circle-right"></i>
                </a>
            </div>
        </div>
    </div>
</div>

@endsection

@section('js')
@endsection
