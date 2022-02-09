<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Required meta tags-->
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="Colorlib Templates">
    <meta name="author" content="Colorlib">
    <meta name="keywords" content="Colorlib Templates">
    <meta name="csrf-token" content="{{ csrf_token() }}" />

    @include('layouts.regform.stylesheet')

    <!-- Title Page-->
    <title>Form Pendaftaran</title>

</head>

<body>
    <form action="{{route('data_peserta.store')}}" method="POST" enctype="multipart/form-data">
        @csrf

        <div class="page-wrapper bg-gra-02 p-t-130 p-b-100 font-poppins">
            <div class="wrapper wrapper--w680">
                <div class="card card-4">
                    <div class="card-body">
                        <h2>
                            <center>Form Pendaftaran</center>
                        </h2><br><br><br>

                        <div class="row row-space">
                            <div class="col-2">
                                <h5><b>I. Data Calon Peserta</b></h5><br><br>
                            </div>
                            <div class="col-2">
                                <h6>
                                    <font color="red">* Harap data diisi dengan benar</font>
                                </h6><br>
                            </div>
                        </div>

                        <div class="row row-space">
                            <div class="col-2">
                                <div class="input-group">
                                    <label class="label">Nama Lengkap <font color="red">*</font></label>
                                    <input class="input--style-4" type="text" name="nama"
                                        placeholder="Masukkan Nama Anda"
                                        class="form-control @error('nama') is-invalid @enderror">
                                    @error('nama')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror
                                </div>
                                <div class="input-group">
                                    <label class="label"></label>
                                    <input class="input--style-4" type="text" name="no_pendaftaran" class="form-control"
                                        hidden>
                                </div>
                            </div>
                            <div class="col-2">
                                <div class="input-group">
                                    <label class="label">Jenis Kelamin <font color="red">*</font></label>
                                    <div class="p-t-10">
                                        <label class="radio-container m-r-45">Laki-laki
                                            <input type="radio" name="jk" value="L"
                                                class="form-control @error('jk') is-invalid @enderror">
                                            @error('jk')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                            @enderror
                                            <span class="checkmark"></span>
                                        </label>
                                        <label class="radio-container">Perempuan
                                            <input type="radio" name="jk" value="P"
                                                class="form-control @error('jk') is-invalid @enderror">
                                            @error('jk')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                            @enderror
                                            <span class="checkmark"></span>
                                        </label>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row row-space">
                            <div class="col-2">
                                <div class="input-group">
                                    <label class="label">Tempat Lahir <font color="red">*</font></label>
                                    <input class="input--style-4" type="text" name="tempat_lahir"
                                        placeholder="Masukkan Tempat Lahir"
                                        class="form-control @error('tempat_lahir') is-invalid @enderror">
                                    @error('tempat_lahir')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror
                                </div>
                            </div>
                            <div class="col-2">
                                <div class="input-group">
                                    <label class="label">Tanggal Lahir <font color="red">*</font></label>
                                    <div class="input-group-icon">
                                        <input class="input--style-4 js-datepicker" type="text" name="tgl_lahir"
                                            placeholder="Masukkan Tanggal Lahir"
                                            class="form-control @error('tgl_lahir') is-invalid @enderror">
                                        @error('tgl_lahir')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                        @enderror
                                        <i class="zmdi zmdi-calendar-note input-icon js-btn-calendar"></i>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row row-space">
                            <div class="col-2">
                                <div class="input-group">
                                    <label class="label">Alamat Lengkap <font color="red">*</font></label>
                                    <input class="input--style-4" type="text" name="alamat"
                                        placeholder="Masukkan Alamat Lengkap"
                                        class="form-control @error('alamat') is-invalid @enderror">
                                    @error('alamat')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror
                                </div>
                            </div>
                            <div class="col-2">
                                <div class="input-group">
                                    <label class="label">Asal Sekolah <font color="red">*</font></label>
                                    <input class="input--style-4" type="text" name="asal_sekolah"
                                        placeholder="Masukkan Asal Sekolah"
                                        class="form-control @error('asal_sekolah') is-invalid @enderror">
                                    @error('asal_sekolah')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror
                                </div>
                            </div>
                        </div>
                        <div class="col-2">
                            <label class="label">Jurusan <font color="red">*</font></label>
                            <div class="rs-select2 js-select-simple select--no-search">
                                <select name="jurusan" class="form-control @error('jurusan') is-invalid @enderror">
                                    <option disabled="disabled" selected="selected">Pilih Jurusan</option>
                                    <option value="RPL">RPL</option>
                                    <option value="TBSM">TBSM</option>
                                    <option value="TKRO">TKRO</option>
                                    @error('jurusan')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror
                                </select>
                                <div class="select-dropdown"></div>
                            </div>
                        </div>

                        <div class="row row-space">
                            <div class="col-2">
                                <h5><br><br><br><b>II. Data Orang Tua Calon Peserta</b></h5><br><br>
                            </div>
                        </div>

                        <div class="row row-space">
                            <div class="col-2">
                                <div class="input-group">
                                    <label class="label">Nama Orang Tua (Ibu/Ayah) <font color="red">*</font></label>
                                    <input class="input--style-4" type="text" name="nama_ortu"
                                        placeholder="Masukkan Nama Ortu"
                                        class="form-control @error('nama_ortu') is-invalid @enderror">
                                    @error('nama_ortu')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{$message}} </strong>
                                    </span>
                                    @enderror
                                </div>
                            </div>
                            <div class="col-2">
                                <div class="input-group">
                                    <label class="label">Pekerjan Orang Tua <font color="red">*</font></label>
                                    <input class="input--style-4" type="text" name="pekerjaan_ortu"
                                        placeholder="Masukkan Pekerjaan Ortu"
                                        class="form-control @error('pekerjaan_ortu') is-invalid @enderror">
                                    @error('pekerjaan_ortu')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{$message}} </strong>
                                    </span>
                                    @enderror
                                </div>
                            </div>
                        </div>
                        <div class="row row-space">
                            <div class="col-2">
                                <div class="input-group">
                                    <label class="label">No. Telepon Orang Tua <font color="red">*</font></label>
                                    <input class="input--style-4" type="text" name="no_hp_ortu"
                                        placeholder="Masukkan No. Telepon"
                                        class="form-control @error('no_hp_ortu') is-invalid @enderror">
                                    @error('no_hp_ortu')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{$message}} </strong>
                                    </span>
                                    @enderror
                                </div>
                            </div>
                            <div class="col-2">
                                <div class="input-group">
                                    <label class="label">Alamat Orang Tua <font color="red">*</font></label>
                                    <input class="input--style-4" type="text" name="alamat_ortu"
                                        placeholder="Masukkan Alamat Ortu"
                                        class="form-control @error('alamat_ortu') is-invalid @enderror">
                                    @error('alamat_ortu')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{$message}} </strong>
                                    </span>
                                    @enderror
                                    <div class="input-group">
                                        <label class="label"></label>
                                        <input class="input--style-4" type="text" name="status_pendaftaran"
                                            value="Belum Ditentukan"
                                            class="form-control @error('status_pendaftaran') is-invalid @enderror"
                                            hidden>
                                        @error('status_pendaftaran')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{$message}} </strong>
                                        </span>
                                        @enderror
                                    </div>
                                </div>
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
