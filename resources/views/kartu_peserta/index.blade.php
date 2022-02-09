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
                <h1 class="m-0">Kartu Peserta</h1>
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
                    <a href="{{ url('export-kartu_peserta') }}" class="btn btn-success">
                        <i class="far fa-file-excel"></i> Export Excel</a>
                </div>
                <div class="card-body">
                    <div class="table-responsive">
                        <table class="table" id="kartu_peserta">
                            <thead>
                                <tr>
                                    <th>
                                        No.
                                    </th>
                                    <th>
                                        Nama
                                    </th>
                                    <th>
                                        No. Peserta
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
                                @foreach ($kartu_peserta as $data)
                                <tr>
                                    <td>
                                        {{$no++}}
                                    </td>
                                    <td>
                                        {{$data->data_peserta->nama}}
                                    </td>
                                    <td>
                                        {{$data->no_peserta}}
                                    </td>
                                    <td>

                                        <form action="{{route('kartu_peserta.destroy', $data->id)}}" method="POST">
                                            @method('delete')
                                            @csrf
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
    $('#kartu_peserta').DataTable();
} );
</script>
@endsection
