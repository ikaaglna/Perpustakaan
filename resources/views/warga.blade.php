<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <table class="table table-striped">
        <thead>
          <tr>
            <th scope="col">No.</th>
            <th scope="col">Nama</th>
            <th scope="col">NIK</th>
            <th scope="col">Nomor KK</th>
            <th scope="col">Jenis Kelamin</th>
            <th scope="col">Alamat</th>
          </tr>
        </thead>
        <tbody>
            @foreach ( $warga as $data)
                <tr>
                    <th scope="row">{{ $data->id }}</th>
                    <td>{{ $data->nama }}</td>
                    <td>{{ $data->nik }}</td>
                    <td>{{ $data->no_kk }}</td>
                    <td>{{ $data->jenis_kelamin }}</td>
                    <td>{{ $data->alamat }}</td>
                </tr>  
            @endforeach
        </tbody>
      </table>
</body>
</html>