@extends('admin.main')
@section('content')
    <form action="./themsp_post" method="POST" enctype="multipart/form-data">
        <div class="card-body">
            <div class="form-group">
                <label for="sanpham">Mã số hàng hóa</label>
                <input type="text" class="form-control" id="mshh" name="mshh" placeholder="VD: 01">
            </div>

            <div class="form-body">
                <div class="form-group">
                    <label for="sanpham">Danh mục</label>
                    <select class="form-control" name="madanhmuc">
                        <option value="" disabled selected>Thuộc danh mục</option>

                        <!-- Get danh mục từ bảng danhmuc đưa vào option-->
                        @foreach($danhmuc_arr as $danhmuc)
                            <option value="{{ $danhmuc->ma_danhmuc }}"> {{ $danhmuc->ten_danhmuc }} </option>
                        @endforeach

                    </select>
                </div>
            </div>


            <div class="form-body">
                <div class="form-group">
                    <label for="sanpham">Nhà cung cấp</label>
                    <select class="form-control" name="mancc">
                        <option value="" disabled selected>Thuộc nhà cung cấp</option>

                        <!-- Get nhà cung cấp từ bảng nhacungcap đưa vào option-->
                        @foreach($nhacungcap_arr as $nhacungcap)
                            <option value="{{ $nhacungcap->ma_ncc }}"> {{ $nhacungcap->ten_ncc }} </option>
                        @endforeach

                    </select>
                </div>
            </div>


            <div class="form-body">
                <div class="form-group">
                    <label for="sanpham">Tên sản phẩm</label>
                    <input type="text" class="form-control" id="tensp" name="tensp" placeholder="Tên Sản Phẩm">
                </div>
            </div>

            <div class="form-body">
                <div class="form-group">
                    <label for="sanpham">Giá nhập</label>
                    <input type="number" class="form-control" id="gianhap" name="gianhap" placeholder="Giá nhập">
                </div>
            </div>

            <div class="form-body">
                <div class="form-group">
                    <label for="sanpham">Giá bán</label>
                    <input type="number" class="form-control" id="giaban" name="giaban" placeholder="Giá bán">
                </div>
            </div>

            <div class="form-body">
                <div class="form-group">
                    <label for="sanpham">Số lượng</label>
                    <input type="number" class="form-control" id="soluong" name="soluong" placeholder="Số Lượng">
                </div>
            </div>

            <div class="form-body">
                <div class="form-group">
                    <label for="sanpham">Mô tả</label>
                    <textarea name="motasp" id="motasp" class="form-control"></textarea>
                </div>
            </div>

            <div class="form-body">
                <div class="form-group">
                    <label for="hinhanh"></label>
                    <input type="file"  id="hinhanh_sp" name="hinhanh_sp" >
                </div>
            </div>


            {{-- Button --}}
            <div class="card-footer">
                <button type="submit" class="btn btn-primary">Thêm sản phẩm</button>
            </div>
        @csrf

    </form>
@endsection



