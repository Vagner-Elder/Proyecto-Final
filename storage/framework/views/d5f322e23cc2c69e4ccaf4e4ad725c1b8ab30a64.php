
<?php $__env->startSection('title', 'Crear Usuarios'); ?>

<?php $__env->startSection('tit-section'); ?>
    Editar Usuarios
<?php $__env->stopSection(); ?>
 
<?php $__env->startSection('btn_navegar'); ?>
    <a href="/articulo" class="nav-item nav-link active">Articulos</a>
    <a href="/venta" class="nav-item nav-link">Ventas</a>
    <a href="/users" class="nav-item nav-link">Usuarios</a>  
<?php $__env->stopSection(); ?>
 
<?php $__env->startSection('content'); ?>
<div class="col-md-7">
        <h2>Proyecto UPDS</h2>
        <br>
        <h2>Ventas <span>Articulos</span></h2>
</div>
    <div class='jumbotrom'>

        <form method="POST" action="<?php echo e(route('users.update', $usuarios->id)); ?>" class='form-crear'>
            <input type="hidden" name="_token" value="<?php echo e(csrf_token()); ?>" />
            <input type="hidden" name="_method" value="PUT" />
                    
            <div class="mb-3">
                <label class="form-label">Nombre:</label>                
                <input type="text" name="name" class="form-control" value="<?php echo e($usuarios->name); ?>"  placeholder="Nombre"/>

            </div>                   
            <div class="mb-3">
                <label class="form-label">Email:</label>
                <input type="text" name="email" class="form-control" value="<?php echo e($usuarios->email); ?>"  placeholder="Color"/>                
            </div>                   
            <div class="mb-3">
                <label class="form-label">Contraseña:</label>
                <input type="password" name="password" class="form-control" value="<?php echo e($usuarios->password); ?>"  
                placeholder="Precio"/>                                
            </div>                                    
            <div class="mb-3">
                <input type="submit" class="btn btn-secondary" value="Actualizar">
            </div>                   
        </form>
        
 
    </div> 
<?php $__env->stopSection(); ?>
    
<?php echo $__env->make('layouts.inicio', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\laragon\www\TecnologiaWebII_Ene2023\laravel-upds-main\resources\views/users/edit.blade.php ENDPATH**/ ?>