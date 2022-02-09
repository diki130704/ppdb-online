<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Required meta tags-->
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="Colorlib Templates">
    <meta name="author" content="Colorlib">
    <meta name="keywords" content="Colorlib Templates">

    @include('layouts.regform.stylesheet')

    <!-- Title Page-->
    <title>Form Persyaratan</title>

</head>

<body>
    <form action="{{route('berkas_peserta.store')}}" method="POST" enctype="multipart/form-data">
        @csrf

        <div class="page-wrapper bg-gra-02 p-t-130 p-b-100 font-poppins">
            <div class="wrapper wrapper--w680">
                <div class="card card-4">
                    <div class="card-body">
                        <h2>
                            <center>Form Persyaratan</center>
                        </h2><br>

                        <div class="input-group">
                            <label class="label">Nama Lengkap <font color="red">*</font></label>
                            <div class="rs-select2 js-select-simple select--no-search">
                                <select name="id_peserta"
                                    class="form-control @error('id_peserta') is-invalid @enderror">
                                    @foreach($data_peserta as $data)
                                    <option value="{{$data->id}}">{{$data->nama}}</option>
                                    @endforeach
                                    @error('id_peserta')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror
                                </select>
                                <div class="select-dropdown"></div>
                            </div>
                        </div>

                        <div class="row row-space">
                            <h6>
                                <font color="red">
                                    <center>* Pastikan data yang ada di dalam foto terlihat jelas &
                                        cukup pencahayaan</center>
                                </font>
                            </h6><br><br>
                        </div>

                        <div class="input-group">
                            <label class="label">Foto Ijazah (Pendidikan Terakhir) <font color="red">*</font></label>
                            <div class="rs-select2 js-select-simple select--no-search">
                                <input class="input--style-4" type="file" name="ftcpy_ijazah"
                                    class="form-control @error('ftcpy_ijazah') is-invalid @enderror">
                                @error('ftcpy_ijazah')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                                @enderror
                                <div class="select-dropdown"></div>
                            </div>
                        </div>

                        <div class="input-group">
                            <label class="label">Foto Akte Kelahiran <font color="red">*</font></label>
                            <div class="rs-select2 js-select-simple select--no-search">
                                <input class="input--style-4" type="file" name="ftcpy_akte"
                                    class="form-control @error('ftcpy_akte') is-invalid @enderror">
                                @error('ftcpy_akte')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                                @enderror
                                <div class="select-dropdown"></div>
                            </div>
                        </div>

                        <div class="input-group">
                            <label class="label">Foto Kartu Keluarga <font color="red">*</font></label>
                            <div class="rs-select2 js-select-simple select--no-search">
                                <input class="input--style-4" type="file" name="ftcpy_kk"
                                    class="form-control @error('ftcpy_kk') is-invalid @enderror">
                                @error('ftcpy_kk')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                                @enderror
                                <div class="select-dropdown"></div>
                            </div>
                        </div>

                    </div>

                    <div class="p-t-15">
                        <button class="btn btn--radius-2 btn--blue" type="submit">Submit</button>
                    </div>
                </div>
            </div>
    </form>
    </div>
    </div>
    </div>
    </div>

    @include('layouts.regform.javascript')

</body><!-- This templates was made by Colorlib (https://colorlib.com) -->

</html>
<!-- end document-->
