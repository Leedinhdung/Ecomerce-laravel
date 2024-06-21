@extends('Admin.Layout.master')
@section('content')
    <div class="col-12">
        <div class="card">
            <div class="card-header">
                <h4 class="card-title">Danh sách sản phẩm</h4>
                <a href="{{ route('products.create') }}" class="btn bg-blue-dark text-white"><i class="fa fa-plus mr-2"></i>Thêm
                    mới</a>
            </div>
            <div class="card-body">
                <div class="table-responsive">
                    <table id="example3" class="display" style="min-width: 845px">
                        <thead>
                            <tr>
                                <th>Ảnh</th>
                                <th>Tên sản phẩm</th>
                                {{-- <th>Mã sản phẩm</th> --}}
                                <th>Danh mục</th>
                                <th>Giá gốc</th>
                                <th>Giá khuyến mãi</th>
                                <th>Mô tả</th>
                                <th>Trạng thái</th>
                                <th class="text-center">Hoạt động</th>
                            </tr>
                        </thead>
                        <tbody>


                            <tr>
                                <td><img class="rounded-circle" width="35"
                                        src="{{ asset('images/profile/small/pic8.jpg') }}" alt=""></td>
                                <td>Brenden Wagner</td>
                                
                                <td>Software Engineer</td>
                                <td>Female</td>
                                <td>B.TACH, M.TACH</td>
                                <td><a href="javascript:void(0);"><strong>987 654 3210</strong></a></td>
                                <td><a href="javascript:void(0);"><strong><span class="__cf_email__"
                                                data-cfemail="87eee9e1e8c7e2ffe6eaf7ebe2a9e4e8ea">[email&#160;protected]</span></strong></a>
                                </td>
                               
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
                                <td>Male</td>
                                <td>B.A, B.C.A</td>
                                <td><a href="javascript:void(0);"><strong>987 654 3210</strong></a></td>
                                <td><a href="javascript:void(0);"><strong><span class="__cf_email__"
                                                data-cfemail="422b2c242d02273a232f322e276c212d2f">[email&#160;protected]</span></strong></a>
                                </td>
                                
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
                                <td>Female</td>
                                <td>B.COM., M.COM.</td>
                                <td><a href="javascript:void(0);"><strong>987 654 3210</strong></a></td>
                                <td><a href="javascript:void(0);"><strong><span class="__cf_email__"
                                                data-cfemail="751c1b131a35100d14180519105b161a18">[email&#160;protected]</span></strong></a>
                                </td>
                               
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
