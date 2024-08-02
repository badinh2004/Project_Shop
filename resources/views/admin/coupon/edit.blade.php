@extends('admin.main-admin')
@section('main_admin')
    <div class="col-md-8">
        <!-- general form elements -->
        <div class="box box-primary">
            <div class="box-header with-border">
                <h3 class="box-title">edit Coupons</h3>
            </div>
            <!-- /.box-header -->
            <!-- form start -->
            <form role="form" action="{{ route('coupons.update',$coupon->id) }}" method="POST">
                @csrf
                @method('PUT')
                <div class="box-body">
                    <div class="form-group">
                        <label for="exampleInputEmail1">Name</label>
                        <input type="text" name="name" class="form-control" value="{{$coupon->name}}" id="exampleInputEmail1"
                            placeholder="Enter Name Coupon">
                    </div>
                    <div class="form-group">
                        <label for="exampleInputEmail1">code</label>
                        <input type="number" name="code" class="form-control" value="{{$coupon->code}}" id="exampleInputEmail1"
                            placeholder="Enter Name code">
                    </div>
                    <div class="form-group">
                        <label for="exampleInputEmail1">quantity</label>
                        <input type="number" name="quantity" class="form-control" value="{{$coupon->quantity}}" id="exampleInputEmail1"
                            placeholder="Enter Quantity">
                    </div>
                    <div class="form-group">
                        <label for="exampleInputEmail1">End Date</label>
                        <input type="date" name="end_date" class="form-control" value="{{$coupon->end_date}}" id="exampleInputEmail1"
                            placeholder="Enter">
                    </div>
                    <div class="form-group">
                        <label for="exampleInputEmail1">Description</label>
                        <input type="text" name="mota" class="form-control" value="{{$coupon->mota}}" id="exampleInputEmail1"
                            placeholder="Enter Description">
                    </div>
                    
                </div>
                <!-- /.box-body -->

                <div class="box-footer">
                    <button type="submit" class="btn btn-primary">edit</button>
                </div>
            </form>
        </div>

        <!-- /.box -->

    </div>
@endsection
