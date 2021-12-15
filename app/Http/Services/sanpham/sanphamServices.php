<?php

namespace App\Http\Services\sanpham;

use App\Models\sanpham;
use Illuminate\Support\Facades\Session;

class sanphamServices
{
    public function create($request)
    {
        try {
            sanpham::create([
                // thuoc tinh ten csdl                      định danh trong form
                'mshh' => (string) $request -> input('mshh'),
                'ma_danhmuc' => (string) $request -> input('madanhmuc'),
                'ma_ncc' => (string) $request -> input('mancc'),
                'ten_sp' => (int) $request -> input('tensp'),
                'gia_nhap' => (int) $request -> input('gianhap'),
                'gia_ban' => (int) $request -> input('giaban'),
                'so_luong' => (int) $request -> input('soluong'),
                'hinhanh_sp' => (int) $request -> input('hinhanh_sp'),
                'mota_sp' => (int) $request -> input('motasp'),
            ]);

            // Tạo thông báo khi thêm danh mục thành công bằng Session
            Session::flash('tao_thanhcong','Thêm sản phẩm thành công ');

        } catch (\Exception $err) {
            Session::flash('tao_thatbai', $err -> getMessage());
            return false;
        }
        return true;
    }

}
