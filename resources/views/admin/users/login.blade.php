<!DOCTYPE html>
<html lang="en">
<head>
{{--     Load phần header từ file header.blade.php--}}
    @include('admin.header')
</head>
<body class="hold-transition login-page">
<div class="login-box">
  <div class="login-logo">
    <a href="../../index2.html"><b>ĐĂNG NHẬP</b> HỆ THỐNG</a>
  </div>
  <!-- /.login-logo -->
  <div class="card">
    <div class="card-body login-card-body">
      <p class="login-box-msg">Vui lòng cung cấp tài khoản quản trị</p>
{{--       Truyền view tổng quan trang quản trị khi đăng nhập thành công, trả về view alert nếu thất bại--}}
      @include('admin.alert')
      <form action="/admin/users/dashboard" method="post">
         <!--input Email -->
        <div class="input-group mb-3">
          <input type="email" name ="email" class="form-control" placeholder="Email">
          <div class="input-group-append">
            <div class="input-group-text">
              <span class="fas fa-envelope"></span>
            </div>
          </div>
        </div>
        <!--input Password -->
        <div class="input-group mb-3">
          <input type="password" name ="password" class="form-control" placeholder="Password">
          <div class="input-group-append">
            <div class="input-group-text">
              <span class="fas fa-lock"></span>
            </div>
          </div>
        </div>
        <div class="row">
        <!--Lưu tài khoản -->
          <div class="col-8">
            <div class="icheck-primary">
              <input type="checkbox" id="remember" name="remember">
              <label for="remember">
                Nhớ mật khẩu
              </label>
            </div>
          </div>
           <!--Button đăng nhập -->
          <div class="col-4">
            <button type="submit" class="btn btn-primary btn-block">Login</button>
          </div>
        </div>
{{--         Tạo token cho form đăng nhập tránh bị hack--}}
        @csrf
      </form>
    </div>
  </div>
</div>
{{--     Load footer từ footer.blade.php--}}
    @include('admin.footer')
</body>
</html>

















{{--    <!DOCTYPE html>--}}
{{--<html lang="en">--}}
{{--<head>--}}
{{--    <meta charset="UTF-8">--}}
{{--    <meta http-equiv="X-UA-Compatible" content="IE=edge">--}}
{{--    <meta name="viewport" content="width=device-width, initial-scale=1.0">--}}
{{--    <link rel="stylesheet" href="style.css">--}}
{{--    <title>Document</title>--}}
{{--</head>--}}
{{--<style>--}}

{{--    @import url('https://fonts.googleapis.com/css?family=Montserrat:400,800');--}}

{{--    * {--}}
{{--        box-sizing: border-box;--}}
{{--    }--}}

