

<?php $__env->startSection('main'); ?>

<div class="container pt-5">
  <h2>New Categories </h2>
  <div class="col-sm-4">
   
  <form method= "POST" action="/category-store">
    <?php echo csrf_field(); ?>
    <label>Title</label>
    <input type="text" name="title" class="form-control" />
    <?php if($errors->has('title')): ?>
    <p class="text-danger"><?php echo e($errors->first('title')); ?></p>
    <?php endif; ?>

    <button class="btn btn-info mt-4" type="submit">Create</button>
    </form>
  </div>
  
   
</div>

<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\LaravelCrud\resources\views/categories/new.blade.php ENDPATH**/ ?>