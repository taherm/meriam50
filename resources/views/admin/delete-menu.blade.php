@extends('layouts.admin')
@section('content')
<div class="col-md-9">
            <!-- Website Overview -->
            <div class="panel panel-default">
              <div class="panel-heading main-color-bg">
                <h3 class="panel-title">Delete Menu</h3>
              </div>
              <div class="panel-body">
                
              <form method="POST" action="/del">
       {{ csrf_field() }}
       <input name="_method" value="delete" type="hidden">
      
   
      <b>Menu Item</b>
             <select name="submenu" class="form-control">
                   
                   @foreach($cate as $item)
                  
                       <option value="{{$item->title}}">{{ $item->title }}</option>
                      
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