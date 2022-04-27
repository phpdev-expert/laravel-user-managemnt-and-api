<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title><?php echo e(config('app.name', 'Laravel')); ?></title>

  <!-- Google Font: Source Sans Pro -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="<?php echo e(URL::asset('css/plugins/fontawesome-free/css/all.min.css')); ?>" />
  <!-- icheck bootstrap -->
  <link rel="stylesheet" href="<?php echo e(URL::asset('css/plugins/icheck-bootstrap/icheck-bootstrap.min.css')); ?>" />
  <!-- Theme style -->
  <link rel="stylesheet" href="<?php echo e(URL::asset('css/adminlte.min.css')); ?>" />
  <link rel="stylesheet" href="//cdnjs.cloudflare.com/ajax/libs/intl-tel-input/17.0.12/css/intlTelInput.css" />
</head>
<body class="hold-transition login-page">
<div class="login-box">
  <?php echo $__env->yieldContent('content'); ?>
</div>
<!-- /.login-box -->

<!-- jQuery -->
<script src="<?php echo e(URL::asset('js/plugins/jquery/jquery.min.js')); ?>"></script>
<!-- Bootstrap 4 -->
<script src="<?php echo e(URL::asset('js/plugins/bootstrap/bootstrap.bundle.min.js')); ?>"></script>
<!-- AdminLTE App -->
<script src="<?php echo e(URL::asset('js/adminlte.min.js')); ?>"></script>
<script src="<?php echo e(URL::asset('js/plugins/inputmask/jquery.inputmask.min.js')); ?>"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/intl-tel-input/17.0.12/js/intlTelInput.min.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/intl-tel-input/17.0.12/js/intlTelInput-jquery.min.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/intl-tel-input/17.0.12/js/utils.min.js"></script>
<?php echo $__env->yieldContent('script'); ?>
</body>
</html>
<?php /**PATH /home/fullstackdeveloper/Desktop/laravel-api/resources/views/layouts/before_login.blade.php ENDPATH**/ ?>