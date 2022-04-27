<?php $__env->startSection('content'); ?>

<?php echo $__env->make('partials.breadcrumb',['heading'=>'Users','item'=>'Users',
'activeItem'=>'Listing','route'=>'users.index'], \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

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
                    <?php if($users->count()>0): ?>
                      <?php $__currentLoopData = $users; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $user): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <tr>
                          <td><?php echo e($user->first_name); ?></td>
                          <td><?php echo e($user->last_name); ?></td>
                          <td><?php echo e($user->email); ?></td>
                          <td><?php echo e($user->phone_number); ?></td>
                          <td>
                            <a href="<?php echo e(route('users.edit',[$user->id])); ?>"
                              class="btn btn-primary btn-sm">
                              <i class="fas fa-edit"></i>
                            </a>
                            <a href="<?php echo e(route('users.delete',[$user->id])); ?>"
                              class="btn btn-danger btn-sm"
                              onclick="return Confirm_Delete(<?php echo e($user->id); ?>);">
                              <i class="fas fa-trash"></i>
                            </a>
                          </td>
                        </tr>
                      <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                    <?php endif; ?>
                  </tbody>
                </table>
              </div>
              <?php echo e($users->links()); ?>

            </div>
          </div>
        </div>
      </div>
    </section>
<?php $__env->stopSection(); ?>

<?php $__env->startSection('script'); ?>
<script type="text/javascript">
  function Confirm_Delete(id){
    if(confirm('Do you want to delete User:'+id)){
      return true;
    }else{
      return false;
    }
  }
</script>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.after_login', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/fullstackdeveloper/Desktop/laravel-api/resources/views/admin/users/index.blade.php ENDPATH**/ ?>