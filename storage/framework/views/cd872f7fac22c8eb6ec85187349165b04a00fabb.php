  
  <?php $__env->startSection('content'); ?> 
                    <div class="col-md-12 main">
        <div class="content-top-1">
            
    <div id="mytoolbar"></div>
    <div class="mTop10">
    <form method="POST" action="/admin/<?php echo e($serv->id); ?>" enctype="multipart/form-data">
    <?php echo e(csrf_field()); ?>

    <br>
    <div class="form-group">
      <label for="exampleInputEmail1">Title</label>
      <input type="text" class="form-control" name="title" value="<?php echo e($serv->title); ?>"  >
    </div>
    <div class="form-group">
      <label for="exampleInputPassword1">Description</label>
    <textarea name="description" id="editor" style="visibility:visible" placeholder="<?php echo e($serv->description); ?>"><?php echo e($serv->description); ?></textarea>  
    </div>
    <div class="form-group">
        <label for="exampleInputFile">Image</label>
        <input type="file" name="image" value="<?php echo e($serv->image); ?>" >
    </div>
    <b>Add to Menu</b>
          <select name="menu" class="form-control">
                
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
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.admin', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>