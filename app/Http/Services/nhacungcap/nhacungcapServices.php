<?php

namespace App\Http\Services\nhacungcap;

use App\Models\nhacungcap;
use Illuminate\Support\Facades\Session;

class nhacungcapServices
{

    public function create($request)
    {
        try {
            nhacungcap::create([
                // thuoc tinh ten csdl                      định danh trong form
                'ma_ncc' => (string) $request -> input('mancc'),
                'ten_ncc' => (string) $request -> input('tenncc'),
                'diachi_ncc' => (string) $request -> input('diachincc'),
                'sdt_ncc' => (string) $request -> input('sdtncc'),
                'email_ncc' => (string) $request -> input('emailncc')
            ]);

            // Tạo thông báo khi thêm danh mục thành công bằng Session
            Session::flash('tao_thanhcong','Thêm thành công ');

        } catch (\Exception $err) {
            Session::flash('tao_thatbai', $err -> getMessage());
            return false;
        }
        return true;
    }

    // Phân trang hiển thị danh mục là 10 danh mục 1 trang

}
