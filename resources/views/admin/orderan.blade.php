@extends('layouts.inhome')
@section('content')

<link rel="stylesheet" href="{{asset('plugins/datatables-bs4/css/dataTables.bootstrap4.css')}}">

<div class="container">
	<div class="row">
	<div class="col">
    <div class="card-header"  style="background:#f6b89e">
    <h1> Data Makanan </h1>
        <table class="table">                     
    <div class="card-body">
     <table id="tabel" class="table">
     <thead style="background:	#f47f6a">
    <tr>
    <th>ID</th>
    <th>Tanggal dan waktu</th>
    <th>ID user</th>
    <th>Nama</th>
    <th>Harga</th>
    <th>Status</th>
    <th>Nama Pengambil</th>
    <th>Status Makanan</th>
    <th> Aksi</th>
    </tr>
    </thead>
    <tbody>
    	  <?php $no = 1; ?>
        @foreach($pesanans as $pesanan)
<tr  style="background:whitesmoke">
           <td>{{ $no++}}</td>
           <td>{{ $pesanan->created_at}}</td>
           <td>{{ $pesanan->user_id}}</td>
           <td>{{ $pesanan->nama}}</td>
           <td>Rp.{{number_format($pesanan->jumlah_harga)}}</td>
           <td>{{ $pesanan->pickup}}</td>
           <td>{{ $pesanan->pengambil}}</td>
           <td>{{ $pesanan->pengambilan}}</td>
           <td>
             <a href="{{url('admin')}}/{{ $pesanan->id}}" class="btn btn-primary">Detail</a>
<button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal-{{$pesanan->id}}">
edit</button>
           @endforeach
         </td>
       </tr>
     </tbody>
   </table>
 </div>
</div>



<!-- Modal -->
        @foreach($pesanans as $data)

<div class="modal fade" id="exampleModal-{{$data->id}}" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
 <form class="form" action="{{url('pesanan/edit',$data->id)}}" method="POST">
  @csrf
          <div class="form-group">
            <label  class="col-form-label">Nama Pengambil:</label>
            <input type="text" class="form-control" name="pengambil">
          </div>
           <div class="form-check">
  <input class="form-check-input" name="pickup" type="checkbox" value="sudah pickup" id="flexCheckDefault">
  <label class="form-check-label" for="flexCheckDefault">
Sudah dipick up  
</label>
</div>
 <div class="form-check">
  <input class="form-check-input" name="pickup" type="checkbox" value="belum pickup" id="flexCheckDefault">
  <label class="form-check-label" for="flexCheckDefault">
Belum dipick up  
</label>
</div>
<div class="form-check">
  <input class="form-check-input" name="pengambilan" type="checkbox" value="sudah matang" id="flexCheckDefault">
  <label class="form-check-label" for="flexCheckDefault">
Sudah Dapat Diambil 
</label>
</div>
 <div class="form-check">
  <input class="form-check-input" name="pengambilan" type="checkbox" value="masih dimasak" id="flexCheckDefault">
  <label class="form-check-label" for="flexCheckDefault">
 Masih Dimasakan 
</label>
</div>
 
        <button type="submit"class="btn btn-primary">kirim</button>
</form>      
</div>
      
    </div>
  </div>
</div>
<!--  -->
  </div>
</div>
@endforeach

<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"
    integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous">
</script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous">
</script>
<script>
    $('#myModal').on('shown.bs.modal', function () {
        $('#myInput').trigger('focus')
    })

</script>
<script src="{{asset('plugins/datatables/jquery.dataTables.js')}}"></script>
<script src="{{asset('plugins/datatables-bs4/js/dataTables.bootstrap4.js')}}"></script>
    
<script src="{{asset('js/jquery-3.3.1.slim.min.js')}}"></script>
<script scr="{{asset('js/popper.min.js')}}"></script>
<script src="{{asset('js/bootstrap.min.js')}}"></script>



 @endsection

