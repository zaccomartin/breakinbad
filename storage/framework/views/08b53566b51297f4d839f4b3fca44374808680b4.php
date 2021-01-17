
<?php $__env->startSection('content'); ?>
    <h1>Crear nuevo Elemento</h1>
    <div style="text-align:center">
<form method="POST" action="<?php echo e(route('element.store')); ?>">
    <?php echo csrf_field(); ?>
        <label>Nombre de elemento<br>
        <input type="text" name="title" value="<?php echo e(old('title')); ?>">
        </label>

        <?php $__errorArgs = ['title'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
        <br>
        <small>*<?php echo e($message); ?></small>
        <br>
        <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>


        <br>
        <label>Periodo<br>
        <input type="text" name="Periodo" value="<?php echo e(old('Periodo')); ?>">
        </label>
        
        <?php $__errorArgs = ['Periodo'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
        <br>
        <small>*<?php echo e($message); ?></small>
        <br>
        <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>

        <br>
        <label>Numero atomico<br>
        <input type="text" name="numeroAtomico" value="<?php echo e(old('numeroAtomico')); ?>">
        </label>
        
        <?php $__errorArgs = ['numeroAtomico'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
        <br>
        <small>*<?php echo e($message); ?></small>
        <br>
        <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>

        <br>
        <label>imagen (URl)<br>
        <input type="text" name="url" value="<?php echo e(old('url')); ?>">
        </label>
        <br><br>
        <button>Guardar</button>
    </form>
</div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\laragon\www\breakinbad\resources\views/element/create.blade.php ENDPATH**/ ?>