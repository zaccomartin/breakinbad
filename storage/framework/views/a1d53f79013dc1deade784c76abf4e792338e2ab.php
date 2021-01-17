

<?php $__env->startSection('content'); ?>

    <h1>Contenido de Elements</h1>

    <ul>
    <?php $__currentLoopData = $elements; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $element): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
    
    <li>
        <a href="<?php echo e(route('detail', $element->id)); ?>"><?php echo e($element->title); ?></a>
    </li>
        
    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
    </ul>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\laragon\www\breakinbad\resources\views/test.blade.php ENDPATH**/ ?>