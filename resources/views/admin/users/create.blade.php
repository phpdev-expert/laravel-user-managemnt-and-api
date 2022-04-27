@extends('layouts.after_login')

@section('content')

@include('partials.breadcrumb',['heading'=>'Users','item'=>'Users',
'activeItem'=>'Create','route'=>'users.index'])

<!---FORM-->
<section class="content">
  <div class="container-fluid">
    <div class="row">
      <div class="col-md-8 offset-md-2">
        <div class="card card-secondary">
          <div class="card-header"><h3 class="card-title">Add</h3></div>

          {{Form::open(array('route' => 'users.store'))}}
            <div class="card-body">
              <div class="form-group">
                {{Form::label('first_name', 'First Name', array('class' => ''))}}
                {{Form::text('first_name', '',['class'=>'form-control',
                'placeholder'=>'Enter first name','required'=>true])}}
              </div>
              <div class="form-group">
                {{Form::label('last_name', 'Last Name', array('class' => ''))}}
                {{Form::text('last_name', '',['class'=>'form-control',
                'placeholder'=>'Enter last name','required'=>true])}}
              </div>
              <div class="form-group">
                {{Form::label('email', 'Email address', array('class' => ''))}}
                {{Form::email('email', '',['type'=>'email','class'=>'form-control',
                'placeholder'=>'Enter email','required'=>true])}}
              </div>
              <div class="form-group">
                {{Form::label('phone_number', 'Phone Number', array('class' => ''))}}
                {{Form::text('phone_number', '',['class'=>'form-control',
                'id'=>'phone_number','required'=>true,'placeholder'=>'phone Number',
                'data-inputmask'=>"'mask':'+9 (999) 999-9999'",'data-mask'])}}
              </div>
              <div class="form-group">
                {{Form::label('password', 'Password', array('class' => ''))}}
                {{Form::input('password','password','',['class'=>'form-control',
                'placeholder'=>'Enter password','required'=>true])}}
              </div>
              {{ Form::hidden('role', 'user') }}
            </div>
            <div class="card-footer">
              {{Form::submit('Submit',['class'=>'btn btn-secondary'])}}
            </div>
          {{ Form::close() }}
        </div>
      </div>
    </div>
  </div>
</section>
<!--FORM-->
@endsection

@section('script')
<script type="text/javascript">
  $(document).ready(function(){
    $('#phone_number').inputmask('+0 (000) 000-0000');
  });
</script>
@endsection
