@extends('layouts.master-en')
@section('content')
    <section id="inner-headline">
      <div class="container">
        <div class="row">
          <div class="col-lg-12">
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
	<img src="{{asset($ser->image)}}" alt="" />

    </div>
    <br>
    <div class="container">
	<p>
									{!!$ser->description!!}
									</p>
    </div>

@endsection
  