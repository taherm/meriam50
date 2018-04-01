@extends('layouts.admin')
@section('content')
<div class="col-md-9">
            <!-- Website Overview -->
            <div class="panel panel-default">
              <div class="panel-heading main-color-bg">
                <h3 class="panel-title">Edit Page</h3>
              </div>
              <div class="panel-body">
                
    <form method="POST" action="/admin/{{$serv->id}}">
    {{ csrf_field() }}
    <br>
    <div class="form-group">
      <label for="exampleInputEmail1">Title</label>
      <input type="text" class="form-control" name="title" value="{{$serv->title}}"  >
    </div>
    <div class="form-group">
      <label for="exampleInputPassword1">Description</label>
    <textarea name="description" id="editor" placeholder="{{$serv->description}}" ></textarea>  
    </div>
    <div class="form-group">
        <label for="exampleInputFile">Image</label>
        <input type="file" name="image" value="{{$serv->image}}" >
    </div>
   <div>
    <button type="submit" class="btn btn-primary">Submit</button>
   </div>  
</form>
</div>
              </div>

          </div>


          @endsection