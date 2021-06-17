@extends('layouts.inhome')

@section('content')


<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css"></script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>



<div class="row mb-10">
    <div class="col-sm-10">
        <div class="card" style="background:	#f6b092">
            <div class="card-header">


                <form class="form" action="{{route('tambah-ruang')}}" method="POST">
                    @csrf
                    <div class="content-header">
                        <div class="container-fluid">
                            <div class="row mb-6">
                                <div class="col-sm-7">
                                    <div class="card-body" style="background:	#e1f7d5">
                                        <div class="form-group">
                                            <label class="col-form-label"><i class='fas fa-city'></i>
                                                Tambahkan Nama Ruang
                                            </label>
                                            <input type="text" class="form-control" placeholder="Apa nama Gedung"
                                                name="jumlah_gedung" autocomplete="off">
                                            {{-- <td>
                                                <button type="submit" class="btn btn-block btn-outline-danger"
                                                    data-toggle="modal" data-target="#myModal">Submit</button>
                                            </td> --}}
                                            <td>
                                                <button type="submit" class="btn btn-success swalDefaultSuccess">
                                                    Submit
                                                </button>
                                            </td>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                            <!--    <p>Jumlah Gedung :</p>
    <input type="text" placeholder="Berapa Jumlah Gedung" name="jumlah_gedung" autocomplete="off"></><br><br>
    <input type="submit" name="submit">-->
                        </div>
                </form>
                @endsection
                <script src="{{asset('js/jquery-3.3.1.slim.min.js')}}"></script>
                <script scr="{{asset('js/popper.min.js')}}"></script>
                <script src="{{asset('js/bootstrap.min.js')}}"></script>
