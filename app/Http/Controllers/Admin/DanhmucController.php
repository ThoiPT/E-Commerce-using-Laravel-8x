<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Requests\danhmuc\FormRequestDM;
use App\Http\Services\danhmuc\danhmucServices;
use Illuminate\Support\Facades\DB;



class DanhmucController extends Controller
{
    // Add
    public function themdanhmuc(){
        return view('admin.danhMuc.themdanhmuc',[
            'title' => 'Thêm danh mục'
        ]);
    }
    protected $danhmucService;
    public function __construct(danhmucServices $danhmucService)
    {
        $this -> danhmucServices = $danhmucService;
    }

    public function btn_taodanhmuc(FormRequestDM $request){
        $result = $this -> danhmucServices -> create($request);
        return redirect()->back();
    }

    // show
    public function tongdanhmuc(){
        $tongDM = DB::table('danhmucs')->get();
        return view('admin.danhmuc.tongdanhmuc',[
            'title' => 'QUẢN LÝ DANH MỤC'
        ], compact('tongDM'));
    }

    // Remove
    public function xoadanhmuc(Request $request)
    {
        DB::table('danhmucs') -> where('ma_danhmuc', $request->ma_danhmuc)->delete();
        return redirect()->back()->with('xoa_thanhcong','Xóa danh mục thành công, vui lòng load lại trang');
    }

    // Edit
    public function suadanhmuc($ma_danhmuc)
    {
        $data = DB::table('danhmucs') -> where('ma_danhmuc', $ma_danhmuc) -> get() -> toArray();
        return view('admin.danhmuc.suadanhmuc',[
            'title' => 'CẬP NHẬT DANH MỤC',
        ],compact('data'));
    }

    // Update
    public function capnhatdanhmuc(Request $request, $ma_danhmuc){
        $update = DB::table('danhmucs')
                    ->where('ma_danhmuc', $ma_danhmuc)
                    ->update([
                        'ten_danhmuc' => $request->ten_danhmuc,
                        'trangthai' => $request->trangthai
                    ]);
        return redirect('admin/danhmuc/tongdanhmuc');
    }
}



