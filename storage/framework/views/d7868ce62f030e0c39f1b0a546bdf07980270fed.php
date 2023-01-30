<?php $__env->startSection('title', 'Ventas'); ?>

<?php $__env->startSection('tit-section'); ?>
    Ventas
<?php $__env->stopSection(); ?>

<?php $__env->startSection('btn_navegar'); ?>
    <a href="/articulo" class="nav-item nav-link ">Articulos</a>
    <a href="/venta" class="nav-item nav-link active">Ventas</a>
    <a href="/users" class="nav-item nav-link">Usuarios</a>  
    <a href="<?php echo e(route('logout')); ?>" class="nav-item nav-link ">Cerrar Sesion <i class="fa-sharp fa-solid fa-right-from-bracket"></i></a>
<?php $__env->stopSection(); ?>
 
 
<?php $__env->startSection('content'); ?>
<div class="div-index">
    <div id="div1" class="nav-item nav-link">
        <p class="nav-item nav-link" id="create-new1">Bienvenido &nbsp; <?php if(auth()->guard()->check()): ?>
           "<?php echo e(Auth::user()->name); ?>"
          <?php endif; ?></p>
    </div>

    <div id="div2" class="nav-item nav-link">
         <a href="/venta/create" class="nav-item nav-link " id="create-new"><i class="fa-solid fa-cart-plus"></i></i>&nbsp; Agregar Nuevo </a>
    </div>
</div>
    <div class='jumbotrom' id='table-content'>                
        <table class="table" id='tabla'>
            <thead>
                <tr class='col-name'>
                    <th scope="col">#</th>
                    <th scope="col">Nombre</th>   
                    <th scope="col">Articulos</th>
                    <th scope="col">Cantidad</th> 
                    <th scope="col">Total</th>                     
                    <th scope="col">Opciones</th>
                </tr>
            </thead>
            <tbody>
            <?php $__currentLoopData = $ventas; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $dato): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>                                    
            <tr class='col-text'>
                <th scope="row"><?php echo e($dato->id); ?></th>
                <td><?php echo e($dato->name); ?></td>
                <td>
                    <?php $__currentLoopData = $dato->articulos; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $art): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <?php echo e($art->nombre); ?> <br>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                </td>
                <td>
                    <?php $__currentLoopData = $dato->articulos; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $art): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <?php echo e($art->pivot->cantidad); ?> <br>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                </td>
                <td><?php echo e($dato->monto_total); ?></td>                                
                <td>
                   <a href="<?php echo e(route('venta.edit', $dato->id)); ?> " class=" btn-primary" id='edit'>Editar</a>
                    <form action="/venta/<?php echo e($dato->id); ?>" method="post">
                        <?php echo method_field('DELETE'); ?>
                        <button type="submit" class=" btn-danger" id='del'>Eliminar</button>
                        <?php echo csrf_field(); ?>
                    </form>
                    <a href="<?php echo e(route('pdf1', $dato->id)); ?>" class="btn-primary" id="btn-pdf">Detalles PDF</a>
                </td>
            </tr>                
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>        
            </tbody>
        </table>
        </ul>
    </div> 
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.inicio', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\laragon\www\laravel-upds-main\resources\views/venta/index.blade.php ENDPATH**/ ?>