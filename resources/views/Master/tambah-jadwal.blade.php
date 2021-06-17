@extends('layouts.inhome')

@section('content')

<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css"></script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>


<div class="container">
    <form class="form" action="{{route('tambah-jadwal')}}" method="POST">
        @csrf
        <div class="content-header">
            <div class="row mb-9">
                <div class="col-sm-7">
                    <div class="card" style="background:#8186d5">
                        <div class="card-header">
                            <h3 class="card-title"> Tambah Jadwal</h3>
                        </div>


                        <div class="card-body" style="background:#baabda">
                            <div class="form-group">
                                <label for="exampleInputid_guru"><i class="fas fa-user-circle"
                                        style='font-size:24px'></i> Nama Guru </label>

                                <select name="id_guru" class="form-control">
                                    @foreach ($guru as $ab)
                                    <option value="{{$ab->id}}">{{$ab->nama_guru}}</option>
                                    @endforeach
                                </select>
                            </div>

                            <div class="form-group">
                                <label for="exampleInputpelajaran"><i class='fas fa-book' style='font-size:24px'></i>
                                    Nama Pelajaran</label>
                                <select name="pelajaran" class="form-control">
                                    @foreach ($pelajaran as $ib)
                                    <option value="{{$ib->id}}">{{$ib->nama_pelajaran}}</option>
                                    @endforeach </select> </div>

                            <div class="form-group">
                                <label for="exampleInputruang"><i class='fas fa-city' style='font-size:24px'></i> Nama
                                    Ruang</label>
                                <select name="ruang" class="form-control">
                                    @foreach ($ruang as $ir)
                                    <option value="{{$ir->id}}">{{$ir->jumlah_gedung}}</option>
                                    @endforeach
                                </select></div>

                            <div class="form-group">
                                <label for="exampleInputkelas"><i class='fas fa-school' style='font-size:24px'></i> Nama
                                    Kelas</label>
                                <select name="kelas" class="form-control">
                                    @foreach ($kelas as $ik)
                                    <option value="{{$ik->id}}">{{$ik->kelas}}</option>
                                    @endforeach</select></div>


                            <div class="form-group">
                                <label>Mulai: </label>
                                <div class="input-group">
                                    <div class="input-group-prepend">
                                        <span class="input-group-text"><i class="fa fa-clock"></i></span>
                                    </div>
                                    <input type="time" name="masuk">
                                </div><br>

                                <div class="form-group">
                                    <label>Akhir: </label>
                                    <div class="input-group">
                                        <div class="input-group-prepend">
                                            <span class="input-group-text"><i class="fa fa-clock"></i></span>
                                        </div>
                                        <input type="time" name="keluar">
                                    </div><br>

                                    <div class="form-group">
                                        <label>Tanggal: </label>
                                        <div class="input-group">
                                            <div class="input-group-prepend">
                                                <span class="input-group-text"><i class="fa fa-calendar-alt"></i></span>
                                            </div>
                                            <input type="date" name="tanggal">
                                        </div><br>
                                        <td>
                                            <button type="submit" class="btn btn-block btn-outline-primary"
                                            data-toggle="modal" data-target="#myModal"><b>Submit</b></button>
                                                                              
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
                                </div>


                                @endsection
                                <script src="{{asset('js/jquery-3.3.1.slim.min.js')}}"></script>
                                <script scr="{{asset('js/popper.min.js')}}"></script>
                                <script src="{{asset('js/bootstrap.min.js')}}"></script>
