@extends('admin.main-admin')
@section('main_admin')
    <div class="col-xs-12">
        <div class="box">
            <div class="box-header">
                <a href="{{ route('variant.show', $editvariant->ProductID) }}')" class="btn btn-success"><- Variants </a>

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
            <form action="{{ route('variant.update', $editvariant->id) }}" method="post">
                @csrf
                @method('PUT')
                <div id="variants">
                    <div class="form-group form-check form-check-inline">
                        <label for="exampleInputEmail1">Enter size</label>
                        <div class="radio">
                            <label>
                                <input type="radio" name="size" id="input"value="1kg"  {{ $editvariant->size == '1kg' ? 'checked' : '' }}>
                                1kg
                            </label>
                            <label>
                                <input type="radio" name="size" id="input" value="2kg" {{ $editvariant->size == '2kg' ? 'checked' : '' }}>
                                2kg
                            </label>
                            <label>
                                <input type="radio" name="size" id="input" value="5kg" {{ $editvariant->size == '5kg' ? 'checked' : '' }}>
                                5kg
                            </label>
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="exampleInputEmail1">Price</label>
                        <input type="text" name="price" class="form-control" id="exampleInputEmail1"
                          value="{{$editvariant->price}}"  placeholder="Enter Price">
                    </div>
                    <div class="form-group">
                        <label for="exampleInputEmail1">Sale Price</label>
                        <input type="text" name="sale_price" class="form-control" id="exampleInputEmail1"
                           value="{{$editvariant->sale_price}}" placeholder="Enter Price">
                    </div>
                    <div class="form-group">
                        <label for="exampleInputEmail1">Quantity</label>
                        <input type="text" name="quatity" class="form-control" id="exampleInputEmail1"
                          value="{{$editvariant->quatity}}"  placeholder="Enter Price">
                    </div>
                </div>
                <div class="box-footer">
                    <button type="submit" class="btn btn-primary">Edit </button>
                </div>
            </form>
            <!-- /.box-body -->
        </div>
        <!-- /.box -->
    </div>
@endsection
