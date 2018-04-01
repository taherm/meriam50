@extends('layouts.admin')
@section('content')
<div class="col-md-9">
          <!-- Website Overview -->
          <div class="panel panel-default">
            <div class="panel-heading main-color-bg">
              <h3 class="panel-title">Pages</h3>
            </div>
            <div class="panel-body">
              <br>
              <table class="table table-striped table-hover">
                    <tr>
                      <th>Title</th>
                      
                      <th></th>
                    </tr>
                    @foreach($ser as $s)
                    <tr>
                      <td>{{$s->title}}</td>
                      <td><a class="btn btn-default" href="{{ url('admin/'.$s->id.'/edit') }}">Edit</a> </td>
                     <td> <form method="POST" action="/admin/{{$s->id}}">
										{{ csrf_field() }}
										<input name="_method" value="delete" type="hidden">
										<button class="btn btn-danger" type="submit">Delete</button>
									</form>
                  </td>
                    </tr>
                    @endforeach
                    
                  </table>
            
            </div>
            </div>

        </div>
        @endsection