
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
                            <th>Title </th>
                            <th>Images </th>
                            <th>Description</th>
                            <th>Tùy chọn</th>
                        </tr>
                        @foreach ($banners as $banners)
                            <tr>
                                <td>{{ $loop->index + 1 }}</td>
                                <td style="max-width: 150px; overflow: hidden; text-overflow: ellipsis;">{{$banners->title}}</td>
                                <td><img src="{{ asset('storage/images/' . $banners->image) }}" alt="err" width="150px"></td>
                                <td style="max-width: 160px; overflow: hidden; text-overflow: ellipsis;">{{$banners->description}}</td>
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
                                                    <a class="dropdown-item btn btn-success" href="{{ route('banners.edit', $banners->id) }}">Edit</a>

                                                </li>
                                                <li>
                                                    <form action="{{route('banners.destroy',$banners->id)}}" method="post" class="d-inline">
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
