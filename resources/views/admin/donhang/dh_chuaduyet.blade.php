<style>
    .show_select_tt{
        display: block;
    }
</style>
@extends('admin.main')
@section('content')

    <table class="table" style="text-align: center">
        <thead>
        <tr>
            <th style="">ID</th>
            <th>Họ tên</th>
            <th>Địa chỉ</th>
            <th>Điện thoại</th>
            <th>Tổng tiền</th>
            <th>Ngày đặt hàng</th>
            <th>Ngày giao hàng</th>
            <th>Trạng thái</th>
            <th>Thao tác</th>

        </tr>
        </thead>
        <tbody>

        {{--         Móc data từ csdl về bảng thông qua phương thức compact--}}
        @if(isset($donhang))
            @foreach ($donhang as $key => $v )
                <tr>
                    <td>{{$v->id_donhang}}</td>
                    <td>{{$v->ten_kh}}</td>
                    <td>{{$v->diachi}}</td>
                    <td>{{$v->sdt}}</td>
                    <td>{{number_format($v->tong_tien)}} VNĐ</td>
                    <td>{{ date('d-m-Y',strtotime($v->NgayDH)) }}</td>
                    <td>
                        @if($v->NgayGH!=null)
                            {{date('d-m-Y',strtotime($v->NgayGH))}}
                        @else
                            Đang chờ xử lý
                        @endif
                    </td>

                    <td>
                        @if($v->trangthai == 2)
                            {{"Đang chờ duyệt"}}
                        @endif
                    </td>

                    <td>
                        <!-- Duyệt đơn hàng -->
                        <a class="btn btn-primary" href="duyet_dh/{{$v->id_donhang}}">
                            <i class="fas fa-check-square"></i>
                        </a>
                        <!-- Xóa đơn hàng -->
                        <a class="btn btn-danger" href="xoa_dh/{{$v->id_donhang}}">

                            <i class="fas fa-trash-alt"></i>
                        </a>
                    </td>
                </tr>
            @endforeach
        @endif
        </tbody>
    </table>
@endsection

