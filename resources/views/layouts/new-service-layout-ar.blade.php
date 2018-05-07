@extends('layouts.master-ar')
@section('content')
    <section id="inner-headline">
      <div class="container">
        <div class="row">
          <div class="col-lg-7">
            <ul class="breadcrumb">

              <li class="active">
                <h2>
				{{$ser->title}}

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
									{!!$ser->description!!}
									</p>
</div>
<div class="col-lg-6">
<img src="{{asset('uploads/'.$ser->image)}}" class="img-responsive" alt="" />
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
    

@endsection
  