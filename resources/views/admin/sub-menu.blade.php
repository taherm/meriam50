@extends('layouts.admin')
@section('content')
<div class="col-md-9">
            <!-- Website Overview -->
            <div class="panel panel-default">
              <div class="panel-heading main-color-bg">
                <h3 class="panel-title">Create Sub-Menu</h3>
              </div>
              <div class="panel-body">
                
              <form method="POST" action="/sub-menu">
    {{ csrf_field() }}
    <div class="form-group">
      <label for="exampleInputEmail1">Menu Item</label>
      <input type="text" class="form-control" name="title"  >
    </div>
    
    

   <b>Submenu Item</b>
          <select name="submenu" class="form-control">
                <option value="None">None</option>
                @foreach($cate as $item)
               
                    <option value="{{$item->title}}">{{ $item->title }}</option>
                   
                    @endforeach
               
            </select>

    <div>
    <button type="submit" class="btn btn-primary">Submit</button>
   </div>
   
  
</form>
              </div>
              </div>

          </div>


          @endsection