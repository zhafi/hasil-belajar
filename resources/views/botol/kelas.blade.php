@extends('layouts.inhome')
@section('content')

<script src="{{asset('datatables.min.css')}}"></script>
<link rel="stylesheet" href="{{asset('plugins/datatables-bs4/css/dataTables.bootstrap4.css')}}">


<div class="container">
    <div class="card-header" style="background:#c2e8ce">            
    <h1> Data Kelas </h1>
   

   <!-- <table class="table">
   <table id="tabel-data" class="table table-striped table-bordered table-hover" width="100%" cellspacing="0">

         <thead class="thead-dark">
        <tr>
                <th scope="col">ID</th>
                <th scope="col">Kelas</th>
                <th scope="col">Jumlah_murid</th>
                <th scope="col">Dibuat Pada</th>
                <th scope="col">Diperbarui Pada</th>
                <th scope="col">Aksi</th>
            </tr>
        </thead>
        <tbody>-->
           
       <div class="card-body">
       <table id="tabel" class="table table-bordered table-striped table-hover">
        <thead   style="background:cadetblue">
        <tr>
        <th>ID</th>
        <th>Kelas</th>
        <th>Jumlah_murid</th>
        <th>Dibuat pada</th>
        <th>Diperbaruipada</th>
        <th> Aksi</th>
        </tr>
        </thead>
        <tbody>
     
                @php $no=1 @endphp
                @foreach ($data as $baris)
        <tr  style="background:whitesmoke">
         <th scope="row">{{$no++}}</th>
         <td>{{$baris->kelas}}</td>
    <td>{{$baris->jumlah_murid}}</td>
    <td>{{$baris->created_at}}</td>
    <td>{{$baris->updated_at}}</td>
    <td>
    <a href="{{url('kelas/edit', $baris->id) }}" class="btn btn-info btn-sm">Edit</a>        
    <a href="/ijap/public/deletekelas/{{ $baris->id }}" class="btn btn-danger btn-sm">Hapus</a>    
    </td>
    </tr>
</tbody>
    @endforeach
    </table>
       </div></div></div>

    
<script src="{{asset('plugins/datatables/jquery.dataTables.js')}}"></script>
<script src="{{asset('plugins/datatables-bs4/js/dataTables.bootstrap4.js')}}"></script>
<script src="{{asset('js/jquery-3.3.1.slim.min.js')}}"></script>
<script scr="{{asset('js/popper.min.js')}}"></script>
<script src="{{asset('js/bootstrap.min.js')}}"></script>
<script src="{{asset('js/jquery-3.1.0.js')}}"></script>
<script src="{{asset('datatables.min.js')}}"></script>
<script src="{{asset('dataTables.bootstrap.min.js')}}"></script>

@endsection