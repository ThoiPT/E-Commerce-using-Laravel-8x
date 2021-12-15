
<!DOCTYPE html>
<html lang="en">
<!-- STYLE FOOTER -->
<style>
    body {
        overflow-x: hidden;
        color: #fff
    }

    p {
        font-size: 14px
    }

    .container-fluid {
        background-color: #4527A0
    }

    .top-part {
        background-color: #512DA8
    }

    .center-content {
        margin-top: 120px;
        margin-bottom: 120px
    }

    .btn-pink {
        border-radius: 0;
        background-color: #FF4081;
        color: #fff !important;
        letter-spacing: 2px;
        padding: 10px;
        padding-right: 20px;
        padding-left: 20px
    }

    .btn-pink:hover {
        background-color: #F50057
    }

    .line {
        border-top: 1px solid #7B1FA2;
        width: 90% !important
    }

    .fa-mobile {
        font-size: 20px
    }

    #contact {
        font-size: 15px
    }

    .grey-text {
        color: lightgrey
    }
</style>
<!-- END STYLE FOOTER -->

<!-- HEAD -->
@include('page.head')
<body class="animsition">
<!-- Cart -->
@if(Session::get('thanhcong'))
    <div class="alert alert-success">
        {{ Session::get('thanhcong') }}
    </div>
@endif

@if(Session::get('thatbai'))
    <div class="alert alert-danger">
        {{ Session::get('thatbai') }}
    </div>
@endif


<form action="/submit" class="bg0 p-t-75 p-b-85" method="POST" enctype="multipart/form-data">
    @csrf
    <div class="container">
        <div class="row">
            <div class="col-lg-10 col-xl-7 m-lr-auto m-b-50">
                <div class="m-l-25 m-r--38 m-lr-0-xl">
                    <div class="wrap-table-shopping-cart">
                        <table class="table-shopping-cart">
                            <tr class="table_head">
                                <th class="column-1" style="font-family: inherit">SẢN PHẨM</th>
                                <th class="column-2" style="padding-left: 283px"></th>
                                <th class="column-3" style="font-family: inherit; padding-left: 20px">GIÁ TIỀN</th>
                                <th class="column-4" style="font-family: inherit; padding-left: 20px">SỐ LƯỢNG</th>
                                <th class="column-5" style="font-family: inherit; padding-left: 10px">TỔNG TIỀN</th>
                            </tr>
                            @foreach($cart as $key)
                            <tr class="table_row">
                                <td class="column-1">
                                    <div class="how-item cart1">
                                        <img style="width: 100px; height: 115px; border-radius: 15px"
                                             src="../{{$key -> hinhanh_sp}}" alt="IMG">
                                    </div>
                                </td>


                                <td class="column-2" style="font-family: inherit; padding-left: 6px">{{$key -> ten_sp }}</td>
                                <td class="column-3" style="padding-left: 20px">{{number_format($key -> gia_ban)}}</td>
                                <td class="column-4" style="padding-left: 20px">
                                    <div class="wrap-num-product flex-w m-l-auto m-r-0" style="width: 80px">
                                        <input readonly type="number" name="num-product1" value="{{$key -> soluong_mua}}" min="1" max="{{$key -> so_luong}}" style="text-align: center">
                                    </div>
                                </td>
                                <td class="column-5" style="padding-left: 20px">{{number_format($tongtien = $key->soluong_mua*$key->gia_ban)}} VNĐ</td>
                                <td class="column-5">
                                    <a href="/xoa_item/{{$key -> id_sanpham}}" style="color: red">Xóa</a>
                                </td>
                            </tr>
                            @endforeach
                        </table>
                    </div>

                    <div class="flex-w flex-sb-m bor15 p-t-18 p-b-15 p-lr-40 p-lr-15-sm">
                        <a href="/#go_shop_buy">
                            <div class="flex-c-m stext-101 cl2 size-119 bg8 bor13 hov-btn3 p-lr-15 trans-04 pointer m-tb-10" style="font-family: inherit; font-weight: bold">
                                Quay lại mua hàng
                            </div>
                        </a>
                    </div>
                </div>
            </div>

            <div class="col-sm-10 col-lg-7 col-xl-5 m-lr-auto m-b-50">
                <div class="bor10 p-lr-40 p-t-30 p-b-40 m-l-63 m-r-40 m-lr-0-xl p-lr-15-sm">
                    <h4 class="mtext-109 cl2 p-b-30" style="font-family: unset; font-weight: bold; margin-top: -11px">
                        THÔNG TIN THANH TOÁN
                    </h4>

                    <h3 style="font-size: 16px; line-height: 26px">
                        <i class="fas fa-exclamation-circle"></i>
                        <span style="font-weight: bold">Lưu ý:</span>
                        Khách hàng cần điền đầy đủ các thông tin mới có thể đặt hàng, các thông tin là bắt buộc
                    </h3>

                    <!-- THÔNG TIN THANH TOÁN -->
                    <div class="flex-w flex-t bor12 p-t-15 p-b-30">
                        <div class="size-208 w-full-ssm">
                            <span class="stext-110 cl2">
                                KHÁCH HÀNG
                            </span>
                        </div>

                        <div class="size-209 p-r-18 p-r-0-sm w-full-ssm">
                            <div class="p-t-15">
                                <span class="stext-112 cl8">
                                    THÔNG TIN CÁ NHÂN
                                </span>

                                <div class="bor8 bg0 m-b-12">
                                    <input class="stext-102 cl8 plh3 size-111 p-lr-15" type="text" name="hovaten" placeholder="Họ và tên" value="{{ old('hovaten') }}">
                                    <span style="color: red">@error('hovaten') {{ $message }} @enderror</span>
                                </div>

                                <div class="bor8 bg0 m-b-22">
                                    <input class="stext-102 cl8 plh3 size-111 p-lr-15" type="text" name="sodienthoai" placeholder="Số điện thoại" value="{{ old('sodienthoai') }}">
                                    <span style="color: red">@error('sodienthoai') {{ $message }} @enderror</span>
                                </div>

                                <div class="bor8 bg0 m-b-22">
                                    <input class="stext-102 cl8 plh3 size-111 p-lr-15" type="text" name="diachi" placeholder="Địa chỉ giao hàng" value="{{ old('diachi') }}">
                                    <span style="color: red">@error('diachi') {{ $message }} @enderror</span>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="flex-w flex-t p-t-27 p-b-33">
                        <div class="size-208">
								<span class="mtext-101 cl2" style="font-family: inherit; font-weight: bold">
									Số tiền cần thanh toán:
								</span>
                        </div>
                        <div class="size-209 p-t-1">
								<span class="mtext-110 cl2">
                                    {{ number_format($tong_thanhtien) }} VNĐ
								</span>
                        </div>
                    </div>
                    <a href="#">
                        <button class="flex-c-m stext-101 cl0 size-116 bg3 bor14"
                                style="background-color: forestgreen; font-family: unset; font-weight: bold">
                            ĐẶT HÀNG
                        </button>
                    </a>

                    <!-- END THÔNG TIN THANH TOÁN -->
                </div>
            </div>
        </div>
    </div>


