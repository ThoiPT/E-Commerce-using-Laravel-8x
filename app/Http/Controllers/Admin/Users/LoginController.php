<?php

namespace App\Http\Controllers\Admin\Users;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
Use Illuminate\Support\Facades\Session;

class LoginController extends Controller
{
    public function index(){
        return view('admin.users.login', [
            'title' => 'Đăng nhập hệ thống'
        ]);
    }

    public function adminMaster (Request $request)
    {
        // Request sẽ nhận toàn bộ những thông tin từ dữ liệu gửi lên server
        // Lấy toàn bộ dữ liệu từ input của tài khoản
        //dd($request -> input());

        // Ràng buộc trường Email và Mật khẩu
        $this -> validate($request, [
            'email' => 'required|email:filter',
            'password' => 'required'
        ]);

        // Kiểm tra dữ liệu gửi đi có đúng với dữ liệu trên server
        $hople = $request->only('email', 'password');
        if (Auth::attempt($hople))
        {
            // Đăng nhập thành công
             // Tạo ra 1 alert khi đăng nhập thành công
            Session::flash("dn_thanhcong",'Đăng nhập thành công');
            return redirect()->route('admin');

        }
            // Sai tài khoản mk -> load lại trang đăng nhập
            // Tạo ra 1 alert khi đăng nhập sai tài khoản
            Session::flash('dn_loi','Sai tên tài khoản hoặc mật khẩu');
            return redirect()->back();
    }
}
