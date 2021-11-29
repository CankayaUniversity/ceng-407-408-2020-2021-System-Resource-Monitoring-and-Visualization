<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width,initial-scale=1.0">
  <meta name="csrf-token" content="<?php echo e(csrf_token()); ?>">
  <!-- <link rel="icon" href="<%= BASE_URL %>favicon.ico"> -->

  <title>Vuexy - Vuejs, HTML & Laravel Admin Dashboard Template</title>

  <!-- Splash Screen/Loader Styles -->
  <link rel="stylesheet" type="text/css" href="<?php echo e(asset(mix('css/loader.css'))); ?>" />

  <!-- Styles -->
  <link rel="stylesheet" href="<?php echo e(asset(mix('css/app.css'))); ?>">

  <!-- Favicon -->
  <link rel="shortcut icon" href="<?php echo e(asset('images/logo/favicon.png')); ?>">

  <!-- Font -->
  <link href="https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,300;0,400;0,500;0,600;1,400&display=swap"
    rel="stylesheet">
</head>

<body>
  <noscript>
    <strong>We're sorry but Vuexy - Vuejs, HTML & Laravel Admin Dashboard Template doesn't work properly without
      JavaScript enabled. Please enable it to continue.</strong>
  </noscript>
  <div id="loading-bg">
    <div class="loading-logo">
      <img src="<?php echo e(asset('logo.png')); ?>" alt="Logo" />
    </div>
    <div class="loading">
      <div class="effect-1 effects"></div>
      <div class="effect-2 effects"></div>
      <div class="effect-3 effects"></div>
    </div>
  </div>
  <div id="app">
  </div>

  <script src="<?php echo e(asset(mix('js/app.js'))); ?>"></script>

</body>

</html>
<?php /**PATH C:\xampp\htdocs\all-testing-repos\vuexy-bootstrap-vue-laravel-starter-kit\resources\views/application.blade.php ENDPATH**/ ?>