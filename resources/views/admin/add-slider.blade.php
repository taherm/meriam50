@extends('layouts.admin')
@section('content')
<div class="col-md-9">
            <!-- Website Overview -->
            <div class="panel panel-default">
              <div class="panel-heading main-color-bg">
                <h3 class="panel-title">Add Slider</h3>
              </div>
              <div class="panel-body">
                
                <form method="POST" action="/admin/slider">
                {{ csrf_field() }}
    
    <div class="form-group">
        <label for="exampleInputFile">Image</label>
        <input type="file" name="image" >
    </div>
    
    
   <div>
    <button type="submit" class="btn btn-primary">Submit</button>
   </div>
                </form>
              </div>
              </div>

          </div>


          @endsection