@extends('admin.main-admin')
@section('main_admin')
    <div class="col-xs-12">
        <div class="box">
            <!-- /.box-header -->
            <div class="box-body table-responsive no-padding">
                <table class="table table-hover">
                    <tbody>
                        <tr>
                            <th>ID</th>
                            <th>Name </th>
                            <th>Discount Coupon</th>
                            <th>Quantity</th>
                            <th>End_date</th>
                            <th>Description</th>
                            <th>Created_at</th>
                            <th>Action</th>
                        </tr>
                        @foreach ($coupon as $value)
                            <tr>
                                <td>{{ $loop->index + 1 }}</td>
                                <td>{{ $value->name }}</td>
                                <td>{{ $value->code }}</td>
                                <td>{{ $value->quantity }}</td>
                                <td>{{ $value->end_date }}</td>
                                <td>{{ $value->mota }}</td>
                                <td>{{$value->created_at->format('d-m-Y')}}</td>
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
                                                        href="{{ route('coupons.edit', $value->id) }}">Edit</a>
                                                </li>
                                                <li>
                                                    <form action="{{ route('coupons.destroy', $value->id) }}" method="post"
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
