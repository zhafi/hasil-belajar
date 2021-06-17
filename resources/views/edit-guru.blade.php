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
<form action="{{route('edit-guru', $model->id)}}" method="POST">
    @csrf

    <div class="content-header">
        <div class="content-header">
        <div class="row mb-7">
        <div class="col-sm-4">
        <div class="card card-info">
        <div class="card-header">
        <h3 class="card-title"> Tambah Guru</h3>
        </div>
      
            <div class="card-body" style="background:	#c9c9ff">
            <label for="exampleInputNIP"><i class="fas fa-envelope"></i> NIP</label>
            <div class="form-group">
            <input type="text" class="form-control" name="NIP" placeholder="Masukan NIP"
             autocomplete="off" value="{{$model->NIP}}"></i>
            </div>
             
            <div class="form-group">
            <label for="exampleInputnama_guru"><i class="fas fa-user-circle"></i></i> Nama Guru</label>
            <input type="text" class="form-control" name="nama_guru" placeholder="Hayo siapa namanya" autocomplete="off">
            </div>
              
            <label for="exampleInputgender"><i class="fas fa-venus-mars"></i> Gender</label>
            <select class="form-control" name="gender" autocomplete="off">
            <option @if($model->gender == 'laki-laki') selected @endif value="laki-laki">Laki-laki</option>
            <option @if($model->gender == 'perempuan') selected @endif value="perempuan">Perempuan</option>
            </select>
              <br>
            <td>
              <button type="submit" class="btn btn-block btn-outline-secondary"><b>Submit</b></button>
            </td>
        </div></div>
{{-- <input type="text" name="NIP" value="{{$model->NIP}}">
<input type="text" name="nama_guru">
<select name="gender">
<option @if($model->gender == 'laki-laki') selected @endif value="laki-laki">Laki-laki</option>
<option @if($model->gender == 'perempuan') selected @endif value="perermpuan">Perempuan</option>
</select>
<input type="submit" name='submit'> --}}
</body>
</html>