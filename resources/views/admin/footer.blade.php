
<!-- jQuery -->
<script src="/styleAdmin/admin/plugins/jquery/jquery.min.js"></script>
<!-- Bootstrap 4 -->
<script src="/styleAdmin/admin/plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
<!-- AdminLTE App -->
<script src="/styleAdmin/admin/dist/js/adminlte.min.js"></script>
<!-- jQuery -->
<script src="https://code.jquery.com/jquery-3.6.0.js"></script>
{{--js danh sach don hang--}}
<script>
    function  open_select_tt(id){
        $('#select_trangthai_dh_'+id).toggle('show_select_tt');
    }
</script>
<script>
    $('#btn_submit_tk').on('click', function(){
        var dataForm = $('#thongkeForm').serialize();
        $.ajaxSetup({
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            }
        });
        $.ajax({
            type:"post",
            url: "xuly_thongke",
            data: dataForm,
            success: function (result) {
                $('#description_tk').html(result);
            }
        });
        $.ajax({
            type:"post",
            url: "xuly_thongke_chitiet",
            data: dataForm,
            success: function (result) {
                $('#content_tk_chitiet').html(result);
            }
        });
    });
</script>
