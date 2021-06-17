@extends('layouts.inhome')

@section('content')


<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css"></script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>


<div class="container">

    <form class="form" action="{{route('tambah-kelas')}}" method="POST">
        @csrf
        <div class="content-header">
            <div class="w-75 p-9">
                <div class="col-md-9">
                    <div class="card card-info">
                        <div class="card-header">
                            <h3 class="card-title"> Tambah Kelas</h3>
                        </div>
                        <div class="card-body" style="background:#c1e1e7">
                            <label for="exampleInputkelas">
                                <center><i class='fas fa-school' style='font-size:24px'></i>
                                    Kelas</center>
                            </label>
                            <div class="form-group">
                                <input type="text" class="form-control" name="kelas" placeholder="Masukan kelasmu"
                                    autocomplete="off">
                            </div>

                            <label for="exampleInputjumah_murid">
                                <center><span class="fas fa-user"></span>
                                    Jumlah Murid</center>
                            </label>
                            <div class="form-group">
                                <input type="text" class="form-control" name="jumlah_murid"
                                    placeholder="berapa teman sekelasmu" autocomplete="off">
                            </div>
                            <td>
                                <button type="submit" class="btn btn-block btn-outline-primary"
                                data-toggle="modal" data-target="#myModal">submit</button>
                                <div class="modal fade" id="myModal" role="dialog">
                                  <div class="modal-dialog modal-sm">
                                      <div class="modal-content">
                                          <div class="modal-header">
                                              <h4 class="modal-title">Succes</h4>
                                          </div>
                                          <div class="modal-body">
                                              <p>Input Berhasil. </p>
                                              <p><b> Terima Kasih </b> </p>
                                          </div>
          
                            </td>
                        </div>
                        <!-- /input-group -->
                    </div>
                    <!-- /.card-body -->
                </div>
            </div>
        </div>




        <!-- <p>Kelas  :</p>
    <input type="text" placeholder="masukan nama kelas" name="kelas"><br><br>
    <br><br>
    <p>Jumlah murid :</p>
    <input type="text" placeholder="masukan jumlah murid" name="jumlah_murid"><br><br>
    <input type="submit" name="submit">-->
</div>
</form>
@endsection
<script src="{{asset('js/jquery-3.3.1.slim.min.js')}}"></script>
<script scr="{{asset('js/popper.min.js')}}"></script>
<script src="{{asset('js/bootstrap.min.js')}}"></script>
