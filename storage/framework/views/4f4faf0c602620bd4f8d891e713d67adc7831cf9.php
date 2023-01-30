
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
                <form>
                    <input class="form-control" type="text" placeholder="Nombre">
                    <input class="form-control" type="text" placeholder="Contraseña">
                        <div class="control-group"> </div>
                       <!-- <button href='/users' class="btn btn-block">Entrar</button> -->
                        <a href="/users"class="btn btn-block">Entrar</a>
                </form>
        </div>
    </div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.inicio', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\laragon\www\TecnologiaWebII_Ene2023\laravel-upds-main\resources\views/layouts/login.blade.php ENDPATH**/ ?>