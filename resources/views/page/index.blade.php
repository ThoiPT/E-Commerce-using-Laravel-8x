<!DOCTYPE html>
<html lang="en">
 @include('page.head')
 <script src="https://use.fontawesome.com/releases/v5.15.4/js/all.js" data-auto-replace-svg="nest"></script>
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
 <body class="animsition">

<!-- Header -->
{{--@include('page.header')--}}
<header>
    <!-- Header desktop -->
        <div class="container-menu-desktop">
            <div class="wrap-menu-desktop">
                <nav class="limiter-menu-desktop container">
                    <!-- Logo desktop -->
                    <a href="#" class="logo">
                        <img src="/styleAdmin/images/icons/logo.png" alt="IMG-LOGO">
                    </a>
                    <a href="/" style="margin-top: 3px;font-weight: bold;color: darkgreen">
                        TRANG CHỦ
                    </a>
                </nav>
            </div>
        </div>

        <!-- Header Mobile -->
        <div class="wrap-header-mobile">
            <!-- Logo moblie -->
            <div class="logo-mobile">
                <a href="index.html"><img src="/styleAdmin/images/icons/logo.png" alt="IMG-LOGO"></a>
            </div>

            <!-- Icon header -->
            <div class="wrap-icon-header flex-w flex-r-m m-r-15">
                <div class="icon-header-item cl2 hov-cl1 trans-04 p-r-11 js-show-modal-search">
                    <i class="zmdi zmdi-search"></i>
                </div>

                <div class="icon-header-item cl2 hov-cl1 trans-04 p-r-11 p-l-10 icon-header-noti js-show-cart" data-notify="100">
                    <i class="zmdi zmdi-shopping-cart"></i>
                </div>
            </div>
        </div>
</header>

<!-- Cart -->
@include('page.cart')

<!-- BANNER TRANG CHỦ -->
<section class="section-slide">
    <div class="wrap-slick1">
        <div class="slick1">
            <div class="item-slick1" style="background-image: url(/styleAdmin/images/banner.jpg); height: 500px">
                <!------------------>
                <div class="container h-full">
                    <div class="flex-col-l-m h-full p-t-100 p-b-30 respon5">
                        <div class="layer-slick1 animated visible-false" data-appear="rotateInUpRight" data-delay="800">
                            <h2 class="ltext-201 cl2 p-t-19 p-b-43 respon1" style="color: white">
                                XE MÁY SHOP
                            </h2>
                        </div>

                        <div class="layer-slick1 animated visible-false" data-appear="rotateIn" data-delay="1600">
                            <a href="#" class="flex-c-m stext-101 cl0 size-101 bg1 bor1 hov-btn1 p-lr-15 trans-04" style="font-family: '#9Slide03 Quicksand Bold'">
                                UY TÍN - CHẤT LƯỢNG
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>


<!-- SẢN PHẨM THEO DANH MỤC -->
<section class="bg0 p-t-23 p-b-140">
    <div class="container">
        <div class="p-b-10">
            <h3 class="ltext-103 cl5" style="font-family: inherit; font-weight: bold">
                SẢN PHẨM THEO DANH MỤC
            </h3>
        </div>


        <!-- Hiển thị Danh mục -->
        <div class="flex-w flex-sb-m p-b-52"  id="go_shop_buy">
            <div class="flex-w flex-l-m filter-tope-group m-tb-10">
                <button class="bor3 m-r-32" data-filter="*" style="font-family: inherit; font-weight: bold; font-size: 15px; color: #9F0053">
                    TẤT CẢ SẢN PHẨM
                </button>
                @foreach($newDM as $danhmuc)
                <button class="bor3 m-r-32" data-filter=".{{$danhmuc -> ma_danhmuc}}" style="font-family: inherit; font-size: 15px">
                    {{$danhmuc -> ten_danhmuc}}
                </button>
                @endforeach
            </div>
        </div>

{{---Index file---------------------------------------------------------------------------------------------}}
        <!--Hiển thị Sản phẩm -->
        <div class="row isotope-grid frame_product">
            @foreach($newSP as $sanpham)
            <div class="col-sm-6 col-md-4 col-lg-3 p-b-35 isotope-item product-index {{$sanpham -> ma_danhmuc}}">
                <div class="block2">
                    <div class="block2-pic hov-img0">
                        <img src="{{$sanpham -> hinhanh_sp}}" alt="Lỗi hiển thị" class="img-product-index">
                        <a
                            href="/{{$sanpham -> mshh}}" class="block2-btn flex-c-m stext-103 cl2 size-102 bg0 bor2 hov-btn1 p-lr-15 trans-04 btn btn-info btn-lg">
                            Xem chi tiết
                        </a>
                    </div>

                    <div class="block2-txt flex-w flex-t p-t-14">
                        <div class="block2-txt-child1 flex-col-l ">
                            <a href="product-detail.html" class="stext-104 cl4 hov-cl1 trans-04 js-name-b2 p-b-6">
                                <a href="/{{$sanpham->mshh}}">{{$sanpham -> ten_sp}}</a>
                            </a>
                            <span class="stext-105 cl3">
									Giá bán: {{number_format($sanpham -> gia_ban)}} VND
                            </span>

                            <i style="color:#9d1e15;" class="stext-104 cl4 hov-cl1 trans-04 js-name-b2 p-b-6">
                                Danh mục: {{$sanpham -> ma_danhmuc}}
                            </i>
                        </div>
                    </div>

                </div>
            </div>
            @endforeach
        </div>
    </div>
</section>


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
                    <a href="/admin/users/login/" style="color: white"><div class="p-2 flex-fill d-flex bd-highlight">Truy cập trang quản trị</div></a>
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
</body>
</html>