{{--    body {--}}
{{--        background: #f6f5f7;--}}
{{--        display: flex;--}}
{{--        justify-content: center;--}}
{{--        align-items: center;--}}
{{--        flex-direction: column;--}}
{{--        font-family: 'Montserrat', sans-serif;--}}
{{--        height: 100vh;--}}
{{--        margin: -20px 0 50px;--}}
{{--    }--}}

{{--    h1 {--}}
{{--        font-weight: bold;--}}
{{--        margin: 0;--}}
{{--    }--}}

{{--    h2 {--}}
{{--        text-align: center;--}}
{{--    }--}}

{{--    p {--}}
{{--        font-size: 14px;--}}
{{--        font-weight: 100;--}}
{{--        line-height: 20px;--}}
{{--        letter-spacing: 0.5px;--}}
{{--        margin: 20px 0 30px;--}}
{{--    }--}}

{{--    span {--}}
{{--        font-size: 12px;--}}
{{--    }--}}

{{--    a {--}}
{{--        color: #333;--}}
{{--        font-size: 14px;--}}
{{--        text-decoration: none;--}}
{{--        margin: 15px 0;--}}
{{--    }--}}

{{--    button {--}}
{{--        border-radius: 20px;--}}
{{--        border: 1px solid #FF4B2B;--}}
{{--        background-color: #FF4B2B;--}}
{{--        color: #FFFFFF;--}}
{{--        font-size: 12px;--}}
{{--        font-weight: bold;--}}
{{--        padding: 12px 45px;--}}
{{--        letter-spacing: 1px;--}}
{{--        text-transform: uppercase;--}}
{{--        transition: transform 80ms ease-in;--}}
{{--    }--}}

{{--    button:active {--}}
{{--        transform: scale(0.95);--}}
{{--    }--}}

{{--    button:focus {--}}
{{--        outline: none;--}}
{{--    }--}}

{{--    button.ghost {--}}
{{--        background-color: transparent;--}}
{{--        border-color: #FFFFFF;--}}
{{--    }--}}

{{--    form {--}}
{{--        background-color: #FFFFFF;--}}
{{--        display: flex;--}}
{{--        align-items: center;--}}
{{--        justify-content: center;--}}
{{--        flex-direction: column;--}}
{{--        padding: 0 50px;--}}
{{--        height: 100%;--}}
{{--        text-align: center;--}}
{{--    }--}}

{{--    input {--}}
{{--        background-color: #eee;--}}
{{--        border: none;--}}
{{--        padding: 12px 15px;--}}
{{--        margin: 8px 0;--}}
{{--        width: 100%;--}}
{{--    }--}}

{{--    .container {--}}
{{--        background-color: #fff;--}}
{{--        border-radius: 10px;--}}
{{--        box-shadow: 0 14px 28px rgba(0,0,0,0.25),--}}
{{--        0 10px 10px rgba(0,0,0,0.22);--}}
{{--        position: relative;--}}
{{--        overflow: hidden;--}}
{{--        width: 768px;--}}
{{--        max-width: 100%;--}}
{{--        min-height: 480px;--}}
{{--    }--}}

{{--    .form-container {--}}
{{--        position: absolute;--}}
{{--        top: 0;--}}
{{--        height: 100%;--}}
{{--        transition: all 0.6s ease-in-out;--}}
{{--    }--}}

{{--    .sign-in-container {--}}
{{--        left: 0;--}}
{{--        width: 50%;--}}
{{--        z-index: 2;--}}
{{--    }--}}

{{--    .container.right-panel-active .sign-in-container {--}}
{{--        transform: translateX(100%);--}}
{{--    }--}}

{{--    .sign-up-container {--}}
{{--        left: 0;--}}
{{--        width: 50%;--}}
{{--        opacity: 0;--}}
{{--        z-index: 1;--}}
{{--    }--}}

{{--    .container.right-panel-active .sign-up-container {--}}
{{--        transform: translateX(100%);--}}
{{--        opacity: 1;--}}
{{--        z-index: 5;--}}
{{--        animation: show 0.6s;--}}
{{--    }--}}

{{--    @keyframes show {--}}
{{--        0%, 49.99% {--}}
{{--            opacity: 0;--}}
{{--            z-index: 1;--}}
{{--        }--}}

{{--        50%, 100% {--}}
{{--            opacity: 1;--}}
{{--            z-index: 5;--}}
{{--        }--}}
{{--    }--}}

{{--    .overlay-container {--}}
{{--        position: absolute;--}}
{{--        top: 0;--}}
{{--        left: 50%;--}}
{{--        width: 50%;--}}
{{--        height: 100%;--}}
{{--        overflow: hidden;--}}
{{--        transition: transform 0.6s ease-in-out;--}}
{{--        z-index: 100;--}}
{{--    }--}}

{{--    .container.right-panel-active .overlay-container{--}}
{{--        transform: translateX(-100%);--}}
{{--    }--}}

{{--    .overlay {--}}
{{--        background: #FF416C;--}}
{{--        background: -webkit-linear-gradient(to right, #FF4B2B, #FF416C);--}}
{{--        background: linear-gradient(to right, #FF4B2B, #FF416C);--}}
{{--        background-repeat: no-repeat;--}}
{{--        background-size: cover;--}}
{{--        background-position: 0 0;--}}
{{--        color: #FFFFFF;--}}
{{--        position: relative;--}}
{{--        left: -100%;--}}
{{--        height: 100%;--}}
{{--        width: 200%;--}}
{{--        transform: translateX(0);--}}
{{--        transition: transform 0.6s ease-in-out;--}}
{{--    }--}}

{{--    .container.right-panel-active .overlay {--}}
{{--        transform: translateX(50%);--}}
{{--    }--}}

{{--    .overlay-panel {--}}
{{--        position: absolute;--}}
{{--        display: flex;--}}
{{--        align-items: center;--}}
{{--        justify-content: center;--}}
{{--        flex-direction: column;--}}
{{--        padding: 0 40px;--}}
{{--        text-align: center;--}}
{{--        top: 0;--}}
{{--        height: 100%;--}}
{{--        width: 50%;--}}
{{--        transform: translateX(0);--}}
{{--        transition: transform 0.6s ease-in-out;--}}
{{--    }--}}

{{--    .overlay-left {--}}
{{--        transform: translateX(-20%);--}}
{{--    }--}}

{{--    .container.right-panel-active .overlay-left {--}}
{{--        transform: translateX(0);--}}
{{--    }--}}

{{--    .overlay-right {--}}
{{--        right: 0;--}}
{{--        transform: translateX(0);--}}
{{--    }--}}

{{--    .container.right-panel-active .overlay-right {--}}
{{--        transform: translateX(20%);--}}
{{--    }--}}

{{--    .social-container {--}}
{{--        margin: 20px 0;--}}
{{--    }--}}

{{--    .social-container a {--}}
{{--        border: 1px solid #DDDDDD;--}}
{{--        border-radius: 50%;--}}
{{--        display: inline-flex;--}}
{{--        justify-content: center;--}}
{{--        align-items: center;--}}
{{--        margin: 0 5px;--}}
{{--        height: 40px;--}}
{{--        width: 40px;--}}
{{--    }--}}

{{--    footer {--}}
{{--        background-color: #222;--}}
{{--        color: #fff;--}}
{{--        font-size: 14px;--}}
{{--        bottom: 0;--}}
{{--        position: fixed;--}}
{{--        left: 0;--}}
{{--        right: 0;--}}
{{--        text-align: center;--}}
{{--        z-index: 999;--}}
{{--    }--}}

{{--    footer p {--}}
{{--        margin: 10px 0;--}}
{{--    }--}}

{{--    footer i {--}}
{{--        color: red;--}}
{{--    }--}}

{{--    footer a {--}}
{{--        color: #3c97bf;--}}
{{--        text-decoration: none;--}}
{{--    }--}}
{{--</style>--}}
{{--<body>--}}

{{--<h2>ĐĂNG NHẬP HỆ THỐNG</h2>--}}
{{--<div class="container" id="container">--}}
{{--    <div class="form-container sign-in-container">--}}
{{--        @include('admin.alert')--}}
{{--        <form action="/admin/main/" method="post">--}}
{{--            <h1>Đăng nhập</h1>--}}
{{--            <div class="social-container">--}}
{{--                <a href="#" class="social"><i class="fab fa-facebook-f"></i></a>--}}
{{--                <a href="#" class="social"><i class="fab fa-google-plus-g"></i></a>--}}
{{--                <a href="#" class="social"><i class="fab fa-linkedin-in"></i></a>--}}
{{--            </div>--}}
{{--            <span>Tài khoản người quản trị</span>--}}
{{--            <input type="email" placeholder="Email" />--}}
{{--            <input type="password" placeholder="Password" />--}}
{{--            <button type="submit">Đăng nhập</button>--}}

{{--        </form>--}}
{{--    </div>--}}
{{--    <div class="overlay-container">--}}
{{--        <div class="overlay">--}}
{{--            <div class="overlay-panel overlay-right">--}}
{{--                <h1>PT - SHOP</h1>--}}
{{--                <p>Chuyên cung cấp phụ tùng xe máy chính hãng</p>--}}
{{--            </div>--}}
{{--        </div>--}}
{{--    </div>--}}
{{--</div>--}}

{{--<footer>--}}
{{--    <p>--}}
{{--        Created with <i class="fa fa-heart"></i> by--}}
{{--        <a target="_blank" href="https://florin-pop.com">Florin Pop</a>--}}
{{--        - Read how I created this and how you can join the challenge--}}
{{--        <a target="_blank" href="https://www.florin-pop.com/blog/2019/03/double-slider-sign-in-up-form/">here</a>.--}}
{{--    </p>--}}
{{--</footer>--}}

