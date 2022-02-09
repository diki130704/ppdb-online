@extends('adminlte::page')

@section('css')
<link rel="stylesheet" href="{{asset('DataTables/datatables.min.css')}}">
@endsection

@section('title', 'Dashboard')

@section('content_header')

<div class="content-header">
    <div class="container-fluid">
        <div class="row mb-2">
            <div class="col-sm-12">
                <h1 class="m-0">Berkas Peserta</h1>
            </div>
        </div>
    </div>
</div>

@endsection

@section('content')

<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-body">
                    <div class="table-responsive">
                        <table class="table" id="berkas_peserta">
                            <thead>
                                <tr>
                                    <th>No.</th>
                                    <th>Nama</th>
                                    <th>Foto Ijazah</th>
                                    <th>Foto Akte</th>
                                    <th>Foto KK</th>
                                    <th>Aksi</th>
                                </tr>
                            </thead>
                            @php
                            $no = 1;
                            @endphp
                            <tbody>
                                @foreach ($berkas_peserta as $data)
                                <tr>
                                    <td>{{$no++}}</td>
                                    <td>{{$data->data_peserta->nama}}</td>
                                    <td>{{$data->ftcpy_ijazah}}</td>
                                    <td>{{$data->ftcpy_akte}}</td>
                                    <td>{{$data->ftcpy_kk}}</td>
                                    <td>
                                        <form action="{{route('berkas_peserta.destroy', $data->id)}}" method="POST">
                                            @method('delete')
                                            @csrf
                                            <a href="{{route('berkas_peserta.show', $data->id)}}"
                                                class="btn btn-outline-warning">
                                                <i class="far fa-eye"></i> Show</a>
                                            <button type="submit" class="btn btn-outline-danger"
                                                onclick="return confirm('Apakah anda yakin menghapus ini?');">
                                                <i class="far fa-trash-alt"></i> Delete</button>
                                        </form>
                                    </td>
                                </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection

@section('js')
<script src="{{asset('DataTables/datatables.min.js')}}"></script>
<script>
    $(document).ready(function() {
    $('#berkas_peserta').DataTable();
} );
</script>
@endsection
