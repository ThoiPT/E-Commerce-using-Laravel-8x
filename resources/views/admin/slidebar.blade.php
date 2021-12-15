

<!-- Main Sidebar Container -->
  <aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Sidebar -->
    {{-- Setup phần logo trang quản trị --}}
    <div class="sidebar">
      <div class="user-panel mt-3 pb-3 mb-3 d-flex">
        <div class="image">
          <img src="/styleAdmin/admin/dist/img/user2-160x160.jpg" class="img-circle elevation-2" alt="User Image">
        </div>

        <div class="info">
          <a href="/admin/main" class="d-block">LÊ PHÁT THỜI</a>
        </div>
      </div>

      <!-- Sidebar Menu -->
      <nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
           {{-- Load icon từ font-awesome --}}
          <li class="nav-item">
            <a href="#" class="nav-link">
                <i class="fas fa-folder-minus"></i>
              <p>
                DANH MỤC SẢN PHẨM
                <i class="right fas fa-angle-left"></i>
              </p>
            </a>
            <!-- ADD VÀ SHOW DANH MỤC -->
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="/admin/danhmuc/themdanhmuc" class="nav-link">
                  <i class="fas fa-plus-circle"></i>
                  <p>Thêm danh mục</p>
                </a>
              </li>

              <li class="nav-item">
                <a href="/admin/danhmuc/tongdanhmuc" class="nav-link">
                  <i class="fas fa-book"></i>
                  <p>Danh mục hiện có</p>
                </a>
              </li>
            </ul>
            <!-- END ADD VÀ SHOW DANH MỤC -->
          </li>
        </ul>


        {{-- NHÀ CUNG CẤP --}}
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
            {{-- Load icon từ font-awesome --}}
           <li class="nav-item">
             <a href="#" class="nav-link">
                 <i class="fas fa-users"></i>
               <p>
                 NHÀ CUNG CẤP
                 <i class="right fas fa-angle-left"></i>
               </p>
             </a>
             <ul class="nav nav-treeview">
               <li class="nav-item">
                 <a href="/admin/nhacungcap/themncc" class="nav-link">
                   <i class="fas fa-plus-circle"></i>
                   <p>Thêm nhà cung cấp</p>
                 </a>
               </li>
               <li class="nav-item">
                 <a href="/admin/nhacungcap/danhsachncc" class="nav-link">
                   <i class="fas fa-book"></i>
                   <p>DANH SÁCH NHÀ CUNG CẤP</p>
                 </a>
               </li>

             </ul>
           </li>
         </ul>
        {{-- END NHÀ CUNG CẤP --}}

        {{-- SẢN PHẨM --}}
          <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
              {{-- Load icon từ font-awesome --}}
              <li class="nav-item">
                  <a href="#" class="nav-link">
                      <i class="fas fa-th-list"></i>
                      <p>
                         SẢN PHẨM
                          <i class="right fas fa-angle-left"></i>
                      </p>
                  </a>
                  <ul class="nav nav-treeview">
                      <li class="nav-item">
                          <a href="/admin/sanpham/themsanpham" class="nav-link">
                              <i class="fas fa-plus-circle"></i>
                              <p>Thêm sản phẩm</p>
                          </a>
                      </li>

                      <li class="nav-item">
                          <a href="/admin/sanpham/danhsachsanpham" class="nav-link">
                              <i class="fas fa-book"></i>
                              <p>Danh sách sản phẩm</p>
                          </a>
                      </li>

                  </ul>
              </li>
          </ul>
          {{-- END SẢN PHẨM --}}

          {{-- ĐƠN HÀNG --}}
          <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
              {{-- Load icon từ font-awesome --}}
              <li class="nav-item">
                  <a href="#" class="nav-link">
                      <i class="fas fa-users"></i>
                      <p>
                          ĐƠN HÀNG
                          <i class="right fas fa-angle-left"></i>
                      </p>
                  </a>
                  <ul class="nav nav-treeview">
                      <li class="nav-item">
                          <a href="/admin/danhsach_dh" class="nav-link">
                              <i class="fas fa-book"></i>
                              <p>Danh sách đơn hàng</p>
                          </a>
                      </li>
                  </ul>
                  <ul class="nav nav-treeview">
                      <li class="nav-item">
                          <a href="/admin/dh_chuaduyet" class="nav-link">
                              <i class="fas fa-exclamation-circle"></i>
                              <p>Đơn hàng chưa duyệt</p>
                          </a>
                      </li>
                  </ul>
                  <ul class="nav nav-treeview">
                      <li class="nav-item">
                          <a href="/admin/dh_daduyet" class="nav-link">
                              <i class="fas fa-check-square"></i>
                              <p>Đơn hàng đã duyệt</p>
                          </a>
                      </li>
                  </ul>
                  <ul class="nav nav-treeview">
                      <li class="nav-item">
                          <a href="/admin/dh_thatbai" class="nav-link">
                              <i class="fas fa-times-circle"></i>
                              <p>ĐƠN HÀNG BỊ HỦY</p>
                          </a>
                      </li>
                  </ul>
              </li>
          </ul>
          {{-- END ĐƠN HÀNG --}}


          {{-- DOANH THU --}}
          <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
              {{-- Load icon từ font-awesome --}}
              <li class="nav-item">
                  <a href="#" class="nav-link">
                      <i class="fas fa-funnel-dollar"></i>
                      <p>
                          THỐNG KÊ
                          <i class="right fas fa-angle-left"></i>
                      </p>
                  </a>
                  <ul class="nav nav-treeview">
                      <li class="nav-item">
                          <a href="/admin/thongke_doanhthu" class="nav-link">
                              <i class="fas fa-plus-circle"></i>
                              <p>Thông kê doanh thu</p>
                          </a>
                      </li>
                  </ul>
              </li>
          </ul>
          {{-- END DOANH THU --}}
      </nav>
    </div>

      <div style="position: absolute; bottom: 0px; width: inherit">
          <a href="../../" style="padding: 10px; background-color: #1C005A; text-align: center">Trang bán hàng</a>
      </div>
  </aside>

