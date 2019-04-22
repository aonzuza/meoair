<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Meo Air</title>
    <meta name="csrf-token" content="<?php echo e(csrf_token()); ?>">

    <link rel="icon" type="image/png" href="images/common/favicon.png" />

    <!-- bootstrap  -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <!-- font awesome -->
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css" integrity="sha384-50oBUHEmvpQ+1lW4y57PTFmhCaXp0ML5d60M1M7uH2+nqUivzIebhndOJK28anvf" crossorigin="anonymous">




    <!-- Google Font  -->
    <!-- <link href="https://fonts.googleapis.com/css?family=Prompt:300,400,500,700" rel="stylesheet"> -->
    <link href="https://fonts.googleapis.com/css?family=Kanit:300,400,500,700" rel="stylesheet">


    <!-- web styles -->
    <link rel="stylesheet" href="<?php echo e(asset('styles/style.css')); ?>" >
    <link rel="stylesheet" href="<?php echo e(asset('styles/responsivestyle.css')); ?>" >


    <?php echo $__env->yieldContent('style'); ?>
  </head>
  <body>
    <?php echo $__env->make('inc.topbar', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

    <div class="page-wrapper">
    <?php echo $__env->yieldContent('content'); ?>
    </div>


<script src="http://code.jquery.com/jquery-3.3.1.js" integrity="sha256-2Kok7MbOyxpgUVvAk/HJ2jigOSYS2auK4Pfzbm7uH60=" crossorigin="anonymous"></script>

<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>

    <?php echo $__env->yieldContent('script'); ?>

    <script type="text/javascript">

          $(window).ready(function(){


              $('#btn-scrolltotop').click(function(){

                $("html, body").animate({ scrollTop: 0 }, "slow");

              });

          });



    </script>


  </body>

  <?php echo $__env->make('inc.footer', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

  <?php echo $__env->make('inc.scrolltotop', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

</html>

<?php /* C:\xampp\htdocs\meoair\resources\views/layouts/app.blade.php */ ?>