</form>

<!-- Footer -->

<div class="container-fluid mx-auto">
    <div class="row justify-content-center top-part">
        <div class="col-md-6 text-center center-content">
            <div class="d-flex-inline">
                <h1 class="footer-heading">PT-SHOP</h1>
            </div>
            <div class="d-flex-inline">
                <p>Chuyên cung cấp phụ tùng xe máy chính hãng, phù hợp cho tất cả các dòng xe số</p>
            </div>
            <div class="d-flex-inline pt-2"> <button class="btn-pink btn">Niên luận cơ sở nghành</button> </div>
        </div>
    </div>
    <div class="row bottom-part">
        <div class="d-lg-flex justify-content-between bd-highlight col-md-12 mb-5 px-5">
            <div class="p-2 align-self-center flex-fill bd-highlight">
                <div class="fa fa-facebook px-2"></div>
                <div class="fa fa-linkedin px-2"></div>
                <div class="fa fa-twitter px-2"></div>
                <div class="fa fa-instagram px-2"></div>
            </div>
            <div class="p-2 row flex-fill bd-highlight justify-content-left">
                <div class="p-2 d-lg-flex">
                    <div class="p-2 flex-fill d-flex bd-highlight">Lê Phát Thời</div>
                    <div class="p-2 flex-fill d-flex bd-highlight">B1812307</div>
                    <div class="p-2 flex-fill d-flex bd-highlight">0399 769 420</div>
                    <div class="p-2 flex-fill d-flex bd-highlight">Giao diện tham khảo từ Coza Teamplate</div>
                </div>
            </div>
            <div class="p-2 align-self-center flex-fill bd-highlight">
                <div class="fa fa-mobile px-2 grey-text">&nbsp;&nbsp;<span id="contact">888-777-666</span></div>
                <div class="fa fa-envelope-o px-2 grey-text">&nbsp;&nbsp;info@itcraft.in</div>
            </div>
        </div>
    </div>
</div>

@include('page.footer')

<!--===============================================================================================-->
<script src="/styleAdmin/vendor/jquery/jquery-3.2.1.min.js"></script>
<!--===============================================================================================-->
<script src="/styleAdmin/vendor/animsition/js/animsition.min.js"></script>
<!--===============================================================================================-->
<script src="/styleAdmin/vendor/bootstrap/js/popper.js"></script>
<script src="/styleAdmin/vendor/bootstrap/js/bootstrap.min.js"></script>
<!--===============================================================================================-->
<script src="/styleAdmin/js/main.js"></script>

<script src="https://use.fontawesome.com/releases/v5.15.4/js/all.js" data-auto-replace-svg="nest"></script>
</body>
</html>
