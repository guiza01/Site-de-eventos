<?php $__env->startSection('title', 'Dashboard'); ?>

<?php $__env->startSection('content'); ?>

<div class="col-md-10 offset-md-1 dashboard-title-container">
    <h1>Meus Eventos</h1>
</div>
<div class="col-md-10 offset-md1 dashboard-events-container">
    <?php if(count($events) > 0): ?>
    <?php else: ?>
        <p>Você ainda nao possui eventos, <a href="/events/create">Criar evento</a></p>
    <?php endif; ?>
</div>

<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.main', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\jefer\Desktop\projeto com Lavarel 10\projeto\resources\views/dashboard.blade.php ENDPATH**/ ?>