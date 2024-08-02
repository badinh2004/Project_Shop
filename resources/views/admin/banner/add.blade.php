@extends('admin.main-admin')
@section('main_admin')
    <div class="col-md-8">
        <!-- general form elements -->
        <div class="box box-primary">
            <div class="box-header with-border">
                <h3 class="box-title">ADD banner</h3>
            </div>
            <!-- /.box-header -->
            <!-- form start -->
            <form role="form" action="{{ route('banners.store') }}" method="POST" enctype="multipart/form-data">
                @csrf

                <div class="box-body">
                    <div class="form-group">
                        <label for="exampleInputEmail1">Title</label>
                        <input type="text" name="title" class="form-control" id="title"
                            placeholder="Enter Title " >
                    </div>
                </div>
                <div class="form-group">
                    <label for="exampleInputEmail1">Image</label>
                    <input type="file" name="photo" class="form-control" id="exampleInputEmail1">
                </div>
                <div class="form-group">
                    <label for="exampleInputEmail1">Description</label><br>
                    <textarea name="description" id="editor1" cols="80" rows="7"></textarea>
                </div>
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
