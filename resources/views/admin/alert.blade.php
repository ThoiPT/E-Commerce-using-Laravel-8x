
<!-- /resources/views/post/create.blade.php -->
@if ($errors->any())
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif
<!-- Create Post Form -->

{{-- ĐĂNG NHẬP --}}
@if(Session::has('dn_loi'))
    <div class="alert alert-danger">
        {{ Session::get('dn_loi') }}
    </div>
@endif

{{-- DANH MỤC --}}
@if(Session::has('tao_thanhcong'))
    <div class="alert alert-default-success" style="margin-top: 2rem">
        {{ Session::get('tao_thanhcong') }}
    </div>
@endif
<!-- Xóa -->
@if (\Session::has('xoa_thanhcong'))
    <div class="alert alert-default-success">
        {{Session::get('xoa_thanhcong') }}
    </div>
@endif
