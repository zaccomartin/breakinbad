

<?php $__env->startSection('content'); ?>

    <h1>Detalles de elemento</h1>
    
    <ul>
        <li>
            Nombre : <?php echo e($elements->title); ?><br>
            Periodo : <?php echo e($elements->periodo); ?> <br>
            Numero atomico : <?php echo e($elements->body); ?><br>
            Imagen : <br> <div style="text-align: center"><img src="<?php echo e($elements->url); ?>"> </div><br>
        </li>
    </ul>
<center>
    <a href="<?php echo e(route('element.edit', $elements)); ?>">Editar</a><br><br>
    <form method="POST" action="<?php echo e(route('element.destroy', $id = $elements->id )); ?>">
    <?php echo csrf_field(); ?> 
    <input type="hidden" name="_method" value="DELETE">
    <button>Eliminar</button>
    </form><br><br><a href="./">volver</a> </center>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\laragon\www\breakinbad\resources\views/detail.blade.php ENDPATH**/ ?>