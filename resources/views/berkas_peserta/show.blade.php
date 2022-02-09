@extends('adminlte::page')

@section('css')
@endsection

@section('title', 'Dashboard')

@section('content_header')

<div class="content-header">
    <div class="container-fluid">
        <div class="row mb-2">
            <div class="col-sm-12">
                <h1 class="m-0">Show Berkas Peserta</h1>
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
                    Berkas Peserta
                </div>
                <div class="card-body">
                    <form action="{{route('berkas_peserta.update', $berkas_peserta->id)}}" method="POST">
                        @csrf
                        @method ('put')
                        <div class="form-group">
                            <label for="">Nama Lengkap :</label>
                            <select name="id_peserta" class="form-control @error('id_peserta') is-invalid @enderror"
                                disabled>
                                @foreach($data_peserta as $data)
                                <option value="{{$data->id}}" {{$data->id == $berkas_peserta->id_peserta ?
                                    'selected="selected"' : '' }}>{{$data->nama}}</option>
                                @endforeach
                            </select>
                            @error('id_peserta')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                            @enderror
                        </div>
                        <div class="form-group">
                            <label for="">Foto Ijazah :</label>
                            <br>
                            <img src="{{ $berkas_peserta->image() }}" height="75" style="padding:10px;" />

                        </div>
                        <div class="form-group">
                            <label for="">Foto Akte :</label>
                            <br>
                            <img src="{{ $berkas_peserta->image_akte() }}" height="75" style="padding:10px;" />

                        </div>
                        <div class="form-group">
                            <label for="">Foto KK :</label>
                            <br>
                            <img src="{{ $berkas_peserta->image_kk() }}" height="75" style="padding:10px;" />

                        </div>
                    </form>
                    <div class="form-group">
                        <form action="{{ route('berkas_peserta.index') }}">
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
    @endsection
