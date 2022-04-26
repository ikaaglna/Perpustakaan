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
          {{-- <th class="bg-secondary text-white" scope="col">No.</th> --}}
          <th class="bg-secondary text-white" scope="col">Nama</th>
          <th class="bg-secondary text-white" scope="col">NIK</th>
          <th class="bg-secondary text-white" scope="col">Nomor KK</th>
          <th class="bg-secondary text-white" scope="col">Jenis Kelamin</th>
          <th class="bg-secondary text-white" scope="col">Alamat</th>
          <th class="bg-secondary text-white" scope="col">File</th>
          <th class="bg-secondary text-white" scope="col">Aksi</th>
        </tr>
      </thead>
      <tbody>
          @foreach ( $warga as $data)
              <tr>
                  {{-- <th scope="row">{{ $data->id }}</th> --}}
                  {{-- <th scope="row"></th> --}}
                  <td>{{ $data->nama }}</td>
                  <td>{{ $data->nik }}</td>
                  <td>{{ $data->no_kk }}</td>
                  <td>{{ $data->jenis_kelamin }}</td>
                  <td>{{ $data->alamat }}</td>
                  <td>
                    <label type="button" class="btn col-auto text-primary" data-toggle="modal" data-target="#view"><u>{{ $data->surat }}</u></label>

                    {{-- tab yang berbeda
                      <a href="{{ asset('/assets/upload/'.$data->surat) }}" target="_blank"> view Pdf </a> --}}

                      
                    {{-- pop up --}}
                    <div class="modal fade" id="view" role="dialog" arialabelledby="modalLabel" aria-hidden="true">
                        <div class="modal-dialog modal-xl" role="document">
                            <div class="modal-content">
                                <embed src="{{ asset('/assets/upload/'.$data->surat) }}" type="application/pdf" height="600px">
                            </div>
                        </div>
                    </div> 

                  </td>

                  <td>
                    <a href="warga/{{ $data->id }}/ubah">Ubah
                      {{-- <button class="btn btn-success btn-sm col-12" title="Ubah">
                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-pencil-fill" viewBox="0 0 16 16">
                          <path d="M12.854.146a.5.5 0 0 0-.707 0L10.5 1.793 14.207 5.5l1.647-1.646a.5.5 0 0 0 0-.708l-3-3zm.646 6.061L9.793 2.5 3.293 9H3.5a.5.5 0 0 1 .5.5v.5h.5a.5.5 0 0 1 .5.5v.5h.5a.5.5 0 0 1 .5.5v.5h.5a.5.5 0 0 1 .5.5v.207l6.5-6.5zm-7.468 7.468A.5.5 0 0 1 6 13.5V13h-.5a.5.5 0 0 1-.5-.5V12h-.5a.5.5 0 0 1-.5-.5V11h-.5a.5.5 0 0 1-.5-.5V10h-.5a.499.499 0 0 1-.175-.032l-.179.178a.5.5 0 0 0-.11.168l-2 5a.5.5 0 0 0 .65.65l5-2a.5.5 0 0 0 .168-.11l.178-.178z" />
                        </svg> 
                      </button> --}}
                    </a>
                    {{-- delete --}}
                    <form action="warga/{{$data->id}}" method="POST">
                      @csrf
                      @method('delete')  
                      <button type="submit" class="btn btn-danger">Hapus</button>
                    </form>
                  </td>
                  
                  
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