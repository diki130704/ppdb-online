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
                <h1 class="m-0">Edit Data Peserta</h1>
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
                    Form Edit Data Peserta
                </div>
                <div class="card-body">
                    <form action="{{route('data_peserta.update', $data_peserta->id)}}" method="POST"
                        enctype="multipart/form-data">
                        @csrf
                        @method ('put')
                        <div class="form-group">
                            <label for="">Status Pendaftaran :</label>
                            <select name="status_pendaftaran"
                                class="form-control @error('status_pendaftaran') is-invalid @enderror">
                                <option value="" disabled>-- Pilih Status Pendaftaran -- </option>
                                <option value="Diterima">Diterima</option>
                                <option value="Tidak Diterima">Tidak Diterima</option>
                                @error('status_pendaftaran')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                                @enderror
                            </select>
                        </div>
                        <div class="form-group">
                            <button type="submit" class="btn btn-outline-success"><i
                                    class="far fa-check-circle"></i>&nbsp;&nbsp;Simpan</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>

    @endsection

    @section('js')
    <script src="{{asset('DataTables/datatables.min.js')}}"></script>
    @endsection
