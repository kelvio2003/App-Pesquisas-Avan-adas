<?php $__env->startSection('titolo','Home'); ?>

<?php $__env->startSection('conteudo'); ?>


<?php if(session('sms')): ?>
<h1 class="btn btn-primary"><?php echo e(session('sms')); ?></h1>
<?php endif; ?>


<?php if(session('deleta')): ?>
<h1 class="btn btn-primary"><?php echo e(session('deleta')); ?></h1>
<?php endif; ?>

<?php $__env->stopSection(); ?>

<?php echo $__env->make('paginas.principal', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\laravel\Projecto_pesquisas\resources\views/welcome.blade.php ENDPATH**/ ?>