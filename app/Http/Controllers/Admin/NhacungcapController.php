<?php

namespace App\Http\Controllers\Admin;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Http\Services\nhacungcap\nhacungcapServices;
use App\Http\Requests\nhacungcap\FormRequestNCC;


class NhacungcapController extends Controller
{
    // add
    public function themncc()
    {
        return view('admin.nhacungcap.themncc',[
            'title' => 'Trang nhà cung cấp'
        ]);
    }
    protected $nhacungcapServices;
    public function __construct(nhacungcapServices $nhacungcapServices)
    {
        $this -> nhacungcapServices = $nhacungcapServices;
    }

    public function btn_themncc(FormRequestNCC $request){
        $result = $this -> nhacungcapServices -> create($request);
        return redirect()->back();
    }

    // show
    public function danhsachncc(){
        $tongNCC = DB::table('nhacungcaps')->get();
        return view('admin.nhacungcap.danhsachncc',[
            'title' => 'QUẢN LÝ NHÀ CUNG CẤP'
        ], compact('tongNCC'));
    }

    //edit
    public function suancc($ma_ncc)
    {
        $data = DB::table('nhacungcaps') -> where('ma_ncc', $ma_ncc) -> get() -> toArray();
        return view('admin.nhacungcap.suancc',[
            'title' => 'CẬP NHẬT NHÀ CUNG CẤP',
        ],compact('data'));
    }
    // update
    public function capnhat_ncc(Request $request, $mancc){
        $update = DB::table('nhacungcaps')
            ->where('ma_ncc', $mancc)
            ->update([
                'ten_ncc' => $request->tenncc,
                'diachi_ncc' => $request->diachincc,
                'sdt_ncc' => $request->sdtncc,
                'email_ncc' => $request->emailncc,
            ]);
        return redirect('admin/nhacungcap/danhsachncc');
    }

    // remove
    public function xoancc(Request $request)
    {
        DB::table('nhacungcaps') -> where('ma_ncc', $request -> ma_ncc) -> delete();
        return redirect() -> back() -> with('xoa_thanhcong','Xóa thành công, vui lòng load lại trang');
    }
}

