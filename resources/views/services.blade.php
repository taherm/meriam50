@extends('layouts.master-en')
@section('content')

    <section id="inner-headline">
      <div class="container">
        <div class="row">
          <div class="col-lg-12">
            <ul class="breadcrumb">

              <li class="active">
                <h2>
                  Services
                </h2>
              </li>
            </ul>
          </div>
        </div>
      </div>
    </section>
    <br>

    <div class="container">
      <h3 class="text-center">Reckon Services</h3>
      
    	
      <div class="row row-bottom-margin">
      @foreach($ser as $s)
        <div class="col-sm-4">
          <div class="image-flip" ontouchstart="this.classList.toggle('hover');">
            <div class="mainflip">
            <div class="frontside">
            <div class="card" style="width:20rem;">
            <img class="card-img-top" src="{{$s->image}}" alt="card image">
           
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