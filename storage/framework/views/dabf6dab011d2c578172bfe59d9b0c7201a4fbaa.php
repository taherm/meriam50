<?php $__env->startSection('content'); ?>
    <section id="inner-headline">
      <div class="container">
        <div class="row">
          <div class="col-lg-7">
            <ul class="breadcrumb">

              <li class="active">
                <h2>
				<?php echo e($ser->title); ?>


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
    <div class="col-lg-6">
    <p>
									<?php echo $ser->description; ?>

									</p>
</div>
<div class="col-lg-6">
<img src="<?php echo e(asset('uploads/'.$ser->image)); ?>" class="img-responsive" alt="" />
<br>
<div class="row">
<div class="col-lg-6">
<a href="/reserve-courses" style="width:100%;" class="btn btn-primary btn-lg">لحجز الدورة</a>
</div>
<div class="col-lg-6">

<a href="/reserve-consultant" style="width:100%;" class="btn btn-primary btn-lg">لحجز استشارة</a>
</div>
</div>
</div>
</div>

</div>
</div>
    <br>
    

<?php $__env->stopSection(); ?>
  
<?php echo $__env->make('layouts.master-ar', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>