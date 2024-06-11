@extends('admin.main-admin')
@section('main_admin')
<div class="col-md-8">
    <!-- general form elements -->
    <div class="box box-primary">
      <div class="box-header with-border">
        <h3 class="box-title">Thêm mới menu</h3>
      </div>
      <!-- /.box-header -->
      <!-- form start -->
      <form role="form">
        <div class="box-body">
          <div class="form-group">
            <label for="exampleInputEmail1">Tên banner</label>
            <input type="email" class="form-control" id="exampleInputEmail1" placeholder="Banner trang chủ">
          </div>
          <div class="form-group">
            <label for="exampleInputEmail1">link banner</label>
            <input type="email" class="form-control" id="exampleInputEmail1" placeholder="https://bachkhoa-aptech.edu.vn/bachkhoa-aptech-thong-bao-xet-tuyen-dot-3-tuyen-sinh-50-chi-tieu-den-het-20-09-2018/529.html">
          </div>
          <div class="form-group">
            <label for="exampleInputEmail1">Chọn banner</label>
            <div class="radio">
              <label>
                <input type="file" name=" " id="input " value="" checked="checked">
                
              </label>
            </div>
          </div>

          <div class="form-group">
            <label for="exampleInputEmail1">Chọn Vị trí</label>
            <select name="" id="input" class="form-control" required="required">
              <option value="">Chọn vị trí</option>
              <option value="">1</option>
              <option value="">2</option>
              <option value="">3</option>
            </select>
          </div>
          <div class="form-group">
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
          
        </div>
        <!-- /.box-body -->

        <div class="box-footer">
          <button type="submit" class="btn btn-primary">Thêm mới</button>
        </div>
      </form>
    </div>
 
    <!-- /.box -->

  </div>
@endsection
