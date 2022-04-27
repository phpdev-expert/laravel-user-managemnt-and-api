@extends('layouts.after_login')

@section('content')

@include('partials.breadcrumb',['heading'=>'Dashboard','item'=>'Home',
'activeItem'=>'Dashboard','route'=>'home'])
<!-- Main content -->
<section class="content">
  <div class="container-fluid">
    <div class="row">
          <div class="col-lg-3 col-6">
            <!-- small box -->
            <div class="small-box bg-info">
              <div class="inner">
                <h3>{{dashboardCount('user')}}</h3>
                <p>Users</p>
              </div>
              <div class="icon">
                <i class="ion ion-bag"></i>
              </div>
            </div>
          </div>
        </div>
  </div>
</section>
@endsection
