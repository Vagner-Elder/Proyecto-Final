
<?php $__env->startSection('title', 'Usuarios'); ?>

<?php $__env->startSection('tit-section'); ?>
    Usuarios
<?php $__env->stopSection(); ?>

<?php $__env->startSection('btn_navegar'); ?>
    <a href="/articulo" class="nav-item nav-link">Articulos</a>
    <a href="/venta" class="nav-item nav-link">Ventas</a>
    <a href="/users" class="nav-item nav-link active">Usuarios</a>  
    <a href="/users/create" class="btn-primary" id='btn-new'>Crear Nuevo</a>
<?php $__env->stopSection(); ?>
 

<?php $__env->startSection('content'); ?>
    <div class='jumbotrom' id='table-content'>      
        <table class="table" id='tabla'>
            <thead>
                <tr class='col-name'>
                    <th scope="col">#</th>
                    <th scope="col">Nombre</th>
                    <th scope="col">Email</th>
                    <th scope="col">Contraseña</th>
                    <th scope="col">Opciones</th>
                </tr>
            </thead>
            <tbody>
        <?php $__currentLoopData = $usuarios; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $dato): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>                                    
            <tr class='col-text'>
                <th scope="row"><?php echo e($dato->id); ?></th>
                <td><?php echo e($dato->name); ?></td>
                <td><?php echo e($dato->email); ?></td>
                <td><?php echo e($dato->password); ?></td>
                <td>
                    
                    <a href="<?php echo e(route('users.edit', $dato->id)); ?> " class="btn-primary" id='edit'>Editar</a>                    

                    <form action="/users/<?php echo e($dato->id); ?>" method="post">
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
<?php echo $__env->make('layouts.inicio', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\laragon\www\TecnologiaWebII_Ene2023\laravel-upds-main\resources\views/users/index.blade.php ENDPATH**/ ?>