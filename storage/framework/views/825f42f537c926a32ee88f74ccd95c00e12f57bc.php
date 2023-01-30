<?php $__env->startSection('title', 'Crear Articulo'); ?>

<?php $__env->startSection('sidebar'); ?>
    <?php echo \Illuminate\View\Factory::parentPlaceholder('sidebar'); ?>   
    Crear Articulo
<?php $__env->stopSection(); ?>
 
<?php $__env->startSection('content'); ?>
    <div class='jumbotrom'>

        <form method="POST" action="<?php echo e(route('articulo.update', $articulo->id)); ?>">
            <input type="hidden" name="_token" value="<?php echo e(csrf_token()); ?>" />
            <input type="hidden" name="_method" value="PUT" />
                    
            <div class="mb-3">
                <label class="form-label">Nombre</label>                
                <input type="text" name="nombre" class="form-control" value="<?php echo e($articulo->nombre); ?>"  placeholder="Nombre"/>

            </div>                   
            <div class="mb-3">
                <label class="form-label">Color</label>
                <input type="text" name="color" class="form-control" value="<?php echo e($articulo->color); ?>"  placeholder="Color"/>                
            </div>                   
            <div class="mb-3">
                <label class="form-label">Precio</label>
                <input type="text" name="precio" class="form-control" value="<?php echo e($articulo->precio); ?>"  
                placeholder="Precio"/>                                
            </div>                   
            <div class="mb-3">
                <label class="form-label">Stock</label>
                <input type="text" name="stock" class="form-control" value="<?php echo e($articulo->stock); ?>"  placeholder="Stock"/>                
            </div>                   
            <div class="mb-3">
                <label class="form-label">Descripcion</label>
                
                <textarea class="form-control" rows="3" name="descripcion" value="<?php echo e($articulo->descripcion); ?>"></textarea>
            </div>                   
            <div class="mb-3">
                <input type="submit" class="btn btn-secondary" value="Actualizar">
            </div>                   
        </form>
        
 
    </div> 
<?php $__env->stopSection(); ?>
    
<?php echo $__env->make('layouts.admin', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\laragon\www\TecnologiaWebII_Ene2023\laravel-upds-main\resources\views/venta/edit.blade.php ENDPATH**/ ?>