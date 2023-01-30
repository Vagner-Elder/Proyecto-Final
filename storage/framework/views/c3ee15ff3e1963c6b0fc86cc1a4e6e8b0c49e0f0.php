<?php $__env->startSection('title', 'Editar Ventas'); ?>

<?php $__env->startSection('tit-section'); ?>
    Editar Ventas
<?php $__env->stopSection(); ?>
 
<?php $__env->startSection('btn_navegar'); ?>
    <a href="/articulo" class="nav-item nav-link active">Articulos</a>
    <a href="/venta" class="nav-item nav-link">Ventas</a>
    <a href="/users" class="nav-item nav-link">Usuarios</a>  
    <a href="<?php echo e(route('logout')); ?>" class="nav-item nav-link ">Cerrar Sesion <i class="fa-sharp fa-solid fa-right-from-bracket"></i></a>
<?php $__env->stopSection(); ?>
 
<?php $__env->startSection('content'); ?>
<div class="col-md-7">
        <h2>Proyecto UPDS</h2>
        <br>
        <h2>Ventas <span>Articulos</span></h2>
</div>
    <div class='jumbotrom'>

        <form method="POST" action="<?php echo e(route('venta.update', $ventas->id)); ?>" class='form-crear'>
            <input type="hidden" name="_token" value="<?php echo e(csrf_token()); ?>" />
            <input type="hidden" name="_method" value="PUT" />
                    
            <div class="mb-3">
                <label class="form-label">Nombre:</label>                
                <input type="text" name="user_id" class="form-control" value="<?php echo e($ventas->user_id); ?>"  placeholder="Nombre"/>

            </div>                   
            <div class="mb-3">
                <label class="form-label">Monto:</label>
                <input type="text" name="monto_total" class="form-control" value="<?php echo e($ventas->monto_total); ?>"  placeholder="Monto"/>                
            </div>                            
            <div class="mb-3">
                <input type="submit" class="btn btn-secondary" value="Actualizar">
            </div>                   
        </form>
        
 
    </div> 
<?php $__env->stopSection(); ?>
    
<?php echo $__env->make('layouts.inicio', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\laragon\www\laravel-upds-main\resources\views/venta/edit.blade.php ENDPATH**/ ?>