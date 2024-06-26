@extends('Admin.Layout.master')
@section('content')
    <div class="col-12">
        <div class="card">
            <form action="{{ route('admin.catalogues.store') }}" method="post" enctype="multipart/form-data">
                @csrf
                <div class="card-header">
                    <h4 class="card-title">Thêm mới</h4>
                    {{-- <a href="{{ route('cat.create') }}" class="btn bg-blue-dark text-white">Đăng</a> --}}
                    <button type="submit" class="btn bg-blue-dark text-white">Đăng</button>
                </div>
                <div class="row my-3 mx-4">
                    <div class="col-6">
                        <div>
                            <label for="col-form-label">Tên danh mục</label>
                            <input class="form-control" type="text" name="name" id="">
                            @error('name')
                            <div class="error-message mt-2 text-danger">{{ $message }}</div>
                            @enderror
                        </div>
                        <div class="mt-3">
                            <label for="col-form-label">Mô tả </label>
                            <textarea name="description" class="form-control" cols="30" rows="10"></textarea>
                        </div>


                    </div>
                    <div class="col-6">
                        <div class="">
                            <label for="col-form-label">Danh mục cha</label>
                            <select class="form-control" name="parent_id" id="">
                                <option value="0">Chọn danh mục</option>
                                @foreach ($catalogues as $catalog)
                                    <option value="{{ $catalog->id }}">{{ $catalog->name }}</option>
                                @endforeach
                                {{-- <option value="1">Áo nam</option> --}}
                            </select>
                        </div>


                        <div class="mt-3">
                            <label for="">Ảnh</label>
                            {{--                            <div class="border w- rounded text-center p-3">--}}
                            {{--                                <div class="drag-area">--}}
                            {{--                                    <p class="fs-16">Kéo và thả để tải ảnh lên </p>--}}
                            {{--                                    <span>Hoặc</span><br>--}}
                            {{--                                    <br>--}}
                            {{--                                    <button type="button" class="btn bg-blue-dark text-white">Chọn file</button>--}}
                            {{--                                    <input type="file" hidden name="image" id="">--}}
                            {{--                                </div>--}}
                            {{--                            </div>--}}
                            <input type="file" name="image" class="form-control">
                        </div>
                    </div>
            </form>
        </div>
    </div>
@endsection
