<?php $__env->startSection('content'); ?>   
                    <div class="col-md-12 main">
        <div class="content-top-1">
            
    <div class="mTop10">
    <form method="POST" action="/admin" enctype="multipart/form-data">
                <?php echo e(csrf_field()); ?>

    <div class="form-group">
      <label for="exampleInputEmail1">Title</label>
      <input type="text" class="form-control" name="title"  >
    </div>
    <div class="form-group">
      <label for="exampleInputPassword1">Description</label>
    <textarea rows="2" cols="128" name="description" id="editor" ></textarea>  
    </div>
    <div class="form-group">
        <label for="exampleInputFile">Image</label>
        <input type="file" name="image" >
    </div>
    
    <b>Add to Menu</b>
          <select name="submenu" class="form-control">
               
                <?php $__currentLoopData = $cate; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
               
                    <option value="<?php echo e($item->title); ?>"><?php echo e($item->title); ?></option>
                   
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
               
            </select>

            


                 

   <div>
    <button type="submit" class="btn btn-primary">Submit</button>
   </div>
                </form>

    </div>

        </div>
    </div>

                <div class="clearfix"> </div>
                <?php echo $__env->make('layouts.errors', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.admin', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>