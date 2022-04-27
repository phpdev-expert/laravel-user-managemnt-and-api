@extends('layouts.after_login')

@section('content')

@include('partials.breadcrumb',['heading'=>'Users','item'=>'Users',
'activeItem'=>'Listing','route'=>'users.index'])

<section class="content">
      <div class="container-fluid">
        <div class="row">
          <div class="col-12">
            <div class="card card-secondary">
              <div class="card-header">
                <h3 class="card-title">Users Listing</h3>
              </div>
              <!-- /.card-header -->
              <div class="card-body table-responsive p-0">
                <table class="table table-hover text-nowrap">
                  <thead>
                    <tr>
                      <th>First Name</th>
                      <th>last Name</th>
                      <th>Email</th>
                      <th>Phone Number</th>
                      <th>Actions</th>
                    </tr>
                  </thead>
                  <tbody>
                    @if($users->count()>0)
                      @foreach($users as $user)
                        <tr>
                          <td>{{$user->first_name}}</td>
                          <td>{{$user->last_name}}</td>
                          <td>{{$user->email}}</td>
                          <td>{{$user->phone_number}}</td>
                          <td>
                            <a href="{{route('users.edit',[$user->id])}}"
                              class="btn btn-primary btn-sm">
                              <i class="fas fa-edit"></i>
                            </a>
                            <a href="{{route('users.delete',[$user->id])}}"
                              class="btn btn-danger btn-sm"
                              onclick="return Confirm_Delete({{$user->id}});">
                              <i class="fas fa-trash"></i>
                            </a>
                          </td>
                        </tr>
                      @endforeach
                    @endif
                  </tbody>
                </table>
              </div>
              {{ $users->links() }}
            </div>
          </div>
        </div>
      </div>
    </section>
@endsection

@section('script')
<script type="text/javascript">
  function Confirm_Delete(id){
    if(confirm('Do you want to delete User:'+id)){
      return true;
    }else{
      return false;
    }
  }
</script>
@endsection
