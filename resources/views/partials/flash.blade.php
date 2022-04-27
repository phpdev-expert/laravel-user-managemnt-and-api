@if(Session::has('message'))
  <div class="alert {{ Session::get('alert-class', 'alert-danger') }}" role="alert">
    {{ Session::get('message') }}
  </div>
@endif
