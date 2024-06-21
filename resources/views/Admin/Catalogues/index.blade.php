@extends('Admin.Layout.master')
@section('content')
    <div class="col-12">
        <div class="card">
            <div class="card-header">
                <h4 class="card-title">Danh sách danh mục</h4>
                <a href="{{ route('admin.catalogues.create') }}" class="btn bg-blue-dark text-white"><i
                        class="fa fa-plus mr-2"></i>Thêm
                    mới</a>
            </div>
            <div class="card-body">
                <div class="table-responsive">
                    <table id="example3" class="display" style="min-width: 845px">
                        <thead>
                        <tr>
                            <th>Ảnh</th>
                            <th>Tên danh mục</th>
                            <th>Nội dung</th>
                            <th>Trạng thái</th>
                            <th class="text-center">Hoạt động</th>
                        </tr>
                        </thead>
                        <tbody>


                        @foreach($data as $value)
                            <tr>
                                <td><img class="rounded-circle" width="35"
                                         src="{{Storage::url($value->image) }}" alt=""></td>
                                <td>{{$value->name}}</td>
                                <td>{{$value->description}}</td>
                                <td>{{$value->is_active}}</td>

                                <td>
                                    <div class="d-flex justify-content-center">
                                        <a href="#" class="btn btn-primary shadow btn-xs sharp mr-1"><i
                                                class="fa fa-pencil"></i></a>
                                        <a href="#" class="btn btn-danger shadow btn-xs sharp"><i
                                                class="fa fa-trash"></i></a>
                                    </div>
                                </td>
                                @endforeach
                            </tr>

                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
@endsection
