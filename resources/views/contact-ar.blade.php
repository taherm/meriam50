@extends('layouts.master-ar')
@section('content')

<section id="inner-headline">
      <div class="container">
        <div class="row">
          <div class="col-lg-7">
            <ul class="breadcrumb">

              <li class="active">
                <h2>

                  اتصل بنا

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
    <ul class="list list-icons list-icons-style-3 mt-4">
            <li><i class="fa fa-map-marker"></i> <strong>العنوان:</strong> <br> الكويت - شرق - شارع خالد بن الوليد - برج صوابر 6 - الدور الثالث مكتب 6</li>
            <hr> <li><i class="fa fa-phone"></i> <strong>موبايل:</strong><br><a href="{{url('https://api.whatsapp.com/send?phone=96598824010')}}">98824010(+965)</a></li>
            <hr><li><i class="fa fa-phone"></i> <strong>موبايل:</strong><br>94978803(+965)</li>
            
            
            <hr> <li><i class="fa fa-envelope"></i> <strong>البريد الإلكتروني:</strong> <br><a href="mailto:Mubarak@ideasowners.net">Mubarak@ideasowners.net</a></li>
        </ul>

        <hr>

        
        <ul class="list list-icons list-dark mt-4">
            <li><i class="fa fa-clock-o"></i>مواعيد العمل:<br>
            الأحد - الخميس 5م إلى 9:30م</li>
           
           
        </ul>
      <br>
      </div>
      <div class="col-lg-6>"
    <div class="map">
							<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3476.7637540973074!2d47.98250041509965!3d29.37720578213006!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3fcf849441e71957%3A0x5917ce3248898c70!2sSAWABER+6+Building!5e0!3m2!1sen!2skw!4v1517997257932" width="400" height="400" frameborder="0" style="border:0" allowfullscreen></iframe>
					</div>
      <br>
      </div>
      </div>
      
    </div>

 @endsection