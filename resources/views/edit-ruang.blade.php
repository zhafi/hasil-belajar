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
<body style="background:#FEB68E">         
          <form class="form" action="{{route('edit-ruang', $model-> id)}}" method="POST">
          @csrf
          <div class="content-header">
          <div class="container-fluid">
          <div class="row mb-9">
          <div class="col-sm-5">
          <div class="card-body" style="background:	#e1f7d5">
          <div class="form-group">
          <label class="col-form-label"><i class='fas fa-city'></i>
           Tambahkan Nama Ruang
          </label>
          <input type="text" class="form-control" placeholder="Apa nama Gedung" name="jumlah_gedung" 
          autocomplete="off" value="{{$model->jumlah_gedun}}">
          <td>
          <button type="submit" class="btn btn-block btn-outline-danger">Submit</button>
          </td>
      
</body>
</html>


 
  {{-- <!DOCTYPE html>
<head>
    <title>Document</title>
</head>
<body>
    <div class="card">
<form action="{{route('edit-ruang', $model-> id)}}" method="POST">
    @csrf
<input type="text" name="jumlah_gedung" value="{{$model->jumlah_gedung}}">
<input type="submit" name='submit'>
</body>
</html> --}}