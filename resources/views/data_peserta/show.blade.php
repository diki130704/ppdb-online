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
                <h1 class="m-0">Show Data Peserta</h1>
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
                    Data Peserta
                </div>
                <div class="card-body">
                    @csrf
                    @method ('put')
                    <div class="form-group">
                        <label for="">Nama Lengkap :</label>
                        <input type="text" name="nama" value="{{$data_peserta->nama}}"
                            class="form-control @error('nama') is-invalid @enderror" disabled>
                        @error('nama')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{$message}} </strong>
                        </span>
                        @enderror
                    </div>
                    <div class="form-group">
                        <label for="">No. Pendaftaran :</label>
                        <input type="text" name="no_pendaftaran" value="{{$data_peserta->no_pendaftaran}}"
                            class="form-control @error('no_pendaftaran') is-invalid @enderror" disabled>
                        @error('no_pendaftaran')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{$message}} </strong>
                        </span>
                        @enderror
                    </div>
                    <div class="form-group">
                        <label for="">Jenis Kelamin :</label>
                        <input type="text" name="jk" value="{{$data_peserta->jk}}"
                            class="form-control @error('jk') is-invalid @enderror" disabled>
                        @error('jk')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{$message}} </strong>
                        </span>
                        @enderror
                    </div>
                    <div class="form-group">
                        <label for="">Tempat Lahir :</label>
                        <input type="text" name="tempat_lahir" value="{{$data_peserta->tempat_lahir}}"
                            class="form-control @error('tempat_lahir') is-invalid @enderror" disabled>
                        @error('tempat_lahir')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{$message}} </strong>
                        </span>
                        @enderror
                    </div>
                    <div class="form-group">
                        <label for="">Tanggal Lahir :</label>
                        <input type="text" name="tgl_lahir" value="{{$data_peserta->tgl_lahir}}"
                            class="form-control @error('tgl_lahir') is-invalid @enderror" disabled>
                        @error('tgl_lahir')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{$message}} </strong>
                        </span>
                        @enderror
                    </div>
                    <div class="form-group">
                        <label for="">Alamat :</label>
                        <input type="text" name="alamat" value="{{$data_peserta->alamat}}"
                            class="form-control @error('alamat') is-invalid @enderror" disabled>
                        @error('alamat')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{$message}} </strong>
                        </span>
                        @enderror
                    </div>
                    <div class="form-group">
                        <label for="">Asal Sekolah :</label>
                        <input type="text" name="asal_sekolah" value="{{$data_peserta->asal_sekolah}}"
                            class="form-control @error('asal_sekolah') is-invalid @enderror" disabled>
                        @error('asal_sekolah')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{$message}} </strong>
                        </span>
                        @enderror
                    </div>
                    <div class="form-group">
                        <label for="">Jurusan :</label>
                        <input type="text" name="jurusan" value="{{$data_peserta->jurusan}}"
                            class="form-control @error('jurusan') is-invalid @enderror" disabled>
                        @error('jurusan')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{$message}} </strong>
                        </span>
                        @enderror
                    </div>
                    <div class="form-group">
                        <label for="">Nama Orang Tua :</label>
                        <input type="text" name="nama_ortu" value="{{$data_peserta->nama_ortu}}"
                            class="form-control @error('nama_ortu') is-invalid @enderror" disabled>
                        @error('nama_ortu')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{$message}} </strong>
                        </span>
                        @enderror
                    </div>
                    <div class="form-group">
                        <label for="">Pekerjaan Orang Tua :</label>
                        <input type="text" name="pekerjaan_ortu" value="{{$data_peserta->pekerjaan_ortu}}"
                            class="form-control @error('pekerjaan_ortu') is-invalid @enderror" disabled>
                        @error('pekerjaan_ortu')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{$message}} </strong>
                        </span>
                        @enderror
                    </div>
                    <div class="form-group">
                        <label for="">No. Telepon Orang Tua :</label>
                        <input type="text" name="no_hp_ortu" value="{{$data_peserta->no_hp_ortu}}"
                            class="form-control @error('no_hp_ortu') is-invalid @enderror" disabled>
                        @error('no_hp_ortu')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{$message}} </strong>
                        </span>
                        @enderror
                    </div>
                    <div class="form-group">
                        <label for="">Alamat Orang Tua :</label>
                        <input type="text" name="alamat_ortu" value="{{$data_peserta->alamat_ortu}}"
                            class="form-control @error('alamat_ortu') is-invalid @enderror" disabled>
                        @error('alamat_ortu')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{$message}} </strong>
                        </span>
                        @enderror
                    </div>
                    <div class="form-group">
                        <label for="">Status Pendaftaran :</label>
                        <input type="text" name="status_pendaftaran" value="{{$data_peserta->status_pendaftaran}}"
                            class="form-control @error('status_pendaftaran') is-invalid @enderror" disabled>
                        @error('status_pendaftaran')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{$message}} </strong>
                        </span>
                        @enderror
                    </div>
                    <div class="form-group">
                        <form action="{{ route('data_peserta.index') }}">
                            <button class="btn btn-outline-primary"><i
                                    class="far fa-arrow-alt-circle-left"></i>&nbsp;&nbsp;Kembali</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>

    @endsection

    @section('js')
    <script src="{{asset('DataTables/datatables.min.js')}}"></script>
    @endsection
