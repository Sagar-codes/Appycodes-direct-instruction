

<?php $__env->startSection('content'); ?>

<h1 class="title" > Below is the all Todos </h1>

<h1 class="title" >Title:  <span style="color: blue;"><?php echo e($todos->title); ?></span> </h1>

<h1 class="title" >Description: <span style="color: blue;"><?php echo e($todos->desc); ?></span> </h1>

<p>

    <a href="/todos/<?php echo e($todos->id); ?>/edit"> Edit Todo </a>

</p>

<?php $__env->stopSection(); ?>
<?php echo $__env->make('layout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\user\Desktop\laravel projects\laracrud\resources\views/todos/show.blade.php ENDPATH**/ ?>