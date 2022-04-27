@extends('layouts.after_login')

@section('content')

@include('partials.breadcrumb',['heading'=>'Users','item'=>'Users',
'activeItem'=>'Profile','route'=>'users.index'])
<section class="content">
      <div class="container-fluid">
        <div class="row">
          <div class="col-md-3">

            <!-- Profile Image -->
            <div class="card card-secondary">
              <div class="card-body box-profile">
                <div class="text-center">
                  <img class="profile-user-img img-fluid img-circle" src="{{URL::asset('/img/user2-160x160.jpg')}}" alt="User profile picture">
                </div>

                <h3 class="profile-username text-center">{{ Auth::user()->name }}</h3>
              </div>
              <!-- /.card-body -->
              <div class="card-header">
                <h3 class="card-title">About Me</h3>
              </div>
              <div class="card-body">
                <strong><i class="fas fa-book mr-1"></i> First Name</strong>
                <p class="text-muted">
                  {{Auth::user()->first_name}}
                </p>
                <hr>

                <strong><i class="fas fa-map-marker-alt mr-1"></i> Last Name</strong>
                <p class="text-muted">
                  {{Auth::user()->last_name}}
                </p>
                <hr>

                <strong><i class="fas fa-phone mr-1"></i>Phone</strong>
                <p class="text-muted">
                  {{Auth::user()->phone_number}}
                </p>
                <hr>

                <strong><i class="fas fa-envelope mr-1"></i>Email</strong>
                <p class="text-muted">
                  {{Auth::user()->email}}
                </p>
                <hr>
                <a class="btn btn-block btn-secondary" href="{{ route('edit-profile') }}" class="text-center">Edit</a>
              </div>
            </div>
            <!-- /.card -->
          </div>
        </div>
        <!-- /.row -->
      </div><!-- /.container-fluid -->
    </section>
@endsection()
