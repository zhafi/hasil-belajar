@extends('layouts.app')

@section('content')
<div class="container">
  <div class="row">
    <div class="col-md-12">
      <a href="{{ url('home')}}" class="btn btn-primary"><i class="fa fa-arrow-left"></i> Kembali</a>
    </div>
    <div class="col-md-12 mt-2">
      <nav aria-label="breadcrumb">
      <ol class="breadcrumb">
        <li class="breadcrumb-item"><a href="{{ url('home')}}">Home</a></li>
        <li class="breadcrumb-item active" aria-current="page">Riwayat</li>
      </ol>
      </nav>
    </div>
    <div class="col-md-12">
    <div class="card" style="background-color: #e2d5d5">
      <p></p>
      <h3><i class="fa fa-history" style="margin-left: 25px">History Pemesanan</i></h3>
     <div class="card-body">
       <table class="table table-borderless">
       <thead class="table-active">
         <tr>
           <th>No</th>
           <th>Tanggal</th>
           <th>Jumlah Harga</th>
           <th>Aksi</th>
         </tr>
       </thead>
       <tbody class="table-active">
         <?php $no = 1; ?>
        @foreach($pesanans as $pesanan)
         <tr>
           <td>{{ $no++}}</td>
           <td>{{ $pesanan->tanggal}}</td>
           <td>Rp.{{number_format($pesanan->jumlah_harga)}}</td>
           <td>
             <a href="{{url('riwayat')}}/{{ $pesanan->id}}" class="btn btn-primary">Detail</a>
           </td>
         </tr>
        @endforeach

       </tbody> 
      </table>
      
      </div>
        
      </div>
    <div class="col-md-12">
    </div>   

  </div>
</div>
@endsection
