
<?php $__env->startSection('title', 'Login'); ?>

<?php $__env->startSection('tit-section'); ?>
UPDS
<?php $__env->stopSection(); ?>

<?php $__env->startSection('content'); ?>
    <div class="col-md-7">
        <h2>Proyecto UPDS</h2>
        <br>
        <h2>Ventas <span>Articulos</span></h2>
    </div>
    <div class="col-md-5">
        <div class="form">
            <h3>Iniciar Sesion</h3>
                <form method="POST" action="<?php echo e(route('inicio')); ?>">
                    <?php echo csrf_field(); ?>
                    <input class="form-control" type="text" placeholder="Nombre" name="email">
                    <input class="form-control" type="password" placeholder="Contraseña" name="password">
                        <div class="control-group"> </div>
                        <button type="submit" class="btn btn-primary">Acceder</button>
                </form>
        </div>
    </div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.inicio', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\laragon\www\laravel-upds-main\resources\views/layouts/login.blade.php ENDPATH**/ ?>