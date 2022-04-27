<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>{{ config('app.name', 'Laravel') }}</title>

  <!-- Google Font: Source Sans Pro -->
  <link rel="stylesheet" href="//fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap"/>
  <!-- Font Awesome Icons -->
  <link rel="stylesheet" href="{{ URL::asset('css/plugins/fontawesome-free/css/all.min.css') }}" />
  <!-- overlayScrollbars -->
  <link rel="stylesheet" href="{{ URL::asset('css/plugins/overlayScrollbars/css/OverlayScrollbars.min.css')}}">
  <!-- Theme style -->
  <link rel="stylesheet" href="{{ URL::asset('/css/adminlte.min.css')}}">
  <link rel="stylesheet" href="{{ URL::asset('/css/custom.css')}}">

  <link rel="stylesheet" href="{{ URL::asset('css/plugins/bootstrap-datetimepicker/datetimepicker.css')}}"/>
</head>
<body class="">
<div class="wrapper">
  <nav class="main-header navbar navbar-expand navbar-white navbar-light">
    <!-- Left navbar links -->
    <ul class="navbar-nav ml-auto">
      <li class="nav-item d-none d-sm-inline-block">
        <a href="{{route('project.listing')}}" class="nav-link">Home</a>
      </li>
      <li class="nav-item d-none d-sm-inline-block">
          <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
              {{ Auth::user()->name }}
          </a>

          <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
              <a class="dropdown-item" href="{{ route('logout') }}"
                 onclick="event.preventDefault();
                               document.getElementById('logout-form').submit();">
                  {{ __('Logout') }}
              </a>

              <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                  @csrf
              </form>
          </div>
      </li>
    </ul>
  </nav>
    @yield('content')
  <!-- /.content-wrapper -->
</div>
<!-- ./wrapper -->

<!-- REQUIRED SCRIPTS -->
<!-- jQuery -->
<script src="{{ URL::asset('js/plugins/jquery/jquery.min.js')}}"></script>
<!-- Bootstrap -->
<script src="{{ URL::asset('js/plugins/bootstrap/bootstrap.bundle.min.js')}}"></script>
<!-- overlayScrollbars -->
<script src="{{ URL::asset('js/plugins/overlayScrollbars/jquery.overlayScrollbars.min.js')}}"></script>
<!-- AdminLTE App -->
<script src="{{ URL::asset('js/adminlte.min.js') }}"></script>

<!-- PAGE PLUGINS -->
<!-- jQuery Mapael -->
<script src="{{ URL::asset('js/plugins/jquery-mousewheel/jquery.mousewheel.js')}}"></script>
<script src="{{ URL::asset('js/plugins/raphael/raphael.min.js')}}"></script>
<script src="{{ URL::asset('js/plugins/jquery-mapael/jquery.mapael.min.js')}}"></script>
<script src="{{ URL::asset('js/plugins/jquery-mapael/maps/usa_states.min.js')}}"></script>

<!-- AdminLTE for demo purposes -->
<script src="{{ URL::asset('js/plugins/inputmask/jquery.inputmask.min.js') }}"></script>
<script src="//code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
<script src="{{ URL::asset('js/plugins/bootstrap-datetimepicker/bootstrap-datetimepicker.min.js')}}"></script>
@yield('script')
@yield('script2')
</body>
</html>
