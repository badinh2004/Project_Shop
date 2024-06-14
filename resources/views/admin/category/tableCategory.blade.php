@extends('admin.main-admin')
@section('main_admin')
<div class="col-xs-12">
    <div class="box">
      <div class="box-header">
     <a href="{{route('category.create')}}" class="btn btn-success">+ADD Category </a>

        <div class="box-tools">
          <div class="input-group input-group-sm" style="width: 150px;">
            <input type="text" name="table_search" class="form-control pull-right" placeholder="Search">

            <div class="input-group-btn">
              <button type="submit" class="btn btn-default"><i class="fa fa-search"></i></button>
            </div>
          </div>
        </div>
      </div>
      <!-- /.box-header -->
      <div class="box-body table-responsive no-padding">
        <table class="table table-hover">
          <tbody><tr>
            
            <th>Name Category</th>
            <th>Created_at</th>
            <th>Update_at</th>    
            <th>Action</th>
          </tr>
          @foreach ($category as $value)
          <tr>
            <td>{{$value->name}}</td>
            <td>{{$value->created_at->format('d-m-Y')}}</td>
            <td>{{$value->updated_at->format('d-m-Y')}}</td>
            <td>
            <a href="{{route('category.edit',$value->id)}}" class="btn btn-success">Edit</a>
            <form action="{{route('category.destroy',$value->id)}}" method="post">
              @method("DELETE")
              @csrf
            <button class="btn btn-danger" type="submit">Delete</button>
          </form>
            </td>
          </tr>    
          @endforeach
        </tbody></table>
      </div>
      <!-- /.box-body -->
    </div>
    <!-- /.box -->
  </div>
@endsection