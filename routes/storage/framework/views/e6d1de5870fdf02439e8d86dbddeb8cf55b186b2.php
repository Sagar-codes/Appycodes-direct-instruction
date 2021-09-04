<!DOCTYPE html>
<html lang="<?php echo e(str_replace('_', '-', app()->getLocale())); ?>">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Laravel</title>

    <link rel="stylesheet" href="<?php echo e(asset('css/styles.css')); ?>">


    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet" </head>

<body>

    <div class="background">
        <h1>Welcome to the Home page</h1>
        <button id="hit">Hit Me!</button>
        <hr>
        <h1>Routes</h1>
        <p>"/" ->For Home page</p>
        <p> <a href="getemployees">getemployees</a>  -> To get all the employees data</p>
        <p> <a href="getcompanies">getcompanies</a> -> To get all the companies data </p>
        <p>"joineddata/{id}" -> To get the specific joined data of the employees.id passed by user</p>
        <hr>

        <h1>The data Manually passed from controller to view</h1>
            <?php $__currentLoopData = $data; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $items): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <p><?php echo e($items); ?></p>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

    </div>



    <script type="text/javascript" src="<?php echo e(asset('js/')); ?>/index.js" defer></script>
    <!-- linking the js file in laravel 8 does'nt support  -->
</body>

</html><?php /**PATH C:\Users\user\Desktop\laravel projects\routes\resources\views/welcome.blade.php ENDPATH**/ ?>