<?php
# ROUTER ADMIN
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin\Users\LoginController;
use App\Http\Controllers\Admin\MainController;
use App\Http\Controllers\Admin\DanhmucController;
use App\Http\Controllers\Admin\NhacungcapController;
use App\Http\Controllers\Admin\SanphamController;
# ROUTER UI
use App\Http\Controllers\Page\MainControllerUI;
use App\Http\Controllers\Admin\DonhangController;


// Tao link dang nhap cho Admin , đường dẫn vào trang admin
Route::get('admin/users/login', [LoginController::class, 'index']) -> name('login');

// Tạo route cho form đăng nhập để gửi dữ liệu lên server, do form sử dụng phương thức là Post
Route::post('admin/users/dashboard', [LoginController::class, 'adminMaster']);

// Sử dụng middleware, quay về form đăng nhập
Route::middleware(['auth'])->group(function () {
    Route::prefix('admin') -> group(function (){

        Route::get('main', [MainController::class, 'index']) -> name('admin') -> middleware('auth');

        #Menu
        Route::prefix('danhmuc') -> group(function () {
            // add danh mục
            Route::get('themdanhmuc', [DanhmucController::class, 'themdanhmuc']);
            Route::get('tongdanhmuc', [DanhmucController::class, 'tongdanhmuc']);
            Route::post('themdanhmuc',[DanhmucController::class, 'btn_taodanhmuc']);
            // remove danh mục
            Route::get('xoadanhmuc/{ma_danhmuc}',[DanhmucController::class, 'xoadanhmuc']);
            // Edit
            Route::get('suadanhmuc/{ma_danhmuc}', [DanhmucController::class, 'suadanhmuc']);
            Route::post('updatedanhmuc/{ma_danhmuc}', [DanhmucController::class, 'capnhatdanhmuc']);
        });

        #NCC
        Route::prefix('nhacungcap') -> group(function () {
            // Add nha cung cap
            Route::get('themncc',[NhacungcapController::class, 'themncc']);
            Route::get('danhsachncc',[NhacungcapController::class,'danhsachncc']);
            Route::post('themncc',[NhacungcapController::class,'btn_themncc']);

            //remove nhà cung cấp
            Route::get('xoancc/{ma_ncc}',[NhacungcapController::class, 'xoancc']);

            // Edit
            Route::get('suancc/{ma_ncc}',[NhacungcapController::class, 'suancc']);
            Route::post('updateNCC/{ma_ncc}',[NhacungcapController::class, 'capnhat_ncc']);
        });

        #SANPHAM
        Route::prefix('sanpham') -> group(function () {
            // Add sản phẩm
            Route::get('themsanpham',[SanphamController::class, 'form_themsanpham']);
            Route::post('themsp_post', [SanphamController::class, 'themsanpham']);
            Route::get('danhsachsanpham',[SanphamController::class, 'tongsanpham']);

            // Edit
            Route::get('suasp/{mshh}',[SanphamController::class,'suasp']);
            Route::post('suasp/updateSP/{mshh}',[SanphamController::class,'capnhat_sp']);
            Route::get('xoasanpham/{mshh}',[SanphamController::class, 'xoa_sp']);
        });

        # ĐƠN HÀNG
        // LỌC ĐƠN HÀNG
        Route::get('danhsach_dh',[DonhangController::class,'danhsach_dh']);

        Route::get('dh_daduyet',[DonhangController::class,'dh_daduyet']);

        Route::get('dh_chuaduyet',[DonhangController::class,'dh_chuaduyet']);

        Route::get('dh_thatbai',[DonhangController::class,'dh_thatbai']);

        // Lấy ID đơn hàng để duyệt
        Route::get('duyet_dh/{id_donhang}',[DonhangController::class,'duyet_dh']);

        // Duyệt đơn hàng sau khi lấy ID
        Route::post('xacnhan_dh/{id_donhang}',[DonhangController::class,'xacnhan_dh']);

        // Xóa đơn hàng
        Route::get('xoa_dh/{id_donhang}',[DonhangController::class,'xoa_dh']);

        // Show chi tiết đơn hàng
        Route::get('dh_chitiet/{id_donhang}',[DonhangController::class,'dh_chitiet']);

        // Cập nhật trạng thái
        Route::post('update_trangthai/{id_donhang}',[DonhangController::class,'update_trangthai_dh']);

        // Thống kê
        Route::get('thongke_doanhthu',[DonhangController::class, 'tk_doanhthu']);
        Route::post('xuly_thongke',[DonhangController::class, 'xuly_tk_doanhthu']);
        Route::post('xuly_thongke_chitiet',[DonhangController::class, 'xuly_tk_doanhthu_chitiet']);
    });
});

// GIAO DIỆN

Route::get('/',[MainControllerUI::class,'showTest']);

Route::get('/{mshh}',[MainControllerUI::class, 'chitietsp']);

Route::post('/addcart',[MainControllerUI::class, 'add_sp_cart']);


// Xóa sản phẩm trong giỏ hàng
Route::get('remove_sp_cart/{id}',[MainControllerUI::class, 'remove_sp_cart']);

// Thanh toán
Route::get('/thanhtoan/{cart}',[MainControllerUI::class, 'thanhtoan_cart']);

// Xóa item sản phẩm trong phần thanh toán
Route::get('xoa_item/{id_sanpham}',[MainControllerUI::class, 'xoa_item']);

// Update item sản phẩm trong phần thanh toán
Route::get('update_item/{soluong_mua}',[MainControllerUI::class, 'update_item']);

// Gửi dữ liệu thanh toán lên DB
Route::post('submit',[MainControllerUI::class,'submit']);


