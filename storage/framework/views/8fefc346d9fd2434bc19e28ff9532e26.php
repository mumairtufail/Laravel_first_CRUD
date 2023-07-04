

<?php $__env->startSection('main'); ?>

<div class="container pt-5">
  <h2>Edit Categories </h2>
  <div class="col-sm-4">
   
  <form method= "POST" action="/category-update/<?php echo e($category->id); ?>">

    <?php echo csrf_field(); ?>
    <?php echo method_field('put'); ?>
    <label>Title</label>
    <input type="text" name="title" class="form-control" value="<?php echo e($category->title); ?>" />
    <button class="btn btn-info mt-4" type="submit">Update</button>
    </form>
  </div>
  
   
</div>

<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\LaravelCrud\resources\views/categories/edit.blade.php ENDPATH**/ ?>