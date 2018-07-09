<?php $__env->startSection('content'); ?>
<div class="col-md-12 main">
        <div class="content-top-1">
            
    <div class="mTop10">
        <form method="POST" action="/admin/album" enctype="multipart/form-data">
            <?php echo e(csrf_field()); ?>


        <div class="form-group">
            <span class="btn btn-default fileinput-button">
                <i class="glyphicon glyphicon-plus"></i>
                <span>Select Featured Image...</span>
                <!-- The file input field used as target for the file upload widget -->
                <input id="image" type="file" name="image" class="cover form-control">
            </span>
        </div>

        
        <div class="form-group">
            <input class="btn btn-primary form-control" type="submit" value="Save">
        </div>

        </form>

    </div>

        </div>
    </div>

                <div class="clearfix"> </div>

<?php echo $__env->make('layouts.errors', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
                <?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.admin', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>