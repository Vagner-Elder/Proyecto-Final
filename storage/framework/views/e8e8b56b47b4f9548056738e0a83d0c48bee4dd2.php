<?php $__env->startSection('title', 'ARTICULO'); ?>

<?php $__env->startSection('tit-section'); ?>
    Articulos
<?php $__env->stopSection(); ?>

<?php $__env->startSection('btn_navegar'); ?>
    <a href="/articulo" class="nav-item nav-link active">Articulos</a>
    <a href="/venta" class="nav-item nav-link">Ventas</a>
    <a href="/users" class="nav-item nav-link">Usuarios</a>  
    <a href="/articulo/create" class="btn-primary" id='btn-new'>Crear Nuevo</a>
<?php $__env->stopSection(); ?>
 

<?php $__env->startSection('content'); ?>
    <div class='jumbotrom' id='table-content'>      
        <table class="table" id='tabla'>
            <thead>
                <tr class='col-name'>
                    <th scope="col">#</th>
                    <th scope="col">Nombre</th>
                    <th scope="col">Precio</th>
                    <th scope="col">Color</th>
                    <th scope="col">Stock</th>
                    <th scope="col">Descripcion</th>
                    <th scope="col">Opciones</th>
                </tr>
            </thead>
            <tbody>
        <?php $__currentLoopData = $articulos; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $articulo): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>                                    
            <tr class='col-text'>
                <th scope="row"><?php echo e($articulo->id); ?></th>
                <td><?php echo e($articulo->nombre); ?></td>
                <td><?php echo e($articulo->precio); ?></td>
                <td><?php echo e($articulo->color); ?></td>
                <td><?php echo e($articulo->stock); ?></td>
                <td><?php echo e($articulo->descripcion); ?></td>
                <td>
                    
                    <a href="<?php echo e(route('articulo.edit', $articulo->id)); ?> " class="btn-primary" id='edit'>Editar</a>                    

                    <form action="/articulo/<?php echo e($articulo->id); ?>" method="post">
                        <?php echo method_field('DELETE'); ?>
                        <button type="submit" class=" btn-danger" id='del'>Eliminar</button>
                        <?php echo csrf_field(); ?>
                    </form>
                    
                
                </td>
            </tr>                
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>        
            </tbody>
        </table>
    </div> 
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.inicio', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\laragon\www\TecnologiaWebII_Ene2023\laravel-upds-main\resources\views/articulo/index.blade.php ENDPATH**/ ?>