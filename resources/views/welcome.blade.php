<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Log in</title>

  <!-- Google Font: Source Sans Pro -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="{{ asset('Template/plugins/fontawesome-free/css/all.min.css') }}">
  <!-- icheck bootstrap -->
  <link rel="stylesheet" href="{{ asset('Template/plugins/icheck-bootstrap/icheck-bootstrap.min.css') }}">
  <!-- Theme style -->
  <link rel="stylesheet" href="{{ asset('Template/dist/css/adminlte.min.css') }}">
</head>
<body class="hold-transition login-page" style="background-color: #2F5B68">
<div class="login-box">
  <div class="login-logo">
      <img src="{{ asset('Template/docs/assets/img/logo neskar.png') }}" alt="AdminLTE Logo" class="" style="opacity: .8; width: 300px;">
  </div>
  <!-- /.login-logo -->
  <div class="card">
    <div class="card-body login-card-body" style="background-color: #83ABB7">
      <p class="login-box-msg" style="color: #fff">LOG IN</p>

      <form action="{{ route('auth.authentication') }}" method="post">
        @csrf
        <div class="input-group mb-3">
          <input type="email" class="form-control @error('email') is-invalid @enderror" name="email" placeholder="Email" value="{{ @old('email') }}">
          <div class="input-group-append">
            <div class="input-group-text">
              <span class="fas fa-envelope"></span>
            </div>
    
          </div>
        </div>
        @error('email')
          <div class="alert alert-danger">{{ $message }}</div>
        @enderror
        <div class="input-group mb-3">
          <input type="password" class="form-control @error('password') is-invalid @enderror" name="password" placeholder="Password">
          <div class="input-group-append">
            <div class="input-group-text">
              <span class="fas fa-lock"></span>
            </div>
          </div>
        </div>
        @error('password')
          <div class="alert alert-danger">{{ $message }}</div>
        @enderror
        <div class="row">
          <div class="col-8">
            <div class="icheck-primary">
              
            </div>
          </div>
          <!-- /.col -->
          <div class="col-4">
            <button type="submit" class="btn btn-primary btn-block">LOG IN</button>
          </div>
          <!-- /.col -->
        </div>
      </form>
      <!-- /.social-auth-links -->

    </div>
    <!-- /.login-card-body -->
  </div>
</div>
<!-- /.login-box -->

<!-- jQuery -->
<script src="{{ asset('Template/plugins/jquery/jquery.min.js') }}"></script>
<!-- Bootstrap 4 -->
<script src="{{ asset('Template/plugins/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
<!-- template App -->
<script src="{{ asset('Template/dist/js/adminlte.min.js') }}"></script>
</body>
</html>