@extends('admin.main-admin')
@section('main_admin')
<div class="col-md-8">
    <!-- general form elements -->
    <div class="box box-primary">
      <div class="box-header with-border">
        <h3 class="box-title">ADD Category</h3>
      </div>
      <!-- /.box-header -->
      <!-- form start -->
      <form role="form" action="{{route('category.store')}}" method="POST">
        @csrf
        <div class="box-body">
          <div class="form-group">
            <label for="exampleInputEmail1">Name</label>
            <input type="name" name="name" class="form-control" id="exampleInputEmail1" placeholder="Enter Namw Category">
          </div>
          {{-- <div class="form-group">
            <label for="exampleInputEmail1">Chọn Menu Cha</label>
            <select name="" id="input" class="form-control" required="required">
              <option value="">Chọn danh Menu cha</option>
              <option value="">Học bổng</option>
            </select>
          </div> --}}

          {{-- <div class="form-group">
            <label for="exampleInputEmail1">Chọn Vị trí</label>
            <select name="" id="input" class="form-control" required="required">
              <option value="">Chọn vị trí</option>
              <option value="">1</option>
              <option value="">2</option>
              <option value="">3</option>
            </select>
          </div> --}}
          {{-- <div class="form-group">
            <label for="exampleInputEmail1">Chọn trạng thái</label>
            <div class="radio">
              <label>
                <input type="radio" name="" id="input" value="" checked="checked">
                Hiện
              </label>
              <label>
                <input type="radio" name="" id="input" value="" >
                Ẩn
              </label>
            </div>
          </div>
           --}}
        </div>
        <!-- /.box-body -->

        <div class="box-footer">
          <button type="submit" class="btn btn-primary">ADD</button>
        </div>
      </form>
    </div>
 
    <!-- /.box -->

  </div>
@endsection