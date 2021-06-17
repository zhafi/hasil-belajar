@extends('layouts.inhome')
@section('content')

<link rel="stylesheet" href="{{asset('plugins/datatables-bs4/css/dataTables.bootstrap4.css')}}">

<div class="container">
    <div class="card-header"  style="background:#f6b89e">
    <h1> Data Guru </h1>
        <table class="table">
     <!--   <thead class="thead-dark">
            <tr>
                <th scope="col">ID</th>
                <th scope="col">NIP</th>
                <th scope="col">Nama</th>
                <th scope="col">Gender</th>
                <th scope="col">Dibuat Pada</th>
                <th scope="col">Diperbarui Pada</th>
                <th scope="col">Aksi</th>
            </tr>
        </thead>
        <tbody>-->                       
    <div class="card-body">
     <table id="tabel" class="table">
     <thead style="background:	#f47f6a">
    <tr>
    <th>ID</th>
    <th>NIP</th>
    <th>Nama</th>
    <th>Gender</th>
    <th>Dibuat Pada</th>
    <th>Diperbarui pada</th>
    <th> Aksi</th>
    </tr>
    </thead>
    <tbody>
        @php $no = 1; @endphp
        @foreach ($data as $baris)
<tr  style="background:whitesmoke">
 <th scope="row">{{$no++}}
    <td>{{$baris->NIP}}</td>
    <td>{{$baris->nama_guru}}</td>
    <td>{{$baris->gender}}</td>
    <td>{{$baris->created_at}}</td>
    <td>{{$baris->updated_at}}</td>
    <td>
    <a href="/ijap/public/deleteguru/{{ $baris->id }}" class="btn btn-danger btn-sm">Hapus</a>        
   <a href="{{url('guru/edit', $baris->id) }}" class="btn btn-info btn-sm">Edit</a>        
    </td>
    </tr>
    @endforeach
        </tbody>
    </table>
    </div>
<script src="{{asset('plugins/datatables/jquery.dataTables.js')}}"></script>
<script src="{{asset('plugins/datatables-bs4/js/dataTables.bootstrap4.js')}}"></script>
    
<script src="{{asset('js/jquery-3.3.1.slim.min.js')}}"></script>
<script scr="{{asset('js/popper.min.js')}}"></script>
<script src="{{asset('js/bootstrap.min.js')}}"></script>

@endsection