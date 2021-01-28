<?php $__env->startSection('title', $title); ?>

<?php $__env->startSection('keyword', $keyword); ?>

<?php $__env->startSection('description', $description); ?>

<?php $__env->startSection('content'); ?>

<?php

    $setting = Cache::get('setting');
    if($catpro->display == 1 && $catpro->parent_id == 0){
?>
 <div class="cd-main-content">

            <section class="banner-child text-center">

                <div class="container">

                    <h1 class="text-uppercase"><?php echo e($catpro->name); ?></h1>

                    <p><img src="<?php echo e(asset('public/images/foot.png')); ?>" /></p>

                    <p><?php echo $setting->slogan;?></p>

                </div>

            </section>

            <section class="breadcrumbs">

                <div class="container">

                    <div class="breadcrumb-page">

                        <ul class="flex-center-start">

                            <li><a href="<?php echo e(url('/')); ?>" title="Trang chủ"><i class="fa fa-home"></i> Trang chủ</a> </li>

                            <li><?php echo e($catpro->name); ?></li>

                        </ul>

                    </div>

                </div>

            </section>
            <?php foreach($catproc2 as $rows){
            $catproc3 = DB::table('product_categories')->select()->where('parent_id',$rows->id)->get();     
            ?>
            <section class="product-lists">

                <div class="cate-title">

                    <div class="container flex-center-between">

                        <h3><a href="<?php if($rows->alias != null){?><?php echo e(asset($rows->alias.'.htm')); ?> <?php } else { ?><?php echo e(asset(changeTitle($rows->name.'.htm'))); ?> <?php } ?>" title="<?php echo $rows->name; ?>"><?php echo e($rows->name); ?></a> </h3>

                        <ul class="flex-center">
                            <?php foreach($catproc3 as $row){  ?>
                            <li><a href="<?php if($row->alias != null){?><?php echo e(asset($row->alias.'.'.$row->id.'.htm')); ?> <?php } else { ?><?php echo e(asset(changeTitle($row->name.'.'.$row->id.'.htm'))); ?> <?php } ?>" title="<?php echo $row->name; ?>"><?php echo e($row->name); ?></a> </li>
                            <?php } ?>            
                        </ul>

                    </div>

                </div>

                <div class="slider-product owl-carousel">
            
                    <?php 
                        $ids = array();
                        @$ids[] = $catpro->id;
                        foreach(@$catproc2 as $id){
                            $ids[]= $id->id;
                        } 
                        foreach(@$catproc3 as $i){
                            $ids[]= $i->id;
                        } 
                        
                        $product = DB::table('products')->select()->whereIn('cate_id',$ids)->where('display',1)->orderBy('stt','asc')->get(); 
                        foreach($product as $item){
                         
                      ?>
                            <div class="product-item wow slideInUp" data-wow-delay="0.4s">
        
                                <div class="product-image">
        
                                    <a href="<?php if($item->alias != null){?><?php echo e(asset($item->alias.'.'.$item->id.'.html')); ?> <?php } else { ?><?php echo e(asset(changeTitle($item->name).'.'.$item->id.'.html')); ?> <?php } ?>" title="<?php echo e($item->name); ?>"><img src="<?php echo e(asset('upload/product/'.$item->photo)); ?>" alt="<?php echo e($item->name); ?>" /> </a>
        
                                </div>
        
                                <h5><a href="<?php if($item->alias != null){?><?php echo e(asset($item->alias.'.'.$item->id.'.html')); ?> <?php } else { ?><?php echo e(asset(changeTitle($item->name).'.'.$item->id.'.html')); ?> <?php } ?>" title="<?php echo e($item->name); ?>"><?php echo e($item->name); ?></a> </h5>
                                
                                <p><?php for($i=0;$i<$item->sao;$i++){?> <i style="color: #f7e976;" class="fa fa-star" aria-hidden="true"></i> <?php } ?></p>
                                
                            </div>
                    <?php } ?>
                  



                </div>

            </section>
            <?php } ?>
          

             <?php echo $__env->make('templates.layout.doitac', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>

        </div>
    <?php }elseif($catpro->display == 1 && $catpro->parent_id > 0){ ?>
        <!-------------- danh muc pro duct cap 2 -------------------->
        <div class="cd-main-content">

            <section class="banner-child text-center">

                  <div class="container">

                        <h1 class="text-uppercase"><?php echo e($catpro->name); ?></h1>
        
                        <p><img src="<?php echo e(asset('public/images/foot.png')); ?>" /></p>
        
                        <p><?php echo $setting->slogan;?></p>
        
                    </div>

            </section>

            <section class="breadcrumbs">

                <div class="container">

                    <div class="breadcrumb-page">

                        <ul class="flex-center-start">
                            <?php $cate_pro=DB::table("product_categories")->select()->where('id',$catpro->parent_id)->first();?>        
                            <li><a href="<?php echo e(url('/')); ?>" title="Trang chủ"><i class="fa fa-home"></i> Trang chủ</a> </li>
                            <li><a href="<?php if($cate_pro->alias != null){?><?php echo e(asset($cate_pro->alias.'.htm')); ?> <?php } else { ?><?php echo e(asset(changeTitle($cate_pro->name.'.htm'))); ?> <?php } ?>"><?php echo e($cate_pro->name); ?></a></li>
                            <li><?php echo e($catpro->name); ?></li>
                            
                        </ul>

                    </div>

                </div>

            </section>

            <section class="product-child pd-60">

                <div class="container">

                    <div class="row">

                        <div class="col-md-3">

                            <div class="product-nav  sticky-top">

                                <ul>
                                    <?php 
                                        $cat_product = DB::table('product_categories')->select()->where('parent_id',$cate_pro->id)->get(); 
                                        foreach($cat_product as $rows){
                                        $cat_product_min = DB::table('product_categories')->select()->where('parent_id',$rows->id)->get(); 
                                    ?>
                                    <li class="item-has-children">

                                        <a href="<?php if($rows->alias != null){?><?php echo e(asset($rows->alias.'.htm')); ?> <?php } else { ?><?php echo e(asset(changeTitle($rows->name.'.htm'))); ?> <?php } ?>" title="<?php echo e($rows->name); ?>"><?php echo e($rows->name); ?></a>

                                        <span class="arrow"><img src="<?php echo e(asset('public/images/cd-arrow.svg')); ?>" /></span>

                                        <ul class="sub-menu" style="display: none;">
                                            <?php
                                                foreach($cat_product_min as $row){
                                            ?>
                                                    <li class="active"><a href="<?php if($row->alias != null){?><?php echo e(asset($row->alias.'.'.$row->id.'.htm')); ?> <?php } else { ?><?php echo e(asset(changeTitle($row->name.'.'.$row->id.'.htm'))); ?> <?php } ?>"><?php echo e($row->name); ?></a> </li>
                                            <?php } ?>

                                        </ul>

                                    </li>
                                    <?php } ?>
                                   

                                </ul>

                            </div>

                        </div>

                        <div class="col-md-9">

                            <div class="product-list">

                                <div class="flex-center-between title-list">

                                    <h2><?php echo e($catpro->name); ?></h2>

                                    <div class="filter">

                                        <span>Tìm sản phẩm</span>

                                        <select onchange="location = this.options[this.selectedIndex].value;">

                                            <option >- Lọc sản phẩm -</option>
                                            <option <?php if(@$_GET['new']=='desc'){ echo 'selected'; }?> value="?new=desc">Mới nhất</option>
                                            <option <?php if(@$_GET['new']=='asc'){ echo 'selected'; }?> value="?new=asc">Cũ nhất</option>
                                            <option <?php if(@$_GET['order']=='asc'){ echo 'selected'; }?> value="?order=asc">Giá cao nhất</option>
                                            <option <?php if(@$_GET['order']=='desc'){ echo 'selected'; }?> value="?order=desc">Giá thấp nhất</option>
                                        </select>

                                    </div>

                                </div>

                                <?php
                                    $cat_p = DB::table('product_categories')->select()->where('parent_id',$catpro->id)->orderBy('id','DESC')->get();
                                    foreach($cat_p as $item){
                                ?>
                                <p><?php $item->content?></p>
                                
                                <div class="product-lists">
                                    <div class="cate-title">

                                        <h3><a href="<?php if($item->alias != null){?><?php echo e(asset($item->alias.'.'.$item->id.'.htm')); ?> <?php } else { ?><?php echo e(asset(changeTitle($item->name.'.'.$item->id.'.htm'))); ?> <?php } ?>" title="<?php echo $item->name?>"><?php echo $item->name?></a></h3>

                                        <p class="borr"><span></span></p>

                                    </div>
                                    <div class="row">
                                        <?php
                                        if(@$_GET['new']=='desc'){
                                            $product=DB::table("products")->select()->where('cate_id',$item->id)->orderBy('id','desc')->where('display',1)->limit(4)->get();
                                        }elseif(@$_GET['new']=='asc'){
                                            $product=DB::table("products")->select()->where('cate_id',$item->id)->orderBy('id','asc')->where('display',1)->limit(4)->get();
                                        }elseif(@$_GET['order']=='asc'){
                                            $product=DB::table("products")->select()->where('cate_id',$item->id)->orderBy('price','asc')->where('display',1)->limit(4)->get();
                                        }elseif(@$_GET['order']=='desc'){
                                            $product=DB::table("products")->select()->where('cate_id',$item->id)->orderBy('price','desc')->where('display',1)->limit(4)->get();
                                        }else{
                                            $product=DB::table("products")->select()->where('cate_id',$item->id)->orderBy('stt','asc')->where('display',1)->limit(4)->get();
                                        }
                                         
                                       
                                        foreach($product as $pr){
                                         ?>
                                        <div class="col-md-3">

                                            <div class="product-item">

                                                <div class="product-image">

                                                    <a href="<?php if($pr->alias != null){?><?php echo e(asset($pr->alias.'.'.$pr->id.'.html')); ?> <?php } else { ?><?php echo e(asset(changeTitle($pr->name).'.'.$pr->id.'.html')); ?> <?php } ?>" title="<?php echo e($pr->name); ?>"><img src="<?php echo e(asset('upload/product/'.$pr->photo)); ?>" alt="<?php echo e($pr->name); ?>" /> </a>

                                                </div>

                                                <h5><a href="<?php if($pr->alias != null){?><?php echo e(asset($pr->alias.'.'.$pr->id.'.html')); ?> <?php } else { ?><?php echo e(asset(changeTitle($pr->name).'.'.$pr->id.'.html')); ?> <?php } ?>" title="<?php echo e($pr->name); ?>"><?php echo e($pr->name); ?></a> </h5>

                                                <p><?php for($i=0;$i<$pr->sao;$i++){?> <i style="color: #f7e976;" class="fa fa-star" aria-hidden="true"></i> <?php } ?></p>

                                            </div>

                                        </div>
                                        <?php } ?>    
                                    </div>

                                </div>
                                <?php } ?>
                     

                            </div>

                        </div>

                    </div>

                </div>

            </section>
            <?php echo $__env->make('templates.layout.doitac', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
        </div>
        
        <!--------------  End danh muc cap 2 ----------------------->
    <?php }elseif($catpro->display == 2 && $catpro->parent_id == 0){ ?>
     <?php   
            $product=DB::table("products")->select('id','name','alias','created_at','mota','photo')->where('cate_id',$catpro->id)->orderBy('id','desc')->where('display',2)->first();
            $product_left=DB::table("products")->select('id','name','alias','created_at')->where('cate_id',$catpro->id)->orderBy('id','desc')->where('display',2)->limit(5)->get();
            $product_page=DB::table("products")->select('id','name','alias','created_at','mota','photo')->where('cate_id',$catpro->id)->orderBy('id','desc')->where('display',2)->skip(5)->take(10)->paginate(10);
     if(count($product_page) > 1){
     ?>
        <div class="cd-main-content">

            <section class="banner-child text-center">

                <div class="container">

                    <h1 class="text-uppercase"><?php echo e($catpro->name); ?></h1>

                    <p><img src="<?php echo e(asset('public/images/foot.png')); ?>" /></p>

                    <p><?php echo $setting->slogan;?></p>

                </div>


            </section>

            <section class="breadcrumbs">

                <div class="container">

                    <div class="breadcrumb-page">

                        <ul class="flex-center-start">

                            <li><a href="<?php echo e(url('/')); ?>" title="Trang chủ"><i class="fa fa-home"></i> Trang chủ</a> </li>
                            <li><a><?php echo e($catpro->name); ?></a></li>
                        </ul>

                    </div>

                </div>

            </section>
           
            <section class="news pd-60">

                <div class="container">

                    <div class="row">

                        <div class="col-md-9">

                            <div class="news-lists">

                                <div class="news-hot">
                            
                                    <div class="row">

                                        <div class="col-md-6">
                                                
                                            <div class="news-item">
                                                <a href="<?php if($product->alias != null){?><?php echo e(asset($product->alias.'.'.$product->id.'.html')); ?> <?php } else { ?><?php echo e(asset(changeTitle($product->name).'.'.$product->id.'.html')); ?> <?php } ?>" title="<?php echo e($product->name); ?>">
                                                <img src="<?php echo e(asset('upload/product/'.$product->photo)); ?>" alt="<?php echo e($product->name); ?>" /> 
                                                 <span class="bor"></span>
                                                </a>
                                                <h4>
                                                   <a href="<?php if($product->alias != null){?><?php echo e(asset($product->alias.'.'.$product->id.'.html')); ?> <?php } else { ?><?php echo e(asset(changeTitle($product->name).'.'.$product->id.'.html')); ?> <?php } ?>" title="<?php echo e($product->name); ?>">
                                                    <?php echo e($product->name); ?>

                                                   </a>
                                                </h4>

                                                <p class="time">

                                                    <?php echo $product->created_at;?>

                                                </p>

                                                <p>
                                                    <?php echo $product->mota;?>
                                                </p>

                                            </div>

                                        </div>

                                        <div class="col-md-6">

                                            <div class="trending">
                                                <?php foreach($product_left as $rows){?>
                                                    <div class="trending-item">
    
                                                        <p><a href="<?php if($rows->alias != null){?><?php echo e(asset($rows->alias.'.'.$rows->id.'.html')); ?> <?php } else { ?><?php echo e(asset(changeTitle($rows->name).'.'.$rows->id.'.html')); ?> <?php } ?>" title="<?php echo e($rows->name); ?>"><?php echo e($rows->name); ?></a> </p>
    
                                                        <p class="time">
    
                                                           Ngày tháng: <?php echo $rows->created_at;?>
    
                                                        </p>
    
                                                    </div>
                                                <?php } ?>
                                            </div>

                                        </div>

                                    </div>

                                </div>

                                <div class="news-plus">
                                <?php
                                    foreach($product_page as $k=>$item){
                                      
                                ?>
                                    <div class="news-item">

                                        <div class="row">

                                            <div class="col-md-3">
                                                 <a class="zoom img-news" href="<?php if($item->alias != null){?><?php echo e(asset($item->alias.'.'.$item->id.'.html')); ?> <?php } else { ?><?php echo e(asset(changeTitle($item->name).'.'.$item->id.'.html')); ?> <?php } ?>" title="<?php echo e($item->name); ?>">
                                                    <img src="<?php echo e(asset('upload/product/'.$item->photo)); ?>" alt="<?php echo e($item->name); ?>" /> 
                                                    <span class="bor"></span>
                                                </a>

                                            </div>

                                            <div class="col-md-9">

                                                <h4>
                                                    <a href="<?php if($item->alias != null){?><?php echo e(asset($item->alias.'.'.$item->id.'.html')); ?> <?php } else { ?><?php echo e(asset(changeTitle($item->name).'.'.$item->id.'.html')); ?> <?php } ?>" title="<?php echo e($item->name); ?>">
                                                            <?php echo e($item->name); ?>

                                                    </a>
                                                </h4>

                                                <p class="time">

                                                   Ngày tháng: <?php echo $rows->created_at;?>

                                                </p>

                                                <p><?php echo $item->mota;?></p>

                                                <p class="font-italic"><a href="<?php if($item->alias != null){?><?php echo e(asset($item->alias.'.'.$item->id.'.html')); ?> <?php } else { ?><?php echo e(asset(changeTitle($item->name).'.'.$item->id.'.html')); ?> <?php } ?>" title="Xem thêm">Xem thêm</a> </p>

                                            </div>

                                        </div>

                                    </div>
                                 <?php } ?>
                                    <div class="pagination">

                                        <ul class="flex-center-start">

                                            <?php echo e($product_page->links()); ?>


                                        </ul>

                                    </div>

                                </div>

                            </div>

                        </div>

                        <div class="col-md-3">

                            <div class="sticky-top">
                                  <?php $ads =DB::table("lienket")->select()->where('com','quang-cao')->orderBy('stt','asc')->get(); ?>      
                                <div class="news-sidebar">
                                    <?php foreach($ads as $ad){?>    
                                        <p><a href="<?php echo e($ad->link); ?>" title="<?php echo e($ad->name); ?>"><img src="<?php echo e(asset('upload/hinhanh/'.$ad->photo)); ?>" alt="<?php echo e($ad->name); ?>" /> </a> </p>
                                    <?php } ?>
                                </div>

                                <div class="news-new">
                                     <?php 
                                     $post = DB::table('products')->select()->where('status',1)->where('cate_id',$catpro->id)->where('display',2)->inRandomOrder()->orderby('stt','asc')->take(1)->first();
                                     $post1 = DB::table('products')->select()->where('status',1)->where('cate_id',$catpro->id)->where('display',2)->inRandomOrder()->orderby('stt','asc')->skip(1)->take(5)->get();
                                     ?>       
                                    <h3>Tin trong ngày</h3>
            
                                   
                                    <a class="zoom img-news" href="<?php if($post->alias != null){?><?php echo e(asset($post->alias.'.'.$post->id.'.html')); ?> <?php } else { ?><?php echo e(asset(changeTitle($post->name).'.'.$post->id.'.html')); ?> <?php } ?>" title="<?php echo e($post->name); ?>">
                                          <img src="<?php echo e(asset('upload/product/'.$post->photo)); ?>" alt="<?php echo e($post->name); ?>" /> 
                                             <span class="bor"></span>
                                      </a>
                                    <div class="pd-15">
                                    
                                      
                                        <h4>

                                            <a href="<?php if($post->alias != null){?><?php echo e(asset($post->alias.'.'.$post->id.'.html')); ?> <?php } else { ?><?php echo e(asset(changeTitle($post->name).'.'.$post->id.'.html')); ?> <?php } ?>" title="<?php echo e($post->name); ?>"><?php echo e($post->name); ?></a>

                                        </h4>

                                        <p class="time">

                                            Ngày tháng: <?php echo $post->created_at;?>

                                        </p>

                                        <p><?php echo _substr("$post->mota",300);?></p>

                                        <ul>
                                            <?php
                                            foreach($post1 as $new){
                                            ?>
                                             <li><a  href="<?php if($new->alias != null){?><?php echo e(asset($new->alias.'.'.$new->id.'.html')); ?> <?php } else { ?><?php echo e(asset(changeTitle($new->name).'.'.$new->id.'.html')); ?> <?php } ?>" title="<?php echo e($new->name); ?>"><img src="<?php echo e(asset('public/images/v.png')); ?>" /> <?php echo e($new->name); ?></a> </li>
                                              <?php } ?>
                                        </ul>

                                    </div>

                                </div>

                            </div>

                        </div>

                    </div>

                </div>

            </section>
            <?php echo $__env->make('templates.layout.doitac', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
        </div>
            <?php }else { ?>
            <?php $post_about = DB::table('products')->select()->where('cate_id',$catpro->id)->where('display',2)->where('status',1)->first();?>
            <div class="cd-main-content">

            <section class="banner-child text-center">

                <div class="container">

                  <h1 class="text-uppercase"><?php echo e($catpro->name); ?></h1>

                    <p><img src="<?php echo e(asset('public/images/foot.png')); ?>" /></p>

                    <p><?php echo $setting->slogan;?></p>
                </div>

            </section>

            <section class="breadcrumbs">

                <div class="container">

                    <div class="breadcrumb-page">

                        <ul class="flex-center-start">

                             <li><a href="<?php echo e(url('/')); ?>" title="Trang chủ"><i class="fa fa-home"></i> Trang chủ</a> </li>
                            <li><?php echo e($catpro->name); ?></li>

                        </ul>

                    </div>

                </div>

            </section>

            <section class="about pd-60">

                <div class="container">

                    <div class="row">
                                
                         <?php echo $post_about->content;?>   
                    </div>   
                </div>

            </section>

          <?php echo $__env->make('templates.layout.doitac', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>

        </div>
            <?php } ?>
          

        
    
    <?php } ?>
<?php $__env->stopSection(); ?>


<?php echo $__env->make('index', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>