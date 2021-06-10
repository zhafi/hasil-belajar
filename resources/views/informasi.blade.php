<!DOCTYPE html>
<html> 
<head>
	<title>Tentang Kami</title>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
	     <!-- Fonts -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
        <link href="{{ asset('css/custom.css') }}" rel="stylesheet">
        <link rel="stylesheet" href="{{asset ('/plugins/fontawesome-free/css/all.min.css')}}">
  <!-- overlayScrollbars -->
  <link rel="stylesheet" href="{{asset ('/plugins/overlayScrollbars/css/OverlayScrollbars.min.css')}}">
  <!-- Theme style -->
  <link rel="stylesheet" href="{{asset ('/AdminLTE/dist/css/adminlte.min.css')}}">
 
    <link rel="stylesheet" href="{{asset ('/plugins/fontawesome-free/css/all.min.css')}}">
    <!-- Ionicons -->
    <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
    <!-- Tempusdominus Bbootstrap 4 -->
    <link rel="stylesheet" href="{{asset ('/plugins/tempusdominus-bootstrap-4/css/tempusdominus-bootstrap-4.min.css')}}">
    <!-- iCheck -->
    <link rel="stylesheet" href="{{asset ('/plugins/icheck-bootstrap/icheck-bootstrap.min.css')}}">
    <!-- JQVMap -->
    <link rel="stylesheet" href="{{asset ('/AdminLTE/plugins/jqvmap/jqvmap.min.css')}}">
      <!-- JQVMap -->
    <link rel="stylesheet" href="{{asset ('/AdminLTE/plugins/jqvmap/jqvmap.min.css')}}">

    <link rel="stylesheet" href="{{asset ('/AdminLTE/plugins/sweetalert2-theme-bootstrap-4/bootstrap-4.min.css')}}">

        <!-- Styles -->
        <style>
            html, body {
                font-family: 'Pacifico', cursive;
                 background-color: #fbe6c2;
                color: #ff7171;
              

            }
        </style>
</head>
<body>
    <div class="banner">
<img src="{{asset('images/kj.jpeg')}}">
</div>
	   <div style="margin-right: 30%">	<button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal">
		  Alamat
		</button>

		<!-- Modal -->
		<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
		  <div class="modal-dialog" role="document">
		    <div class="modal-content">
		      <div class="modal-header">
		        <h5 class="modal-title" id="exampleModalLabel">Yuk Kunjungi Outlite Kami</h5>
		        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
		          <span aria-hidden="true">&times;</span>
		        </button>
		      </div>
		      <div class="modal-body">
		      Kami Berada di Jalan Patimura no.79 Surabaya
		      <br>
		     &nbsp; &nbsp; &nbsp; &nbsp;  &nbsp; &nbsp; &nbsp; &nbsp;  &nbsp; &nbsp; &nbsp; &nbsp; Jalan Arjuno no.09 Surabaya
		      <br>
		     &nbsp; &nbsp; &nbsp; &nbsp;  &nbsp; &nbsp; &nbsp; &nbsp;  &nbsp; &nbsp; &nbsp; &nbsp;
		       Jalan kebun Indah no.07 Surabaya
		      </div>
		      <div class="modal-footer">
		        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
		      </div>
		    </div>
		  </div>
		</div>
</div>

<div class="content" style="margin-top: 2%">
  <h4> Web ini memudahkan anda memesan tanpa harus mengantri</h4>
  <p>Untuk informasi lebih lanjut hubungi nomer <i>WhatsApp</i> yang tertera</p>
</div>

<div class="content" style="margin-top: 2%">

      <a href="/" class="btn btn-success">kembali</a>
      <a href="home" class="btn btn-success">Menu</a>

</div>
        

</body>
</html>