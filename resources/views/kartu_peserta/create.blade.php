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
    <title>Form Kartu Peserta</title>

</head>

<body>
    <form action="{{route('kartu_peserta.store')}}" method="POST" enctype="multipart/form-data">
        @csrf

        <div class="page-wrapper bg-gra-02 p-t-130 p-b-100 font-poppins">
            <div class="wrapper wrapper--w680">
                <div class="card card-4">
                    <div class="card-body">
                        <h2>Form Kartu Peserta</h2><br>

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

                        <div class="input-group">
                            <label class="label"></label>
                            <input class="input--style-4" type="text" name="no_peserta" class="form-control" hidden>
                        </div>
                    </div>


                    <div class="p-t-15">
                        <button class="btn btn--radius-2 btn--blue" type="submit">Submit</button>
                    </div>
                </div>

    </form>
    </div>
    </div>

    @include('layouts.regform.javascript')

</body><!-- This templates was made by Colorlib (https://colorlib.com) -->

</html>
<!-- end document-->
