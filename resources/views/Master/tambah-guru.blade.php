@extends('layouts.inhome')

@section('content')

<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css"></script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>

<div class="container">

    <form class="form" action="{{route('tambah-guru')}}" method="POST">
        @csrf
        <div class="content-header">
            <div class="row mb-9">
                <div class="col-sm-7">
                    <div class="card card-info">
                        <div class="card-header">
                            <h3 class="card-title"> Tambah Guru</h3>
                        </div>


                        <div class="card-body" style="background:#c9c9ff">
                            <label for="exampleInputNIP"><i class="fas fa-envelope"></i> NIP</label>
                            <div class="form-group">
                                <input type="text" class="form-control" name="NIP" placeholder="Masukan NIP"
                                    autocomplete="off"></i>
                            </div>

                            <div class="form-group">
                                <label for="exampleInputnama_guru"><i class="fas fa-user-circle"></i>Nama Guru</label>
                                <input type="text" class="form-control" name="nama_guru"
                                    placeholder="Hayo siapa namanya" autocomplete="off">
                            </div>

                            <label for="exampleInputgender"><i class="fas fa-venus-mars"></i> Gender</label>
                            <select class="form-control" name="gender" autocomplete="off">
                                <option>Laki-laki</option>
                                <option>Perempuan</option>
                            </select>

                            <td>
                                <button type="submit" class="btn btn-block btn-outline-secondary" data-toggle="modal"
                                    data-target="#myModal"><b>Submit</b></button>
                            </td>
                            <!-- Modal -->
                            <div class="modal fade" id="myModal" role="dialog">
                                <div class="modal-dialog modal-sm">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <h4 class="modal-title">Succes</h4>
                                        </div>
                                        <div class="modal-body">
                                            <p>Input Berhasil. </p>
                                            <p><b> Terima Kasih </b> </p>
                                        </div>
                                       
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <!--      <div class="card-footer">
          <button type="submit" class="btn btn-primary">Submit</button>
        </div>
      </form>


  <p>NIP              :</P>
    <input type="text" placeholder="masukan nama NIP" name="NIP" autocomplete="off"><br><br>

    <select name = "gender"><br>
    <option value="Laki-laki">Laki-Laki</option>
    <option value="Perempuan">Perempuan</option>
    </select><br><br>
    <p>Nama Guru        :</p>
    <input type="text" placeholder="Hayo Namanya Siapa" name="nama_guru"><br><br>
    <input type="submit" name="submit">
</form>
</div>  -->
                @endsection
                <script src="{{asset('js/jquery-3.3.1.slim.min.js')}}"></script>
                <script scr="{{asset('js/popper.min.js')}}"></script>
                <script src="{{asset('js/bootstrap.min.js')}}"></script>
