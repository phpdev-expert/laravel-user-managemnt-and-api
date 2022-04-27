<?php if(Session::has('message')): ?>
  <div class="alert <?php echo e(Session::get('alert-class', 'alert-danger')); ?>" role="alert">
    <?php echo e(Session::get('message')); ?>

  </div>
<?php endif; ?>
<?php /**PATH /home/fullstackdeveloper/Desktop/laravel-api/resources/views/partials/flash.blade.php ENDPATH**/ ?>