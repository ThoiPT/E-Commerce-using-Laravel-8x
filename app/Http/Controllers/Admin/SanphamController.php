<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\sanpham\FormRequestSP;
use App\Http\Services\sanpham\sanphamServices;
use App\Models\danhmuc;
use App\Models\sanpham;
use App\Models\nhacungcap;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;


class SanphamController extends Controller
{
    public function form_themsanpham()
    {
        $danhmuc_arr = danhmuc::all();
        $nhacungcap_arr = nhacungcap::all();
        return view('admin.sanpham.themsanpham', compact('nhacungcap_arr', 'danhmuc_arr'), [
            'title' => 'Thêm sản phẩm'
        ]);
    }

    protected $sanphamServices;
    public function __construct(sanphamServices $sanphamServices)
    {
        $this -> sanphamServices = $sanphamServices;
    }

    // Add

    public function themsanpham(FormRequestSP $request)
    {
        $new_product = new sanpham;
        $new_product->mshh = $request->mshh;
        $new_product->ma_danhmuc = $request->madanhmuc;
        $new_product->ma_ncc = $request->mancc;
        $new_product->ten_sp = $request->tensp;
        $new_product->gia_nhap = $request->gianhap;
        $new_product->gia_ban = $request->giaban;
        $new_product->so_luong = $request->soluong;
        $new_product->mota_sp = $request->motasp;

        // Xử lý hình ảnh sản phẩm
        if ($request->hasFile('hinhanh_sp')) {
            //Đường dẫn
            $path = "public/img_sp/";
            //Upload file
                //Lấy tên file
            $fileName = $request->mshh."_".time()."_".$request->file('hinhanh_sp')-> getClientOriginalName();
                //di chuyển file
            $request->file('hinhanh_sp')->move($path, $fileName);
            //Lưu path vào CSDL
            $new_product -> hinhanh_sp = $path . $fileName;
        }

        if($new_product -> save()){
            echo "them thanh cong";
        }else{
            echo "fail";
        }
        $result = $this -> sanphamServices -> create($request);
        return redirect('admin/sanpham/danhsachsanpham')->with('tao_thanhcong','Thêm sản phẩm thành công');
    }

    // Show
    public function tongsanpham()
    {
        $tongSP = DB::table('sanphams')->get();
        return view('admin.sanpham.danhsachsanpham',[
            'title' => 'QUẢN LÝ SẢN PHẨM'
        ], compact('tongSP', ));
    }


    // Edit
    public function suasp($mshh)
    {
        $danhmuc_get = danhmuc::all();
        $nhacungcap_get = nhacungcap::all();
        $getData = DB::table('sanphams') -> where('mshh', $mshh) -> get() -> toArray();
        return view('admin.sanpham.suasanpham',[
            'title' => 'CẬP NHẬT SẢN PHẨM',
        ],compact('getData','nhacungcap_get','danhmuc_get'));
    }

    // update
    public function capnhat_sp(Request $request, $mshh){
        // Xử lý hình ảnh sản phẩm
        if ($request->hasFile('hinhanh_sp')) {
            //Đường dẫn
            $path = "public/img_sp/";

            //Upload file
            //Lấy tên file
            $fileName = $request->mshh."_".time()."_".$request->file('hinhanh_sp')-> getClientOriginalName();
            //di chuyển file
            $request->file('hinhanh_sp')->move($path, $fileName);
            //Lưu vào CSDL
            $tmp_pathSQL = $path . $fileName;
            $update_img = DB::table('sanphams')
                ->where('mshh', $mshh)
                ->update([
                    'hinhanh_sp' => $tmp_pathSQL,
                ]);
        }
        $update = DB::table('sanphams')
            ->where('mshh', $mshh)
            ->update([
                'ma_danhmuc' => $request->madanhmuc,
                'ma_ncc' => $request->mancc,
                'ten_sp' => $request->tensp,
                'gia_nhap' => $request->gianhap,
                'gia_ban' => $request->giaban,
                'so_luong' => $request->soluong,
                'mota_sp' => $request->motasp
            ]);
        return redirect('admin/sanpham/danhsachsanpham');
    }

    // Remove
    public function xoa_sp(Request $request)
    {
        DB::table('sanphams') -> where('mshh', $request->mshh)->delete();
        return redirect()->back()->with('xoa_thanhcong','Xóa sản phẩm thành công, vui lòng load lại trang');
    }
}

