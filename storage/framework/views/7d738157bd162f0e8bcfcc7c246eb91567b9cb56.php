<?php $__env->startSection('content'); ?>

<section id="inner-headline">
  <div class="container">
    <div class="row">
      <div class="col-lg-7">
        <ul class="breadcrumb">

          <li class="active">
            <h2>

              اتصل بنا

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
      <ul class="list list-icons list-icons-style-3 mt-4">
        <li><i class="fa fa-map-marker"></i> <strong>العنوان:</strong><!-- <br> الكويت - شرق - شارع خالد بن الوليد - برج صوابر 6 - الدور الثالث مكتب 6 -->
        </li>
        <hr>
        <li><i class="fa fa-phone"></i> <strong>موبايل:</strong><!-- <br><a href="<?php echo e(url('https://api.whatsapp.com/send?phone=96598824010')); ?>">98824010(+965)</a> -->
        </li>
        <hr>
        <li><i class="fa fa-phone"></i> <strong>موبايل:</strong>
          <!--<br>94978803(+965) -->
        </li>


        <hr>
        <li><i class="fa fa-envelope"></i> <strong>البريد الإلكتروني:</strong><!-- <br><a href="mailto:Mubarak@ideasowners.net">Mubarak@ideasowners.net</a> -->
        </li>
      </ul>

      <hr>


      <br>
    </div>
    <div class="col-lg-6">
    <img src="<?php echo e(asset('uploads/contact-image.jpeg')); ?>" class="img-responsive" alt="" />

    </div>
  </div>

</div>

<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.master-ar', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>