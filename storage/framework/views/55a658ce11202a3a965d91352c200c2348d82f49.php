
<?php $__env->startSection('title', 'Crear Usuarios'); ?>

<?php $__env->startSection('tit-section'); ?>
    Crear Usuarios
<?php $__env->stopSection(); ?>
 
<?php $__env->startSection('btn_navegar'); ?>
    <a href="/articulo" class="nav-item nav-link ">Articulos</a>
    <a href="/venta" class="nav-item nav-link">Ventas</a>
    <a href="/users" class="nav-item nav-link active">Usuarios</a>  
    <a href="<?php echo e(route('logout')); ?>" class="nav-item nav-link ">Cerrar Sesion <i class="fa-sharp fa-solid fa-right-from-bracket"></i></a>
<?php $__env->stopSection(); ?>

<?php $__env->startSection('content'); ?>
<div class="col-md-7">
        <h2>Proyecto UPDS</h2>
        <br>
        <h2>Ventas <span>Articulos</span></h2>
</div>
    <div class='jumbotrom'>
        <form method="POST" action="/users" class='form-crear'>
            <?php echo csrf_field(); ?>
            <div class="mb-3">
                <label class="form-label">Nombre:</label>
                <input type="text" name='name' class="form-control" placeholder="Nombre">
            </div>                   
            <div class="mb-3">
                <label class="form-label">Email:</label>
                <input type="text" name='email' class="form-control" placeholder="Email">
            </div>                   
            <div class="mb-3">
                <label class="form-label">Contraseña:</label>
                <input type="password" name='password' class="form-control" placeholder="Contraseña">
            </div>                                   
            <div class="mb-3">
                <input type="submit" class="btn btn-primary" value="Guardar">
            </div>                   
        </form>
    </div> 
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.inicio', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\laragon\www\laravel-upds-main\resources\views/users/create.blade.php ENDPATH**/ ?>