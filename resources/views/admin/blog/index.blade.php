
@extends('admin.main-admin')
@section('main_admin')
    <div class="col-xs-12">
        <div class="box">
            <div class="box-header">
                <a href="{{ route('blogs.create') }}" class="btn btn-success">+ADD Blog</a>

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
                            <th>ID</th>
                            <th>Title </th>
                            <th>Images </th>
                            <th>Sort Description</th>
                            <th>Writer</th>
                            <th>Category</th>
                            <th>Created_at</th>
                            <th>Updated_at</th>
                            <th>Tùy chọn</th>
                        </tr>
                        @foreach ($blog as $blog)
                            <tr>
                                <td>{{ $loop->index + 1 }}</td>
                                <td style="max-width: 150px; overflow: hidden; text-overflow: ellipsis;">{{$blog->title}}</td>
                                <td><img src="{{ asset('storage/images/' . $blog->image) }}" alt="err" width="150px">
                                <td style="max-width: 160px; overflow: hidden; text-overflow: ellipsis;">{{$blog->sortdescription}}</td>
                                <td>{{$blog->users->name}}</td>
                                <td>{{$blog->categorys->name}}</td>
                                <td>{{$blog->created_at->format('d-m-Y')}}</td>
                                <td>{{$blog->updated_at->format('d-m-Y')}}</td>
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
                                                    <a class="dropdown-item btn btn-success" href="{{ route('blogs.edit', $blog->id) }}">Edit</a>

                                                </li>
                                                <li>
                                                    <form action="{{route('blogs.destroy',$blog->id)}}" method="post" class="d-inline">
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
