<?php $__env->startSection('content'); ?>

<?php echo $__env->make('partials.breadcrumb',['heading'=>'Users','item'=>'Users',
'activeItem'=>'Create','route'=>'users.index'], \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

<!---FORM-->
<section class="content">
  <div class="container-fluid">
    <div class="row">
      <div class="col-md-8 offset-md-2">
        <div class="card card-secondary">
          <div class="card-header"><h3 class="card-title">Add</h3></div>

          <?php echo e(Form::open(array('route' => 'users.store'))); ?>

            <div class="card-body">
              <div class="form-group">
                <?php echo e(Form::label('first_name', 'First Name', array('class' => ''))); ?>

                <?php echo e(Form::text('first_name', '',['class'=>'form-control',
                'placeholder'=>'Enter first name','required'=>true])); ?>

              </div>
              <div class="form-group">
                <?php echo e(Form::label('last_name', 'Last Name', array('class' => ''))); ?>

                <?php echo e(Form::text('last_name', '',['class'=>'form-control',
                'placeholder'=>'Enter last name','required'=>true])); ?>

              </div>
              <div class="form-group">
                <?php echo e(Form::label('email', 'Email address', array('class' => ''))); ?>

                <?php echo e(Form::email('email', '',['type'=>'email','class'=>'form-control',
                'placeholder'=>'Enter email','required'=>true])); ?>

              </div>
              <div class="form-group">
                <?php echo e(Form::label('phone_number', 'Phone Number', array('class' => ''))); ?>

                <?php echo e(Form::text('phone_number', '',['class'=>'form-control',
                'id'=>'phone_number','required'=>true,'placeholder'=>'phone Number',
                'data-inputmask'=>"'mask':'+9 (999) 999-9999'",'data-mask'])); ?>

              </div>
              <div class="form-group">
                <?php echo e(Form::label('password', 'Password', array('class' => ''))); ?>

                <?php echo e(Form::input('password','password','',['class'=>'form-control',
                'placeholder'=>'Enter password','required'=>true])); ?>

              </div>
              <?php echo e(Form::hidden('role', 'user')); ?>

            </div>
            <div class="card-footer">
              <?php echo e(Form::submit('Submit',['class'=>'btn btn-secondary'])); ?>

            </div>
          <?php echo e(Form::close()); ?>

        </div>
      </div>
    </div>
  </div>
</section>
<!--FORM-->
<?php $__env->stopSection(); ?>

<?php $__env->startSection('script'); ?>
<script type="text/javascript">
  $(document).ready(function(){
    $('#phone_number').inputmask('+0 (000) 000-0000');
  });
</script>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.after_login', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/fullstackdeveloper/Desktop/laravel-api/resources/views/admin/users/create.blade.php ENDPATH**/ ?>