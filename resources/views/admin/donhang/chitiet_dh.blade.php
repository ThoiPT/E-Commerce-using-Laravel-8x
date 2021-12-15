
@include('admin.header')

@if(isset($donhang))
    @foreach($donhang as $key => $v)

<div class="invoice p-3 mb-3">
    <!-- title row -->

    <div class="callout callout-info">
        <h5><i class="fas fa-info"></i> THÔNG TIN CHI TIẾT ĐƠN HÀNG</h5>

    </div>

    <div class="row">
        <div class="col-12">
            <h4>
                <i class="fas fa-globe"></i> PT-SHOP
                <small class="float-right"></small>
            </h4>
        </div>
        <!-- /.col -->
    </div>
    <!-- info row -->
    <div class="row invoice-info">
        <div class="col-sm-4 invoice-col">
            THÔNG TIN SHOP
            <address>
                <strong>PT-SHOP</strong><br>
                Lê Bình - Cái Răng<br>
                Thành Phố Cần Thơ<br>
                Điện thoại: 0399 769 420<br>
                Email: info@ptshop.com
            </address>
        </div>
        <!-- /.col -->

        <div class="col-sm-4 invoice-col">
            THÔNG TIN KHÁCH HÀNG
            <address>
                <strong>Họ tên khách hàng: {{$v->ten_kh}}</strong><br>
                Địa chỉ: {{$v->diachi}}<br>
                Điện thoại: {{$v->sdt}}<br>
            </address>
        </div>
        <!-- /.col -->
        <div class="col-sm-4 invoice-col">
            <b>ID đơn hàng: {{$v->id_donhang}} </b><br>

            <b>Ngày đặt hàng: </b> {{$v->NgayDH}}<br>
            <b>Ngày giao hàng: </b> {{$v->NgayGH}}<br>
            <b>Hình thức thanh toán: </b>Nhận hàng chuyển tiền
        </div>
        <!-- /.col -->
    </div>
    <!-- /.row -->

    <!-- Table row -->

    <div class="row">
        <div class="col-12 table-responsive">
            <table class="table table-striped">
                <thead>
                <tr>
                    <th>Mã sản phẩm</th>
                    <th></th>
                    <th>Hình ảnh</th>
                    <th>Tên sản phẩm</th>
                    <th>Đơn giá bán</th>
                    <th>Số lượng mua</th>
                    <th>Thành tiền</th>
                </tr>
                </thead>

                <tbody>
                    @foreach($dataOfTwoTable as $key => $item)
                    <tr>
                        <td>{{ $item->mshh }}<td>
                        <td> <img src="/{{$item -> hinhanh_sp}}" width="100px"> </td>
                        <td>{{ $item->ten_sp }}</td>
                        <td>{{ number_format($item->gia_ban)}} VNĐ</td>
                        <td>{{ $item->soluong_mua }}</td>
                        <td>{{ number_format($item->thanhtien)}} VNĐ</td>
                    </tr>
                    @endforeach
                </tbody>

            </table>
        </div>
        <!-- /.col -->
    </div>

    <div>
        <span style="font-weight: bold; font-size: 20px; font-family: inherit">Tổng giá trị đơn hàng: {{number_format($tong_hoadon)}} VNĐ</span>
    </div>


    <!-- this row will not appear when printing -->
    <div class="row no-print">
        <div class="col-12">
            <a href="/admin/danhsach_dh" rel="noopener" target="_self" class="btn btn-success"><i class="fas fa-thumbs-up"> &nbsp;</i>XÁC NHẬN</a>
        </div>
    </div>
</div>
    @endforeach
@endif

