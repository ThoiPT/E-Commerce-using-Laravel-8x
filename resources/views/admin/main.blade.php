<!DOCTYPE html>
<html lang="en">
<head>
    {{-- Load phần header --}}
    @include('admin.header')
</head>
<body class="hold-transition sidebar-mini">

<div class="wrapper">
  <!-- Navbar -->
  <nav class="main-header navbar navbar-expand navbar-white navbar-light">
    <!-- Left navbar links -->
    <ul class="navbar-nav">
      <li class="nav-item">
        <a class="nav-link" data-widget="pushmenu" href="#" role="button"><i class="fas fa-bars"></i></a>
      </li>
    </ul>
    <!-- Right navbar links -->
    <ul class="navbar-nav ml-auto">
      <li class="nav-item">
        <a class="nav-link" data-widget="fullscreen" href="#" role="button">
          <i class="fas fa-expand-arrows-alt"></i>
        </a>
      </li>
    </ul>
  </nav>
  <!-- /.navbar -->

  <!-- Load phần Slidebar -->
  @include('admin.slidebar')

  <!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Main content -->
    <section class="content">
      <div class="container-fluid">

          {{-- Thông báo lỗi khi trường mã danh mục hoặc tên danh mục bị trống --}}
          @include('admin.alert')

        <div class="row">
          <!-- left column -->
            <div class="col-md-12">
            <!-- jquery validation -->
                <div class="card card-primary mt-3">
                    <div class="card-header" style="margin-bottom: 10px">

                        <h3 class="card-title">{{ $title }}</h3>

                    </div>

                        @yield('content')

                </div>
            </div>
          {{-- <div class="col-md-6"></div> --}}
        </div>
      </div>
    </section>
</div>

  <!-- Footer Content -->
  <footer class="main-footer">
    <strong>Niên Luận Cơ Sở Nghành - <a href="#">LÊ PHÁT THỜI</a>.</strong>
  </footer>
</div>
    {{-- Load phần footer --}}
    @include('admin.footer')
</body>
</html>
