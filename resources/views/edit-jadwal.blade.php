<!DOCTYPE html>
<html lang="en">
<head>
    <link rel="stylesheet" href="{{asset('lugins/fontawesome-free/css/all.min.css')}}">
    <!-- Ionicons -->
    <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
    <!-- Theme style -->
    <link rel="stylesheet" href="{{asset('dist/css/adminlte.min.css')}}">
    <!-- Google Font: Source Sans Pro -->
    <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700" rel="stylesheet">

</head>
<body>
            
<div class="container">
    <form class="form" action="{{route('edit-jadwal', $model->id)}}" method="POST">
        @csrf
<div class="content-header">
    <div class="row mb-9">
    <div class="col-sm-7">
    <div class="card" style="background:#8186d5">
    <div class="card-header">
    <h3 class="card-title"> Tambah Jadwal</h3>
    </div>
      
      
    <div class="card-body"  style="background:#baabda">
        <div class="form-group">
          <label for="exampleInputnama_guru"><i class="fas fa-user-circle"  style='font-size:24px'></i> Nama Guru </label>
          <select name="nama_guru" class="form-control">
                @foreach ($nama_guru as $ab)
                  <option value="{{$ab->nama_guru}}">{{$ab->nama_guru}}</option>  
                @endforeach  
            </select>
        </div>
           
      <div class="form-group">
      <label for="exampleInputpelajaran"><i class='fas fa-book' style='font-size:24px' ></i> Nama Pelajaran</label>
  <select name="pelajaran" class="form-control">
    @foreach ($pelajaran as $ib)
    <option value="{{$ib->nama_pelajaran}}">{{$ib->nama_pelajaran}}</option>    
    @endforeach </select>   </div>
      
      <div class="form-group">
      <label for="exampleInputruang"><i class='fas fa-city'  style='font-size:24px'></i> Nama Ruang</label>
  <select name="ruang" class="form-control">
    @foreach ($ruang as $ir)
        <option value="{{$ir->jumlah_gedung}}">{{$ir->jumlah_gedung}}</option>
    @endforeach
  </select></div>
  
      <div class="form-group">
      <label for="exampleInputkelas"><i class='fas fa-school' style='font-size:24px' ></i> Nama Kelas</label>
  <select name="kelas"  class="form-control">
    @foreach ($kelas as $ik)
    <option value="{{$ik->kelas}}">{{$ik->kelas}}</option>
    @endforeach</select></div>
  
  
    <div class="form-group">
      <label>Mulai: </label>
      <div class="input-group">
        <div class="input-group-prepend">
        <span class="input-group-text"><i class="fa fa-user-circle"></i></span>
      </div>
      <input type="time" name="masuk">
    </div><br>
  <div class="form-group">
      <label>Akhir: </label>
      <div class="input-group">
        <div class="input-group-prepend">
        <span class="input-group-text"><i class="fa fa-user-circle"></i></span>
      </div>
      <input type="time" name="keluar">
    </div><br>

    <div class="form-group">
        <label>Tanggal: </label>
        <div class="input-group">
          <div class="input-group-prepend">
          <span class="input-group-text"><i class="fa fa-user-circle"></i></span>
        </div>
        <input type="date" name="tanggal">
      </div><br>
      <td>
          <button type="submit"> <b>Submit</b></button>
          </td>
        </div></div>
  

    @endsection
    <script src="{{asset('js/jquery-3.3.1.slim.min.js')}}"></script>
    <script scr="{{asset('js/popper.min.js')}}"></script>
    <script src="{{asset('js/bootstrap.min.js')}}"></script>
    
</body>
</html>