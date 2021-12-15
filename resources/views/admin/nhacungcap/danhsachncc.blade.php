@extends('admin.main')
@section('content')

    <table class="table" style="text-align: center">
        <thead>
        <tr>
            <th style="width:20%">Mã nhà cung cấp</th>
            <th>Tên nhà cung cấp</th>
            <th>Địa chỉ</th>
            <th>Số điện thoại</th>
            <th>Email liên hệ</th>
        </tr>
        </thead>
        <tbody>

        {{-- Móc data từ csdl về bảng thông qua phương thức compact  --}}
        @if(isset($tongNCC))
            @foreach ($tongNCC as $key => $v )
                <tr>
                    <td>{{$v->ma_ncc}}</td>
                    <td>{{$v->ten_ncc}}</td>
                    <td>{{$v->diachi_ncc}}</td>
                    <td>{{$v->sdt_ncc}}</td>
                    <td>{{$v->email_ncc}}</td>
                    {{-- Sữa, xóa nhà cung cấp --}}
                    <td>
                        <!-- Sữa -->
                        <a class="btn btn-primary" href="suancc/{{$v->ma_ncc}}">
                            <i class="far fa-edit"></i>
                        </a>
                        <!-- Xóa -->

                        <a class="btn btn-danger" href="xoancc/{{$v->ma_ncc}}">
                            <i class="fas fa-trash-alt"></i>
                        </a>
                    </td>
                </tr>
            @endforeach
        @endif
        </tbody>
    </table>








@endsection
