<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<style>
    .tit-detalle{
       width:100%;
    }
    .filas{
        width:25%;
        color:#FFD662;
        font-size:25px;
        font-weight:700;
        text-align:center;
        background-color:#00539C ;
    }
    .col{
        width:25%;
        color:#00539C;
        font-size:20px;
        text-align:center;
    }
    .col-es{
        margin-top:15px;
    }
</style>
<body>

    
    <table class="tit-detalle" > 
        <th>
            <tr>
            <td class="filas">Nombre us</td>
                <td class="filas">Id</td>
                <td class="filas">Nombre</td>
                <td class="filas">Cantidad</td>
                <td class="filas">Precio</td>
                <td class="filas">Total</td>
            </tr>

        </th>
        <tbody>
  
            <?php $__currentLoopData = $detalles; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $detalle): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            
                <tr class="col-es">
                <td class="col"><?php echo e($detalle->users->name); ?></td>
                    <td class="col"><?php echo e($detalle->id); ?></td>
                    <td class="col"><?php echo e($detalle->nombre); ?></td>
                    <td class="col"><?php echo e($detalle->pivot->cantidad); ?></td>
                    <td class="col"><?php echo e($detalle->precio); ?></td>     
                    <td class="col"><?php echo e($detalle->pivot->total); ?></td>               
                </tr>


            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            
        </tbody>

    </table>
        
    
    
</body>
</html><?php /**PATH C:\laragon\www\laravel-upds-main\resources\views/venta/pdf1.blade.php ENDPATH**/ ?>