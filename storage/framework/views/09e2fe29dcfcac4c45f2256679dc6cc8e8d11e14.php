<?php $__env->startSection('title', $title); ?>

<?php $__env->startSection('keyword', $keyword); ?>

<?php $__env->startSection('description', $description); ?>

<?php $__env->startSection('content'); ?>
 <div class="cd-main-content">
  <section class="breadcrumb">
        <div class="container">
            <h2><?php echo $catpro->name;?></h2>
            <ul class="flex-center-start">
                <li><a href="<?php echo e(url('/')); ?>" title="Trang chủ"><i class="fa fa-home"></i> Trang chủ </a> </li>
                <li><span><?php echo $catpro->name;?></span> </li>
            </ul>
        </div>
    </section>
<?php
    $setting = Cache::get('setting');
    if($catpro->display == 1){
    $product_vt=DB::table("products")->select()->where('display',1)->orderBy('stt','asc')->first();
   
?>
    <!--------- san phẩm --------->
       
           
           
            <section class="product-detail pd-60">
                <div class="container">
                    <div class="row">
                        <div class="col-md-3">
                            <div class="sticky-top">
                                <div class="product-cate">
                                    <ul>
                                        <?php 
                                            $relate=DB::table("products")->select('name','id','alias','photo')->where('display',3)->where('hot',1)->where('status',1)->orderBy('stt','asc')->get();
                                            $quan_tam=DB::table("products")->select('name','id','alias','photo')->where('display',3)->inRandomOrder()->where('status',1)->limit(5)->orderBy('stt','asc')->get();
                                            foreach($relate as $k=>$item_rl){
                                        ?>
                                        <li class="<?php if($k == 0){echo 'active';}?>"><a href="<?php echo e(url($item_rl->alias.'.'.$item_rl->id.'.html')); ?>" title=""><img src="<?php echo e(asset('upload/product/'.$item_rl->photo)); ?>" alt="<?php echo e($item_rl->name); ?>" title="<?php echo e($item_rl->name); ?>"> <?php echo e($item_rl->name); ?></a> </li>
                                        <?php } ?> 
                                    </ul>
                                    <h5 class="mg-20">Bài viết tiêu biểu</h5>
                                    <?php
                                        
                                        foreach($lienket_ads as $m=>$ads1){
                                         if($m==0){   
                                    ?>
                                    <p>
                                        <a href="<?php echo e($ads1->link); ?>" title="<?php echo e($ads1->name); ?>">
                                        <img src="<?php echo e(asset('upload/hinhanh/'.$ads1->photo)); ?>" alt="<?php echo e($ads1->name); ?>" title=""/>
                                    </a>
                                     </p>
                                    <?php }} ?>
                                </div>
                                <div class="mgt-20 visible-desktop">
                                <?php
                                    
                                    foreach($lienket_ads as $m=>$ads1){
                                        if($m>0){
                                ?>
                                    <a href="<?php echo e($ads1->link); ?>" title="<?php echo e($ads1->name); ?>">
                                        <img src="<?php echo e(asset('upload/hinhanh/'.$ads1->photo)); ?>" alt="<?php echo e($ads1->name); ?>" title=""/>
                                    </a>
                                   <?php }}?> 
                                </div>
                            </div>
                        </div>
                        <div class="col-md-9">
                            <div class="pro-detail">
                                <h1 class="title-cate"><?= $product_vt->name ?></h1>
                                <p class="border mg-20"></p>
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="gallery clearfix">
                                                <?php 
                                                    $imagesrows=DB::table('product_image')->where('product_id',$product_vt->id)->select()->get();
                                                    foreach($imagesrows as $k=>$rows ){
                                                        if($k==0){                                                       
                                                ?>
                                                    <a href="<?php echo asset('uploads/images/img_detail/'.$rows->image); ?>" class="full" title="">
                                                        <!-- first image is viewable to start -->
                                                        <img src="<?php echo asset('uploads/images/img_detail/'.$rows->image); ?>" style="display: inline;">
                                                    </a>
                                                <?php }} ?>
                                            <div class="thumbs">
                                                
                                                <?php 
                                                    foreach($imagesrows as $k=>$rows ){
                                                ?>
                                                <div class="preview"> <a href="#" class="<?php if($k == 0){echo 'selected';}?>" data-full="<?php echo asset('uploads/images/img_detail/'.$rows->image); ?>"> <img src="<?php echo asset('uploads/images/img_detail/'.$rows->image); ?>" alt="" title=""> </a> </div>
                                                
                                                <?php } ?>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="product-shortdesc">
                                            <?php echo $product_vt->mota;?>
                                            <p class="font-weight-bold mgt-20">Sử dụng cho các giải pháp:</p>
                                            <ul class="nav-i flex-center">
                                                <li class="relative">
                                                    <a href="" title=""><img src="<?php echo e(asset('public/images/icon/i-4.png')); ?>" alt="<?= $product_vt->text1 ?>" title=""></a>
                                                    <span class=""><?= $product_vt->text1 ?></span>
                                                </li>
                                                <li class="relative">
                                                    <a href="" title=""><img src="<?php echo e(asset('public/images/icon/i-5.png')); ?>" alt="<?= $product_vt->text2 ?>" title=""></a>
                                                    <span class=""><?= $product_vt->text2 ?></span>
                                                </li>
                                                <li class="relative">
                                                    <a href="" title=""><img src="<?php echo e(asset('public/images/icon/i-6.png')); ?>" alt="<?= $product_vt->text3 ?>" title=""></a>
                                                    <span class=""><?= $product_vt->text3 ?></span>
                                                </li>
                                            </ul>
                                            <div class="linkOther">
                                                <ul class="flex-center">
                                                    <li><a href="<?php echo e(url('dang-ky-tu-van')); ?>"><i class="fa fa-cart-plus"></i>Đặt hàng</a></li>
                                                    <li><a href="">Hỗ trợ kỹ thuật</a></li>
                                                   
                                                </ul>
                                            </div>
                                            <p class="mgt-20">
                                                 <!------- mạng xã hội ---->
                                                    <div class="fb-like" data-href="<?php echo e(asset($product_vt->alias.'.'.$product_vt->id.'.html')); ?>" data-layout="button_count" data-action="like" data-size="small" data-show-faces="true" data-share="true"></div>
                                                 <!------- End mạng xã hội --->
                                            </p>
                                        </div>
                                    </div>
                                    <div class="col-md-12">
                                        <div class="product-txt">
                                            <h3><span>Thông tin sản phẩm</span></h3>
                                            <div class="product-index">
                                                   <?php echo $product_vt->content;?> 
                                                   
                                                   <?php echo $__env->make('templates.layout.thongtin', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
                                            </div>
                                            <p class="mgt-20">
                                                <div class="fb-like" data-href="<?php echo e(asset($product_vt->alias.'.'.$product_vt->id.'.html')); ?>" data-layout="button_count" data-action="like" data-size="small" data-show-faces="true" data-share="true"></div>
                                             </p>
                                             <?php
                                    
                                                foreach($lienket_ads_bot as $ads2){
                                                   
                                            ?>
                                                <p class="mg-20">
                                                    <a href="<?php echo e($ads2->link); ?>" title="<?php echo e($ads2->name); ?>">
                                                        <img src="<?php echo e(asset('upload/hinhanh/'.$ads2->photo)); ?>" alt="<?php echo e($ads2->name); ?>" title=""/>
                                                    </a>
                                                </p>
                                               <?php }?> 
                                            
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <div class="pro-related">
                <div class="container">
                    <div class="row">
                        <div class="col-lg offset-lg-3">
                            <h4 class="mgb-20">Có thể bạn quan tâm</h4>
                            <ul>
                                <?php foreach($quan_tam as $rows_qt){?>
                                <li><a href="<?php echo e(url($rows_qt->alias.'.'.$rows_qt->id.'.html')); ?>" title=""><i class="fa fa-youtube-play"></i> <?php echo $rows_qt->name?></a> </li>
                                <?php } ?>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
       
    
    <!--------- End Sản phẩm ----->
<?php }elseif($catpro->display == 2 && $catpro->views == 1){ ?>
<!-------------- Giao diện 1 -------------------->
    <section class="product-detail pd-60">
                <div class="container">
                    <div class="row">
                        <div class="col-md-3">
                            <div class="sticky-top">
                                <div class="product-cate">
                                    <ul>
                                        <?php
                                           $relate=DB::table("products")->select('name','id','alias','photo','photo2')->where('cate_id',$catpro->id)->where('status',1)->orderBy('stt','asc')->get();
                                        ?>
                                        <li class="active"><a href="" title=""><img src="<?php echo e(asset('public/images/icon/i-pro-1.png')); ?>" /> <?php echo count($relate);?> bước quy trình thi công</a> </li>
                                        <?php 
                                           foreach($relate as $item_rl){
                                        ?>
                                            <li><a href="<?php echo e(url($item_rl->alias.'.'.$item_rl->id.'.html')); ?>" title=""><img src="<?php echo e(asset('upload/product/'.$item_rl->photo2)); ?>" alt="<?php echo e($item_rl->name); ?>" title="<?php echo e($item_rl->name); ?>"/><?php echo e($item_rl->name); ?></a> </li>
                                        <?php } ?> 
                                    </ul>
                                    <h5 class="mg-20">Bài viết tiêu biểu</h5>
                                    <?php
                                        
                                        foreach($lienket_ads as $m=>$ads1){
                                         if($m==0){   
                                    ?>
                                    <p>
                                        <a href="<?php echo e($ads1->link); ?>" title="<?php echo e($ads1->name); ?>">
                                        <img src="<?php echo e(asset('upload/hinhanh/'.$ads1->photo)); ?>" alt="<?php echo e($ads1->name); ?>" title=""/>
                                    </a>
                                     </p>
                                    <?php }} ?>
                                </div>
                                <div class="mgt-20 visible-desktop">
                                <?php
                                    
                                    foreach($lienket_ads as $m=>$ads1){
                                        if($m>0){
                                ?>
                                    <a href="<?php echo e($ads1->link); ?>" title="<?php echo e($ads1->name); ?>">
                                        <img src="<?php echo e(asset('upload/hinhanh/'.$ads1->photo)); ?>" alt="<?php echo e($ads1->name); ?>" title=""/>
                                    </a>
                                   <?php }}?> 
                                </div>
                            </div>
                        </div>
                        <div class="col-md-9">
                            <div class="pro-detail">
                                <h1 class="title-cate"><?php echo $catpro->name;?> </h1>
                                <p class="border mg-20"></p>
                                <div class="row">
                                    <div class="col-md-12">
                                        <div class="product-txt step-tc">
                                            <h2 class="text-center text-uppercase mgb-40">
                                                <span class="step-tc-title">
                                                    <span><?php echo count($relate);?></span>
                                                    <span><?php echo $catpro->name;?></span>
                                                </span>
                                            </h2>
                                            
                                            <?php 
                                                foreach($post as $k=>$item_quytrinh){
                                               if($k % 2){     
                                            ?>
                                            <div class="step-item">
                                                <div class="step-image">
                                                    <a href="<?php echo e(asset($item_quytrinh->alias.'.'.$item_quytrinh->id.'.html')); ?>" title="<?php echo $item_quytrinh->name; ?>" class="zoom">
                                                        <img src="<?php echo e(asset('upload/product/'.$item_quytrinh->photo)); ?>" alt="<?php echo $item_quytrinh->name; ?>" />
                                                    </a>
                                                </div>
                                                <div class="step-text">
                                                    <h6 class="text-uppercase"><a href="<?php echo e(asset($item_quytrinh->alias.'.'.$item_quytrinh->id.'.html')); ?>" title="<?php echo $item_quytrinh->name; ?>"><?php echo $item_quytrinh->name; ?></a> </h6>
                                                    <p><?php echo _substr($item_quytrinh->mota,500)?></p>
                                                </div>
                                            </div>
                                            <div class="bridge text-center">
                                                <span class="fa fa-link" aria-hidden="true"></span>
                                            </div>
                                            <?php } else { ?> 
                                            <div class="step-item step-item-2">
                                                <div class="step-image">
                                                    <a href="<?php echo e(asset($item_quytrinh->alias.'.'.$item_quytrinh->id.'.html')); ?>" title="<?php echo $item_quytrinh->name; ?>" class="zoom">
                                                        <img src="<?php echo e(asset('upload/product/'.$item_quytrinh->photo)); ?>" alt="<?php echo $item_quytrinh->name; ?>" />
                                                    </a>
                                                </div>
                                                <div class="step-text">
                                                    <h6 class="text-uppercase"><a href="<?php echo e(asset($item_quytrinh->alias.'.'.$item_quytrinh->id.'.html')); ?>" title="<?php echo $item_quytrinh->name; ?>"><?php echo $item_quytrinh->name; ?></a> </h6>
                                                    <p><?php echo _substr($item_quytrinh->mota,500)?></p>
                                                </div>
                                            </div>
                                            <div class="bridge text-center">
                                                <span class="fa fa-link" aria-hidden="true"></span>
                                            </div>
                                           <?php }} ?> 
                                            
                                         
                                        </div>
                                           <p class="mgt-20">
                                            <div class="fb-like" data-href="<?php echo e(asset($catpro->alias.'.htm')); ?>" data-layout="button_count" data-action="like" data-size="small" data-show-faces="true" data-share="true"></div>
                                         </p>
                                         <?php
                                
                                            foreach($lienket_ads_bot as $ads2){
                                               
                                        ?>
                                            <p class="mg-20">
                                                <a href="<?php echo e($ads2->link); ?>" title="<?php echo e($ads2->name); ?>">
                                                    <img src="<?php echo e(asset('upload/hinhanh/'.$ads2->photo)); ?>" alt="<?php echo e($ads2->name); ?>" title=""/>
                                                </a>
                                            </p>
                                           <?php }?> 
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
<!--------------  End Giao diện 1 ----------------------->
<?php }elseif($catpro->display == 2 && $catpro->views == 2){ ?>
<!-------- Giao diện 2(dự án) ------------->    
<section class="project pd-60">
    <div class="container">
        <h1 class="title-cate"><?php echo $catpro->name;?> </h1>
        <p class="border mg-20"></p>
        <div class="row">
            <div class="col-md-6">
                <?php 
                    foreach($post as $k=>$item){
                    if($k == 0){    
                ?>
                <div class="pj-item item-pjs">
                    <figure>
                        <a class="center-block zoom" href="<?php echo e(asset($item->alias.'.'.$item->id.'.html')); ?>" title="<?php echo $item->name; ?>" target="_self">
                            <img src="<?php echo e(asset('upload/product/'.$item->photo)); ?>" alt="<?php echo $item->name; ?>" />
                        </a>
                        <figcaption>
                            <h4>
                                <a href="<?php echo e(asset($item->alias.'.'.$item->id.'.html')); ?>" title="<?php echo $item->name; ?>" target="_self" ><?php echo $item->name; ?></a></h4>
                            <div class="desc"><?php echo _substr($item->mota,1000)?></div>
                            <a class="viewMore" href="<?php echo e(asset($item->alias.'.'.$item->id.'.html')); ?>" title="<?php echo $item->name; ?>" target="_self" >Xem dự án <i class="fa fa-angle-right"></i></a>
                        </figcaption>
                    </figure>
                </div>
            <?php }} ?>    
            </div>
            <div class="col-md-6">
                <?php 
                    foreach($post as $k=>$item){
                    if($k>0 && $k <= 4){    
                ?>
                <div class="item-pjs mgb-20">
                    <div class="row">
                        <div class="col-8 col-md-6">
                            <div class="content">
                                <h4>
                                    <a href="<?php echo e(asset($item->alias.'.'.$item->id.'.html')); ?>" title="<?php echo $item->name; ?>" target="_self"><?php echo $item->name; ?></a></h4>
                                <div class="desc">
                                    <div class="autoCutStr_90"><?php echo _substr($item->mota,130)?></div>
                                </div>
                                <a class="viewMore" href="<?php echo e(asset($item->alias.'.'.$item->id.'.html')); ?>" title="<?php echo $item->name; ?>" target="_self" >Xem dự án <i class="fa fa-angle-right"></i></a>
                            </div>
                        </div>
                        <div class="col-4 col-md-6">
                            <div class="thumb">
                                <a target="_self" class="center-block zoom" href="<?php echo e(asset($item->alias.'.'.$item->id.'.html')); ?>" title="<?php echo $item->name; ?>" >
                                    <img src="<?php echo e(asset('upload/product/'.$item->photo)); ?>" alt="<?php echo $item->name; ?>" />
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
                <?php }} ?>
            </div>
        </div>
    </div>
</section>
        
<section class="project-worked pd-30">
            <div class="container">
                <h2 class="title-cate">Các dự án đã làm</h2>
                <p class="border mg-20"></p>
                <div id="view">
                    <div class="row" >
                    
                    <?php
                        $da_dalam=DB::table('products')->select('name','id','alias','photo','mota')->where('hot',1)->where('project',1)->orderBy('stt','asc')->limit(3)->get();
                        foreach($da_dalam as $item_hot){
                    ?>
                        <div class="col-md-4">
                            <div class="item-prj">
                                <figure>
                                    <a class="center-block zoom" href="<?php echo e(asset($item_hot->alias.'.'.$item_hot->id.'.html')); ?>" title="<?php echo $item_hot->name; ?>" target="_self">
                                        <img src="<?php echo e(asset('upload/product/'.$item_hot->photo)); ?>" alt="<?php echo $item_hot->name; ?>" />
                                    </a>
                                    <figcaption>
                                        <h5>
                                            <a href="<?php echo e(asset($item_hot->alias.'.'.$item_hot->id.'.html')); ?>" title="<?php echo $item_hot->name; ?>" target="_self" ><?php echo $item_hot->name; ?></a></h5>
                                        <div class="desc">
                                            <div class="autoCutStr_120"><?php echo _substr($item_hot->mota,130)?></div>
                                        </div>
                                        <a class="viewMore" href="<?php echo e(asset($item_hot->alias.'.'.$item_hot->id.'.html')); ?>" title="<?php echo $item_hot->name; ?>" target="_self" >Xem dự án <i class="fa fa-angle-right"></i></a>
                                    </figcaption>
                                </figure>
                            </div>
                        </div>
                    <?php } ?>    
                    
                    </div>
                    <a class="click_f ajaxpagerlink mgt-20" style="cursor: pointer;">Xem thêm <i class="fa fa-plus"></i></a>  
                </div>
            </div>
        </section>        
<!-------- End giao diện 2(dự án) ------------->      
<?php }elseif($catpro->display == 2 && $catpro->views == 3){ ?>
<!-------- Giao diện 3(Hỗ trợ) ------------->    
<section class="product-detail pd-60">
            <div class="container">
                <div class="row">
                    <div class="col-md-3">
                        <div class="sticky-top">
                            
                            
                            <div class="product-cate">
                                <ul>
                                    <?php foreach(@$catproc2 as $k=>$item_cat){?>
                                        <li class="<?php if($k == 0){echo 'active';}?>"><a href="<?php echo e(asset($item_cat->alias.'.'.$item_cat->id.'.html')); ?>" title="<?php echo $item_cat->name; ?>"><img src="<?php echo e(asset('upload/hinhanh/'.$item_cat->photo)); ?>" alt="" title=""> <?php echo $item_cat->name?></a> </li>
                                    <?php } ?>
                                </ul>
                                <h5 class="mg-20">Bài viết tiêu biểu</h5>
                                <?php
                                    
                                    foreach($lienket_ads as $m=>$ads1){
                                     if($m==0){   
                                ?>
                                <p>
                                    <a href="<?php echo e($ads1->link); ?>" title="<?php echo e($ads1->name); ?>">
                                        <img src="<?php echo e(asset('upload/hinhanh/'.$ads1->photo)); ?>" alt="<?php echo e($ads1->name); ?>" title=""/>
                                    </a>
                                 </p>
                                <?php }} ?>
                            </div>
                            <?php
                                foreach($lienket_ads as $m=>$ads1){
                                 if($m==0){   
                             ?>
                            <div class="mgt-20 visible-desktop">
                                <a href="<?php echo e($ads1->link); ?>" title="<?php echo e($ads1->name); ?>">
                                    <img src="<?php echo e(asset('upload/hinhanh/'.$ads1->photo)); ?>" alt="<?php echo e($ads1->name); ?>" title=""/>
                                </a>
                            </div>
                            <?php }} ?>
                        </div>
                    </div>
                    <div class="col-md-9">
                        <div class="support-tech">
                            <h1 class="title-cate">Các câu hỏi thường gặp</h1>
                            <p class="border mg-20"></p>
                            <div class="product-index">
                                <?php foreach($list_post as $item_sp){?>
                                <div class="sup-item">
                                    <h5><a href="<?php echo e(asset($item_sp->alias.'.'.$item_sp->id.'.html')); ?>" title="<?php echo $item_sp->name; ?>"> <?php echo $item_sp->name; ?></a></h5>
                                    <p class="mg-20"><?php echo $item_sp->mota; ?></p>
                                    <p class="text-right mgt-20">
                                        <a href="<?php echo e(asset($item_sp->alias.'.'.$item_sp->id.'.html')); ?>" title="<?php echo $item_sp->name; ?>">Xem câu trả lời</a>
                                    </p>
                                    <p class="absolute"><img src="<?php echo e(asset('public/images/icon/i-11.png')); ?>" alt="" title=""> </p>
                                </div>
                                <?php } ?>
                             
                            </div>
                             <p class="mgt-20">
                                <div class="fb-like" data-href="<?php echo e(asset($catpro->alias.'.htm')); ?>" data-layout="button_count" data-action="like" data-size="small" data-show-faces="true" data-share="true"></div>
                             </p>
                             <?php
                    
                                foreach($lienket_ads_bot as $ads2){
                                   
                            ?>
                                <p class="mg-20">
                                    <a href="<?php echo e($ads2->link); ?>" title="<?php echo e($ads2->name); ?>">
                                        <img src="<?php echo e(asset('upload/hinhanh/'.$ads2->photo)); ?>" alt="<?php echo e($ads2->name); ?>" title=""/>
                                    </a>
                                </p>
                               <?php }?> 
                        </div>
                    </div>
                </div>
            </div>
        </section>
    

    
<!-------- Giao diện 3(Hỗ trợ) ------------->       
<?php }elseif($catpro->display == 2 && $catpro->views == 4 && $catpro->parent_id == 0){ ?>
  <!-------- Giao diện EXP -------------> 
   <section class="exp-child pd-60">

            <div class="container">

                <h1 class="title-cate"><?php echo $catpro->name?></h1>

                <p class="border mg-20"></p>

                <div class="row">

                    <div class="col-md-6">

                        <div class="exp-slider owl-carousel">
                            <?php
                                foreach($hot_exp as $item_exp){
                            ?>
                            <div class="pj-item item-pjs">

                                <figure>
                                    <a href="<?php echo e(asset($item_exp->alias.'.'.$item_exp->id.'.html')); ?>" title="<?php echo $item_exp->name; ?>" class="center-block zoom"  target="_self" >

                                        <img src="<?php echo e(asset('upload/product/'.$item_exp->photo)); ?>" alt="<?php echo $item_exp->name; ?>"/>

                                    </a>

                                    <figcaption>

                                        <h4>

                                       <a href="<?php echo e(asset($item_exp->alias.'.'.$item_exp->id.'.html')); ?>" title="<?php echo $item_exp->name; ?>" target="_self" ><?php echo $item_exp->name; ?></a></h4>

                                        <div class="desc"><?php echo _substr($item_exp->mota,1000)?></div>

                                        <a class="viewMore" href="<?php echo e(asset($item_exp->alias.'.'.$item_exp->id.'.html')); ?>" title="<?php echo $item_exp->name; ?>" target="_self" >Xem thêm</a>

                                    </figcaption>

                                </figure>

                            </div>
                          <?php } ?>  

                        </div>

                    </div>

                    <div class="col-md-6 border-lef">
                    <?php foreach($list_post as $k=>$item){if($k<=4){?>
                                
                        <div class="item-pjs mgb-20">

                            <div class="row">

                                <div class=" col-md-8">

                                    <div class="content">

                                        <h4>

                                            <a href="<?php echo e(asset($item->alias.'.'.$item->id.'.html')); ?>" title="<?php echo $item->name; ?>" target="_self" ><?php echo _substr($item->name,200); ?></a></h4>

                                        <div class="desc">

                                            <div class="autoCutStr_90"><?php echo _substr($item->mota,300); ?></div>

                                        </div>

                                    </div>

                                </div>

                                <div class=" col-md-4">

                                    <div class="thumb">

                                        <a class="center-block zoom" href="<?php echo e(asset($item->alias.'.'.$item->id.'.html')); ?>" title="<?php echo $item->name; ?>" target="_self" >

                                           <img src="<?php echo e(asset('upload/product/'.@$item->photo)); ?>" alt="<?php echo $item->name; ?>"/>

                                        </a>

                                    </div>

                                </div>

                            </div>

                        </div>

                    <?php }} ?>
                        
                        

                    </div>

                </div>

            </div>

        </section> 
     <section class="project-worked no-bg pd-30">
            <div class="container">
              <div id="view_page">  
                <div class="row">
                <?php foreach($list_post as $k=>$item){if($k>4 && $k<=12){?>
                    <div class="col-md-3">
                        <div class="item-prj">
                            <figure>
                                <a class="center-block zoom" href="<?php echo e(asset($item->alias.'.'.$item->id.'.html')); ?>" title="<?php echo $item->name; ?>" target="_self" title="">
                                    <img src="<?php echo e(asset('upload/product/'.@$item->photo)); ?>" alt="<?php echo $item->name; ?>"/>
                                </a>
                                <figcaption>
                                    <h5><a href="<?php echo e(asset($item->alias.'.'.$item->id.'.html')); ?>" title="<?php echo $item->name; ?>" target="_self" title=""><?php echo _substr($item->name,200); ?></a></h5>
                                    <p>Upload: <?php echo date('d/m/Y',strtotime($item->created_at))?></p>
                                </figcaption>
                            </figure>
                        </div>
                    </div>
               <?php }} ?>  
                </div>
                <a class="page_f ajaxpagerlink mgt-20" data-page="<?php echo $arr=implode(',',$ids);?>" style="cursor: pointer;">Xem thêm <i class="fa fa-plus"></i></a>
              </div>  
            </div>
        </section>   
               
  <!-------- Giao diện EXP ------------->     
<?php }elseif($catpro->parent_id > 0 && $catpro->views == 4 && $catpro->display == 2){ ?>  
  <section class="product-detail pd-60">
        <div class="container">
            <div class="row">
                <div class="col-md-3">
                    <div class="sticky-top">
                        
                        
                        <div class="product-cate">
                            <ul>
                                <?php
                                 $cate_0=DB::table('product_categories')->select()->where('id',$catpro->parent_id)->first();
                                 $cate_con=DB::table('product_categories')->select()->where('parent_id',$cate_0->id)->get();    
                                 foreach(@$cate_con as $k=>$item_cat){?>
                                    <li class="<?php if($k == 0){echo 'active';}?>"><a href="<?php echo e(asset($item_cat->alias.'.htm')); ?>" title="<?php echo $item_cat->name; ?>"><img src="<?php echo e(asset('upload/hinhanh/'.$item_cat->photo)); ?>" alt="" title=""> <?php echo $item_cat->name?></a> </li>
                                <?php } ?>
                            </ul>
                            <h5 class="mg-20">Bài viết tiêu biểu</h5>
                            <?php
                                foreach($lienket_ads as $m=>$ads1){
                                if($m==0){   
                            ?>
                            <p>
                                <a href="<?php echo e($ads1->link); ?>" title="<?php echo e($ads1->name); ?>">
                                    <img src="<?php echo e(asset('upload/hinhanh/'.$ads1->photo)); ?>" alt="<?php echo e($ads1->name); ?>" title=""/>
                                </a>
                             </p>
                            <?php }} ?>
                        </div>
                        <?php
                            foreach($lienket_ads as $m=>$ads1){
                             if($m>0){   
                         ?>
                        <div class="mgt-20 visible-desktop">
                            <a href="<?php echo e($ads1->link); ?>" title="<?php echo e($ads1->name); ?>">
                                <img src="<?php echo e(asset('upload/hinhanh/'.$ads1->photo)); ?>" alt="<?php echo e($ads1->name); ?>" title=""/>
                            </a>
                        </div>
                        <?php }} ?>
                    </div>
                </div>
               
                <!------------------------->
                 <div class="col-md-9">

                        <div class="exp">

                            <h1 class="title-cate"><?php echo $catpro->name?></h1>

                            <p class="border mg-20"></p>

                            <div class="exp-group">
                                <?php foreach($page_post as $item_sp){?>
                                <div class="exp-item">

                                    <div class="row">

                                        <div class="col-md-3">

                                            <a href="<?php echo e(asset($item_sp->alias.'.'.$item_sp->id.'.html')); ?>" title="<?php echo $item_sp->name; ?>" class="zoom">

                                                <img src="<?php echo e(asset('upload/product/'.$item_sp->photo)); ?>" alt="<?php echo $item_sp->name; ?>" />

                                            </a>

                                        </div>

                                        <div class="col-md-9">

                                            <div class="exp-text">

                                                <h5><a href="<?php echo e(asset($item_sp->alias.'.'.$item_sp->id.'.html')); ?>" title="<?php echo $item_sp->name; ?>"> <?php echo $item_sp->name; ?></a> </h5>

                                                <p>Upload: <?php echo date('d/m/Y',strtotime($item_sp->created_at));?></p>

                                                <p><?php echo $item_sp->mota; ?></p>

                                                <p><a class="viewMore" href="<?php echo e(asset($item_sp->alias.'.'.$item_sp->id.'.html')); ?>" title="<?php echo $item_sp->name; ?>">Xem thêm <i class="fa fa-angle-double-right"></i></a> </p>

                                            </div>

                                        </div>

                                    </div>

                                </div>
                              <?php } ?>      

                            </div>

                            <ul class="pagination flex-center-end">

                                <?php echo $page_post->links();?>

                            </ul>

                        </div>

                    </div>   
                <!------------------------->
            </div>
        </div>
    </section>
<?php } ?>



 </div>    
 <script type="text/javascript">
 $(".page_f").click(function(){
      var id_cat=$(this).attr('data-page');
        $.ajax({
            url: 'pageexp',
            type: 'get',
            dataType:"html",
            data: {page_id: id_cat},
            success: function (data){
                $("#view_page").html(data);
            }
        });
    });
</script>
<?php $__env->stopSection(); ?>


<?php echo $__env->make('index', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>