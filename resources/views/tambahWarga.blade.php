<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    {{-- CSS --}}
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.4.1/dist/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">

    <title>Tambah Data</title>
</head>
<body>

    <div class="container mt-5">
        <form action="warga/tambahDataWarga" method="POST" enctype="multipart/form-data">
            @csrf
            <div class="row">
                <div class="col-8 mt-4">
                  <label for="inputNama">Nama Lengakap</label>
                  <input type="text" class="form-control" id="nama" name="nama" placeholder="">
                </div>
            </div>
        
            <div class="row">
                <div class="col-8 mt-4">
                    <label>NIK</label>
                    <input type="text" class="form-control" id="nik" name="nik" placeholder="">
                </div>
            </div>
    
            <div class="row">
                <div class="col-8 mt-4">
                    <label for="inputNama">No. Kartu Keluarga</label>
                    <input type="text" class="form-control" id="no_kk" name="no_kk" placeholder="">
                </div>
            </div>
    
            <div class="mt-4">Jenis Kelamin</div>
            <div class="row">
                <div class="form-check mt-2 mr-5 ml-3">
                    <input class="form-check-input" type="radio" name="jenis_kelamin" id="jenis_kelamin" value="L" checked>
                    <label class="form-check-label" for="exampleRadios1">
                      Laki-laki
                    </label>
                </div>
        
                <div class="form-check mt-2">
                    <input class="form-check-input" type="radio" name="jenis_kelamin" id="jenis_kelamin" value="P">
                    <label class="form-check-label" for="exampleRadios1">
                      Perempuan
                    </label>
                </div>
            </div>
            
    
            <div class="row">
                <div class="col-8 mt-4">
                    <label for="inputNama">Alamat</label>
                    <input type="text" class="form-control" id="alamat" name="alamat" placeholder="">
                </div>
            </div>

            <div class="row">
                <div class="col-8 mt-4">
                    <div class="form-group">
                        <label for="surat">Surat</label>
                        <input type="file" class="form-control-file" id="surat" name="surat">
                      </div>
                </div>
            </div>
            {{-- <div class="row">
                <div class="col-8 mt-4">
                    <div class="custom-file">
                        <input type="file" class="custom-file-input" id="validatedCustomFile" required>
                        <label class="custom-file-label" for="validatedCustomFile">Surat</label>
                        <div class="invalid-feedback">Example invalid custom file feedback</div>
                      </div>
                </div>
            </div> --}}
    
            <br><br>
            <div class="row">
                <div class="col-1">
                    <button type="submit" class="btn btn-primary">Tambah</button>
                </div>
                <div class="col">
                    {{-- tombol --}}
                    <a href="warga" class="btn btn-danger">Batal</a> 
                </div>
            </div>

        </form>
    </div>

    

      {{-- CSS JS --}}
      <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
      <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
      <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.4.1/dist/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
</body>
</html>