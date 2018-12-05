@extends('layouts.master-ar')
@section('content')



<section>
      <div class="container">
        <div class="row">
          <div class="col-lg-12">
          <img src="{{asset('/img/slider/Header.jpg')}}" float="left" class="img-responsive"/> 
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
    
    <iframe width="100%" height="350" src="https://www.youtube.com/embed/djUCyQeLfzE?rel=0" frameborder="0" allow="autoplay; encrypted-media" allowfullscreen></iframe>   
      @else
      <img src="{{asset('storage/uploads/'.$slide->image)}}"
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
  <p style="text-align: center; font-size: 18px; color: black !important;"> نرحب بزيارتكم لموقع المدرب مبارك السماعيل ويسرنا أن نعرض لكم آخر الدورات والمؤلفات الخاصة بالمدرب. كما نرحب بتواصلكم معنا وإبداء </p>
    
     
      <p style="text-align: center; font-size: 18px; color: black !important;">اقتراحاتكم وآراءكم واستفساراتكم حول كل ما يخص مجال المشاريع الصغيرة و المتوسطة.</p>
  <br>
</div>




<div class="container">
<hr>
<p style="text-align: center; color: #5ea7da !important; font-size: 20px;">
            <strong> الدورات و المؤلفات</strong>
          </p>
          
      
    	
      <div class="row row-bottom-margin">
      @foreach($ser as $s)
        <div class="col-sm-12 col-md-4">
          <div class="image-flip" ontouchstart="this.classList.toggle('hover');">
            <div class="mainflip">
            <div class="frontside">
            <div class="card" style="width:20rem;">
            <img class="img-responsive card-img-top" height="auto" src="{{asset('uploads/'.$s->image)}}" alt="card image">
           
            </div>
            </div>
            <div class="backside">
            <div class="card" style="width:20rem;">
            <div class="card-body">
            <center><h5 class="text-center">{{$s->title}}</h5></center>
            <center><a href="{{ url('services/'.$s->id) }}" class="btn btn-info btn-md text-center">اضغط هنا</a></center>
            </div>
            
            </div>
            </div>
            </div>
            </div>
        </div>
        @endforeach
        
      </div>
    
     

    </div>
    <br><br>

<div class="container">
<hr>
        <p style="text-align: center; color: #5ea7da !important; font-size: 20px;">
            <strong>الانستقرام</strong>
          </p>
    
    <div id="instafeed"></div>
  </div>
  <br>
  <br><br>

@endsection