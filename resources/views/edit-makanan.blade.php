<!DOCTYPE html>
<head>
        <link rel="stylesheet" href="{{asset('lugins/fontawesome-free/css/all.min.css')}}">
        <!-- Ionicons -->
        <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
        <!-- Theme style -->
        <link rel="stylesheet" href="{{asset('dist/css/adminlte.min.css')}}">
        <!-- Google Font: Source Sans Pro -->
        <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700" rel="stylesheet">

</head>
<body style="background:#f1cbff" >
<form action="{{route('edit-makanan', $model->id)}}" method="POST">
    @csrf

    <div class="content-header">
        <div class="content-header">
        <div class="row mb-7">
        <div class="col-sm-4">
        <div class="card card-info">
        <div class="card-header">
        <h3 class="card-title"> Tambah makanan</h3>
        </div>
      
            <div class="card-body" style="background:	#c9c9ff">
            <label for="exampleInputnama_makanan"><i class="fas fa-envelope"></i> Nama Makanan</label>
            <div class="form-group">
            <input type="text" class="form-control" name="nama_makanan" placeholder="Masukan Makanan"
             autocomplete="off" value="{{$model->nama_makanan}}"></i>
            </div>
             
            <div class="form-group">
            <label for="exampleInputharga"><i class="fas fa-user-circle"></i></i> Harga</label>
            <input type="text" class="form-control" name="harga" placeholder="Masukan Harga" autocomplete="off">
            </div>

             <div class="form-group">
            <label for="exampleInputketerangan"><i class="fas fa-user-circle"></i></i> Keterangan</label>
            <input type="text" class="form-control" name="keterangan" placeholder="Masukan Keterangan" autocomplete="off">
            </div>

             <div class="form-group">
            <label for="exampleInputgambar"><i class="fas fa-user-circle"></i></i> Gambar</label>
            <input type="text" class="form-control" name="gambar" placeholder="Masukan Gambar" autocomplete="off">
            </div>
            
              <br>
            <td>
              <button type="submit" class="btn btn-block btn-outline-secondary"><b>Submit</b></button>
            </td>
        </div>
    </div>
</body>
</html>