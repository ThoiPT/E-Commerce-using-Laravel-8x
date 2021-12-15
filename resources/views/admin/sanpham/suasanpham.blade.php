@extends('admin.main')
@section('content')

    @foreach($getData as $key)
        <form action="./updateSP/{{$key -> mshh}}" method="POST" enctype="multipart/form-data">
            <div class="card-body">
                <div class="form-group">
                    <label for="sanpham">Mã hàng</label>
                    <input type="text" class="form-control" id="mshh" name="mshh" disabled value="{{$key -> mshh}}">
                </div>

                <div class="form-body">
                    <div class="form-group">
                        <label for="sanpham">Mã danh mục</label>
                        <select class="form-control" name="madanhmuc">
                            <option value="{{ $key->ma_danhmuc }}"> {{ $key -> ma_danhmuc }} </option>
                            @foreach($danhmuc_get as $danhmuc)
                                <option value="{{ $danhmuc->ma_danhmuc }}"> {{ $danhmuc->ma_danhmuc }} </option>
                            @endforeach
                        </select>
                    </div>
                </div>

                <div class="form-body">
                    <div class="form-group">
                        <label for="sanpham">Mã nhà cung cấp</label>
                        <select class="form-control" name="mancc">
                            <option > {{$key->ma_ncc}} </option>
                            @foreach($nhacungcap_get as $nhacungcap)
                                <option value="{{ $nhacungcap->ma_ncc }}"> {{ $nhacungcap->ten_ncc }}</option>
                            @endforeach
                        </select>
                    </div>
                </div>

                <div class="form-body">
                    <div class="form-group">
                        <label for="sanpham">Tên sản phẩm</label>
                        <input type="text" class="form-control" id="tensp" name="tensp" value="{{$key -> ten_sp}}" >
                    </div>
                </div>

                <div class="form-body">
                    <div class="form-group">
                        <label for="sanpham">Giá nhập</label>
                        <input type="number" class="form-control" id="gianhap" name="gianhap" value="{{$key -> gia_nhap}}" >
                    </div>
                </div>

                <div class="form-body">
                    <div class="form-group">
                        <label for="sanpham">Giá bán</label>
                        <input type="number" class="form-control" id="giaban" name="giaban" value="{{$key -> gia_ban}}" >
                    </div>
                </div>

                <div class="form-body">
                    <div class="form-group">
                        <label for="sanpham">Số lượng</label>
                        <input type="number" class="form-control" id="soluong" name="soluong" value="{{$key -> so_luong}}" >
                    </div>
                </div>

                <div class="form-body">
                    <div class="form-group">
                        <label for="hinhanh"></label>
                        <img id="image" src="{{ asset('./' . $key->hinhanh_sp) }}" alt="ahahi" width="200px" height="200px">
                        <input type="file"  id="hinhanh_sp" name="hinhanh_sp"  >
                    </div>
                </div>

                <script>
                    document.getElementById("hinhanh_sp").onchange = function () {
                        var reader = new FileReader();

                        reader.onload = function (e) {
                            // get loaded data and render thumbnail.
                            document.getElementById("image").src = e.target.result;
                        };

                        // read the image file as a data URL.
                        reader.readAsDataURL(this.files[0]);
                    };
                </script>


                <div class="form-body">
                    <div class="form-group">
                        <label for="sanpham">Mô tả</label>
                        <textarea name="motasp" id="motasp" class="form-control"> {{ $key -> mota_sp }}</textarea>
                    </div>
                </div>

                {{-- Button --}}
                <div class="card-footer">
                    <button type="submit" class="btn btn-primary">Cập nhật</button>
                </div>
                <p style="text-align: center"> Lưu ý: Mã nhà cung cấp không được thay đổi, nếu muốn thay đổi hãy xóa và tạo lại nhà cung cấp đó </p>
            @csrf
        </form>
    @endforeach
@endsection
