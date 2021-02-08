<aside class="main-sidebar">
  <section class="sidebar">
    <ul class="sidebar-menu">
      <li class="<?php echo e(Request::segment(2) == '' ? 'active' : null); ?>">
          <a href="<?php echo e(route('backend.index')); ?>">
              <i class="fa fa-home"></i> <span>Trang chủ</span>
          </a>
      </li>
      <li class="<?php echo e(Request::segment(2) == 'users' ? 'active' : null); ?>">
        <a href="backend/users/listuse">
          <i class="fa fa-user" aria-hidden="true"></i><span>Quản lý tài khoản</span>
        </a>
      </li>
     
      <!-- Bài viết -->
      <li class="treeview <?php echo e(Request::segment(2) === 'posts' || Request::segment(2) === 'categories-post' ? 'active' : null); ?>">
          <a href="#">
              <i class="fa fa-tags" aria-hidden="true"></i> <span>Bài viết</span>
              <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
              </span>
          </a>
          <ul class="treeview-menu">
              <li class="<?php echo e(Request::segment(2) === 'posts' ? 'active' : null); ?>">
                  <a href="<?php echo e(route('posts.index', ['type'=> 'blog'])); ?>"><i class="fa fa-circle-o"></i> Danh sách bài viết</a>
              </li>
              <li class="<?php echo e(Request::segment(2) === 'categories-post' ? 'active' : null); ?>">
                  <a href="<?php echo e(route('categories-post.index')); ?>"><i class="fa fa-circle-o"></i> Danh mục bài viết</a>
              </li>
          </ul>
      </li>
    </ul>
  </section>
</aside><?php /**PATH C:\xampp\htdocs\m\resources\views/backend/menu.blade.php ENDPATH**/ ?>