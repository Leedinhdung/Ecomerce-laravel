@extends('Admin.Layout.master')
@section('content')
    <div class="col-12">
        <div class="card">
            <div class="card-header">
                <h4 class="card-title">Danh sách danh mục</h4>
                <a href="{{ route('cat.create') }}" class="btn bg-blue-dark text-white"><i class="fa fa-plus mr-2"></i>Thêm
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

                                <th class="text-center">Hoạt động</th>
                            </tr>
                        </thead>
                        <tbody>


                            <tr>
                                <td><img class="rounded-circle" width="35"
                                        src="{{ asset('images/profile/small/pic8.jpg') }}" alt=""></td>
                                <td>Brenden Wagner</td>
                                <td>Software Engineer</td>

                                <td>
                                    <div class="d-flex justify-content-center">
                                        <a href="#" class="btn btn-primary shadow btn-xs sharp mr-1"><i
                                                class="fa fa-pencil"></i></a>
                                        <a href="#" class="btn btn-danger shadow btn-xs sharp"><i
                                                class="fa fa-trash"></i></a>
                                    </div>
                                </td>
                            </tr>
                            <tr>
                                <td><img class="rounded-circle" width="35"
                                        src="{{ asset('images/profile/small/pic9.jpg') }}" alt=""></td>
                                <td>Fiona Green</td>
                                <td>Operating Officer</td>

                                <td>
                                    <div class="d-flex justify-content-center">
                                        <a href="#" class="btn btn-primary shadow btn-xs sharp mr-1"><i
                                                class="fa fa-pencil"></i></a>
                                        <a href="#" class="btn btn-danger shadow btn-xs sharp"><i
                                                class="fa fa-trash"></i></a>
                                    </div>
                                </td>
                            </tr>
                            <tr>
                                <td><img class="rounded-circle" width="35"
                                        src="{{ asset('images/profile/small/pic9.jpg') }}" alt=""></td>
                                <td>Shou Itou</td>
                                <td>Regional Marketing</td>

                                <td>
                                    <div class="d-flex justify-content-center">
                                        <a href="#" class="btn btn-primary shadow btn-xs sharp mr-1"><i
                                                class="fa fa-pencil"></i></a>
                                        <a href="#" class="btn btn-danger shadow btn-xs sharp"><i
                                                class="fa fa-trash"></i></a>
                                    </div>
                                </td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
@endsection
