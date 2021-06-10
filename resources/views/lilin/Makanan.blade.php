@extends('layouts.inhome')
@section('content')

<link rel="stylesheet" href="{{asset('plugins/datatables-bs4/css/dataTables.bootstrap4.css')}}">

<div class="container">
    <div class="card-header"  style="background:#f6b89e">
    <h1> Data Makanan </h1>
        <table class="table">                     
    <div class="card-body">
     <table id="tabel" class="table">
     <thead style="background:	#f47f6a">
    <tr>
    <th>ID</th>
    <th>Nama Makanan</th>
    <th>Harga</th>
    <th>Keterangan</th>
    <th>Gambar</th>
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
    <td>{{$baris->nama_makanan}}</td>
    <td>{{$baris->harga}}</td>
    <td>{{$baris->keterangan}}</td>
    <td>{{$baris->gambar}}</td>
    <td>{{$baris->created_at}}</td>
    <td>{{$baris->updated_at}}</td>
    <td>
         @csrf
              {{ method_field('DELETE')}}
    <a href="{{url('makanan/delete', $baris->id) }}" method="post" class="btn btn-danger btn-sm" onclick="return confirm('Anda yakin? Menghapus Menu?');">Hapus</a>    
    <a href="{{url('makanan/edit', $baris->id) }}" class="btn btn-info btn-sm">Edit</a>        
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