<?php

namespace App\Http\Controllers\Admin;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use mysql_xdevapi\Table;

class DonhangController extends Controller
{
    public function danhsach_dh()
    {
        $newSP = DB::table('sanphams')->get();
        $donhang = DB::table('donhang')->get();
        $count = DB::table('donhang')->count();
        $count_cd = DB::table('donhang')->where('trangthai', '=', 2)->count();
        $count_dxl = DB::table('donhang')->where('trangthai', '=', 3)->count();
        $count_dhuy = DB::table('donhang')->where('trangthai', '=', 4)->count();

        $trangthaiDH = DB::table('trangthai_dh')->get();

        return view('admin.donhang.danhsach_dh', [
            'title' => 'DANH SÁCH ĐƠN HÀNG'
        ], compact('donhang', 'trangthaiDH', 'count', 'count_cd', 'count_dxl', 'count_dhuy', 'newSP'));
    }

    // remove
    public function xoa_dh(Request $request)
    {
        DB::table('donhang')->where('id_donhang', $request->id_donhang)->delete();
        return redirect()->back()->with('tao_thanhcong', 'Xóa thành công, vui lòng load lại trang');
    }

    public function dh_chitiet($id_donhang)
    {
        // Xuất thông tin khách hàng với ID tương ứng
        $donhang = DB::table('donhang')->where('id_donhang', $id_donhang)->get();

        // Tính tổng tiền
        $tong_hoadon = 0;
        foreach ($donhang as $key):
            $tong_hoadon += $key -> tong_tien;
        endforeach;

        // Liên kết 2 bảng sanphams và chitiet_hoadon để xuất ra các sản phẩm tương ứng với ID đơn hàng
        $dataOfTwoTable = DB::select("SELECT
                                            sanphams.mshh, sanphams.ten_sp, sanphams.gia_ban, sanphams.hinhanh_sp,
                                            chitiet_hoadon.soluong_mua, chitiet_hoadon.thanhtien
                                            FROM sanphams
                                            INNER JOIN chitiet_hoadon ON sanphams.mshh = chitiet_hoadon.mshh
                                            WHERE chitiet_hoadon.id_donhang = '$id_donhang'");
        return view('admin.donhang.chitiet_dh', [
            "title" => "THÔNG TIN HÓA ĐƠN",
            ],compact('dataOfTwoTable', 'donhang','tong_hoadon'));
    }

    // Duyệt đơn hàng
    public function duyet_dh($id_donhang)
    {
        $donhang = DB::table('donhang')->where('id_donhang', $id_donhang)->get();
        $newSP = DB::select("SELECT * FROM chitiet_hoadon
                                   WHERE chitiet_hoadon.id_donhang = '$id_donhang'");
        return view('admin.donhang.duyet_dh', [
            'title' => 'XÁC NHẬN'
        ], compact('donhang', 'newSP'));
    }

    // XÁC NHẬN ĐƠN HÀNG
    public function xacnhan_dh(Request $request, $id_donhang)
    {
        $xacnhan = DB::table('donhang')
            ->where('id_donhang', $id_donhang)
            ->update(['NgayGH' => $request->ngaygh, 'trangthai' => 1]);
        if ($xacnhan == true) {
            return redirect('/admin/danhsach_dh');
        } else {
            echo "Lỗi xác nhận đơn hàng!";
        }
    }

    // Cập nhật trạng thái cho đơn hàng
    public function update_trangthai_dh(Request $request, $id_donhang)
    {
        $update = DB::table('donhang')
            ->where('id_donhang', $id_donhang)
            ->update(['trangthai' => $request->toggle_tt]);

        if ($update == true) {
            return redirect('/admin/danhsach_dh');
        } else {
            echo "Lỗi cập nhật trạng thái đơn hàng!";
        }
    }

    // Hiển thị các đơn hàng đã duyệt
    public function dh_daduyet()
    {
        $donhang = DB::table('donhang')
            ->where('trangthai', '=', 3)
            ->get();
        return view("admin.donhang.dh_daduyet",
            ["donhang" => $donhang, "title" => "ĐƠN HÀNG DÃ DUYỆT"]);
    }

    public function dh_chuaduyet()
    {
        $donhang = DB::table('donhang')
            ->where('trangthai', '=', 2)
            ->get();
        return view("admin.donhang.dh_chuaduyet",
            ["donhang" => $donhang, "title" => "ĐƠN HÀNG ĐANG CHỜ DUYỆT"]);
    }

    public function dh_thatbai()
    {
        $donhang = DB::table('donhang')
            ->where('trangthai', '=', 4)
            ->get();
        return view("admin.donhang.dh_thatbai",
            ["donhang" => $donhang, "title" => "ĐƠN HÀNG BỊ HỦY"]);
    }

    public function tk_doanhthu()
    {
        return view('admin.thongke.thongke_doanhthu', [
            'title' => 'THỐNG KÊ DOANH THU'
        ]);
    }

    public function xuly_tk_doanhthu(Request $request)
    {
        $start_date = $request->startdate;
        $end_date = $request->enddate;
        $thongke = DB::select("SELECT *
                                     FROM donhang
                                     WHERE trangthai=3
                                     AND NgayDH >= '$start_date'
                                     AND NgayDH <= '$end_date'");
        $tong_doanhthu = 0;
        foreach ($thongke as $key):
            $tong_doanhthu += $key->tong_tien;

        endforeach;
        return view('admin.thongke.show_tk_donhang', compact('thongke', 'tong_doanhthu'));
    }

    public function xuly_tk_doanhthu_chitiet(Request $request)
    {
        $start_date = $request->startdate; // lấy ngày bắt đầu
        $end_date = $request->enddate; // lấy ngày kết thúc

        $thongke_dh = DB::select("SELECT donhang.id_donhang
                                     FROM donhang
                                     WHERE trangthai=3
                                     AND NgayDH >= '$start_date'
                                     AND NgayDH <= '$end_date'");

        $chitiet = DB::select(' SELECT b.id_donhang, b.soluong_mua, b.thanhtien, a.ten_sp, a.hinhanh_sp, a.gia_ban
                                      FROM sanphams as a, chitiet_hoadon as b
                                      WHERE a.mshh=b.mshh');
        return view('admin.thongke.show_tk_chitiet', compact('thongke_dh', 'chitiet'));
    }
}
