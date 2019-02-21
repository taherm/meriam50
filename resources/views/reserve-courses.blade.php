@extends('layouts.master-ar')
@section('content')
<section id="inner-headline">
  <div class="container">
    <div class="row">
      <div class="col-lg-7">
        <ul class="breadcrumb">

          <li class="active">
            <h2>
              لحجز الدورات

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
      <form action="{{url('/reserve')}}" method="POST">
        {{ csrf_field() }}
        <div class="form-group">
          <label for="example-text-input" class="col-2 col-form-label">الاسم</label>
          <input class="form-control" type="text" name="name" id="example-text-input">
        </div>
        <br>
        <div class="form-group">
          <label for="exampleInputEmail1">البريد الإلكتروني</label>
          <input type="email" class="form-control" name="email" id="exampleInputEmail1" aria-describedby="emailHelp">

        </div>
        <br>
        <div class="form-group">
          <label for="exampleSelect1">قم بإختيار الدورة التدريبية</label>
          <select class="form-control" id="exampleSelect1" name="select">
            <option>التعامل مع ذوي الاحتياجات الخاضة </option>

            <option> إتيكيت التعامل مع ذوي الاحتياجات الخاصة </option>

          </select>
        </div>
        <br>
        <div class="form-group">
          <label for="example-text-input" class="col-2 col-form-label">موبايل</label>
          <input class="form-control" type="text" name="mobile" id="example-text-input">
        </div>
        <br>
        <div class="form-group">
          <label for="exampleTextarea">ملاحظات</label>
          <textarea class="form-control" name="notes" id="exampleTextarea" rows="3"></textarea>
        </div>
        <br>
        <button type="submit" class="btn btn-primary">ارسال</button>
      </form>
      <br>
      <br>
    </div>

  </div>
</div>

@endsection