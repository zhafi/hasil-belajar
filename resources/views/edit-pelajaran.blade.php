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
<body style="background:#EEB8B8">
<form action="{{route('edit-pelajaran', $model->id)}}" method="POST">
    @csrf
    <div class="content-header">
            <div class="row mb-9">
            <div class="col-sm-5">
            <div class="card card-info">
            <div class="card-header">
            <h3 class="card-title"> Tambah Pelajaran</h3>
            </div>
        <div class="card"  style="background:	#f1e3f7">

    <div class="form-group">
        <label class="col-form-label"><span class='fas fa-book' style='font-size:24px'></span>
        Tambahkan Nama Pelajaran yaa</label>
        <span class='fas fa-book' style='font-size:24px'></span>   
        <input type="text" class="form-control is-valid" name="nama_pelajaran" alue="{{$model->nama_pelajaran}}" placeholder="Silahkan ditulis">
        <br>
        <td>
        <button type="submit" class="btn btn-block btn-outline-success">submit</button>
        </td> 
    </form>    
    

{{-- <input type="text" name="nama_pelajaran" value="{{$model->nama_pelajaran}}">
<input type="submit" name='submit'> --}}
</body>
</html>