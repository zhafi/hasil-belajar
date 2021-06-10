@extends('layouts.inhome')

@section('content')

<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css"></script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>

<div class="container">

    <form class="form" action="{{route('tambah-makanan')}}" method="POST">
        @csrf
        <div class="content-header">
            <div class="row mb-9">
                <div class="col-sm-15">
                    <div class="card card-info">
                        <div class="card-header">
                            <h3 class="card-title"> Tambah Makanan</h3>
                        </div>


                        <div class="card-body" style="background:#c9c9ff">
                            <label for="exampleInputnama_makanan"><i class="fas fa-envelope"></i>Nama Makanan
                            </label>
                            <div class="form-group">
                                <input type="text" class="form-control" name="nama_makanan" placeholder="Masukan Nama Makanan"
                                    autocomplete="off"></i>
                            </div>

                            <div class="form-group">
                                <label for="exampleInputharga"><i class="fas fa-user-circle"></i>Harga</label>
                                <input type="text" class="form-control" name="harga"
                                    placeholder="Masukan Harga" autocomplete="off">
                            </div>

                             <div class="form-group">
                                <label for="exampleInputketerangan"><i class="fas fa-user-circle"></i>Keterangan</label>
                                <input type="text" class="form-control" name="keterangan"
                                    placeholder="Masukan Keterangan" autocomplete="off">
                            </div>

                             <div class="form-group">
                                <label for="exampleInputgambar"><i class="fas fa-user-circle"></i>Gambar</label>
                                <input type="text" class="form-control" name="gambar"
                                    placeholder="Masukan Keterangan" autocomplete="off">
                            </div>

              <!--   <form action="tambah-makanan" method="POST" enctype="multipart/form-data">
                    {{ csrf_field() }}
 
                    <div class="form-group">
                        <b>File Gambar</b><br/>
                        <input type="file" name="gambar">
                    </div>
  -->

                            <td>
                                <button type="submit" class="btn btn-block btn-outline-secondary" data-toggle="modal"
                                    data-target="#myModal"><b>Submit</b></button>
                            </td>
                            <!-- Modal -->
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
                                       
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                @endsection
                <script src="{{asset('js/jquery-3.3.1.slim.min.js')}}"></script>
                <script scr="{{asset('js/popper.min.js')}}"></script>
                <script src="{{asset('js/bootstrap.min.js')}}"></script>