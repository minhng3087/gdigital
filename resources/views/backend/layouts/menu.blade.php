<aside class="main-sidebar">
  <section class="sidebar">
    <ul class="sidebar-menu">
      <li class="{{ Request::segment(2) == '' ? 'active' : null  }}">
          <a href="{{ route('backend.index') }}">
              <i class="fa fa-home"></i> <span>Trang chủ</span>
          </a>
      </li>
      <li class="{{ Request::segment(2) == 'users' ? 'active' : null }}">
        <a href="backend/users/listuse">
          <i class="fa fa-user" aria-hidden="true"></i><span>Quản lý tài khoản</span>
        </a>
      </li>


      <!-- Sản phẩm -->
      <li class="treeview {{ Request::segment(2) === 'category' || Request::segment(2) === 'products' ||  Request::segment(2) === 'product-attributes' || Request::segment(2) === 'brand' || Request::segment(2) === 'category-filter' || Request::segment(2) === 'filter' ? 'active' : null }}">
        <a href="#">
            <i class="fa fa-tags" aria-hidden="true"></i> <span>Sản phẩm</span>
            <span class="pull-right-container">
            <i class="fa fa-angle-left pull-right"></i>
            </span>
        </a>
        <ul class="treeview-menu">
           
            <li class="{{ Request::segment(2) === 'category' ? 'active' : null }}">
              <a href="{{ route('category.index') }}"><i class="fa fa-circle-o"></i> Danh mục sản phẩm</a>
            </li>

            <li class="{{ Request::segment(2) === 'brand' ? 'active' : null }}">
                <a href="{{ route('brand.index') }}"><i class="fa fa-circle-o"></i> Thương hiệu sản phẩm</a>
            </li>

            <li class="{{ Request::segment(2) === 'product-attributes' ? 'active' : null }}">
                <a href="{{ route('product-attributes.index') }}"><i class="fa fa-circle-o"></i> Thuộc tính sản phẩm</a>
            </li>

            <li class="{{ Request::segment(2) === 'category-filter' ? 'active' : null }}">
                <a href="{{ route('list-category-filter') }}"><i class="fa fa-circle-o"></i> Bộ lọc</a>
            </li>
            
         </ul>
      </li>
     
      <!-- Bài viết -->
      <li class="treeview {{ Request::segment(2) === 'posts' || Request::segment(2) === 'categories-post' ? 'active' : null }}">
          <a href="#">
              <i class="fa fa-tags" aria-hidden="true"></i> <span>Bài viết</span>
              <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
              </span>
          </a>
          <ul class="treeview-menu">
              <li class="{{ Request::segment(2) === 'posts' ? 'active' : null }}">
                  <a href="{{ route('posts.index', ['type'=> 'blog']) }}"><i class="fa fa-circle-o"></i> Danh sách bài viết</a>
              </li>
              <li class="{{ Request::segment(2) === 'categories-post' ? 'active' : null }}">
                  <a href="{{ route('categories-post.index') }}"><i class="fa fa-circle-o"></i> Danh mục bài viết</a>
              </li>
          </ul>
      </li>


      <!-- Setting -->

      <li class="header">Cấu hình hệ thống</li>
      <li class="treeview {{ Request::segment(2) === 'options' || Request::segment(2) === 'branchs' || Request::segment(2) === 'menu-category' ||  Request::segment(2) === 'menu' || Request::segment(2) === 'banks' ? 'active' : null }}">
          <a href="#">
              <i class="fa fa-cog" aria-hidden="true"></i> <span>Cấu hình</span>
              <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
              </span>
          </a>
          <ul class="treeview-menu">

              <li class="{{ Request::segment(3) === 'general' ? 'active' : null }}">
                  <a href="{{ route('backend.options.general') }}"><i class="fa fa-circle-o"></i> Cấu hình chung</a>
              </li>

              <li class="{{ Request::segment(3) === 'smtp' ? 'active' : null }}" style="display: none">
                  <a href="{{ route('backend.options.smtp-config') }}"><i class="fa fa-circle-o"></i>  Cấu hình Email</a>
              </li>
              
          </ul>
      </li>
      <div style="display: none;">
        <li class="header">Cấu hình hệ thống</li>
        <li class="treeview {{ Request::segment(2) == 'options' ? 'active' : null  }}">
          <a href="#">
            <i class="fa fa-folder"></i> <span>Setting (Developer)</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
            <li class="{{ Request::segment(3) == 'developer-config' ? 'active' : null  }}">
              <a href="{{ route('backend.options.developer-config') }}"><i class="fa fa-circle-o"></i> Developer - Config</a>
            </li>
          </ul>
        </li>
      </div>
    </ul>

  
  </section>
</aside>