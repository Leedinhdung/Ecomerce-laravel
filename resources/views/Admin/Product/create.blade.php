@extends('Admin.Layout.master')
@section('content')
    <div class="col-12">
        <div class="card">
            <form action="" method="post">
                <div class="card-header">
                    <h4 class="card-title">Thêm mới</h4>
                    <a href="{{ route('products.create') }}" class="btn bg-blue-dark text-white">Đăng</a>
                </div>
                <div class="row my-3 mx-4">
                    <div class="col-6">
                        <div>
                            <label for="col-form-label">Tên sản phẩm</label>
                            <input class="form-control" type="text" name="name_category" id="">
                        </div>
                        <div class="mt-3">
                            <label for="col-form-label">Mã sản phẩm</label>
                            <input class="form-control" type="text" name="name_category" id="">
                        </div>

                        <div class="mt-3">
                            <label for="col-form-label">Trạng thái</label>
                            <select class="form-control" name="status" id="">
                                <option value="0">Ẩn</option>
                                <option value="1">Hiện</option>
                            </select>
                        </div>

                        <div class="mt-3 ">
                            <label for="">Mô tả sản phẩm</label>
                            <div class="rounded">
                                <div id="toolbar-container" >
                                    <span class="ql-formats">
                                        <select class="ql-font"></select>
                                        <select class="ql-size"></select>
                                    </span>
                                    <span class="ql-formats">
                                        <button class="ql-bold"></button>
                                        <button class="ql-italic"></button>
                                        <button class="ql-underline"></button>
                                        <button class="ql-strike"></button>
                                    </span>
                                    <span class="ql-formats">
                                        <select class="ql-color"></select>
                                        <select class="ql-background"></select>
                                    </span>
                                    <span class="ql-formats">
                                        <button class="ql-script" value="sub"></button>
                                        <button class="ql-script" value="super"></button>
                                    </span>
                                    <span class="ql-formats">
                                        <button class="ql-header" value="1"></button>
                                        <button class="ql-header" value="2"></button>
                                        <button class="ql-blockquote"></button>
                                        <button class="ql-code-block"></button>
                                    </span>
                                    <span class="ql-formats">
                                        <button class="ql-list" value="ordered"></button>
                                        <button class="ql-list" value="bullet"></button>
                                        <button class="ql-indent" value="-1"></button>
                                        <button class="ql-indent" value="+1"></button>
                                    </span>
                                    <span class="ql-formats">
                                        <button class="ql-direction" value="rtl"></button>
                                        <select class="ql-align"></select>
                                    </span>
                                    <span class="ql-formats">
                                        <button class="ql-link"></button>
                                        <button class="ql-image"></button>
                                        <button class="ql-video"></button>
                                        <button class="ql-formula"></button>
                                    </span>
                                    <span class="ql-formats">
                                        <button class="ql-clean"></button>
                                    </span>
                                </div>

                                <div rows="10" cols="30" id="editor">

                                    <p>Vui lòng nhập....</p>
                                    <p><br></p>
                                </div>
                            </div>
                        </div>


                        {{-- <div class="mt-3">
                            <label for="col-form-label">Mô tả </label>
                            <textarea name="" class="form-control" cols="30" rows="10"></textarea>
                        </div> --}}
                    </div>
                    <div class="col-6">
                        <div class="row">
                            <div class="col-6">
                                <label for="">Giá cũ</label>
                                <input min="10000" step="10000" type="number" class="form-control" name="" id="">
                            </div>
                            <div class="col-6">
                                <label for="">Giá Khuyến mãi</label>
                                <input min="10000" step="10000" type="number" class="form-control" name="" id="">
                            </div>
                        </div>
                        <div class="mt-3">
                            <label for="col-form-label">Danh mục cha</label>
                            <select class="form-control" name="parent_id" id="">
                                <option value="0">Không có</option>

                            </select>
                        </div>
                        <div class="mt-3">
                            <label for="">Ảnh</label>
                            <div class="border w- rounded text-center p-3">
                                <div class="drag-area">
                                    <p class="fs-16">Kéo và thả để tải ảnh lên </p>
                                    
                                    <span>Hoặc</span><br>
                                    <br>
                                    <button type="button" class="btn bg-blue-dark text-white">Chọn file</button>
                                    <input type="file" hidden name="image_product" id="">
                                </div>
                            </div>
                        </div>

                    </div>
            </form>
        </div>
    </div>
@endsection
