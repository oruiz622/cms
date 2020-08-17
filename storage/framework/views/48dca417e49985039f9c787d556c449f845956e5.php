<?php $__env->startSection('content'); ?>
   <div class="card card-default">
       <div class="card-header">Create Category</div>
       <div class="card-body">
           <?php if($errors->any()): ?>
               <div class="alert alert-danger">
                   <ul class="list-group">
                       <?php $__currentLoopData = $errors->all(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $error): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                           <li class="list-group-item text-danger">
                               <?php echo e($error); ?>

                           </li>
                       <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                   </ul>
               </div>
           <?php endif; ?>
           <form action="<?php echo e(route('categories.store')); ?>" method="post">
               <?php echo csrf_field(); ?>
               <div class="form-group">
                   <label for="name">Name</label>
                   <input type="text" id="name" name="name" class="form-control">
               </div>
               <div class="form-group">
                   <button class="btn btn-success">Add Category</button>
               </div>
           </form>
       </div>
   </div>



<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/vagrant/code/cms/resources/views/categories/create.blade.php ENDPATH**/ ?>