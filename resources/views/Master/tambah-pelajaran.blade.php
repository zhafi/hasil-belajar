@extends('layouts.inhome')

@section('content')


<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css"></script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>


  <div class="container">
    <div class="card" style="background:	#f1e3f7">
      <div class="card-header">

        <form class="form" action="{{route('tambah-pelajaran')}}" method="POST">
         @csrf
           <div class="content-header">
            <div class="w-75 p-8">
             <div class="col-md-6">

               <div class="form-group">
                <label class="col-form-label"><span class='fas fa-book'
                 style='font-size:24px'></span>
                 Tambahkan Nama Pelajaran yaa</label>
                 <span class='fas fa-book' style='font-size:24px'></span>
                 <input type="text" class="form-control" placeholder="Apa nama Pelajaran"
                 name="nama_pelajaran" autocomplete="off">
             <td>
               <br>
                    <button type="submit" class="btn btn-success swalDefaultSuccess">
                      Submit
                  </button>
                      

                   </td>
               </div>


 <!--<p>Nama Pelajaran        :</p>
 <input type="text" placeholder="masukan nama pelajaran" name="nama_pelajaran"><br><br>
 <input type="submit" name="submit">-->
                    </form>
                </div>
            </div>
        </div>
 @endsection
<script src="{{asset('js/jquery-3.3.1.slim.min.js')}}"></script>
<script scr="{{asset('js/popper.min.js')}}"></script>
<script src="{{asset('js/bootstrap.min.js')}}"></script>
