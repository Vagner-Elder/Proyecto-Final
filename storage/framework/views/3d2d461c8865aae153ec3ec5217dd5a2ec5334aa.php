<?php $__env->startSection('title', 'Crear Articulo'); ?>

<?php $__env->startSection('tit-section'); ?>
    Crear Articulos
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
        <form method="POST" action="/articulo" class='form-crear'>
            <?php echo csrf_field(); ?>
            <div class="mb-3">
                <label class="form-label">Nombre:</label>
                <input type="text" name='nombre' class="form-control" placeholder="Nombre">
            </div>                   
            <div class="mb-3">
                <label class="form-label">Color:</label>
                <input type="text" name='color' class="form-control" placeholder="Color">
            </div>                   
            <div class="mb-3">
                <label class="form-label">Precio:</label>
                <input type="text" name='precio' class="form-control" placeholder="Precio">
            </div>                   
            <div class="mb-3">
                <label class="form-label">Stock:</label>
                <input type="text" name='stock' class="form-control" placeholder="Stock">
            </div>                   
            <div class="mb-3">
                <label class="form-label">Descripcion:</label>
                <textarea class="form-control" name='descripcion' rows="2"></textarea>            
            </div>                   
            <div class="mb-3">
                <input type="submit" class="btn btn-primary" value="Guardar">
            </div>                   
        </form>
    </div> 
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.inicio', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\laragon\www\TecnologiaWebII_Ene2023\laravel-upds-main\resources\views/articulo/create.blade.php ENDPATH**/ ?>