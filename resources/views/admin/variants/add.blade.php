@extends('admin.main-admin')
@section('main_admin')
    <div class="col-xs-12">
        <div class="box">
            <div class="box-header">
                {{-- <a href="{{ route('variant.show',$editvariant->ProductID) }}')" class="btn btn-success"><- Variants </a> --}}

                        <div class="box-tools">
                            <div class="input-group input-group-sm" style="width: 150px;">
                                <input type="text" name="table_search" class="form-control pull-right"
                                    placeholder="Search">

                                <div class="input-group-btn">
                                    <button type="submit" class="btn btn-default"><i class="fa fa-search"></i></button>
                                </div>
                            </div>
                        </div>
            </div>
            <!-- /.box-header -->
            <form action="{{ route('variants.store', $product->id) }}" method="post">
                @csrf
                <input type="hidden" name="">
                <div id="variants">
                    <div class="form-group form-check form-check-inline">
                        <label for="exampleInputEmail1">Enter size</label>
                        <div class="radio">
                            <label>
                                <input type="radio" name="variants[0][size]" id="input" value="500g">
                                500g
                            </label>
                            <label>
                                <input type="radio" name="variants[0][size]" id="input" value="1kg">
                                1kg
                            </label>
                            <label>
                                <input type="radio" name="variants[0][size]" id="input" value="2kg">
                                2kg
                            </label>
                            <label>
                                <input type="radio" name="variants[0][size]" id="input" value="5kg">
                                5kg
                            </label>
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="exampleInputEmail1">Price</label>
                        <input type="text" name="variants[0][price]" class="form-control" id="exampleInputEmail1"
                            placeholder="Enter Price">
                    </div>
                    <div class="form-group">
                        <label for="exampleInputEmail1">Sale Price</label>
                        <input type="text" name="variants[0][sale_price]" class="form-control"
                            id="exampleInputEmail1" placeholder="Enter Price">
                    </div>
                    <div class="form-group">
                        <label for="exampleInputEmail1">Quatity</label>
                        <input type="text" name="variants[0][quatity]" class="form-control" id="exampleInputEmail1"
                            placeholder="Enter Price">
                    </div>
                </div>
                <button type="button" onclick="addVariant()">add variants</button><br>
                <div class="box-footer">
                    <button type="submit" class="btn btn-primary">Add </button>
                </div>
            </form>
            <!-- /.box-body -->
        </div>
        <!-- /.box -->
    </div>
@endsection
@section('script')
    <script>
        let variantIndex = 1;

        function addVariant() {
            const variantsDiv = document.getElementById('variants');
            const variantDiv = document.createElement('div');
            variantDiv.innerHTML = `
<div id="variants">
            <div class="form-group form-check form-check-inline">
              <label for="exampleInputEmail1">Enter size</label>
              <div class="radio">
                <label>
                  <input type="radio" name="variants[${variantIndex}][size]" id="input" value="500g">
                  500g
                </label>
                <label>
                  <input type="radio" name="variants[${variantIndex}][size]" id="input" value="1kg">
                  1kg
                </label>
                <label>
                  <input type="radio" name="variants[${variantIndex}][size]" id="input" value="2kg" >
                  2kg
                </label>
                <label>
                  <input type="radio" name="variants[${variantIndex}][size]" id="input" value="5kg" >
                  5kg
                </label>
              </div>
            </div>
            <div class="form-group">
            <label for="exampleInputEmail1">Price</label>
            <input type="text" name="variants[${variantIndex}][price]" class="form-control" id="exampleInputEmail1" placeholder="Enter Price">
            </div>
            <div class="form-group">
              <label for="exampleInputEmail1">Sale Price</label>
              <input type="text" name="variants[${variantIndex}][sale_price]" class="form-control" id="exampleInputEmail1" placeholder="Enter Price">
              </div>
            <div class="form-group">
            <label for="exampleInputEmail1">Quatity</label>
            <input type="text" name="variants[${variantIndex}][quatity]" class="form-control" id="exampleInputEmail1" placeholder="Enter Price">
            </div>
          </div>
`;
            variantsDiv.appendChild(variantDiv);
            variantIndex++;
        }
    </script>
    
@endsection
