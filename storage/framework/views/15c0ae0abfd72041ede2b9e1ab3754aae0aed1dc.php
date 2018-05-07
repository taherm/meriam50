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
    <div class="row">
  <div class="col-md-4">
    <div class="thumbnail">
     
        <img src="<?php echo e(asset('uploads/1.jpeg')); ?>" alt="Lights" style="width:100%">
        <div class="caption">
        </div>
     </div>
  </div>
  <div class="col-md-4">
    <div class="thumbnail">
        <img src="<?php echo e(asset('uploads/2.jpeg')); ?>" alt="Nature" style="width:100%">
        <div class="caption">
        </div>
    </div>
  </div>
  <div class="col-md-4">
    <div class="thumbnail">
        <img src="<?php echo e(asset('uploads/3.jpeg')); ?>" alt="Fjords" style="width:100%">
        <div class="caption">
        </div>
    </div>
  </div>
</div>


<div class="row">
  <div class="col-md-4">
    <div class="thumbnail">
     
        <img src="<?php echo e(asset('uploads/4.jpeg')); ?>" alt="Lights" style="width:100%">
        <div class="caption">
        </div>
     </div>
  </div>
  <div class="col-md-4">
    <div class="thumbnail">
        <img src="<?php echo e(asset('uploads/5.jpeg')); ?>" alt="Nature" style="width:100%">
        <div class="caption">
        </div>
    </div>
  </div>
  <div class="col-md-4">
    <div class="thumbnail">
        <img src="<?php echo e(asset('uploads/6.jpeg')); ?>" alt="Fjords" style="width:100%">
        <div class="caption">
        </div>
    </div>
  </div>
</div>



<div class="row">
  <div class="col-md-4">
    <div class="thumbnail">
     
        <img src="<?php echo e(asset('uploads/7.jpeg')); ?>" alt="Lights" style="width:100%">
        <div class="caption">
        </div>
     </div>
  </div>
  <div class="col-md-4">
    <div class="thumbnail">
        <img src="<?php echo e(asset('uploads/8.jpeg')); ?>" alt="Nature" style="width:100%">
        <div class="caption">
        </div>
    </div>
  </div>
  <div class="col-md-4">
    <div class="thumbnail">
        <img src="<?php echo e(asset('uploads/10.jpeg')); ?>" alt="Fjords" style="width:100%">
        <div class="caption">
        </div>
    </div>
  </div>
</div>


<div class="row">
  <div class="col-md-4">
    <div class="thumbnail">
     
        <img src="<?php echo e(asset('uploads/9.jpeg')); ?>" alt="Lights" style="width:100%">
        <div class="caption">
        </div>
     </div>
  </div>
  
</div>



</div>
    

<?php $__env->stopSection(); ?>
  
<?php echo $__env->make('layouts.master-ar', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>