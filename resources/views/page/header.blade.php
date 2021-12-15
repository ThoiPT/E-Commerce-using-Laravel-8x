
<header>
    @foreach($cart as $sanpham)
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

                <!-- Icon header SEARCH -->
                <div class="wrap-icon-header flex-w flex-r-m">
                    <div class="icon-header-item cl2 hov-cl1 trans-04 p-l-22 p-r-11 js-show-modal-search">
                        <i class="zmdi zmdi-search"></i>
                    </div>

                            <div class="icon-header-item cl2 hov-cl1 trans-04 p-l-22 p-r-11 icon-header-noti js-show-cart" data-notify={{count($cart)}}>
                                <i class="zmdi zmdi-shopping-cart"></i>
                            </div>

                </div>
            </nav>
        </div>
        @endforeach
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

{{--    <!-- Modal Search -->--}}
    <div class="modal-search-header flex-c-m trans-04 js-hide-modal-search">
        <div class="container-search-header">
            <button class="flex-c-m btn-hide-modal-search trans-04 js-hide-modal-search">
                <img src="/styleAdmin/images/icons/icon-close2.png" alt="CLOSE">
            </button>

            <form class="wrap-search-header flex-w p-l-15">
                <button class="flex-c-m trans-04">
                    <i class="zmdi zmdi-search"></i>
                </button>
                <input class="plh3" type="text" name="search" placeholder="Search...">
            </form>
        </div>
    </div>
</header>
