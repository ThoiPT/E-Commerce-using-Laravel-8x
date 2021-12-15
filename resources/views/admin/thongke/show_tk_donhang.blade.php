<div>
    <p>Tổng doanh thu:&nbsp;&nbsp; {{ number_format($tong_doanhthu) }} VNĐ</p>
    <p>Lợi nhuận:&nbsp;&nbsp; {{ number_format($tong_doanhthu) }} VNĐ</p>
</div>
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
    </tr>
    </thead>
    <tbody>
    @if(isset($thongke) && $thongke!=null)
        @foreach ($thongke as $key => $v )
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

            </tr>
        @endforeach
    @else
        <tr>
            <td colspan="7">Không tìm thấy đơn hàng nào trong thời gian đã chọn!</td>
        </tr>
    @endif
    </tbody>
</table>
