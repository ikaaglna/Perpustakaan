<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    {{-- CSS --}}
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.4.1/dist/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">

    <title>Data</title>
</head>
<body>
  <div class="container mt-5">

    {{-- tombol --}}
    <a href="tambahWarga" class="btn btn-primary mb-4">Tambah Data</a> 

    <table class="table table-striped">
      <thead>
        <tr>
          <th class="bg-secondary text-white" scope="col">No.</th>
          <th class="bg-secondary text-white" scope="col">Nama</th>
          <th class="bg-secondary text-white" scope="col">NIK</th>
          <th class="bg-secondary text-white" scope="col">Nomor KK</th>
          <th class="bg-secondary text-white" scope="col">Jenis Kelamin</th>
          <th class="bg-secondary text-white" scope="col">Alamat</th>
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
  </div>
    

      {{-- CSS JS --}}
      <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
      <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
      <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.4.1/dist/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
</body>
</html>