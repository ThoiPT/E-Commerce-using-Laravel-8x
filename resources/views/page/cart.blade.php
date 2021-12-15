
<div class="wrap-header-cart js-panel-cart">
    <div class="s-full js-hide-cart"></div>
    <div class="header-cart flex-col-l p-l-65 p-r-25">
        <div class="header-cart-title flex-w flex-sb-m p-b-8">
				<span class="mtext-103 cl2" style="font-family: '#9Slide02 Tieu de dai'; margin-top: 13px">
					GIỎ HÀNG
                    <hr>
				</span>

            <div class="fs-35 lh-10 cl2 p-lr-5 pointer hov-cl1 trans-04 js-hide-cart">
                <i class="zmdi zmdi-close"></i>
            </div>
        </div>

        <div class="header-cart-content flex-w js-pscroll" style="display: flex; align-content: flex-start;">
{{--            Hiển thị danh sách sản phẩm trong giỏ hàng--}}
            @php
                $tong = 0;
            @endphp

            @if(isset($cart))
            @foreach($cart as $sanpham)
            <ul class="header-cart-wrapitem w-full">
                <li class="header-cart-item flex-w flex-t m-b-12">
                    <a href="remove_sp_cart/{{$sanpham->id}}">
                        <div class="header-cart-item-img" >
                            <img src="{{$sanpham -> hinhanh_sp}}" alt="IMG">
                        </div>
                    </a>
                    <div class="header-cart-item-txt p-t-8">
                        <a href="#" class="header-cart-item-name m-b-18 hov-cl1 trans-04" style="margin: 0">
                            {{$sanpham -> ten_sp}}
                        </a>

                        <span class="header-cart-item-info">
                            {{$sanpham -> soluong_mua}} x {{number_format($sanpham -> gia_ban)}} = {{number_format($tongtien = $sanpham->soluong_mua*$sanpham->gia_ban)}} VNĐ
                        </span>
                    </div>
                </li>
            </ul>
                    <!-- Tính tổng tiền cho toàn bộ giỏ hàng -->
                    @php
                        $tong += $tongtien;
                    @endphp
                    <!-- END tính tổng tiền -->
            @endforeach
            @endif
        </div>

        {{-- Phần thanh toán và tổng tiền --}}
        <div class="w-full">
            <div class="header-cart-total w-full p-tb-40" style="font-family: '#9Slide03 Roboto Thin'; font-weight: bold">
                Tổng tiền: {{number_format($tong)}} VNĐ
            </div>

            <div class="header-cart-buttons flex-w w-full">
                <a href="/#go_shop_buy" class="flex-c-m stext-101 cl0 size-107 bg3 bor2 hov-btn3 p-lr-15 trans-04 m-r-8 m-b-10" style="flex: auto; background-color: teal">
                    MUA TIẾP
                </a>
                <a href="/thanhtoan/cart" class="flex-c-m stext-101 cl0 size-107 bg3 bor2 hov-btn3 p-lr-15 trans-04 m-b-10" style="flex: auto; background-color: darkgreen">
                    THANH TOÁN
                </a>
            </div>

        </div>
    </div>
</div>
