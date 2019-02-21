<?php $__env->startSection('content'); ?>



<section>
      <div class="container">
        <div class="row">
          <div class="col-lg-12">
          <img src="<?php echo e(asset('/img/slider/homepage-banner.jpg')); ?>" float="left" class="img-responsive"/> 
          </div>
        </div>
      </div>
    </section>
  <br>
 
<div class="container">
<div id="myCarousel" class="carousel slide" data-ride="carousel">
    <!-- Indicators -->
  
    <!-- Wrapper for slides -->
    <div class="carousel-inner" role="listbox">
   
   <?php
   $i=0;
   ?>
    <?php $__currentLoopData = $slider; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $slide): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
    <?php
    $ext = pathinfo($slide->image, PATHINFO_EXTENSION);
   
    ?>
    <?php if($i==0): ?>
      <div class="item active">
      <?php
      $i++;
      ?>
    <?php else: ?>
      <div class="item">
      
    <?php endif; ?>
    <?php if($ext=='mp4'): ?>
    
    <iframe width="100%" height="350" src="https://www.youtube.com/embed/JBvD5Xs8U7E?rel=0" frameborder="0" allow="autoplay; encrypted-media" allowfullscreen></iframe>   
      <?php else: ?>
      <img src="<?php echo e(asset('storage/uploads/'.$slide->image)); ?>"
                                data-bgposition="center center"
                                data-bgfit="cover"
                                data-bgrepeat="no-repeat"
                        >
                        <?php endif; ?>                
                    
              
      </div>
      <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>  
      
</div>
    <!-- Left and right controls -->
    <a class="left carousel-control" href="#myCarousel" role="button" data-slide="prev">
      <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
      <span class="sr-only">Previous</span>
    </a>
    <a class="right carousel-control" href="#myCarousel" role="button" data-slide="next">
      <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
      <span class="sr-only">Next</span>
    </a>
</div>
</div>


<section>
      <div class="container">
        <div class="row">
          <div class="col-lg-12">
          <img src="<?php echo e(asset('/img/slider/io_at.jpg')); ?>" float="left" class="img-responsive"/> 
          </div>
        </div>
      </div>
    </section>



<div class="container text-center">
<br>
  <p style="text-align: center; font-size: 18px; color: black !important;"> نرحب بزيارتكم لموقع المدربة أ.مريم عبدالصمد ويسرنا أن نعرض لكم آخر الدورات والمؤلفات الخاصة بالمدربة. كما نرحب بتواصلكم معنا وإبداء </p>
    
     
      <p style="text-align: center; font-size: 18px; color: black !important;">اقتراحاتكم وآراءكم واستفساراتكم حول كل ما يخص مجال ذوي الإعاقة.</p>
  <br>
</div>




<div class="container">
<hr>
<p style="text-align: center; color: #5ea7da !important; font-size: 20px;">
            <strong> الدورات و المؤلفات</strong>
          </p>
          
      
    	
      <div class="row row-bottom-margin">
      <?php $__currentLoopData = $ser; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $s): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
        <div class="col-sm-12 col-md-4">
          <div class="image-flip" ontouchstart="this.classList.toggle('hover');">
            <div class="mainflip">
            <div class="frontside">
            <div class="card" style="width:20rem;">
            <img class="img-responsive card-img-top" height="auto" src="<?php echo e(asset('uploads/'.$s->image)); ?>" alt="card image">
           
            </div>
            </div>
            <div class="backside">
            <div class="card" style="width:20rem;">
            <div class="card-body">
            <center><h5 class="text-center"><?php echo e($s->title); ?></h5></center>
            <center><a href="<?php echo e(url('services/'.$s->id)); ?>" class="btn btn-info btn-md text-center">اضغط هنا</a></center>
            </div>
            
            </div>
            </div>
            </div>
            </div>
        </div>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        
      </div>
    
     

    </div>
    <br><br>

  <!--    <div class="container">
<hr>
        <p style="text-align: center; color: #5ea7da !important; font-size: 20px;">
            <strong>الانستقرام</strong>
          </p>
    
    <div id="instafeed"></div>
  </div>
  <br>
  <br><br>
    -->

<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.master-ar', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>