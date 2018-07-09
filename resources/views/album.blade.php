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
@php 
$numOfCols = 3;
$rowCount = 0;
$bootstrapColWidth = 12 / $numOfCols;
@endphp
<div class="row">

@foreach($album as $image)
 
        <div class="col-md-<?php echo $bootstrapColWidth; ?>">
            <div class="thumbnail">
              
        <img src="{{asset('uploads/'.$image->image)}}" style="width:100%">
     
              </div>
        </div>
@php
    $rowCount++;
    if($rowCount % $numOfCols == 0) echo '</div><div class="row">';

@endphp
@endforeach
</div>
</div>







    

@endsection
  