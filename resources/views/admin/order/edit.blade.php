@extends('admin.main-admin')
@section('main_admin')
    <div class="col-md-8">
        <!-- general form elements -->
        <div class="box box-primary">
            <div class="box-header with-border">
                <h3 class="box-title">Edit Order</h3>
            </div>
            <!-- /.box-header -->
            <!-- form start -->
            <form role="form" action="{{ route('orders.update', $order->id) }}" method="POST">
                @csrf
                @method('PUT')
                <div class="box-body">
                    <div class="form-group">
                        <label for="exampleInputEmail1">Name</label>
                        <input type="text" name="name" class="form-control" id="exampleInputEmail1"
                            value="{{ $order->name }}" readonly>
                    </div>
                    <div class="form-group">
                        <label for="exampleInputEmail1">Email</label>
                        <input type="text" name="email" class="form-control" id="exampleInputEmail1"
                            value="{{ $order->email }}" readonly>
                    </div>
                    <div class="form-group">
                        <label for="exampleInputEmail1">Address</label>
                        <input type="text" name="address" class="form-control" id="exampleInputEmail1"
                            value="{{ $order->address }}" readonly>
                    </div>
                    <div class="form-group">
                        <label for="exampleInputEmail1">Phone</label>
                        <input type="number" name="phone" class="form-control" id="exampleInputEmail1"
                            value="{{ $order->phone }}" readonly>
                    </div>
                    <div class="form-group">
                        <label for="exampleInputEmail1">note</label><br>
                        <textarea name="" id="" cols="70" rows="3" readonly>{{ $order->note }}</textarea>
                        {{-- <input type="text" name="name" class="form-control" id="exampleInputEmail1" value="{{$order->note}}" readonly> --}}
                    </div>
                    <div class="form-group">
                        <label for="exampleInputEmail1">Total</label>
                        <input type="name" name="total" class="form-control" id="exampleInputEmail1"
                            value="{{ $order->total }}" readonly>
                    </div>
                    <div class="form-group">
                        <label for="exampleInputEmail1">Select Status</label>
                        <select name="status_id" class="form-control">
                            @foreach ($status as $value)
                                <option value="{{ $value->id }}"
                                    {{ $order->status_id == $value->id ? 'selected' : '' }}>
                                    {{ $value->name }}</option>
                            @endforeach
                        </select>
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
