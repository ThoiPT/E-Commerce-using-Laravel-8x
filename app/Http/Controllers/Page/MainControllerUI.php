<?php

namespace App\Http\Controllers\Page;

use App\Http\Controllers\Controller;
use App\Models\danhmuc;
use App\Models\sanpham;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class MainControllerUI extends Controller
{
    public function showTest()
    {
        $newDM = danhmuc::where('trangthai',1)->get();
        $newSP = sanpham::get();
        return view('page.index',compact('newDM', 'newSP'));
    }

    public function chitietsp($mshh)
    {
        $newDM = danhmuc::where('trangthai',1)->get();
        $newSP = sanpham::get()->where('mshh', '=', $mshh);
        $cart = DB::select("SELECT *
                                  FROM cart, sanphams
                                  WHERE cart.id_sanpham = sanphams.mshh  ");
        return view('page.chitietsanpham',[
            'title' => 'Chi tiết sản phẩm',
        ],compact( 'newDM', 'newSP', 'cart'));
    }

    // Thêm sản phẩm vào giỏ
    public function add_sp_cart(Request $request){
        $time_life = date("Y-m-d H:m:s", time()+2592000);
        $idsp = $request->id_sanpham;
        $slmua = $request->soluong_mua;
        $gia_ban = $request->gia_ban;

        //Xét xem đã có sản phẩm này trong giỏ hàng chưa
        $check = DB::table('cart')->where('id_sanpham','=', $idsp)->exists();

        //Nếu sản phẩm đã tồn tại trong giỏ hàng
        if($check){//Nghĩa là $check==true
            $sl_cart = DB::table('cart')->selectRaw('soluong_mua')->where('id_sanpham', $idsp)->get();
            foreach ($sl_cart as $v){
                $soluong_da_mua = $v->soluong_mua;
            }
            $sl_cart_update = $slmua + $soluong_da_mua;
            DB::table('cart')
                ->where('id_sanpham','=', $idsp)
                ->update(['soluong_mua' => $sl_cart_update]);
        }else{
            DB::table('cart')->insert(
                [
                    'id_sanpham' => $idsp,
                    'soluong_mua' => $slmua,
                    'gia_ban' => $gia_ban,
                    'time_life' => $time_life
                ]
            );
        }
    }

    // Xóa sản phẩm trong giỏ
    public function remove_sp_cart($id)
    {
        DB::table('cart')->where('id', '=', $id)->delete();
        return redirect()->back();
    }

    public function thanhtoan_cart(){
        $cart = DB::select("SELECT *
                                  FROM cart, sanphams
                                  WHERE cart.id_sanpham = sanphams.mshh");
        $tong_thanhtien = 0;
        foreach ($cart as $key){
            $tong_thanhtien+= $key->soluong_mua * $key->gia_ban;
        }
        return view('page.thanhtoan',[
            'title' => 'Chi tiết sản phẩm',
        ],compact( 'cart', 'tong_thanhtien'));
    }

    // Xử lý khi gửi thông tin thanh toán
    public function submit(Request $request)
    {
        $request -> validate([
            'hovaten' => 'required',
            'sodienthoai' => 'required',
            'diachi' => 'required'
        ]);

        //Tạo đơn hàng mới
        $query = DB::table('donhang') -> insert([
            'ten_kh' => $request->input('hovaten'),
            'sdt' => $request->input('sodienthoai'),
            'diachi' => $request->input('diachi'),
            'trangthai' => 2
        ]);
        $last_id_donhang = DB::getPdo()->lastInsertId();

        //Chi tiết của đơn hàng vừa tạo ở trên
        $cart = DB::table('cart')->get();
        $tong_tien_donhang = 0;
        foreach ($cart as $v){
            $mshh = $v->id_sanpham;
            $sl_mua = $v->soluong_mua;
            $thanhtien = $sl_mua* $v->gia_ban;

            // Insert dữ liệu vào bảng
            DB::table('chitiet_hoadon')->insert([
               'mshh' => $mshh,
               'id_donhang' => $last_id_donhang,
               'soluong_mua' => $sl_mua,
               'thanhtien' => $thanhtien
            ]);
            $tong_tien_donhang+=$thanhtien;
        }

        //Tính tổng tiền sau khi đã chuyển hàng từ giỏ sang chi tiết
        $finish = DB::table('donhang')
            ->where('id_donhang','=', $last_id_donhang)
            ->update(['tong_tien' => $tong_tien_donhang]);

        if($finish){
            //Xóa giỏ hàng sau khi đặt hàng thành công
            DB::table('cart')->delete();
        }

        if($query)
        {
            return back()->with('thanhcong','ĐẶT HÀNG THÀNH CÔNG');
        }else{
            return back()->with('thatbai','CÓ LỖI XẢY RA TRONG QUÁ TRÌNH ĐẶT HÀNG');
        }
    }

    // Xóa sản phẩm trong trang thanh toán
    public function xoa_item(Request $request)
    {
        $data = DB::table('cart') -> where('id_sanpham', $request-> id_sanpham)->delete();
        //dd($data);
        return redirect()->back();

    }
    // Cập nhật sản phẩm trong trang thanh toán
    // public function update_item(Request $request)
    // {
    //     $data = DB::table('cart') ->update();
    //     return redirect() -> back();
    // }
}
