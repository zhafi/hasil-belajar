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
        <li class="breadcrumb-item active" aria-current="page">{{$makanan->nama_makanan}}</li>
      </ol>
        
      </nav>
      
    </div>
    <div class="col-md-12 mt-2">
    <div class="card" style="background-color: #f6dfeb">
      <div class="card-header">
            <h4>Detail</h4>
      </div>
      <div class="card-body">
        <div class="row">
          <div class="col-md-6">
            <img src="{{asset('images')}}/{{$makanan->gambar}}" width="50%">
          </div>
          <div class="col-md-6 mt-4">
          <h3>{{$makanan->nama_makanan}}</h3>
          <table class="table table-border">
            <tbody>
              <tr>
                <td>Harga</td>
                <td>:</td>
                <td>Rp.{{number_format($makanan->harga)}}</td>
              </tr>
               <tr>
                <td>Keterangan</td>
                <td>:</td>
                <td>{{$makanan->keterangan}}</td>
              </tr>
                 <tr>
                <td>Jumlah Pesanan</td>
                <td>:</td>
                <td>
                <form method="post" action="">
                  @csrf
                  <input type="text" name="jumlah_pesan" class="form-control" required="{{ url('pesan')}}/{{$makanan->id}}">
                   <button type="submit" class="btn btn-primary mt-3"><i class="fa fa-shopping-cart">Masukkan Keranjang</i></button>
                 </form>
                </td>
              </tr>
            </tbody>
          </table>
          </div>
        </div>
      </div>
    </div>      
    </div>
  </div>
</div>
@endsection
