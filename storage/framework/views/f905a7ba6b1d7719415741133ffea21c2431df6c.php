<?php $__env->startSection('content'); ?>
<div class="col-md-12 main">
        <div class="content-top-1">
            
    <div class="mTop10">
    <form method="POST" action="/admin/del-slider">
       <?php echo e(csrf_field()); ?>

       <input name="_method" value="delete" type="hidden">
      
   
      <b>Slider Image</b>
             <select name="image" class="form-control">
                   
                   <?php $__currentLoopData = $slide; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                  
                       <option value="<?php echo e($item->image); ?>"><?php echo e($item->image); ?></option>
                      
                       <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                  
               </select>
   
       <div>
       <button type="submit" class="btn btn-danger">Delete</button>
      </div>  
   </form>

    </div>

        </div>
    </div>

                <div class="clearfix"> </div>


                <?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.admin', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>