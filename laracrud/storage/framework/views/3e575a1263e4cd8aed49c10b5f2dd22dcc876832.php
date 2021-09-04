

<?php $__env->startSection('content'); ?>

</<!DOCTYPE html>
<html>
<head>
   
</head>
<body>
 
<h1 class="title">All Information About Todos</h1>

<p>

    <a href="/todos/create"> Create a new Todo </a>

</p>
 
<?php $__currentLoopData = $todos; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $todo): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
<li> 

    <a href="/todos/<?php echo e($todo->id); ?>"><?php echo e($todo->title); ?> -> <span><?php echo e($todo->desc); ?></span></a>

</li>
<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
 
 
</body>
</html>


<?php $__env->stopSection(); ?>
<?php echo $__env->make('layout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\user\Desktop\laravel projects\laracrud\resources\views/todos/index.blade.php ENDPATH**/ ?>