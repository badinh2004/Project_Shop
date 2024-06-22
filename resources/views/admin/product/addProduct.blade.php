@extends('admin.main-admin')
@section('main_admin')
    <div class="col-md-8">
        <!-- general form elements -->
        <div class="box box-primary">
            <div class="box-header with-border">
                <h3 class="box-title">ADD Product</h3>
            </div>
            <!-- /.box-header -->
            <!-- form start -->
            <form role="form" action="{{ route('product.store') }}" method="POST" enctype="multipart/form-data">
                @csrf

                <div class="box-body">
                    <div class="form-group">
                        <label for="exampleInputEmail1">Name</label>
                        <input type="text" name="name" class="form-control" id="exampleInputEmail1"
                            placeholder="Enter Name Product">
                    </div>
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
                </div>
                <button type="button" onclick="addVariant()">add variants</button><br>
                <div class="form-group">
                    <label for="exampleInputEmail1">Image</label>
                    <input type="file" name="photo" class="form-control" id="exampleInputEmail1">
                </div>
                <div class="form-group">
                    <label for="exampleInputEmail1">Slug</label>
                    <input type="text" name="slug" class="form-control" id="exampleInputEmail1"
                        placeholder="Enter Name Product">
                </div>
                <div class="form-group">
                    <label for="exampleInputEmail1">Origin</label>
                    <input type="text" name="origin" class="form-control" id="exampleInputEmail1"
                        placeholder="Enter Origin">
                </div>
                <div class="form-group">
                    <label for="exampleInputEmail1">Select Category</label>
                    <select name="category_id" class="form-control">
                        @foreach ($cate as $value)
                            <option value="{{ $value->id }}">{{ $value->name }}</option>
                        @endforeach
                    </select>
                </div>
                <div class="form-group">
                    <label for="exampleInputEmail1">Sort Description</label><br>
                    <textarea name="sortdescription" id="" cols="30" rows="5"></textarea>
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
    <script src="https://cdn.ckeditor.com/ckeditor5/41.4.2/classic/ckeditor.js"></script>

    <script>
        ClassicEditor
            .create(document.querySelector('#editor1'))
            .then(editor => {
                console.log(editor);
            })
            .catch(error => {
                console.error(error);
            });
    </script>
@endsection
