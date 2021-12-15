<style>
    .show_select_tt{
        display: block;
    }
</style>
@extends('admin.main')
@section('content')

    <!-- THỐNG KÊ ĐƠN HÀNG CHUNG -->
    <section class="content">
        <div class="container-fluid">

            <!--Tổng số đơn hàng hiện có -->
            <div class="row">
                <div class="col-lg-3 col-6">
                    <!-- small box -->
                    <div class="small-box bg-info">
                        <div class="inner">
                            <h3>{{$count}}</h3>
                            <p>Tổng đơn hàng hiện có</p>
                        </div>
                        <div class="icon">
                            <i class="ion ion-bag"></i>
                        </div>
                        <a href="/admin/danhsach_dh" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
                    </div>
                </div>

                <!-- ./col -->
                <div class="col-lg-3 col-6">
                    <!-- small box -->
                    <div class="small-box bg-success">
                        <div class="inner">
                            <h3>{{$count_cd}}<sup style="font-size: 20px"></sup></h3>
                            <p> Đang chờ duyệt </p>
                        </div>
                        <div class="icon">
                            <i class="ion ion-stats-bars"></i>
                        </div>
                        <a href="/admin/dh_chuaduyet" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
                    </div>
                </div>
                <!-- ./col -->
                <div class="col-lg-3 col-6">
                    <!-- small box -->
                    <div class="small-box bg-warning">
                        <div class="inner">
                            <h3>{{$count_dxl}}</h3>
                            <p>Đã xử lý</p>
                        </div>
                        <div class="icon">
                            <i class="ion ion-person-add"></i>
                        </div>
                        <a href="/admin/dh_daduyet" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
                    </div>
                </div>
                <!-- ./col -->
                <div class="col-lg-3 col-6">
                    <!-- small box -->
                    <div class="small-box bg-danger">
                        <div class="inner">
                            <h3>{{$count_dhuy}}</h3>
                            <p>Đơn bị hủy</p>
                        </div>
                        <div class="icon">
                            <i class="ion ion-pie-graph"></i>
                        </div>
                        <a href="/admin/dh_thatbai" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--END THỐNG KÊ ĐƠN HÀNG CHUNG -->
    <table class="table" style="text-align: center">
        <thead>
        <tr>
            <th style="">ID</th>
            <th>Họ tên</th>
            <th>Địa chỉ</th>
            <th>Điện thoại</th>
            <th>Tổng tiền</th>
            <th>Ngày đặt hàng</th>
            <th>Ngày giao hàng</th>
            <th>Trạng thái</th>
            <th>Thao tác</th>
        </tr>
        </thead>
        <tbody>

{{--         Móc data từ csdl về bảng thông qua phương thức compact--}}
        @if(isset($donhang))
            @foreach ($donhang as $key => $v )
                <tr>
                    <td>{{$v->id_donhang}}</td>
                    <td>{{$v->ten_kh}}</td>
                    <td>{{$v->diachi}}</td>
                    <td>{{$v->sdt}}</td>

                    <td>{{number_format($v->tong_tien)}} VNĐ</td>
                    <td>{{ date('d-m-Y',strtotime($v->NgayDH)) }}</td>
                    <td>
                        @if($v->NgayGH!=null)
                            {{date('d-m-Y',strtotime($v->NgayGH))}}
                        @else
                            Đang chờ xử lý
                        @endif
                    </td>
                    <td>

                        @foreach($trangthaiDH as $key => $tt)
                            @if($tt->id_sttdh == $v->trangthai)
                                @if($v->trangthai == 1)
                                    <a href="#" onclick="open_select_tt({{$v->id_donhang}})">{{$tt->trangthai}} <i class="fas fa-info-circle"></i></a>
                                    <div id="select_trangthai_dh_{{$v->id_donhang}}" style="display: none">

                                        <form action="update_trangthai/{{$v->id_donhang}}" method="post">
                                            @csrf
                                            <select name="toggle_tt" id="">
                                                @foreach($trangthaiDH as $key => $select_tt)
                                                    @if($select_tt->id_sttdh != 1 && $select_tt->id_sttdh != 2)
                                                        <option value="{{$select_tt->id_sttdh}}">{{$select_tt->trangthai}}</option>
                                                    @endif
                                                @endforeach
                                            </select>
                                            <button type="submit" id="submit_newtt"><i class="fa fa-check"></i></button>
                                        </form>
                                    </div>
                                @else
                                    {{$tt->trangthai}}
                                @endif
                            @endif
                        @endforeach
                    </td>

                    <td>
                        <!-- Duyệt đơn hàng -->
                        <a class="btn btn-primary" href="duyet_dh/{{$v->id_donhang}}">
                            <i class="fas fa-check-square"></i>
                        </a>
                        <!-- Xóa đơn hàng -->
                        <a class="btn btn-danger" href="xoa_dh/{{$v->id_donhang}}">

                            <i class="fas fa-trash-alt"></i>
                        </a>

                        <a class="btn btn-info" href="dh_chitiet/{{$v->id_donhang}}">
                            <i class="fas fa-eye"></i>
                        </a>
                    </td>
                </tr>
            @endforeach
        @endif
        </tbody>
    </table>
@endsection

