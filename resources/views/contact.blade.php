@extends('layouts.master-en')
@section('content')
    <section id="inner-headline">
      <div class="container">
        <div class="row">
          <div class="col-lg-12">
            <ul class="breadcrumb">

              <li class="active">
                <h2>
                CONTACT US
                </h2>
              </li>
            </ul>
          </div>
        </div>
      </div>
    </section>
    <br>

    <div class="container">
      <form>
        <div class="form-group">
          <label for="exampleInputEmail1">Your Name(required)</label>
          <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="">
          </div>
          <br>
        <div class="form-group">
          <label for="exampleInputPassword1">Your Email(required)</label>
          <input type="password" class="form-control" id="exampleInputPassword1" placeholder="">
        </div>
        <br>
        <div class="form-group">
          <label for="exampleInputPassword1">Subject</label>
          <input type="password" class="form-control" id="exampleInputPassword1" placeholder="">
        </div><br>
       
        <div class="form-group">
          <label for="comment">Your Message</label>
          <textarea class="form-control" rows="5" id="comment"></textarea>
        </div> <br>
        <button type="submit" class="btn btn-primary">Submit</button>
      </form>
      <br>
      <p>(+965) 50009777<br />
        (+965) 50900922</p>
        <p>M.ALSABEA@KW-RECKON.COM<br />
        AMR.ABDOU@KW-RECKON.COM</p>
        <br>
      </div>
    
    
      @endsection