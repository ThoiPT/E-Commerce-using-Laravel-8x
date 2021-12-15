<?php

namespace App\Http\Services\danhmuc;

use App\Models\danhmuc;
use Illuminate\Support\Facades\Session;

class danhmucServices
{
    public function create($request)
    {
        try {
            danhmuc::create([
                // thuoc tinh ten csdl                      định danh trong form
                'ma_danhmuc' => (string) $request -> input('madanhmuc'),
                'ten_danhmuc' => (string) $request -> input('tendanhmuc'),
                'trangthai' => (int) $request -> input('trangthai')
            ]);

            // Tạo thông báo khi thêm danh mục thành công bằng Session
            Session::flash('tao_thanhcong','Tạo danh mục thành công ');

        } catch (\Exception $err) {
            Session::flash('tao_thatbai', $err -> getMessage());
            return false;
        }
            return true;
    }

    // Phân trang hiển thị danh mục là 10 danh mục 1 trang

}
