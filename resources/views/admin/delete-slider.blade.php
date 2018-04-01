@extends('layouts.admin')
@section('content')
<div class="col-md-9">
            <!-- Website Overview -->
            <div class="panel panel-default">
              <div class="panel-heading main-color-bg">
                <h3 class="panel-title">Delete Slider Image</h3>
              </div>
              <div class="panel-body">
                
              <form method="POST" action="/admin/del-slider">
       {{ csrf_field() }}
       <input name="_method" value="delete" type="hidden">
      
   
      <b>Slider Image</b>
             <select name="image" class="form-control">
                   
                   @foreach($slide as $item)
                  
                       <option value="{{$item->image}}">{{ $item->image }}</option>
                      
                       @endforeach
                  
               </select>
   
       <div>
       <button type="submit" class="btn btn-danger">Delete</button>
      </div>  
   </form>
</div>
              </div>

          </div>


          @endsection