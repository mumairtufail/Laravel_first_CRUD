

<?php $__env->startSection('main'); ?>

<div class="container">
  <h2>Categories <a class="btn btn-info" href="/category-create">New Category</a></h2>
  <?php if(session()->has('success')): ?>
  <div class="alert alert-info" role="alert">
    <strong><?php echo e(session()->get('success')); ?></strong>
  </div>
<?php endif; ?>

  <table class="table">
    <thead>
      <tr>
        <th>S.No</th>
        <th>Title</th>
        <th>Action</th>
      </tr>
    </thead>
    <tbody>
        <?php $__currentLoopData = $categories; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $category): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
      <tr>
        <td><?php echo e($loop->index+1); ?></td>
        <td><?php echo e($category->title); ?></td>
        <td>
        <a href="/category-edit/<?php echo e($category->id); ?>" class="btn btn-sm btn-info">Edit</a>
        <a href="/category-delete/<?php echo e($category->id); ?>" class="btn btn-sm btn-danger">Delete</a>
        </td>
      </tr>
      <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
    </thead>
</table>
</div>

<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\LaravelCrud\resources\views/categories/list.blade.php ENDPATH**/ ?>