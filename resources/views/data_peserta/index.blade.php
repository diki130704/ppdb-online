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
                <h1 class="m-0">Data Peserta</h1>
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
                <div class="card-header">
                    <a href="{{ url('export-data_peserta') }}" class="btn btn-success">
                        <i class="far fa-file-excel"></i> Export Excel</a>
                </div>
                <div class="card-body">
                    <div class="table-responsive">
                        <table class="table" id="data_peserta">
                            <thead>
                                <tr>
                                    <th>
                                        No.
                                    </th>
                                    <th>
                                        Nama
                                    </th>
                                    <th>
                                        No. Pendaftaran
                                    </th>
                                    <th>
                                        Tanggal Daftar
                                    </th>
                                    <th>
                                        Status Pendaftaran
                                    </th>
                                    <th>
                                        Aksi
                                    </th>
                                </tr>
                            </thead>
                            @php
                            $no = 1;
                            @endphp
                            <tbody>
                                @foreach ($data_peserta as $data)
                                <tr>
                                    <td>
                                        {{$no++}}
                                    </td>
                                    <td>
                                        {{$data->nama}}
                                    </td>
                                    <td>
                                        {{$data->no_pendaftaran}}
                                    </td>
                                    <td>
                                        {{$data->created_at}}
                                    </td>
                                    <td>
                                        {{$data->status_pendaftaran}}
                                    </td>
                                    <td>

                                        <form action="{{route('data_peserta.destroy', $data->id)}}" method="POST">
                                            @method('delete')
                                            @csrf
                                            <a href="{{route('data_peserta.edit', $data->id)}}"
                                                class="btn btn-outline-success">
                                                <i class="far fa-edit"></i> Edit</a>
                                            <a href="{{route('data_peserta.show', $data->id)}}"
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
    $('#data_peserta').DataTable();
} );
</script>
@endsection
