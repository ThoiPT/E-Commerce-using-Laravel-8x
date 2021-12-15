@extends('admin.main')
@section('content')

    @foreach($data as $key)
    <form action="../updateNCC/{{$key->ma_ncc}}" method="POST">
        <div class="card-body">
            <div class="form-group">
                <label for="nhacungcap">Mã nhà cung cấp</label>
                <input type="text" class="form-control" id="mancc" name="mancc" disabled value="{{$key -> ma_ncc}}">
            </div>

            <div class="form-body">
                <div class="form-group">
                    <label for="nhacungcap">Tên nhà cung cấp</label>
                    <input type="text" class="form-control" id="tenncc" name="tenncc" value="{{$key -> ten_ncc}}" >
                </div>
            </div>

            <div class="form-body">
                <div class="form-group">
                    <label for="nhacungcap">Địa chỉ</label>
                    <input type="text" class="form-control" id="diachincc" name="diachincc" value="{{$key -> diachi_ncc}}" >
                </div>
            </div>

            <div class="form-body">
                <div class="form-group">
                    <label for="nhacungcap">Số điện thoại</label>
                    <input type="text" class="form-control" id="sdtncc" name="sdtncc" value="{{$key -> sdt_ncc}}" >
                </div>
            </div>

            <div class="form-body">
                <div class="form-group">
                    <label for="nhacungcap">Email liên hệ</label>
                    <input type="email" class="form-control" id="emailncc" name="emailncc" value="{{$key -> email_ncc}}" >
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
