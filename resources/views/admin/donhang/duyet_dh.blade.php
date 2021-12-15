<link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<!------ Include the above in your HEAD tag ---------->
<style>
    body{
        background-color: #25274d;
    }
    .contact{
        padding: 4%;
        height: 400px;
    }
    .col-md-3{
        background: #ff9b00;
        padding: 4%;
        border-top-left-radius: 0.5rem;
        border-bottom-left-radius: 0.5rem;
    }
    .contact-info{
        margin-top:10%;
    }
    .contact-info img{
        margin-bottom: 15%;
    }
    .contact-info h2{
        margin-bottom: 10%;
    }
    .col-md-9{
        background: #fff;
        padding: 3%;
        border-top-right-radius: 0.5rem;
        border-bottom-right-radius: 0.5rem;
    }
    .contact-form label{
        font-weight:600;
    }
    .contact-form button{
        background: #25274d;
        color: #fff;
        font-weight: 600;
        width: 25%;
    }
    .contact-form button:focus{
        box-shadow:none;
    }
</style>
@if(isset($donhang))
    @foreach($donhang as $key => $v)


<form method="post" action="../xacnhan_dh/{{$v->id_donhang}}">
    @csrf
<div class="container contact">

    <div class="row">
        <div class="col-md-3">
            <div class="contact-info">
                <img style="margin-left: -38px; width: 230px"
                    src="/styleAdmin/images/icons/logo.png" alt="image"/>
            </div>
        </div>


        <div class="col-md-9">
            <div class="contact-form">
                <div class="form-group">
                    <label style="display: inline" class="control-label col-sm-2" for="fname">ID ĐƠN HÀNG</label>
                    <div class="col-sm-10">
                        <input style="width: 700px;"
                            type="text" class="form-control" id="fname" name="fname" disabled value="{{$v->id_donhang}}">
                    </div>
                </div>

                <div class="form-group">
                    <label style="display: inline" class="control-label col-sm-2" for="fname">TÊN KHÁCH HÀNG</label>
                    <div class="col-sm-10">
                        <input style="width: 700px;"
                            type="text" class="form-control" id="fname" name="fname" disabled value="{{$v->ten_kh}}">
                    </div>
                </div>

                <div class="form-group">
                    <label style="display: inline" class="control-label col-sm-2" for="lname">ĐỊA CHỈ GIAO HÀNG</label>
                    <div class="col-sm-10">
                        <input style="width: 700px;"
                            type="text" class="form-control" id="lname" name="lname" disabled value="{{$v->diachi}}" >
                    </div>
                </div>
                <div class="form-group">
                    <label style="display: inline" class="control-label col-sm-2" for="email">ĐIỆN THOẠI</label>
                    <div class="col-sm-10">
                        <input style="width: 700px;"
                            class="form-control" id="email" name="email" disabled value="{{$v->sdt}}" >
                    </div>
                </div>




                <div class="form-group">
                    <label style="display: inline" class="control-label col-sm-2" for="email">TỔNG TIỀN</label>
                    <div class="col-sm-10">
                        <input style="width: 700px;"
                            class="form-control" id="email" name="email" disabled value="{{number_format($v->tong_tien)}} VNĐ">
                    </div>
                </div>
                <div class="form-group">
                    <label style="display: inline" class="control-label col-sm-2" for="email">NGÀY ĐẶT HÀNG</label>
                    <div class="col-sm-10">
                        <input style="width: 700px;"
                            class="form-control" id="email" name="email" disabled value="{{$v->NgayDH}}">
                    </div>
                </div>
                <div class="form-group">
                    <label style="display: inline" class="control-label col-sm-2" for="email">NGÀY GIAO HÀNG</label>
                    <div class="col-sm-10">
                        <input style="width: 700px;"
                            type="date" class="form-control" id="ngaygh" value="{{ date('Y-m-d',strtotime(now())) }}" name="ngaygh" min="{{ date('Y-m-d',strtotime($v->NgayDH)) }}">
                    </div>
                </div>
                <div class="form-group">
                    <div class="col-sm-offset-2 col-sm-10">
                        <a href="/xacnhan_dh/{{$v -> id_donhang}}">
                            <button
                                style="width: auto; background-color: darkslateblue" type="submit" class="btn btn-success">
                                DUYỆT ĐƠN HÀNG
                            </button>
{{--                        Đầu tiền đơn hàng chưa duyệt--}}
{{--                            Sau đó duyệt đơn hàng, nó sẽ chuyển qua đang giao hàng--}}
{{--                            Tiếp theo sẽ mở 2 lựa chọn, thất bại và đã hoàn thành cho admin tự chọn--}}
                        </a>

{{--                        <a href="#">--}}
{{--                            <button--}}
{{--                                style="width: auto; margin-left: 362px; margin-top: -38px; background-color: brown" type="submit" class="btn btn-danger">--}}
{{--                                HỦY ĐƠN HÀNG--}}
{{--                            </button>--}}
{{--                        </a>--}}
{{--                        <button style="width: auto" type="submit" class="btn btn-default">DUYỆT ĐƠN HÀNG</button>--}}
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
</form>

    @endforeach
@endif

