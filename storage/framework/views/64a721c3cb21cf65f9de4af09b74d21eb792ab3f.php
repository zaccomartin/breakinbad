<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Tabla de Elementos</title>
        <link rel="stylesheet" type="text/css" href="<?php echo e(asset('css/app.css')); ?>">
    </head>
    <body>
        <div class="container">
        <ul>
            <li><a href="<?php echo e(route('test')); ?>">Elementos</a></li>
            <li><a href="<?php echo e(route('element.create')); ?>">Crear</a></li>
        </ul>

        
            <?php echo $__env->yieldContent('content'); ?>
        </div>
    </body>
</html><?php /**PATH C:\laragon\www\breakinbad\resources\views/layout.blade.php ENDPATH**/ ?>