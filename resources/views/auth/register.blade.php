@extends('layouts.before_login')

@section('content')
<div class="card card-outline card-primary">
  <div class="card-header text-center">
    <a href="{{ route('home') }}" class="h1"><b>{{__('Register') }}</b></a>
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
    <form id="form-signin-task" class="form-signin" method="POST" action="{{ route('register') }}" data-stripe-publishable-key="{{ env('STRIPE_KEY') }}" data-stripe-secret="{{ env('STRIPE_SECRET') }}">
        @csrf
      <div class="input-group mb-3">
        <input id="first_name" type="text" class="form-control @error('first_name') is-invalid @enderror"
        name="first_name" required value="{{ old('first_name') }}" placeholder="First Name">
        <div class="input-group-append">
          <div class="input-group-text">
            <span class="fas fa-user"></span>
          </div>
        </div>
      </div>
      <div class="input-group mb-3">
        <input id="last_name" type="text" class="form-control @error('last_name') is-invalid @enderror"
        name="last_name" required value="{{ old('last_name') }}" placeholder="Last Name">
        <div class="input-group-append">
          <div class="input-group-text">
            <span class="fas fa-user"></span>
          </div>
        </div>
      </div>
      <div class="input-group mb-3">
        <input id="email" type="email" required class="form-control @error('email') is-invalid @enderror"
        name="email" value="{{ old('email') }}"  autocomplete="email" placeholder="E-Mail Address">
        <div class="input-group-append">
          <div class="input-group-text">
            <span class="fas fa-envelope"></span>
          </div>
        </div>
      </div>
      <div class="input-group mb-3">
        <input id="company_name" type="text" required class="form-control @error('company_name') is-invalid @enderror"
        name="company_name" value="{{ old('company_name') }}"  autocomplete="company_name" placeholder="Company Name">
        <div class="input-group-append">
          <div class="input-group-text">
            <span class="fas fa-building"></span>
          </div>
        </div>
      </div>
      <div class="input-group mb-3">
        <input id="address" type="text" required class="form-control @error('address') is-invalid @enderror"
        name="address" value="{{ old('address') }}"  autocomplete="address" placeholder="Company Address">
        <div class="input-group-append">
          <div class="input-group-text">
            <span class="fas fa-address-book"></span>
          </div>
        </div>
      </div>
      <div class="input-group mb-3">
        <input id="code" type="text" required class="form-control @error('phone_code') is-invalid @enderror"
        name="phone_code" value="{{ old('phone_code') }}"  autocomplete="false" placeholder="Phone Code">
        <div class="input-group-append">
          <div class="input-group-text">
            <span class="fas fa-phone"></span>
          </div>
        </div>
      </div>
      <input type="hidden" name="phone_country" id="phone_country" value="{{ old('phone_country') }}"/>
      <div class="input-group mb-3">
        <input id="phone_number" type="text" required class="form-control @error('phone_number') is-invalid @enderror"
        name="phone_number" value="{{ old('phone_number') }}"  autocomplete="phone_number"
        placeholder="Phone Number" data-inputmask="'mask':'(999) 999-9999'" data-mask>
        <div class="input-group-append">
          <div class="input-group-text">
            <span class="fas fa-phone"></span>
          </div>
        </div>
      </div>
      <div class="input-group mb-3">
        <input type="password" name="password" class="form-control" placeholder="Password" autocomplete="false">
        <div class="input-group-append">
          <div class="input-group-text">
            <span class="fas fa-lock"></span>
          </div>
        </div>
      </div>
      <div class="input-group mb-3">
        <input type="password" name="password_confirmation" class="form-control" placeholder="Confirm Password" autocomplete="false">
        <div class="input-group-append">
          <div class="input-group-text">
            <span class="fas fa-lock"></span>
          </div>
        </div>
      </div>
      <div class="row">
        <div class="col-4">
          <button type="submit" class="btn btn-primary btn-block">{{ __('Register') }}</button>
        </div>
      </div>
    </form>
    <a href="{{route('login')}}" class="text-center">{{ __('I already have a account') }}</a>
  </div>
  <!-- /.form-box -->
</div><!-- /.card -->
@endsection

@section('script')
<script type="text/javascript">
  $(document).ready(function(){
    $('#phone_number').inputmask('(000) 000-0000');
  });
  var input = document.querySelector("#code");
  var iti=window.intlTelInput(input);
  input.addEventListener("countrychange", function() {
    $('#code').val("+"+iti.getSelectedCountryData().dialCode);
    $('#phone_country').val(iti.getSelectedCountryData().iso2);
  });
</script>
@endsection
