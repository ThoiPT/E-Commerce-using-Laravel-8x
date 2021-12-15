@extends('admin.main')
@section('content')

@foreach ($data as $key )

<form action="../updatedanhmuc/{{$key->ma_danhmuc}}" method="POST">
    @csrf
    <div class="card-body">
      <div class="form-group">
        <label for="danhmuc">Mã danh mục</label>
        <input type="text" class="form-control" id="madanhmuc" name="ma_danhmuc" disabled value="{{$key->ma_danhmuc}}">
      </div>

      <div class="form-body">
        <div class="form-group">
          <label for="danhmuc">Tên danh mục</label>
          <input type="text" class="form-control" id="tendanhmuc" name="ten_danhmuc" value="{{$key->ten_danhmuc}}">
        </div>
    </div>

    {{-- Bật tắt danh mục  --}}
        <div class="form-group">
            <label>TRẠNG THÁI</label>
            <div class="custom-control custom-radio">
                <input class="custom-control-input" value = "1" type="radio" id="batdanhmuc" name="trangthai" checked="">
                <label for="batdanhmuc" class="custom-control-label">Bật</label>
            </div>
            {{-- Không bật -> value = 0 else value = 1 --}}
            <div class="custom-control custom-radio">
                <input class="custom-control-input" value="0" type="radio" id="tatdanhmuc" name="trangthai">
                <label for="tatdanhmuc" class="custom-control-label">Tắt</label>
            </div>
        </div>

    {{-- Button --}}
    <div class="card-footer">
        <button type="submit" class="btn btn-primary" >Cập nhật danh mục</button>
    </div>
        <p style="text-align: center;">Lưu ý: Mã danh mục không được thay đổi, nếu muốn thay đổi hãy xóa và tạo lại danh mục</p>
    </div>
</form>
@endforeach
@endsection
