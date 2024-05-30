@extends('admin.layouts.auth_master')
@section('title')
Register
@endsection
@section('content')
<div class="register-page">
    <div class="register-box">
        <div class="card card-outline card-primary">
          <div class="card-header text-center">
            <a href="{{route('public_home')}}" class="h2">Service Bangladesh</a>
          </div>
          <div class="card-body">
            <p class="login-box-msg">Register a new membership</p>

            <form action="{{route('register')}}" method="post">
                @csrf
              <div class="input-group mb-3">
                <input type="text" class="form-control" placeholder="First Name" name="first_name" :value="old('name')" required autofocus autocomplete="name">
                <input type="text" class="form-control" placeholder="Last Name" name="last_name" :value="old('name')" required autofocus autocomplete="name">
                <div class="input-group-append">
                  <div class="input-group-text">
                    <span class="fas fa-user"></span>
                  </div>
                </div>
              </div>
              <div class="input-group mb-3">
                <input type="email" class="form-control" placeholder="Email" name="email" :value="old('email')" required autocomplete="username">
                <div class="input-group-append">
                  <div class="input-group-text">
                    <span class="fas fa-envelope"></span>
                  </div>
                </div>
              </div>
              <div class="input-group mb-3">
                <input type="number" class="form-control" placeholder="Phone Number" name="phone" :value="old('phone')" required autocomplete="phone">
                <div class="input-group-append">
                  <div class="input-group-text">
                    <span class="fas fa-phone"></span>
                  </div>
                </div>
              </div>
              <div class="input-group mb-3">
                <input type="password" class="form-control" placeholder="Password" name="password"
                required autocomplete="new-password">
                <div class="input-group-append">
                  <div class="input-group-text">
                    <span class="fas fa-lock"></span>
                  </div>
                </div>
              </div>
              <div class="input-group mb-3">
                <input type="password" class="form-control" placeholder="Retype password" name="password_confirmation" required autocomplete="new-password">
                <div class="input-group-append">
                  <div class="input-group-text">
                    <span class="fas fa-lock"></span>
                  </div>
                </div>
              </div>
              <div class="row">
                <!-- /.col -->
                <div class="col-4">
                  <button type="submit" class="btn btn-primary btn-block">Register</button>
                </div>
                <!-- /.col -->
              </div>
            </form>

            <div class="social-auth-links text-center">
              <a href="#" class="btn btn-block btn-primary">
                <i class="fab fa-facebook mr-2"></i>
                Sign up using Facebook
              </a>
              <a href="#" class="btn btn-block btn-danger">
                <i class="fab fa-google-plus mr-2"></i>
                Sign up using Google+
              </a>
            </div>
            <a href="{{ route('login') }}" class="text-center">I already have a membership</a>
          </div>
        </div>
      </div>
</div>
@endsection
