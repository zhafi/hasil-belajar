@extends('layouts.app')

@section('content')
<div class="container">
  <div class="row">
    <div class="col-md-12">
      <a href="{{ url('riwayat')}}" class="btn btn-primary"><i class="fa fa-arrow-left"></i> Kembali</a>
    </div>
    <div class="col-md-12 mt-2">
      <nav aria-label="breadcrumb">
      <ol class="breadcrumb">
        <li class="breadcrumb-item"><a href="{{ url('home')}}">Home</a></li>
        <li class="breadcrumb-item"><a href="{{ url('riwayat')}}">Riwayat</a></li>
        <li class="breadcrumb-item active" aria-current="page">Info Pemesanan</li>
      </ol>
      </nav>
    </div>
    <div class="col-md-12">
      <div class="card" style="background-color: #edffec">
        <div class="card-body">
          <h3>Sukses Memesan</h3>
          <h5>Pesanan kamu sudah kami proses dan sedang kami persiapkan jadi tunggu sebentar yaaa, Jangan lupa  menyiapkan uang Cash senilai <strong><i>Rp.{{number_format($pesanan->jumlah_harga)}}</i>  untuk membayar pesanan kamu,  dan jangan lupa ambil pesananmu distore <i>15 menit lagi</i></strong><i>Terima Kasih </i> </h5>
        </div>
      </div>
    </div>
    <div class="col-md-12">
    <div class="card" style="background-color: #d8ebe4">
      <p></p>
      <h3><i class="fa fa-shopping-cart" style="margin-left: 25px">Pesanan Diproses</i></h3>
        @if (!empty($pesanan))
      <p align="right" style="margin-right: 25px">Tanggal Pemesanan: {{ $pesanan->created_at}}</p>
            <p align="right" style="margin-right: 25px">Status Makanan: {{ $pesanan->pengambilan}}</p>

     <div class="card-body">
       <table class="table table-bordered">
       <thead class="table-active">
         <tr>
          <th>No Pesanan</th>
           <th>No</th>
           <th>Nama Makanan</th>
           <th>Jumlah</th>
           <th>Harga</th>
           <th>Total Harga</th>
         </tr>
       </thead>
       <tbody class="table-secondary">
        <?php $no = 1; ?>
         <tr>
           <td>{{ $pesanan->kode}}
           @foreach($pesanan_details as $pesanan_detail)

           <td>{{ $no++}}</td>
           <td>{{ $pesanan_detail->makanan->nama_makanan}}</td>
           <td>{{ $pesanan_detail->jumlah}} Porsi</td>
           <td align="left">Rp.{{number_format($pesanan_detail->makanan->harga)}}</td>
           <td align="left">Rp.{{number_format($pesanan_detail->jumlah_harga)}}</td>
         </tr>
        @endforeach
       
        <tr>
          <td colspan="5" align="right"><strong>Total Harga:</strong></td>
          <td><strong>Rp.{{number_format($pesanan->jumlah_harga)}}</strong></td>

        </tr>
        <!--<tr>
          <td colspan="5" align="right"></td>
         <td><a href="{{ url('cetak')}}" class="btn btn-success" onclick="return confirm('Anda Sudah yakin?');">Pesanan Diterima          </a>
        </td>
        </tr>-->

       </tbody> 
      </table>
      @endif
      </div>
        
      </div>
    <div class="col-md-12">
    </div>   

  </div>
</div>
@endsection
