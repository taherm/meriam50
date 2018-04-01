@extends('layouts.master-en')
@section('content')
<section id="inner-headline">
    <div class="container">
      <div class="row">
        <div class="col-lg-12">
          <ul class="breadcrumb">
            
            <li class="active"><h2>HOME</h2></li>
          </ul>
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
    @if ($i==0)
      <div class="item active">
      @php
      $i++;
      @endphp
    @else
      <div class="item">
      
    @endif
      <img src="{{$slide->image }}"
                                data-bgposition="center center"
                                data-bgfit="cover"
                                data-bgrepeat="no-repeat"
                        >
                        
                    
              
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

  <p>

    Maintaining an accurate accounting record is critical part of any business, so the success of your business depends on those records. Accounting records help you evaluate your business performance by identifying any weakness in the operation this allowing you to take timely corrective action.
    
    Owning and operating your own business requires you to perform many tasks to keep your business operating well. While you need to stay involved in many of the day-to-day responsibilities of your business, it can be advantageous to outsource the accounting and bookkeeping work to experts. Bookkeeping services are our specialty here at Reckon. Our bookkeepers will enable you to focus on running your business while we keep track of the numbers. With Reckon bookkeeping services, you can turn your attention to other work that needs to get done.
    
    It’s no longer necessary for you to hire an accountant full time or even part-time, through outsourcing the bookkeeping services from consulting firms you will have the opportunity to save costs related to finance department such as staff cost as well as costs related to the systems and software, and you will easy access the expertise of qualified accountants without having to hire them.
    </p>
  <br>
</div>




<div class="container">
      <h3 class="text-center">Reckon Services</h3>
      
    	
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



@endsection