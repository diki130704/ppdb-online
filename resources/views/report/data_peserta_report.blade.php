<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Data Peserta</title>
</head>

<body>
    <center>
        <h3>Penerimaan Peserta Didik Baru SMK Assalaam Tahun Pelajaran 2022/2023</h3>
    </center>
    <div class="table-responsive">
        <table align="center" class="table" id="data_peserta">
            <thead>
                <tr>
                    <th>
                        No.
                    </th>
                    <th>
                        Nama
                    </th>
                    <th>
                        Jenis Kelamin
                    </th>
                    <th>
                        Tempat, Tanggal Lahir
                    </th>
                    <th>
                        Jurusan
                    </th>
                    <th>
                        Status Pendaftaran
                    </th>
                </tr>
            </thead>
            @php
            $no = 1;
            @endphp
            <tbody>
                @foreach ($data_peserta ?? '' as $data)
                <tr>
                    <td>
                        {{$no++}}
                    </td>
                    <td>
                        {{$data->nama}}
                    </td>
                    <td>
                        {{$data->jk}}
                    </td>
                    <td>
                        {{$data->tempat_lahir}}, {{$data->tgl_lahir}}
                    </td>
                    <td>
                        {{$data->jurusan}}
                    </td>
                    <td>
                        {{$data->status_pendaftaran}}
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</body>

</html>
