@extends('admin.main')
@section('content')

    <table class="table" style="text-align: center" >
        <thead>
        <tr>
            <th style="width:6%">Mã Hàng</th>
            <th>Mã Danh mục</th>
            <th>Mã Nhà Cung Cấp</th>
            <th>Tên Sản Phẩm</th>
            <th>Giá Nhập</th>
            <th>Giá Bán</th>
            <th>Số Lượng</th>
            <th>Hình Ảnh</th>
            <th>Mô Tả</th>
        </tr>
        </thead>
        <tbody>

        {{-- Móc data từ csdl về bảng thông qua phương thức compact  --}}
        @if(isset($tongSP))
            @foreach ($tongSP as $key => $v )
                <tr>
                    <td>{{$v->mshh}}</td>
                    <td>{{$v->ma_danhmuc}}</td>
                    <td>{{$v->ma_ncc}}</td>
                    <td>{{$v->ten_sp}}</td>
                    <td>{{number_format($v->gia_nhap)}}</td>
                    <td>{{number_format($v->gia_ban)}}</td>
                    <td>{{$v->so_luong}}</td>
                    <td> <img src="{{ asset('./' . $v->hinhanh_sp) }}" alt="ahahi" width="100px" height="100px"> </td>
                    <td>{{$v->mota_sp}}</td>
                    {{-- Sữa, xóa sản phẩm --}}
                    <td>
                        <!-- Sữa -->
                        <a class="btn btn-primary" href="suasp/{{$v->mshh}}">
                            <i class="far fa-edit"></i>
                        </a>
                        <!-- Xóa -->
                        <a class="btn btn-danger" href="xoasanpham/{{$v->mshh}}">
                            <i class="fas fa-trash-alt"></i>
                        </a>
                    </td>
                </tr>
            @endforeach
        @endif
        </tbody>
    </table>


@endsection
