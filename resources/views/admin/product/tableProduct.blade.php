@extends('admin.main-admin')
@section('main_admin')
    <div class="col-xs-12">
        <div class="box">
            <div class="box-header">
                <a href="{{ route('product.create') }}" class="btn btn-success">+ADD Product</a>

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
            <div class="box-body table-responsive no-padding">
                <table class="table table-hover">
                    <tbody>
                        <tr>
                            <th>Name </th>
                            <th>Images </th>
                            <th>Price - Weight</th>
                            <th>Origin</th>
                            <th>Category</th>
                            {{-- <th>Status</th> --}}
                            <th>Created_at</th>
                            <th>Updated_at</th>
                            <th>Tùy chọn</th>
                        </tr>
                        @foreach ($pro as $value)
                            <tr>
                                <td>{{ $value->name }}</td>
                                <td><img src="{{ asset('storage/images/' . $value->image) }}" alt="err" width="100px">
                                </td>
                                <td>
                                    @foreach ($value->variants as $var)
                                        <p>{{ $var->price }}$ - {{ $var->size }}</p>
                                    @endforeach
                                </td>
                                <td>{{ $value->origin }}</td>
                                <td>{{ $value->categorys->name }}</td>
                                {{-- <td>
                                    @if ($value->variants()->first()->quatity > 0)
                                        <p class="text-center bg-success">Stocking</p>
                                    @elseif ($value->variants()->first()->quatity <= 0)
                                        <p class="text-center bg-danger">Out of stock</p>
                                    @endif
                                </td> --}}
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
                                                    <a class="dropdown-item btn btn-success"
                                                        href="{{ route('product.edit', $value->id) }}">Edit</a>
                                                </li>
                                                <li>
                                                    <a class="dropdown-item btn btn-info"
                                                        href="{{ route('variant.show', $value->id) }}">View</a>
                                                </li>
                                                <li>
                                                    <form action="{{ route('product.destroy', $value->id) }}" method="post"
                                                        class="d-inline">
                                                        @csrf
                                                        @method('DELETE')
                                                        <button class="dropdown-item btn btn-danger"
                                                            type="submit">Delete</button>
                                                    </form>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                    {{-- <a href="{{ route('product.edit', $value->id) }}"
                                        class="btn btn-success">Edit</a>
                                    <form action="{{ route('product.destroy', $value->id) }}" method="post">
                                        @csrf
                                        @method('DELETE')
                                        <button class="btn btn-danger" type="submit">Delete</button>
                                    </form> --}}
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
