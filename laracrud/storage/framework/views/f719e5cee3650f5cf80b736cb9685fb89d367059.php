

<?php $__env->startSection('content'); ?>

    <h1 class="title"> Edit todos </h1>

    <form method="POST" action="/todos/<?php echo e($todos->id); ?>">

    <?php echo method_field('PATCH'); ?>
    <?php echo csrf_field(); ?>


        <div class="field">

            <label class="lable" for="name">Title</label>

            <div class="control">

                <input type="text" class="input" name="title" placeholder="Title" value="<?php echo e($todos->title); ?>" required>
        
            </div>
       
        </div>

        <div class="field">

                <label class="lable" for="description" name="description">Description </label>

                <div class="control">

                      <textarea class="textarea" name="desc" required ><?php echo e($todos->desc); ?> </textarea>

                </div>

        </div>

        <div class="field">

            <div class="control">

                <button type="submit" class="button is-link">Update Todo</button>

            </div>

        </div>

    </form>  

    <form method="POST" action="/todos/<?php echo e($todos->id); ?>">

    <?php echo method_field('DELETE'); ?>
    <?php echo csrf_field(); ?>


        <div class="field">

            <div class="control">

                <button type="submit" class="button is-link">Delete Todo</button>

            </div>

        </div>         

    </form>


 <?php $__env->stopSection(); ?>
<?php echo $__env->make('layout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\user\Desktop\laravel projects\laracrud\resources\views/todos/edit.blade.php ENDPATH**/ ?>