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
<body style="background:#c9c9ff">
<form action="{{route('edit-kelas', $model->id)}}" method="POST">
    @csrf
    <div class="content-header">
    <div class="row mb-9">
    <div class="col-sm-5">
    <div class="card card-info">
            <div class="card-header">
        <h3 class="card-title"> Tambah Kelas</h3>
            </div>
        <div class="card-body" style="background:#e1f7d5">
            <label for="exampleInputkelas"><center><i class='fas fa-school' style='font-size:24px' ></i>
              Kelas</center></label>
          <div class="form-group">
            <input type="text" class="form-control" name="kelas" placeholder="Masukan kelasmu" autocomplete="off">
          </div>

          <label for="exampleInputjumah_murid"><center><span class="fas fa-user"></span>
            Jumlah Murid</center></label>
          <div class="form-group">
            <input type="text" class="form-control" name="jumlah_murid" placeholder="berapa teman sekelasmu"
             autocomplete="off" >
          </div> 
          <td>
            <button type="submit" class="btn btn-block btn-outline-primary">submit</button>
          </td>
        </div>
              <!-- /input-group -->
            </div>
            <!-- /.card-body -->
          </div>
        </div></div>
{{-- <input type="text" name="kelas" value="{{$model->kelas}}">
<input type="text" name="jumlah_murid">
<input type="submit" name='submit'> --}}
</body>
</html>