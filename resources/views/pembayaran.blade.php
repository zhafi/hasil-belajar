@extends('layouts.app')

@section('content')
<div class="container">
  <div class="row">
    <div class="col-md-12">
      <a href="{{ url('riwayat')}}" class="btn btn-primary"><i class="fa fa-arrow-left"></i> Kembali</a>
    </div>
    
    <div class="col-md-12">
      <div class="card" style="background-color: #edffec">
        <div class="card-body">
      </div>
    </div>
    <div class="col-md-12">
    <div class="card" style="background-color: #d8ebe4">
      <p></p>
      <h3><i class="fa fa-shopping-cart" style="margin-left: 25px">Pesanan Sudah Selesai</i></h3>
     @if (!empty($pesanan))
      <p align="right" style="margin-right: 25px;">Tanggal Pemesanan: {{ $pesanan->tanggal}}</p>
     <div class="card-body">
       <table class="table table-striped">
       <thead class="table-active">
         <tr>
           <th>No</th>
           <th>Nama Makanan</th>
           <th>Jumlah</th>
           <th>Harga</th>
           <th>Total Harga</th>
           <th>Aksi</th>
         </tr>
        </thead>
       <tbody class="table-active">
        <?php $no = 1; ?>
        @foreach($pesanan_details as $pesanan_detail)
         <tr>
           <td>{{ $no++}}</td>
           <td>{{ $pesanan_detail->makanan->nama_makanan}}</td>
           <td>{{ $pesanan_detail->jumlah}} Porsi</td>
           <td align="left">Rp.{{number_format($pesanan_detail->makanan->harga)}}</td>
           <td align="left">Rp.{{number_format($pesanan_detail->jumlah_harga)}}</td>
           <td>
             <form action="{{ url('check-out')}}/{{ $pesanan_detail->id}}" method="post">
              @csrf
              {{ method_field('DELETE')}}
              <button type="submit" class="btn btn-danger btn-sm" onclick="return confirm('Anda yakin? Menghapus Menu?');"><i class="fa fa-trash"></i></button>
               
             </form>
           </td>
         </tr>
        @endforeach
        <tr>
          <td colspan="4" align="right"><strong>Total Harga:</strong></td>
          <td><strong>Rp.{{number_format($pesanan->jumlah_harga)}}</strong></td>
          <td>
          <a href="{{ url('konfirmasi-check-out')}}" class="btn btn-success" onclick="return confirm('Anda yakin Check-Out?');">
            <i class="fa fa-shopping-cart">Check-Out</i>
          </a>
        </td>

        </tr>

       </tbody> 
      </table>
      @endif
      
      </div>

  </div>
</div>
@endsection
