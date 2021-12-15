<table class="table" style="text-align: center">
    <thead>
    <tr>
        <th>ID Đơn hàng</th>
        <th>Tên hàng hóa</th>
        <th>Hình ảnh</th>
        <th>Giá</th>
        <th>Số lượng mua</th>
        <th>Thành tiền</th>
    </tr>
    </thead>
    <tbody>
    @if(isset($thongke_dh) && $thongke_dh!=null)
        @foreach($thongke_dh as $key => $dh )
            @foreach($chitiet as $key => $ct)
                @if($ct->id_donhang == $dh->id_donhang)
                    <tr>
                        <td>{{ $ct->id_donhang }}</td>
                        <td>{{ $ct->ten_sp }}</td>
                        <td><img src="../{{ $ct->hinhanh_sp }}" width="120px" alt="Ảnh sản phẩm"></td>
                        <td>{{ number_format($ct->gia_ban) }}</td>
                        <td>{{ $ct->soluong_mua }}</td>
                        <td>{{ number_format($ct->thanhtien) }}</td>
                    </tr>
                @endif
            @endforeach
        @endforeach
    @else
        <tr><td colspan="6">Không tìm thấy sản phẩm nào đã bán trong thời gian đã chọn!</td></tr>
    @endif

    </tbody>
</table>
