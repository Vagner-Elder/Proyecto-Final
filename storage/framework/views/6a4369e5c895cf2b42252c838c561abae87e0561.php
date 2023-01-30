<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <title>
            <?php echo $__env->yieldContent('title'); ?>
            Proyecto UPDS
        </title>
       
        <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@100;300;400&display=swap" rel="stylesheet">
        <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" rel="stylesheet">
        <link rel="stylesheet" href="<?php echo e(asset('css/style.css')); ?>">
         <!-- VUE  -->
        <script src="https://cdn.jsdelivr.net/npm/vue@2/dist/vue.js"></script>
        <!-- AXIOS  -->
        <script src="https://cdn.jsdelivr.net/npm/axios/dist/axios.min.js"></script>
         <!-- ROUTE -->
         <script src="https://cdn.jsdelivr.net/npm/vue-router/dist/vue-router.js"></script>
    </head>

    <body>
    <?php $__env->startSection('sidebar'); ?>
        <div class="wrapper">
            <div class="header home">
                <div class="container-fluid">
                    <nav class="header-top row align-items-center" id='nav-head'>
                        <!--linea debajo-->
                        <div class="col-lg-3">
                            <div class="brand">
                                <p class='text-u' id='bag'>
                                    <?php echo $__env->yieldContent('tit-section'); ?>
                                </p>
                            </div>
                        </div>
                        <div class="col-lg-9">
                            <div class="navbar navbar-expand-lg bg-light navbar-light">
                                <div class="collapse navbar-collapse justify-content-between" id="navbarCollapse">
                                    <div class="navbar-nav ml-auto">
                                        <?php echo $__env->yieldContent('btn_navegar'); ?>                                   
                                    </div>
                                </div>
                            </div>
                        </div>
                    </nav>
    <?php echo $__env->yieldSection(); ?>      
                    <div class="hero row align-items-center">
                        <?php echo $__env->yieldContent('content'); ?>
                    </div>
                </div>
            </div>
            
            <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>
    </body>
</html>
<?php /**PATH C:\laragon\www\TecnologiaWebII_Ene2023\laravel-upds-main\resources\views/layouts/inicio.blade.php ENDPATH**/ ?>