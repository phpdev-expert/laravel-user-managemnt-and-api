<?php $__env->startSection('content'); ?>

<?php echo $__env->make('partials.breadcrumb',['heading'=>'Dashboard','item'=>'Home',
'activeItem'=>'Dashboard','route'=>'home'], \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
<!-- Main content -->
<section class="content">
  <div class="container-fluid">
    <div class="row">
          <div class="col-lg-3 col-6">
            <!-- small box -->
            <div class="small-box bg-info">
              <div class="inner">
                <h3><?php echo e(dashboardCount('user')); ?></h3>
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
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.after_login', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/fullstackdeveloper/Desktop/laravel-api/resources/views/home.blade.php ENDPATH**/ ?>