@extends('layouts.inhome')
@section('content')

<link rel="stylesheet" href="{{asset('plugins/datatables-bs4/css/dataTables.bootstrap4.css')}}">


<div class="container">
    <div class="card">
    <div class="card-header" style="background:#dcffcc">        
            <div class="card-header" style="background:">        
            
    <h1> Data Pelajaran </h1>
    <table class="table">
     <!--   <thead class="thead-dark">
            <tr>
                <th scope="col">ID</th>
                <th scope="col">Kelas</th>
                <th scope="col">Dibuat Pada</th>
                <th scope="col">Diperbarui Pada</th>
                <th scope="col">Aksi</th>
            </tr>
        </thead>-->

<div class="card-body">
   <table id="tabel" class="table table-bordered table-striped">
       <thead class="thead-dark">
        <tr>
        <th>ID</th>
        <th>Kelas</th>
        <th>Dibuat pada</th>
        <th>Diperbaruipada</th>
        <th> Aksi</th>
        </tr>
        </thead>
       <tbody>
 
        @php $no = 1; @endphp
        @foreach ($data as $baris)
    <tr style="background:whitesmoke">
   <th scope="row">{{$no++}}   
   <td>{{$baris->nama_pelajaran}}</td>
   <td>{{$baris->created_at}}</td>
   <td>{{$baris->updated_at}}</td>
   <td>
   <a href="{{url('pelajaran/edit', $baris->id) }}" class="btn btn-info btn-sm">Edit</a>        
   <a href="/ijap/public/deletepelajaran/{{ $baris->id }}" class="btn btn-danger btn-sm">Hapus</a>        
    </td>
    </tr>
    @endforeach
        </tbody>
    </table>

<script src="{{asset('plugins/datatables/jquery.dataTables.js')}}"></script>
<script src="{{asset('plugins/datatables-bs4/js/dataTables.bootstrap4.js')}}"></script>    
<script src="{{asset('js/jquery-3.3.1.slim.min.js')}}"></script>
<script scr="{{asset('js/popper.min.js')}}"></script>
<script src="{{asset('js/bootstrap.min.js')}}"></script>

@endsection