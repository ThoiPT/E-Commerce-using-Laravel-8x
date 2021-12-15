@extends('admin.main')
@section('content')

    <form action="" method="POST">
        <div class="card-body">
            <div class="form-group">
                <label for="nhacungcap">Mã nhà cung cấp</label>
                <input type="text" class="form-control" id="mancc" name="mancc" placeholder="Mã nhà cung cấp">
            </div>

            <div class="form-body">
                <div class="form-group">
                    <label for="nhacungcap">Tên nhà cung cấp</label>
                    <input type="text" class="form-control" id="tenncc" name="tenncc" placeholder="Tên nhà cung cấp">
                </div>
            </div>

            <div class="form-body">
                <div class="form-group">
                    <label for="nhacungcap">Địa chỉ</label>
                    <input type="text" class="form-control" id="diachincc" name="diachincc" placeholder="Địa chỉ">
                </div>
            </div>

            <div class="form-body">
                <div class="form-group">
                    <label for="nhacungcap">Số điện thoại</label>
                    <input type="text" class="form-control" id="sdtncc" name="sdtncc" placeholder="Số điện thoại">
                </div>
            </div>

            <div class="form-body">
                <div class="form-group">
                    <label for="nhacungcap">Email liên hệ</label>
                    <input type="email" class="form-control" id="emailncc" name="emailncc" placeholder="Địa chỉ">
                </div>
            </div>


            {{-- Button --}}
            <div class="card-footer">
                <button type="submit" class="btn btn-primary">Thêm nhà cung cấp</button>
            </div>
        @csrf
    </form>
@endsection
