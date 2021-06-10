@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
      <div class="col-md-12 mb-5">

      <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
  <ol class="carousel-indicators">
    <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
    <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
    <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
  </ol>
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img class="d-block w-100" src="{{asset('images/lg.jpeg')}}" alt="First slide">
    </div>
    <div class="carousel-item">
      <img class="d-block w-100" src="{{asset('images/a.jpeg')}}" alt="Second slide">
    </div>
    <div class="carousel-item">
      <img class="d-block w-100" src="{{asset('images/b.jpeg')}}" alt="Third slide">
    </div>
  </div>
  <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="sr-only">Previous</span>
  </a>
  <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="sr-only">Next</span>
  </a>
</div>
</div>


   <!--  <div class="col-md-12 mb-5">
    <div class="banner">
<img src="{{asset('images/lg.jpeg')}}">
    </div>
    </div> -->
       @foreach($makanans as $makanan)
          <div class="col-md-3">
     <div class="card">
  <img src="{{asset('images')}}/{{$makanan->gambar}}" class="card-img-top">
  <div class="card-body">
    <h5 class="card-title">{{$makanan->nama_makanan}}</h5>
    <p class="card-text">{{$makanan->keterangan}}</p>
        <p>Harga: <i>Rp.{{number_format($makanan->harga)}}</i></p>
  <a href="{{ url('pesan')}}/{{ $makanan->id}}" class="btn btn-dark btn-block"><i class="fa fa-shopping-cart">      Pesan</i></a>
     
  </div>
  </div>
</div>
       @endforeach
     </div>
</div>
@endsection
