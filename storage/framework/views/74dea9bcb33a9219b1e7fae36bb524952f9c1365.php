<aside class="main-sidebar">
    <section class="sidebar">
      <ul class="sidebar-menu">
        <li><a href="backend/users/listuse"><i class="fa fa-users" aria-hidden="true"></i> <span>Quản lý tài khoản</span></a></li>
        <li><a href="backend/customers"><i class="fa fa-users" aria-hidden="true"></i> <span>Quản lý khách hàng</span></a></li>
        <li class="treeview" >
          <a href="#"> <i class="fa fa-edit"></i> <span>Quản lý bài viết</span> <i class="fa fa-angle-left pull-right"></i></a>
          <ul class="treeview-menu">
            <li><a href="backend/news?type=tin-tuc"><i class="fa fa-circle-o"></i> <span>Danh mục tin tức</span></a></li>   
            <li ><a href="backend/news?type=gioi-thieu"><i class="fa fa-gear" aria-hidden="true"></i>Giới thiệu</a></li>
          </ul>
        </li>
        <li class="treeview" >
          <a href="#"> <i class="fa fa-edit"></i> <span>Quản lý sản phẩm</span> <i class="fa fa-angle-left pull-right"></i></a>
          <ul class="treeview-menu">
            <li><a href="backend/product?type=san-pham"><i class="fa fa-circle-o"></i> <span>Danh mục sản phẩm</span></a></li>   
            <li ><a href="backend/product?type=dich-vu"><i class="fa fa-gear" aria-hidden="true"></i>Danh mục dịch vụ</a></li>
          </ul>
       <li><a href="backend/slider"><i class="fa fa-circle-o"></i> <span>Quản lý slider</span></a></li>
        <li style="display: none;">
          <a href="backend/supports">
            <i class="fa fa-th"></i> <span>Hỗ trợ trực tuyến</span>
          </a>
        </li>
        <li class="hidden"><a href="backend/orders"><i class="fa fa-shopping-cart" aria-hidden="true"></i> <span>Quản lý đơn hàng</span></a></li>
        <li>
          <a href="backend/contact">
            <i class="fa fa-dropbox" aria-hidden="true"></i> <span>Quản lý liên hệ</span>
          </a>
        </li>
        <li style="display: none;">
          <a href="backend/contact/ban-tin">
            <i class="fa fa-dropbox" aria-hidden="true"></i> <span>Đăng ký tư vấn</span>
          </a>
        </li>
      <li><a href="backend/lienket"><i class="fa fa-circle-o"></i>Đối tác</a></li>  
      <li style="display: none;"><a href="backend/lienket?type=y-kien-khach-hang"><i class="fa fa-circle-o"></i>Ý kiến khách hàng</a></li>
        <li class="treeview">
          <a href="#">
            <i class="fa fa-gear" aria-hidden="true"></i> <span>Thiết lập hệ thống</span>
            <i class="fa fa-angle-left pull-right"></i>
          </a>
          <ul class="treeview-menu">
            <li><a href="<?php echo e(asset('backend/setting')); ?>"><i class="fa fa-gear" aria-hidden="true"></i> Quản lý thiết lập</a></li>
          </ul>
        </li>
        <!-- Tin tức -->
      </ul>
    </section>
</aside>