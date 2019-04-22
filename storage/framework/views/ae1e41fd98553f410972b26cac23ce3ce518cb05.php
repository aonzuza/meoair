<?php $__env->startSection('style'); ?>
<link rel="stylesheet" href="<?php echo e(asset('admin/styles/style.css')); ?>" >
<link rel="stylesheet" href="<?php echo e(asset('admin/styles/responsivestyle.css')); ?>" >
<?php $__env->stopSection(); ?>

<?php $__env->startSection('content'); ?>

<?php echo $sale->body; ?>


<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
<?php /* C:\xampp\htdocs\meoair\resources\views/salesShow.blade.php */ ?>