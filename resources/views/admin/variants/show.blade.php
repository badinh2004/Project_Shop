@extends('admin.main-admin')
@section('main_admin')
    <div class="col-xs-12">
        <div class="box">
            <div class="box-header">
                <a href="{{ route('product.index') }}" class="btn btn-success"><- Product</a>
                <a href="{{ route('variants.create',$variants->first()->ProductID) }}" class="btn btn-success">Add Varians</a>
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
            <div class="box-body table-responsive no-padding">
                <table class="table table-hover">
                    <tbody>
                        <tr>
                            <th>ID</th>
                            <th>Price</th>
                            <th>Sale-Price</th>
                            <th>Size</th>
                            <th>Quantity</th>
                            <th>status</th>
                            <th>Created_at</th>
                            <th>Updated_at</th>
                            <th>Action</th>
                        </tr>
                        @foreach ($variants as $value)
                            <tr>
                                <td>{{ $loop->index + 1 }}</td>
                                <td>{{ number_format($value->price) }}$</td>
                                <td>{{ number_format($value->sale_price) }}$</td>
                                <td>{{ $value->size }}</td>
                                <td>{{ $value->quatity }}</td>
                                <td>
                                    @if ( $value->quatity > 0)
                                        <p class="text-center bg-success">Stocking</p>
                                    @elseif ( $value->quatity <= 0)
                                        <p class="text-center bg-danger">Out of stock</p>
                                    @endif
                                </td>
                                <td>{{ $value->created_at->format('d-m-Y') }}</td>
                                <td>{{$value->updated_at->format('d-m-Y')}}</td>
                                <td>
                                    <div class="dropdown">
                                        <button class="btn btn-secondary dropdown-toggle" type="button"
                                            id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true"
                                            aria-expanded="false">
                                            Actions
                                        </button>
                                        <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                                            <ul class="list-unstyled">
                                                <li>
                                                    <a class="dropdown-item btn btn-success" href="{{ route('variant.edit', $value->id) }}">Edit</a>

                                                </li>
                                                <li>
                                                    <form action="{{route('variant.destroy',$value->id)}}" method="post" class="d-inline">
                                                        @csrf
                                                        @method('DELETE')
                                                        <button class="dropdown-item btn btn-danger"
                                                            type="submit">Delete</button>
                                                    </form>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
            <!-- /.box-body -->
        </div>
        <!-- /.box -->
    </div>
@endsection
