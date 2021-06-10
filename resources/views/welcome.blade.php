<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Zhafirah</title>

        <!-- Fonts -->
<link rel="preconnect" href="https://fonts.gstatic.com">
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
                 background-image: url('images/kj.jpeg');     
                background-repeat: no-repeat;
                background-color: #fbe6c2;
                color: #ff7171;
                font-family: 'Pacifico', cursive;
                font-weight: 200;
                height: 100vh;
                margin: 0;
            }

            .full-height {
                height: 100vh;
            }

            .flex-center {
                align-items: center;
                display: flex;
                justify-content: center;
            }

            .position-ref {
                position: relative;
            }

            .top-right {
                position: absolute;
                right: 10px;
                top: 18px;
            }

            .content {
                text-align: center;
            }

            .title {
                font-size: 84px;
            }

            .links > a {
                color: #ff7171;
                padding: 0 25px;
                font-size: 13px;
                font-weight: 600;
                letter-spacing: .1rem;
                text-decoration: none;
                text-transform: uppercase;
            }

            .m-b-md {
                padding-bottom: 110px;
                padding-left: 90px;
            }
        </style>
    </head>
    <body>
                    <div class="content">

        <div class="flex-center position-ref full-height">


                <div class="title m-b-md">
                <div class="links">
                       <a href="{{url('informasi')}}">Informasi</a>

                    @if (Route::has('login'))

                    @auth
                        <a href="{{ url('/home') }}">Home</a>
                    @else
                        <a href="{{ route('login') }}">Login</a>

                        @if (Route::has('register'))
                            <a href="{{ route('register') }}">Register</a>
                        @endif
                    @endauth
                </div>
            </div>
            @endif
                </div>

               <!--  <div class="links">
                    <a href="{{url('informasi')}}">Alamat</a>
                    <a href="{{url('home')}}">Pilihan Menu</a>
                    <a href="https://laravel-news.com">Informasi Ongkir</a>
                    <a href="https://blog.laravel.com">Jam Buka dan Kirim</a>
                    <a href="https://nova.laravel.com">Tentang Kami</a>
<a href="https://api.whatsapp.com/send?phone=6281807975447&amp;text=Halo%20Admin.....">
    <img src="https://4.bp.blogspot.com/-yVlHVxQPQRA/WPWKq6T7E5I/AAAAAAAAF1I/bzkPmVO2LdgEInFI_jaTK2E3SbCcVhd3QCLcB/s1600/auto-chat-whatsapp-oim-info.png" width="35%" /></a>
          </div> -->
       <!--    <div  class="top-right links">
         <div style="padding-top: 327px">
         <div style="padding-right: 130px">
          <div class="links">
<a href="https://api.whatsapp.com/send?phone=6281807975447&amp;text=Halo%20Admin.....">
    <img src="https://4.bp.blogspot.com/-yVlHVxQPQRA/WPWKq6T7E5I/AAAAAAAAF1I/bzkPmVO2LdgEInFI_jaTK2E3SbCcVhd3QCLcB/s1600/auto-chat-whatsapp-oim-info.png" width="25%" /></a>
    <a href="#">atau</a>
        </div>
    </div>
          </div>
            </div> -->
        </div>
    </body>
</html>
