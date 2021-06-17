@extends('layouts.inhome')

@section('content')
<div class="container">

    <div class="jumbotron" style="background:darksalmon">
        <h1>Hallo Semua</h1>
        <p>Kalian Bisa Menambahkan Data Atau Hanya Melihat Tabel</p>

        <p><b>Ingin menambah? Klik Form ya</p>
        <p>Melihat Tabel? Silakan pilih Tabel.</b></p>
    </div>
    <div class="spinner-grow text-danger" role="status">
        <span class="sr-only">Loading...</span>
    </div>
    <div class="spinner-grow text-warning" role="status">
        <span class="sr-only">Loading...</span>
    </div>
    <div class="spinner-grow text-info" role="status">
        <span class="sr-only">Loading...</span>
    </div>

    &emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;
    &emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;
    &emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;
    <div class="spinner-grow text-dark" role="status">
        <span class="sr-only">Loading...</span>
    </div>
    <div class="spinner-grow text-primary" role="status">
        <span class="sr-only">Loading...</span>
    </div>
    <div class="spinner-grow text-secondary" role="status">
        <span class="sr-only">Loading...</span>
    </div>
    <hr>
    {{-- <div class="row justify-content-center">
        <div class="col-md-8">--}}
    {{-- <div class="card">
                <div class="card-header">Dashboard</div>

                <div class="card-body">
                    <div class="container-fluid">
                        <div class="col-md-6">
                         <div class="row sm-8">
                
                    {{-- @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
</div>
@endif

Selamat datang, silahkan pilih untuk menambah form atau melihat tabel :)
</div>
</div>
</div>
</div>
</div> --}}

<div class="col-md-16">
    <section class="content">
        <div class="container-fluid">
            <div class="row sm-20">

                <div class="row">
                    <div class="card-body box-profile">
                        <div class="container-fluid">
                            <div class="col-md-9">
                                <div class="row sm-10">

                                    <div class="row">
                                        <!-- Profile Image -->
                                        <div class="card card-primary" style="background:powderblue">
                                            <div class="card-body box-profile">
                                                <div class="text-center">
                                                    <img class=" img-fluid img-circle" src="{{asset('images/1p.jpg')}}"
                                                        alt="User profile picture">
                                                </div>
                                                <h3 class="profile-username text-center" style="font-weight:800;">
                                                    Zhafirahhhhh
                                                </h3>

                                                <p class="text-muted text-center" style="font-weight:700;">Singer</p>

                                                <ul class="list-group list-group-unbordered mb-3">
                                                    <li class="list-group-item" style="background:skyblue">
                                                        <b>&emsp; &ensp;Followers</b> <a class="float-right">1,322
                                                            &emsp;
                                                            &ensp;</a>
                                                    </li>
                                                    <li class="list-group-item" style="background:skyblue">
                                                        <b>&emsp; &ensp; Following</b> <a class="float-right">543
                                                            &emsp;&ensp; </a>
                                                    </li>
                                                    <li class="list-group-item" style="background:skyblue">
                                                        <b>&emsp; &ensp; Friends</b> <a class="float-right">3,287 &emsp;
                                                            &ensp;</a>
                                                    </li>
                                                </ul>

                                            </div>
                                            <!-- /.card-body -->
                                        </div>
                                        <!-- /.card -->

                                    </div>
                                    <!-- /.card-body -->
                                </div>
                                <!-- /.card -->
                            </div>
                        </div>
                    </div>
                </div>
                &emsp;&emsp;&emsp;&emsp;&emsp;
                <div class="post">
                    <div class="col-sm-13">
                        <div class="col-sm-15">
                            <div class="user-block">
                                <img class="img-circle img-bordered-sm" src="{{asset('images/5p.jpg')}}"
                                    alt="User Image">
                                <span class="username">
                                    <a href="#">Aulia</a>
                                    <a href="#" class="float-right btn-tool"><i class="fas fa-times"></i></a>
                                </span>
                                <span class="description">mengepos 1 photo - 3 menit yang lalu</span>
                            </div>
                        </div>
                    </div>
                    <!-- /.col -->
                    <div class="col-sm-10">
                        <div class="col-sm-10">
                            <img class="img-fluid" src="{{asset('images/6p.jpg')}}" alt="Photo">
                        </div>
                        <p> Mau Lihat cafe instagram able yang ada di Surabaya?</p>
                        <!-- /.col -->
                    </div>
                    <p>
                        <a href="#" class="link-black text-sm mr-2"><i class="fas fa-share mr-1"></i> Share(120)</a>
                        <a href="#" class="link-black text-sm"><i class="far fa-thumbs-up mr-1"></i> Like (549)</a>
                        <span class="float-right">
                            <a href="#" class="link-black text-sm">
                                <i class="far fa-comments mr-1"></i> Comments (458)
                            </a>
                        </span>
                    </p>
                    <input class="form-control form-control-sm" type="text"
                        placeholder="Percuma Nulis tapi Gabisa Dikirim">
                    <button type="submit" name="submit">Kirim</button>
                    <p> Atau Mungkin Kalian Mau Lihat Artikel seperti di atas? <a href="Modal"><b>Silahkan Klik
                                Ini</b></a></p>
                </div>
            </div>
            <hr>
                            <div class="row sm-10">
                <div class="card-body box-profile">
                    <div class="container-fluid">
                        <div class="col-md-9">
                            <div class="row sm-10">

                                <div class="row">
                                    <div class="card card-primary">
                                        <div class="card-header">
                                            <h3 class="card-title">Tentang Saya</h3>
                                        </div>
                                        <!-- /.card-header -->
                                        <div class="card-body">
                                            <strong><i class="fas fa-book mr-1"></i> Sekolah</strong>

                                            <p class="text-muted">
                                                Dari SMK Negeri 2 
                                            </p>

                                            <hr>

                                            <strong><i class="fas fa-map-marker-alt mr-1"></i> Tempat Tinggal</strong>

                                            <p class="text-muted">Petemon, Surabaya</p>

                                            <hr>

                                            <strong><i class="fas fa-pencil-alt mr-1"></i> Jurusan</strong>

                                            <p class="text-muted">
                                                <span class="tag tag-info">RPL</span>
                                            </p>

                                            <hr>

                                            <strong><i class="far fa-file-alt mr-1"></i> Catatan</strong>

                                            <p class="text-muted">Gak ada yang perlu dicatet yaaa</p>
                                        </div>
                                        <!-- /.card-body -->
                                    </div>
                                </div>
                                &emsp; &emsp;&emsp; &emsp; &emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;
                                <hr>
                                
                             <hr>
                             <br>
                           
                            <div class="card">
                                    <div class="card-header ui-sortable-handle" style="cursor: move;">
                                      <h3 class="card-title">
                                        <i class="ion ion-clipboard mr-1"></i>
                                        Pekerjaan &emsp;&emsp;&emsp;&emsp;&emsp;&emsp; &emsp;&emsp;&emsp;&emsp;&emsp;&emsp;||&emsp;Hari Ini
                                      </h3>
                                  
                                     
                                    </div>
                                    <!-- /.card-header -->
                                    <div class="card-body">
                                      <ul class="todo-list ui-sortable" data-widget="todo-list">
                                        <li class="">
                                          <!-- drag handle -->
                                          <span class="handle ui-sortable-handle">
                                            <i class="fas fa-ellipsis-v"></i>
                                            <i class="fas fa-ellipsis-v"></i>
                                          </span>
                                          <!-- checkbox -->
                                          <div class="icheck-primary d-inline ml-2">
                                            <input type="checkbox" value="" name="todo1" id="todoCheck1" checked="">
                                            <label for="todoCheck1"></label>
                                          </div>
                                          <!-- todo text -->
                                          <span class="text">Mengecek Tabel</span>
                                          <!-- Emphasis label -->
                                          <small class="badge badge-zecondary"><i class="far fa-clock"></i> Jam Pertama</small>
                                          <!-- General tools such as edit or delete-->
                                          <div class="tools">
                                            <i class="fas fa-edit"></i>
                                            <i class="fas fa-trash-o"></i>
                                          </div>
                                        </li>
                                        <li class="">
                                          <span class="handle ui-sortable-handle">
                                            <i class="fas fa-ellipsis-v"></i>
                                            <i class="fas fa-ellipsis-v"></i>
                                          </span>
                                          <div class="icheck-primary d-inline ml-2">
                                            <input type="checkbox" value="" name="todo2" id="todoCheck2" checked="">
                                            <label for="todoCheck2"></label>
                                          </div>
                                          <span class="text">Membenarkan yang Kemarin</span>
                                          <small class="badge badge-danger"><i class="far fa-clock"></i> jam ke 2</small>
                                          <div class="tools">
                                            <i class="fas fa-edit"></i>
                                            <i class="fas fa-trash-o"></i>
                                          </div>
                                        </li>
                                        <li class="">
                                          <span class="handle ui-sortable-handle">
                                            <i class="fas fa-ellipsis-v"></i>
                                            <i class="fas fa-ellipsis-v"></i>
                                          </span>
                                          <div class="icheck-primary d-inline ml-2">
                                            <input type="checkbox" value="" name="todo3" id="todoCheck3" checked="">
                                            <label for="todoCheck3"></label>
                                          </div>
                                          <span class="text">Menulis Jurnal</span>
                                          <small class="badge badge-warning"><i class="far fa-clock"></i> Jam Terakhir</small>
                                          <div class="tools">
                                            <i class="fas fa-edit"></i>
                                            <i class="fas fa-trash-o"></i>
                                          </div>
                                        </li>
                                      
                                    </div>
                                    
                                  


                            @endsection
                            <script src="{{asset('js/jquery-3.3.1.slim.min.js')}}"></script>
                            <script scr="{{asset('js/popper.min.js')}}"></script>
                            <script src="{{asset('js/bootstrap.min.js')}}"></script>
                            <script src="{{asset('app.css')}}"></script>
                            <script src="{{asset('bootstrap.min.css')}}"></script>
