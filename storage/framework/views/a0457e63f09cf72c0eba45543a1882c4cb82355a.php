
<?php $__env->startSection('title', 'Menu'); ?>

<?php $__env->startSection('tit-section'); ?>
    Proyecto UPDS
<?php $__env->stopSection(); ?>

<?php $__env->startSection('btn_navegar'); ?>
   <div  >
      <div id="div-icon-name" class="nav-item nav-link"><i class="fa-solid fa-user"></i></div>
      <div id="div-name-user" class="nav-item nav-link">
        <h3>
          <?php if(auth()->guard()->check()): ?>
            <?php echo e(Auth::user()->name); ?>

          <?php endif; ?>
        </h3>
      </div>
   </div>
   <a href="<?php echo e(route('logout')); ?>" class="nav-item nav-link ">Cerrar Sesion <i class="fa-sharp fa-solid fa-right-from-bracket"></i></a>
<?php $__env->stopSection(); ?>

<?php $__env->startSection('content'); ?>
<div id="introblocks" class="bloce">
    <ul class="nospace group btmspace-80 elements elements-four" id="unic">
        <li class="one_quarter" id="ulf">
          <article><a href="/users"><i class="fas fa-user"></i></a>
            <h6 class="heading">USUARIOS</h6>
            <p>Crea, registra, actualiza y elimina usuarios.</p>
          </article>
        </li>
        <li class="one_quarter">
          <article><a href="/articulo"><i class="fas fa-pen-to-square"></i></a>
            <h4 class="heading">ARTICULOS</h4>
            <p>Crea, registra, actualiza y elimina articulos.</p>
          </article>
        </li>
        <li class="one_quarter">
          <article><a href="venta"><i class="fas fa-bag-shopping"></i></a>
            <h6 class="heading">VENTAS</h6>
            <p>Crea, registra, actualiza y elimina ventas.</p>
          </article>
        </li>       
    </ul>
</div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.inicio', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\laragon\www\laravel-upds-main\resources\views/layouts/menu.blade.php ENDPATH**/ ?>