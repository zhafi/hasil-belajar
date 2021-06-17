@extends('layouts.inhome')
@section('content')

<link rel="stylesheet" href="{{asset('plugins/datatables-bs4/css/dataTables.bootstrap4.css')}}">

<div class="container">
<div class="card-header"  style="background:#c2a3bb;
"> 
        <h1> Data Jadwal </h1>
    <table class="table">
                    
<div class="card-body">
     <table id="tabel" class="table-bordered">
     <thead style="background:pink">
     
    <tr>
        <th scope="col">ID</th>
        <th scope="col">Nama Guru</th>
        <th scope="col">Pelajaran</th>
        <th scope="col">Ruang</th>
        <th scope="col">Kelas</th>
        <th scope="col">Masuk</th>
        <th scope="col">Keluar</th>
        <th scope="col">Tanggal</th>
        <th scope="col">Dibuat</th>
        <th scope="col">Diperbarui pada</th>
        <th scope="col">Aksi</th>
    </tr>
    </thead>
    <tbody style="background:whitesmoke">
      @php $no=1 @endphp
      @foreach ($data as $baris)
    <tr>
        <th scope="row">{{$no++}}
        <td>{{$baris->guruk->nama_guru}}</td>
        <td>{{$baris->pelajaranh->nama_pelajaran}}</td>
        <td>{{$baris->ruangh->jumlah_gedung}}</td>
        <td>{{$baris->kelash->kelas}}</td>
        <td>{{$baris->masuk}}</td>
        <td>{{$baris->keluar}}</td>
        <td>{{$baris->tanggal}}</td>
        <td>{{$baris->created_at}}</td>
        <td>{{$baris->updated_at}}</td>
        <td>
        <a href="{{url('jadwal/edit', $baris->id) }}" class="btn btn-info btn-sm">Edit</a>        
        <a href="/ijap/public/deletejadwal/{{ $baris->id }}" class="btn btn-danger btn-sm">Hapus</a>        
        </td>
   
    </tr>
    @endforeach
    </tbody>
    </table>


</div>
</div>
</body>

<script src="{{asset('plugins/datatables/jquery.dataTables.js')}}"></script>
<script src="{{asset('plugins/datatables-bs4/js/dataTables.bootstrap4.js')}}"></script>
    
<script src="{{asset('js/jquery-3.3.1.slim.min.js')}}"></script>
<script scr="{{asset('js/popper.min.js')}}"></script>
<script src="{{asset('js/bootstrap.min.js')}}"></script>

@endsection