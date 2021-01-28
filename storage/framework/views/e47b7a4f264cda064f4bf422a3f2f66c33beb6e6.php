<aside class="main-sidebar">

    <section class="sidebar">

        <form action="<?php echo url('backend/product/search'); ?>" method="get" class="sidebar-form">

            <div class="input-group">

              <input type="text" name="name" class="form-control" placeholder="Tìm kiếm sản phẩm...">

              <span class="input-group-btn">

                <button type="submit" style="margin: 1px;" name="search" id="search-btn" class="btn btn-flat"><i class="fa fa-search"></i></button>

              </span>

           </div>

      </form>

      

    

      <ul class="sidebar-menu">

        <li><a href="backend/users/listuse"><i class="fa fa-users" aria-hidden="true"></i> <span>Quản lý tài khoản</span></a></li>

        <li><a href="backend/menu"><i class="fa fa-align-justify" aria-hidden="true"></i> <span>Menu</span></a></li>

        <li class="treeview hidden">

          <a href="#">

            <i class="fa fa-dashboard"></i> <span>Danh mục sản phẩm</span> <i class="fa fa-angle-left pull-right"></i>

          </a>

          <ul class="treeview-menu">

            <li><a href="backend/productcate"><i class="fa fa-circle-o"></i> <span>Danh mục </span></a></li>

            <li><a href="backend/product"><i class="fa fa-circle-o"></i> <span>Sản phẩm</span></a></li>

            <li class="hidden"><a href="backend/productrelative"><i class="fa fa-circle-o"></i> <span>Bài viết liên quan sản phẩm</span></a></li>

          </ul>

        </li>

       

        

        <li class="treeview" >



          <a href="#"> <i class="fa fa-edit"></i> <span>Quản lý bài viết</span> <i class="fa fa-angle-left pull-right"></i></a>



          <ul class="treeview-menu">

            <li><a href="backend/catenew"><i class="fa fa-circle-o"></i> <span>Danh mục tin tức</span></a></li>   

            <li><a href="backend/post"><i class="fa fa-circle-o"></i> <span>Bài viết</span></a></li>

            <li ><a href="backend/video"><i class="fa fa-circle-o"></i> <span>Danh sách videos</span></a></li>

            <li ><a href="backend/about/edit?type=about"><i class="fa fa-gear" aria-hidden="true"></i> Giới thiệu</a></li>



          </ul>



        </li>
      <li class="treeview" >



        <a href="#"> <i class="fa fa-edit"></i> <span>Quản lý nhà tuyển dụng</span> <i class="fa fa-angle-left pull-right"></i></a>



        <ul class="treeview-menu">

          <li><a href="backend/usersendmail"><i class="fa fa-circle-o"></i> <span>Thông tin đăng ký</span></a></li>   

          <li><a href="backend/userscustomer/listuse"><i class="fa fa-users" aria-hidden="true"></i> <span>Tài khoản khách hàng</span></a></li>

        </ul>



      </li>
      
      <li><a href="backend/career"><i class="fa fa-circle-o"></i> <span>Quản lý ngành nghề</span></a></li>
       <li><a href="backend/slider?type=hinh-anh"><i class="fa fa-circle-o"></i> <span>Quản lý slider</span></a></li>



        

        

        

        

       <li><a href="backend/lienket?type=the-manh"><i class="fa fa-circle-o"></i>Thế mạnh </a></li>

        

       <li><a href="backend/lienket?type=recument"><i class="fa fa-circle-o"></i>Thư viện ảnh </a></li> 

      

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

      



       

      

      <li><a href="backend/lienket?type=quang-cao"><i class="fa fa-circle-o"></i>Quảng cáo</a></li>  

      <li><a href="backend/lienket?type=doi-tac"><i class="fa fa-circle-o"></i>Đối tác</a></li>  

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



      </ul>



    </section>



</aside>