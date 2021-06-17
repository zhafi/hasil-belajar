
<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>Form | Lupa Password</title>
  <!-- Tell the browser to be responsive to screen width -->
  <meta name="viewport" content="width=device-width, initial-scale=1">

   <!-- Font Awesome -->
   <link rel="stylesheet" href="{{asset ('/AdminLTE/plugins/fontawesome-free/css/all.min.css')}}">
   <!-- Ionicons -->
   <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
   <!-- icheck bootstrap -->
   <link rel="stylesheet" href="{{asset ('/AdminLTE/plugins/icheck-bootstrap/icheck-bootstrap.min.css')}}">
   <!-- Theme style -->
   <link rel="stylesheet" href="{{asset ('/AdminLTE/dist/css/adminlte.min.css')}}">
   <!-- Google Font: Source Sans Pro -->
   <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700" rel="stylesheet">
 </head>
 <body class="hold-transition login-page" style="background:#9BE3DE">
 <div class="login-box">
   <div class="login-logo">
     <a href="{{asset('#')}}"><b>Zhafirah</b>|Lupa Password</a>
   </div>
<div class="container">
    <div class="row justify-content-center">
            <div class="card">
                <div class="card-header">Atur Ulang Pass</div>
                <div class="card-body">
                @if (!empty(session()->get('msg')))
                    <div class="alert alert-danger">{{ session()->get('msg') }}</div>
                @endif
                    <form method="POST" action="{{ route('forgot.manual.change', $user->id) }}">
                        @csrf

                        <div class="form-group row mb-2">
                            <label for="email" class="col-md-4 col-form-label text-md-right">E-Mail</label>

                            <div class="col-md-6">
                                <input id="email" type="email" name="email" value="{{ $user->email }}" class="form-control" readonly="" required>
                            </div>
                        </div>

                        <div class="form-group row mb-2">
                            <label for="pw" class="col-md-4 col-form-label text-md-right">Password</label>

                            <div class="col-md-6">
                                <input id="pw" type="password" name="password" class="form-control" required autofocus="">
                            </div>
                        </div>

                        <div class="form-group row mb-2">
                            <label for="conpw" class="col-md-4 col-form-label text-md-right">Konfimasi Password</label>

                            <div class="col-md-6">
                                <input id="conpw" type="password" name="conpassword" class="form-control" required>
                            </div>
                        </div>

                        <div class="form-group row mb-0">
                            <div class="col-md-6 offset-md-4">
                                <button type="submit" class="btn btn-primary">
                                    Reset
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>