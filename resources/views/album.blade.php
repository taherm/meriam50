@extends('layouts.master-ar')
@section('content')
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
     
        <img src="{{asset('uploads/1.jpeg')}}" alt="Lights" style="width:100%">
        <div class="caption">
        </div>
     </div>
  </div>
  <div class="col-md-4">
    <div class="thumbnail">
        <img src="{{asset('uploads/2.jpeg')}}" alt="Nature" style="width:100%">
        <div class="caption">
        </div>
    </div>
  </div>
  <div class="col-md-4">
    <div class="thumbnail">
        <img src="{{asset('uploads/3.jpeg')}}" alt="Fjords" style="width:100%">
        <div class="caption">
        </div>
    </div>
  </div>
</div>


<div class="row">
  <div class="col-md-4">
    <div class="thumbnail">
     
        <img src="{{asset('uploads/4.jpeg')}}" alt="Lights" style="width:100%">
        <div class="caption">
        </div>
     </div>
  </div>
  <div class="col-md-4">
    <div class="thumbnail">
        <img src="{{asset('uploads/5.jpeg')}}" alt="Nature" style="width:100%">
        <div class="caption">
        </div>
    </div>
  </div>
  <div class="col-md-4">
    <div class="thumbnail">
        <img src="{{asset('uploads/6.jpeg')}}" alt="Fjords" style="width:100%">
        <div class="caption">
        </div>
    </div>
  </div>
</div>



<div class="row">
  <div class="col-md-4">
    <div class="thumbnail">
     
        <img src="{{asset('uploads/7.jpeg')}}" alt="Lights" style="width:100%">
        <div class="caption">
        </div>
     </div>
  </div>
  <div class="col-md-4">
    <div class="thumbnail">
        <img src="{{asset('uploads/8.jpeg')}}" alt="Nature" style="width:100%">
        <div class="caption">
        </div>
    </div>
  </div>
  <div class="col-md-4">
    <div class="thumbnail">
        <img src="{{asset('uploads/10.jpeg')}}" alt="Fjords" style="width:100%">
        <div class="caption">
        </div>
    </div>
  </div>
</div>


<div class="row">
  <div class="col-md-4">
    <div class="thumbnail">
     
        <img src="{{asset('uploads/9.jpeg')}}" alt="Lights" style="width:100%">
        <div class="caption">
        </div>
     </div>
  </div>
  
</div>



</div>
    

@endsection
  