<aside class="main-sidebar">
    <section class="sidebar">
        <form action="#" method="get" class="sidebar-form">
            <div class="input-group">
              <input type="text" name="q" class="form-control" placeholder="Tìm kiếm sản phẩm...">
              <span class="input-group-btn">
                <button type="submit" style="margin: 1px;" name="search" id="search-btn" class="btn btn-flat"><i class="fa fa-search"></i></button>
              </span>
           </div>
      </form>
      <ul class="sidebar-menu">
        <li><a href="backend/users/listuse"><i class="fa fa-users" aria-hidden="true"></i> <span>Quản lý tài khoản</span></a></li>
        <li><a href="backend/menu"><i class="fa fa-align-justify" aria-hidden="true"></i> <span>Menu</span></a></li>
        <li><a href="backend/code"><i class="fa fa-th"></i> <span>Mã Giảm giá</span></a></li>
        <li class="treeview">
          <a href="#">
            <i class="fa fa-dashboard"></i> <span>Danh mục sản phẩm</span> <i class="fa fa-angle-left pull-right"></i>
          </a>
          <ul class="treeview-menu">
            <li><a href="backend/productcate"><i class="fa fa-circle-o"></i> <span>Danh mục </span></a></li>
            <li><a href="backend/product"><i class="fa fa-circle-o"></i> <span>Sản phẩm</span></a></li>
           </ul>
        </li>
        <li class="treeview">
          <a href="#">
            <i class="fa fa-dashboard"></i> <span>Bộ Lọc</span> <i class="fa fa-angle-left pull-right"></i>
          </a>
          <ul class="treeview-menu">
            <li><a href="backend/refine"><i class="fa fa-circle-o"></i> <span>Danh mục lọc</span></a></li>
            <li><a href="backend/refineparameter"><i class="fa fa-circle-o"></i> <span>Thông số(bộ lọc)</span></a></li>
           </ul>
        </li>
        <li class="treeview">
          <a href="#">
            <i class="fa fa-dashboard"></i> <span>QL thông số sản phẩm</span> <i class="fa fa-angle-left pull-right"></i>
          </a>
          <ul class="treeview-menu">
                <li><a href="backend/catespecification"><i class="fa fa-circle-o"></i> <span>Danh mục thông số</span></a></li>
                <li><a href="backend/specification"><i class="fa fa-circle-o"></i> <span>Thông số kỹ thuật</span></a></li>
           </ul>
        </li>
        <li class="treeview" >

          <a href="#"> <i class="fa fa-edit"></i> <span>Quản lý bài viết</span> <i class="fa fa-angle-left pull-right"></i></a>

          <ul class="treeview-menu">
            <li><a href="backend/catenew"><i class="fa fa-circle-o"></i> <span>Danh mục tin tức</span></a></li>   
            <li><a href="backend/post"><i class="fa fa-circle-o"></i> <span>Bài viết</span></a></li>
          </ul>

        </li>
    
          

        <li style="display: none;">

          <a href="backend/about/edit?type=gioi-thieu">

            <i class="fa fa-th"></i> <span>Quản lý giới thiệu</span>

          </a>

        </li>

        <li style="display: none;">

          <a href="backend/supports">

            <i class="fa fa-th"></i> <span>Hỗ trợ trực tuyến</span>

          </a>

        </li>
        <li><a href="backend/orders"><i class="fa fa-shopping-cart" aria-hidden="true"></i> <span>Quản lý đơn hàng</span></a></li>
     

        <li style="display: none;">

          <a href="backend/contact">

            <i class="fa fa-th"></i> <span>Quản lý liên hệ</span>

          </a>

        </li>

      

       
      <li><a href="backend/lienket?type=doi-tac"><i class="fa fa-circle-o"></i>Quản lý đối tác</a></li>


        <li class="treeview">

          <a href="#">

            <i class="fa fa-gear" aria-hidden="true"></i> <span>Thiết lập hệ thống</span>

            <i class="fa fa-angle-left pull-right"></i>

          </a>

          <ul class="treeview-menu">

            <li><a href="<?php echo e(asset('admin/setting')); ?>"><i class="fa fa-gear" aria-hidden="true"></i> Quản lý thiết lập</a></li>

            <li style="display: none;"><a href="backend/about/edit?type=footer"><i class="fa fa-gear" aria-hidden="true"></i> Quản lý footer</a></li>

          </ul>

        </li>

      </ul>

    </section>

</aside>