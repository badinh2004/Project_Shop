@extends('admin.main-admin')
@section('main_admin')
<div class="col-md-8">
    <!-- general form elements -->
    <div class="box box-primary">
      <div class="box-header with-border">
        <h3 class="box-title">Edit Category</h3>
      </div>
      <!-- /.box-header -->
      <!-- form start -->
      <form role="form" action="{{route('category.update',$editCate->id)}}" method="POST">
        @csrf
        @method('PUT')
        <div class="box-body">
          <div class="form-group">
            <label for="exampleInputEmail1">Name</label>
            <input type="name" name="name" class="form-control" id="exampleInputEmail1" value="{{$editCate->name}}" placeholder="Enter Namw Category">
          </div>
        </div>
        <!-- /.box-body -->

        <div class="box-footer">
          <button type="submit" class="btn btn-primary">Update</button>
        </div>
      </form>
    </div>
 
    <!-- /.box -->

  </div>
@endsection