@extends('layouts.master-ar')
@section('content')



<section>
      <div class="container">
        <div class="row">
          <div class="col-lg-12">
          <img src="/img/services/mubarak2.jpg" float="left"/> 
          </div>
        </div>
      </div>
    </section>
  <br>
<div class="container">
<div id="myCarousel" class="carousel slide" data-ride="carousel">
    <!-- Indicators -->
  {{--  <ol class="carousel-indicators">
      <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
      <li data-target="#myCarousel" data-slide-to="1"></li>
      <li data-target="#myCarousel" data-slide-to="2"></li>
      <li data-target="#myCarousel" data-slide-to="3"></li>
    </ol>


--}}
    <!-- Wrapper for slides -->
    <div class="carousel-inner" role="listbox">
   
   @php
   $i=0;
   @endphp
    @foreach($slider as $slide)
    @php
    $ext = pathinfo($slide->image, PATHINFO_EXTENSION);
   
    @endphp
    @if ($i==0)
      <div class="item active">
      @php
      $i++;
      @endphp
    @else
      <div class="item">
      
    @endif
    @if($ext=='mp4')
    <video controls style="display:block;width:100%;height:450px;margin:0;">
        <source src="{{$slide->image }}" type="video/mp4">
      </video>
      @else
      <img src="{{$slide->image }}"
                                data-bgposition="center center"
                                data-bgfit="cover"
                                data-bgrepeat="no-repeat"
                        >
                        @endif                
                    
              
      </div>
      @endforeach  
      
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

<div class="container text-center">
<br>
  <p style="text-align: right; font-size: 18px; color: black !important;">يعد حفظ سجلات محاسبية دقيقة وشاملة جزءا ضروريا من ممارسة الأعمال والمشاريع التجارية ، لذلك فإن نجاح مشروعك يعتمد على
        تلك السجلات ، حيث أن السجلات المحاسبية تمكنك من قياس نبض مشروعك بدقة من خلال إكتشاف أي خلل في سير أعمال المشروع بهدف
        إتخاذ إجراءات التصحيح المناسبة قبل فوات الأوان .</p>
      <p style="text-align: right; font-size: 18px; color: black !important;">إن إمتلاك وتشغيل مشروعك التجاري يتطلب منك تنفيذ العديد من المهام والمسئوليات للحفاظ على نجاح عملك . في الوقت الذي تود
        أن تكون فيه مطلع على الكثير من مسئولياتك اليومية في مشروعك التجاري ، فإنه من المفيد الإستعانة بالمختصين في مجال إعداد
        وحفظ السجلات المحاسبية والإدارة المالية. هنا في شركة ريكين نختص في إعداد وحفظ السجلات المحاسبية. فريق عملنا سيمكنك
        من التفرغ والتركيز على إدارة مشروعك التجاري بينما نهتم نحن في التعامل مع الأرقام. مع خدمات ريكين لإعداد وحفظ السجلات
        المحاسبية ، يمكنك تحويل جهدك والتركيز على الأعمال الأخرى التي تحتاج منك القيام بها.</p>
      <p style="text-align: right; font-size: 18px; color: black !important;">لم يعد من الضروري بالنسبة لك توظيف محاسب بدوام كامل أو حتى بدوام جزئي ، من خلال الاستعانة بخدمات إعداد وحفظ السجلات
        المحاسبية من الشركات الإستشارية ستتاح لك فرصة خفض التكاليف وتوفير النفقات المتعلقة بالإدارة المالية كنفقات الموظفين
        بالإضافة إلى النفقات المتعلقة بالأنظمة والبرامج الآلية ، وسوف تستفيد من خبرات المحاسبين المحترفين والمؤهلين دون الحاجة
        إلى توظيفهم .</p>
  <br>
</div>




<div class="container">
      <h3 class="text-center">Courses</h3>
      
    	
      <div class="row row-bottom-margin">
      @foreach($ser as $s)
        <div class="col-sm-4">
          <div class="image-flip" ontouchstart="this.classList.toggle('hover');">
            <div class="mainflip">
            <div class="frontside">
            <div class="card" style="width:20rem;">
            <img class="card-img-top" src="{{$s->image}}" width="300px" height="190px" alt="card image">
           
            </div>
            </div>
            <div class="backside">
            <div class="card" style="width:20rem;">
            <div class="card-body">
            <h5>{{$s->title}}</h5>
            <a href="{{ url('services/'.$s->id) }}" class="btn btn-info btn-md text-center">Click Here</a>
            </div>
            
            </div>
            </div>
            </div>
            </div>
        </div>
        @endforeach
        
      </div>
    
     

    </div>

<div class="container">
        <p style="text-align: center; color: #5ea7da !important; font-size: 20px;">
            <strong>Instagram</strong>
          </p>
    
    <div id="instafeed"></div>
  </div>
  <br>


@endsection