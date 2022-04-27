@extends('layouts.before_login')

@section('content')
<style>
.login-box-msg, .register-box-msg{padding: 0 0px 8px;}
</style>
<div class="card card-outline card-primary">
  <div class="card-header text-center">
    <a href="{{ route('home') }}" class="h1"><b>{{ __('Reset Password') }}</b></a>
  </div>
  <div class="card-body">
    @if (session('status'))
        <p class="login-box-msg alert alert-success" role="alert">
            {{ session('status') }}
        </p>
    @endif
    <div class="mt-2">
      <form method="POST" action="{{ route('password.email') }}">
        @csrf
        <div class="input-group mb-3">
          <input id="email" type="email" class="form-control @error('email') is-invalid @enderror"
          name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>

          <div class="input-group-append">
            <div class="input-group-text">
              <span class="fas fa-envelope"></span>
            </div>
          </div>
          @error('email')
              <span class="invalid-feedback" role="alert">
                  <strong>{{ $message }}</strong>
              </span>
          @enderror
        </div>
        <div class="row">
            <button type="submit" class="btn btn-primary btn-block">{{ __('Send Password Reset Link') }}</button>
        </div>
      </form>
    </div>
  </div>
  <!-- /.card-body -->
</div>
@endsection
