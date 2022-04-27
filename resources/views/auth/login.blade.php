@extends('layouts.before_login')

@section('content')
<div class="card card-outline card-primary">
  <div class="card-header text-center">
    <a href="{{ route('home') }}" class="h1"><b>{{ __('Login') }}</b></a>
  </div>
  <div class="card-body">
    @if($errors->any())
      <div class="alert alert-danger alert-dismissible">
        <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
          @foreach ($errors->all() as $error)
            <div>{{ $error }}</div>
          @endforeach
      </div>
    @endif
    <form method="POST" action="{{ route('login') }}">
      @csrf
      <div class="input-group mb-3">
        <input id="email" type="email" class="form-control @error('email') is-invalid @enderror"
        name="email" value="{{ old('email') }}" required autocomplete="email"
        autofocus placeholder="Enter email">
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
      <div class="input-group mb-3">
        <input id="password" type="password" class="form-control @error('password') is-invalid @enderror"
        name="password" autocomplete="current-password">
        <div class="input-group-append">
          <div class="input-group-text">
            <span class="fas fa-lock"></span>
          </div>
        </div>
        @error('password')
            <span class="invalid-feedback" role="alert">
                <strong>{{ $message }}</strong>
            </span>
        @enderror
      </div>
      <div class="row">
        <div class="col-8 d-none">
          <div class="icheck-primary">
            <input class="form-check-input" type="checkbox" name="remember"
            id="remember" {{ old('remember') ? 'checked' : '' }}>

            <label class="form-check-label" for="remember">
                {{ __('Remember Me') }}
            </label>
          </div>
        </div>
        <!-- /.col -->
        <div class="col-4">
          <button type="submit" class="btn btn-primary btn-block mb-2">{{ __('Login') }}</button>
        </div>
        <!-- /.col -->
      </div>
    </form>
    @if (Route::has('password.request'))
    <p class="mb-0">
        <a href="{{ route('register') }}" class="text-center">Register a new account</a>
      </p>
    @endif
  </div>
  <!-- /.card-body -->
</div>
@endsection
