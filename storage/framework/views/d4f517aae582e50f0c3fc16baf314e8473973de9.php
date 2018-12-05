<?php $__env->startSection('content'); ?>
    <section id="inner-headline">
      <div class="container">
        <div class="row">
          <div class="col-lg-7">
            <ul class="breadcrumb">

              <li class="active">
                <h2>
                البوم الصور
                </h2>
              </li>
            </ul>
          </div>
        </div>
      </div>
    </section>
    <br>




 <div class="container">
<?php 
$numOfCols = 3;
$rowCount = 0;
$bootstrapColWidth = 12 / $numOfCols;
?>
<div class="row">

<?php $__currentLoopData = $album; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $image): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
 
        <div class="col-md-<?php echo $bootstrapColWidth; ?>">
            <div class="thumbnail">
              
        <img src="<?php echo e(asset('uploads/'.$image->image)); ?>" style="width:100%">
     
              </div>
        </div>
<?php
    $rowCount++;
    if($rowCount % $numOfCols == 0) echo '</div><div class="row">';

?>
<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
</div>
</div>







    

<?php $__env->stopSection(); ?>
  
<?php echo $__env->make('layouts.master-ar', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>