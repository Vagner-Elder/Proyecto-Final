<?php $__env->startSection('title', 'Crear Ventas'); ?>

<?php $__env->startSection('tit-section'); ?>
    Crear Ventas
<?php $__env->stopSection(); ?>
 
<?php $__env->startSection('btn_navegar'); ?>
    <a href="/articulo" class="nav-item nav-link ">Articulos</a>
    <a href="/venta" class="nav-item nav-link active">Ventas</a>
    <a href="/users" class="nav-item nav-link">Usuarios</a>  
<?php $__env->stopSection(); ?>
 
<?php $__env->startSection('content'); ?>
    
    <div id="app">

        
        <div class='jumbotrom'>        
            
            <form @submit.prevent="enviar" class=''>
                <?php echo csrf_field(); ?>
                <div class="mb-3">
                    <label class="form-label">Nombre del comprador</label>
                        <?php echo e(Form::select('user_id',$usuarios , null, ['class' => 'form-control'])); ?>

                        <div class="row">
                            <div class="col">
                                Producto
                            </div>
                            <div class="col">
                                Cantidad
                            </div>
                            <div class="col">
                                Costo
                            </div>
                            <div class="col">
                                Total
                            </div>
                        </div>    
                        <?php $__currentLoopData = $articulos; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $i=>$dato): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>   
                        
                        <div class="row">
                            <div class="col p-1">
                                <button type="button" class="btn btn-secondary position-relative">
                                    <?php echo e($dato->nombre); ?>

                                    <span class="position-absolute top-0 start-100 translate-middle p-2  rounded-circle">
                                        <span class="badge text-bg-dark"><?php echo e($dato->stock); ?></span>
                                    </span>
                                </button>
                                
                                <?php echo e(Form::checkbox('articulos[]',$dato->id,['class'=>'form-control'])); ?>

                                                                
                            </div>
                            <div class="col">                                
                                <input v-model="articles[<?php echo e($i); ?>].cantidad" 
                                v-on:change="calcularPrecio(articles[<?php echo e($i); ?>],articles[<?php echo e($i); ?>].cantidad,articles[<?php echo e($i); ?>].costo)" 
                                type="number" name="cantidad<?php echo e($dato->id); ?>">
                            </div>
                            <div class="col">                                                                
                                <input v-model="articles[<?php echo e($i); ?>].costo" 
                                v-on:change="calcularPrecio(articles[<?php echo e($i); ?>],articles[<?php echo e($i); ?>].cantidad,articles[<?php echo e($i); ?>].costo)" 
                                type="text" name="precio<?php echo e($dato->id); ?>">
                            </div>
                            <div class="col">                     
                                <input v-model="articles[<?php echo e($i); ?>].total"
                                type="text" disabled>
                            </div>
                        </div>                                                            
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                        <div class="row">
                            <h2>                                
                                <div class="col-10 text-end">
                                    total
                                </div>
                            </h2>
                        </div>                                                        
                </div>                   
                
                <div class="mb-3">                                       
                    <input type="submit">
                </div> 

                {{devolucion}}                
                <br>
                ______________________
                {{articles}}                  
                ______________________
                <br>
                
            </form>
        </div> 

        
    </div>

<script>
    new Vue({
        el: '#app',
        data: {                     
            articles: [
                <?php $__currentLoopData = $articulos; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $articulo): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                { 
                    id: <?php echo e($articulo->id); ?>,
                    nombre: "<?php echo e($articulo->nombre); ?>",
                    stock: <?php echo e($articulo->stock); ?>,
                    costo: <?php echo e($articulo->precio); ?>,
                    cantidad: 0,                    
                    total:0,
                },
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            ],
            devolucion:[],
        },
        methods: {
            calcularPrecio(i,cant,prec) {
                i.total=cant*prec;
                //this.articles['total']=cant;
            },
            enviar(){                
                
                axios.post('/venta',this.articles)
                .then(response => {                
                    this.devolucion=response.data
                })
                .catch(err => { 
                    // error 
                })
            }
        },
        computed:{
            calcularstock(){
                return 3*3;
            }
        }                        

    });
</script>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.inicio', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\laragon\www\TecnologiaWebII_Ene2023\laravel-upds-main\resources\views/venta/create.blade.php ENDPATH**/ ?>