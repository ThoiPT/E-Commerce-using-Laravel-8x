@extends('admin.main')
@section('content')

    <section class="content">
        <div class="container-fluid">


            <!-- Loc thống kê theo thời giang -->
            <form id="thongkeForm" action="" onsubmit="return false;">
                <div style="display:inline-block;">
                    <label for="startdate_tk" style="display: block" >Từ ngày:</label>
                    <input type="date" name="startdate" id="startdate_tk" value="{{date("Y-m-d",strtotime(now()))}}" required>
                </div>
                <div style="display:inline-block;">
                    <label for="enddate_tk" style="display: block">Đến ngày:</label>
                    <input type="date" name="enddate" id="enddate_tk" value="{{date("Y-m-d",strtotime(now()))}}" required>
                </div>
                <div style="display:inline-block;">
                    <input class="btn btn-primary" type="button" name="btn_submit_tk" id="btn_submit_tk" value="Thống kê">
                </div>
            </form>

            <!-- Kết quả thống kê-->
            <div class="col-md-9">
                <div class="card">
                    <div class="card-header p-2">
                        <ul class="nav nav-pills">
                            <li class="nav-item"><a class="nav-link active" href="#activity" data-toggle="tab">Các đơn hàng</a></li>
                            <li class="nav-item"><a class="nav-link" href="#timeline" data-toggle="tab">Chi tiết</a></li>
                        </ul>
                    </div>
                    <!-- /.card-header -->
                    <div class="card-body">
                        <div class="tab-content">

                            <div class="tab-pane active" id="activity">
                                <div id="content_tk_donhang">
                                    <p id="description_tk">Nội dung thống kê!</p>
                                    <p id="description_tk">Chọn ngày bắt đầu và kết thúc</p>

                                </div>
                            </div>
                            <!-- /.tab-pane -->

                            <div class="tab-pane" id="timeline">
                                <div id="content_tk_chitiet">
                                    <p id="description_tk">Chi tiết các sản phẩm theo thống kê</p>

                                </div>
                            </div>
                            <!-- /.tab-pane -->

                        </div>
                        <!-- /.tab-content -->
                    </div><!-- /.card-body -->
                </div>
                <!-- /.card -->
            </div>
        </div>
    </section>



























<!-- jQuery -->
<script src="/styleAdmin/plugins/jquery/jquery.min.js"></script>
<!-- jQuery UI 1.11.4 -->
<script src="/styleAdmin/plugins/jquery-ui/jquery-ui.min.js"></script>
<!-- Resolve conflict in jQuery UI tooltip with Bootstrap tooltip -->
<script>
    $.widget.bridge('uibutton', $.ui.button)
</script>
<!-- Bootstrap 4 -->
<script src="/styleAdmin/plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
<!-- ChartJS -->
<script src="/styleAdmin/plugins/chart.js/Chart.min.js"></script>
<!-- Sparkline -->
<script src="/styleAdmin/plugins/sparklines/sparkline.js"></script>
<!-- JQVMap -->
<script src="/styleAdmin/plugins/jqvmap/jquery.vmap.min.js"></script>
<script src="/styleAdmin/plugins/jqvmap/maps/jquery.vmap.usa.js"></script>
<!-- jQuery Knob Chart -->
<script src="/styleAdmin/plugins/jquery-knob/jquery.knob.min.js"></script>
<!-- daterangepicker -->
<script src="/styleAdmin/plugins/moment/moment.min.js"></script>
<script src="/styleAdmin/plugins/daterangepicker/daterangepicker.js"></script>
<!-- Tempusdominus Bootstrap 4 -->
<script src="/styleAdmin/plugins/tempusdominus-bootstrap-4/js/tempusdominus-bootstrap-4.min.js"></script>
<!-- Summernote -->
<script src="/styleAdmin/plugins/summernote/summernote-bs4.min.js"></script>
<!-- overlayScrollbars -->
<script src="/styleAdmin/plugins/overlayScrollbars/js/jquery.overlayScrollbars.min.js"></script>
<!-- AdminLTE App -->
<script src="/styleAdmin/dist/js/adminlte.js"></script>
<!-- AdminLTE for demo purposes -->
<script src="/styleAdmin/dist/js/demo.js"></script>
<!-- AdminLTE dashboard demo (This is only for demo purposes) -->
<script src="/styleAdmin/dist/js/pages/dashboard.js"></script>
</body>
</html>





























@endsection
