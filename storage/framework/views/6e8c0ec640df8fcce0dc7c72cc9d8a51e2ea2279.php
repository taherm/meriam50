    
<?php $__env->startSection('content'); ?>
                    <div class="col-md-12 main">
        <div class="content-top-1">
                <div>
        <div class="col-md-10">
            <h1>Pages</h1>
        </div>
        <div class="col-md-2">
            <a class="btn btn-success btn-lg" role="button" href="/admin/create-page"> Add Page</a>
        </div>
    </div>
    <div class="space"></div>
    <hr>
    <div class="panel-body">

        <div class="dataTable_wrapper">

            <table class="table table-striped table-bordered table-hover" >
                <thead>
                <tr>
                    <th>ID</th>
                    <th>Title</th>
                    
                    <th>Date</th>
                    <th>Edit</th>
                    <th>Delete</th>
                </tr>
                </thead>
                <tbody>
                <?php $__currentLoopData = $ser; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $s): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                    <tr class="gradeU">
                        <td><?php echo e($s->id); ?> </td>
                        <td><?php echo e($s->title); ?> </td>
                        
                        <td><?php echo e($s->created_at); ?></td>
                        
                        <td> <a class="btn btn-default" href="<?php echo e(url('admin/'.$s->id.'/edit')); ?>">Edit</a> </td>
                     <td> <form method="POST" action="/admin/<?php echo e($s->id); ?>" class="delete">
										<?php echo e(csrf_field()); ?>

										<input name="_method" value="delete" type="hidden">
										<button class="btn btn-danger" type="submit">Delete</button>
									</form>
                        </td>
                    </tr>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>               
                                </tbody>
            </table>
        </div>

        <div class="text-center"></div>

        <div class="modal fade" id="deleteModalBox">
    <div class="modal-dialog modal-sm">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span
                            aria-hidden="true">&times;</span></button>
                <h4 class="modal-title">Delete Article </h4>
            </div>
            <div class="modal-body">
                <div class="inner-xs text-center">
                    Are you sure? ?
                </div>
            </div>
            <div class="modal-footer">
                <form method="POST" action="http://drwejdan.ideasowners.net" accept-charset="UTF-8" id="deleteModal"><input name="_method" type="hidden" value="DELETE"><input name="_token" type="hidden" value="wwUlpaCjm0IjHulPEi1xt0mhfH0FfrZVpCedRa9z">
                <button type="button" class="btn btn-default" data-dismiss="modal">Cancel</button>
                <button type="submit" class="btn btn-danger" >Yes</button>
                </form>
            </div>
        </div>
    </div>
</div>


    </div>

        </div>
    </div>

                <div class="clearfix"> </div>

        <?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.admin', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>