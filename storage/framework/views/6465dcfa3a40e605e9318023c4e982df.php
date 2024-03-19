<?php $__env->startSection('title', 'Produtos'); ?>

<?php $__env->startSection('content'); ?>

<h1>Tela de produtos</h1>

<?php if($busca != ''): ?>
    <p>O usuario esta buscando por: <?php echo e($busca); ?></p>
<?php endif; ?>

<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.main', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\jefer\Desktop\projeto com Lavarel 10\projeto\resources\views/products.blade.php ENDPATH**/ ?>