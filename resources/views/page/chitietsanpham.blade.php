<!DOCTYPE html>
<html lang="en">
@include('page.head')
<body class="animsition">

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

<!-- Header -->
@include('page.header')

<!-- Cart -->
@include('page.cart')

<!-- Product Detail -->
@foreach($newSP as $sanpham)
<section class="sec-product-detail bg0 p-t-65 p-b-60" style="padding-top: 150px">
    <div class="container">
        <div class="row">
            <div class="col-md-6 col-lg-7 p-b-30">
                <div class="p-l-25 p-r-30 p-lr-0-lg">
                    <div class="wrap-slick3 flex-sb flex-w">
                        <div class="slick3 gallery-lb">
                            <div class="item-slick3" data-thumb="images/product-detail-01.jpg">
                                <div class="wrap-pic-w pos-relative">
                                    <img src="{{$sanpham -> hinhanh_sp}}" alt="IMG-PRODUCT">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Show thông tin chi tiết của sản phẩm có mã tương ứng -->
            <div class="col-md-6 col-lg-5 p-b-30">
                <div class="p-r-50 p-t-5 p-lr-0-lg">
                    <h4 class="mtext-105 cl2 js-name-detail p-b-14" style="font-family: inherit; font-weight: bold">
                        Tên sản phẩm: {{$sanpham -> ten_sp}}
                        <input type="hidden" id="ten_sp" value="{{$sanpham -> ten_sp}}">
                    </h4>
                    <span class="mtext-106 cl2">
							Giá bán: {{number_format($sanpham -> gia_ban)}} VND<br>
                    </span>

                    <p class="stext-102 cl3 p-t-23">
                         {{$sanpham -> mota_sp}}
                    </p>

                    <p class="stext-102 cl3 p-t-23" style="font-size: 21px; font-weight: bold">
                        Sản phẩm hiện còn <span style="color: red">{{$sanpham -> so_luong}}</span> sản phẩm tại cửa hàng.
                    </p>



                    <!-- Button Xử lý thêm vào giỏ hàng -->
                    <div class="p-t-33">
                        <div class="flex-w flex-r-m p-b-10">
                            Số lượng mua:
                            <div class="size-204 flex-w flex-m respon6-next">
                                <div class="wrap-num-product flex-w m-r-20 m-tb-10">
                                    <input type="hidden" id="gia_ban_sp" name="gia_ban_sp" value="{{$sanpham -> gia_ban}}">
                                    <input type="hidden" id="id_sanpham" name="id_sp" value="{{$sanpham -> mshh}}"/>
                                    <!-- Tăng giảm số lượng mua -->
                                    <div class="btn-num-product-down cl8 hov-btn3 trans-04 flex-c-m">
                                        <i class="fs-16 zmdi zmdi-minus"></i>
                                    </div>

                                    <input class="mtext-104 cl3 txt-center num-product" id="number_cart" type="number" name="num-product" min="1" value="1"/>
                                    <div class="btn-num-product-up cl8 hov-btn3 trans-04 flex-c-m">
                                        <i class="fs-16 zmdi zmdi-plus"></i>
                                    </div>
                                </div>

                                <button class="flex-c-m stext-101 cl0 size-101 bg1 bor1 hov-btn1 p-lr-15 trans-04 js-addcart-detail" onclick="btn_add_cart()">
                                    Thêm vào giỏ hàng &nbsp;<i class="zmdi zmdi-shopping-cart"></i>
                                </button>
                                <div id="show_ajax_test"></div>
                            </div>
                        </div>
                    </div>
                    <script type="text/javascript">

                        // Ajax xử lý khi nhấn thêm vào giỏ hàng
                        function btn_add_cart(){
                            $.ajaxSetup({
                                headers: {
                                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                                }
                            });
                            var number_cart = $('#number_cart').val();//true
                            var id_sanpham = $('#id_sanpham').val();//true
                            var ten_sp = $('#ten_sp').val();
                            var gia_ban_sp = $('#gia_ban_sp').val();
                            $.ajax({
                                url: "/addcart",
                                method: "POST",
                                type: "POST",
                                data: {
                                    id_sanpham: id_sanpham,
                                    gia_ban: gia_ban_sp,
                                    soluong_mua: number_cart
                                },
                                success:function(result){
                                    swal("THÊM THÀNH CÔNG!", ten_sp + " vào giỏ", "success");
                                    window.setTimeout(function(){location.reload()},2000)
                                }
                            });
                        }
                    </script>
                    <!-- END BUTTON -->
                </div>
            </div>
        </div>
    </div>
    <div class="bg6 flex-c-m flex-w size-302 m-t-73 p-tb-15"></div>
</section>
@endforeach

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
                <div class="fa fa-mobile px-2 grey-text">&nbsp;&nbsp;<span id="contact">0399 769 420</span></div>
                <div class="fa fa-envelope-o px-2 grey-text">&nbsp;&nbsp;thoib1812307@student.ctu.edu.vn</div>
            </div>
        </div>
    </div>
</div>

<!--===============================================================================================-->
<script src="/styleAdmin/vendor/jquery/jquery-3.2.1.min.js"></script>
<!--===============================================================================================-->
<script src="/styleAdmin/vendor/animsition/js/animsition.min.js"></script>
<!--===============================================================================================-->
<script src="/styleAdmin/vendor/bootstrap/js/bootstrap.min.js"></script>
<!--===============================================================================================-->
<script src="/styleAdmin/vendor/sweetalert/sweetalert.min.js"></script>
<!--===============================================================================================-->
<script src="/styleAdmin/js/main.js"></script>
</body>
</html>
