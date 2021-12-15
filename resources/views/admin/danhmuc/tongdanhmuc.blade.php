@extends('admin.main')
@section('content')
    <table class="table" style="text-align: center">
        <thead>
            <tr>
                <th style="width:20%">Mã danh mục</th>
                <th>Tên danh mục</th>
                <th>Tình trạng</th>
                <th>Chỉnh sữa</th>
            </tr>
        </thead>
        <tbody>

            {{-- Móc data từ csdl về bảng thông qua phương thức compact  --}}
            @if(isset($tongDM))
            @foreach ($tongDM as $key => $v )
            <tr>
                <td>{{$v->ma_danhmuc}}</td>
                <td>{{$v->ten_danhmuc}}</td>
                <td>
                    @if ($v->trangthai == 1)
                        Đã bật
                    @else
                        Đã tắt
                    @endif
                </td>
                {{-- Sữa, xóa danh mục --}}
                <td>
                    <!-- Sữa -->
                    <a class="btn btn-primary" href="suadanhmuc/{{$v->ma_danhmuc}}">
                        <i class="far fa-edit"></i>
                    </a>
                    <!-- Xóa -->
                    <a class="btn btn-danger" href="xoadanhmuc/{{$v->ma_danhmuc}}">
                        <i class="fas fa-trash-alt"></i>
                    </a>
                </td>
            </tr>
            @endforeach
            @endif
        </tbody>
    </table>
@endsection
