@extends('layouts.master-ar')
@section('content')
<section id="inner-headline">
  <div class="container">
    <div class="row">
      <div class="col-lg-7">
        <ul class="breadcrumb">

          <li class="active">
            <h2>
              خدمات الاستشارات

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

    <div class="col-lg-6" style="padding-left: 40px;
padding-right: 40px;">
      <h5> أ.مريم عبدالصمد</h5>
      <br>
      <p>
        الأستاذة مريم عبدالصمد مختصة في لغة الإشارة والتعامل مع ذوي الاحتياجات الخاصة </p>
      <p>
        نحرص على تقديم دورات ومحاضرات لذوي الإعاقة وهي مدربة معتمدة بمجال التعامل مع ضوي الإعاقة <br>
      </p>



      </p>

     <!-- <h5>
        احجز استشارتك وتبادل الخبرات
      </h5>
      <p>استشارة واحدة : لمدة ساعتين بقيمة 50 د.ك.
      </p>

      <p>
        عدد 3 جلسات تشمل بقيمة 120 د.ك :-</p>
      <ul>
        <li>
          فتح الملف </li>
        <li>
          التوجية المتابعة ما بين كل جلسة </li>
        <li>
          مدة الاستشارة : ساعة </li>
        <li>
          النطاق : يشمل مشروع واحد فقط </li>
        <li>
          المدة : 3 شهور كحد أقصى </li>

      </ul>
      <p>
        عدد 6 جلسات تشمل بقيمة 250 د.ك :-</p>
      <ul>
        <li>
          فتح الملف </li>
        <li>
          التوجية المتابعة ما بين كل جلسة </li>
        <li>
          مدة الاستشارة : ساعة </li>
        <li>
          النطاق : يشمل مشروع واحد فقط </li>
        <li>
          المدة : 3 شهور كحد أقصى </li>
      </ul>

-->

    </div>
    <div class="col-lg-6">
      <form action="{{url('/consultancy')}}" method="POST">
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
            <option>استشارة مرة واحدة</option>
           

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
    </div>

  </div>
</div>

<br>
<br>
<br>


@endsection