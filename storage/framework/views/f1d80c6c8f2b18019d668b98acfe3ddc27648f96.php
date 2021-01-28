<?php $__env->startSection('title', $title); ?>



<?php $__env->startSection('keyword', $keyword); ?>



<?php $__env->startSection('description', $description); ?>



<?php $__env->startSection('content'); ?>

 <?php

    use App\ProductCate;

    use App\Products;

    

?>



<?php

     if(@$_SESSION['lang'] == 'vi'){
       $duoi = '';  
       @include('lang/vi.php');
    }elseif(@$_SESSION['lang'] == 'eg'){
       $duoi = '_eg'; 
       @include('lang/eg.php');
    }elseif(@$_SESSION['lang'] == 'uae'){
       $duoi = '_uae';
       @include('lang/uae.php');
    }elseif(@$_SESSION['lang'] == 'tai'){
       $duoi = '_tai';
       @include('lang/tai.php');
    }elseif(@$_SESSION['lang'] == 'ja'){
       $duoi = '_ja';
       @include('lang/ja.php');
    }else{
       $duoi = ''; 
       @include('lang/vi.php');      
    }

    @$cate2 = ProductCate::select()->where('parent_id',$catpro['id'])->get()->toArray(); 

    @$get_view = ProductCate::select()->where('id',$catpro['parent_id'])->first();  

?>



    <!-- view thi truong lao dong -->

    

        <section class="breadcrumb">

            <div class="container">

                <ul class="flex-center-start">

                    <li><a href="<?php echo e(url('/')); ?>" title="<?php echo $home;?>"><i class="fa fa-home"></i> <?php echo $home;?> </a> </li>

                    <?php if(!empty($get_view)){ ?>

                    <li><a href="<?php echo e(asset(@$get_view['alias']).'.htm'); ?>" title="<?php echo $get_view['name'.$duoi]; ?>"><?php echo e($get_view['name'.$duoi]); ?></a></li>

                    <?php } ?>

                    <li><span> <?php echo e($catpro['name'.$duoi]); ?> </span> </li>

                </ul>

            </div>

        </section>

 <?php

   

    

    $setting = Cache::get('setting');

    if($catpro['display'] == 2 && $catpro['views'] == 1 && $catpro['parent_id'] == 0){

?>       

        

        

        <section class="market">

            <div class="container">

                <div class="row">

                   <?php

                   

                    foreach($cate2 as $cate){

                        $list=Products::select('name','name_eg','name_uae','name_tai','name_ja','alias','id','mota','mota_eg','mota_uae','mota_tai','mota_ja','photo','created_at')->where('cate_id',$cate['id'])->where('status',1)->limit(6)->orderBy('id','desc')->get()->toArray();

                   ?> 

                    <div class="col-md-4">

                        <div class="market-item">

                            

                                <h5 class="title-market"><a href="<?php echo e(asset(@$cate['alias'].'.htm')); ?>" title="<?php echo $cate['name'.$duoi]; ?>"><?= $cate['name'.$duoi]?></a> </h5>

                            <?php

                                foreach($list as $k=>$item){

                                if($k==0){

                            ?>  

                            <div class="market-cache">

                                <a href="<?php echo e(asset($item['alias'].'.'.$item['id'].'.html')); ?>" title="<?php echo e($item['name'.$duoi]); ?>" class="zoom"><img src="<?php echo e(asset('upload/product/'.$item['photo'])); ?>" alt="<?php echo e($item['name'.$duoi]); ?>" title=""> </a>

                                <h5><a href="<?php echo e(asset($item['alias'].'.'.$item['id'].'.html')); ?>" title="<?php echo e($item['name'.$duoi]); ?>"><?php echo e($item['name'.$duoi]); ?></a> </h5>

                                <p class="upload">Upload: <?php echo e($item['created_at']); ?></p>

                                <p class="desc"><?php echo e($item['mota'.$duoi]); ?></p>

                            <?php }} ?>

                         

                                <ul>

                                    <?php

                                        foreach($list as $k=>$item){

                                        if($k==0){

                                    ?>

                                    <li>

                                        <a href="<?php echo e(asset($item['alias'].'.'.$item['id'].'.html')); ?>" title="<?php echo e($item['name'.$duoi]); ?>">

                                            <img src="<?php echo e(asset('public/images/icon/icon-v.png')); ?>" alt="<?php echo e($item['name'.$duoi]); ?>" title="<?php echo e($item['name'.$duoi]); ?>"/>

                                            <?php echo e($item['name'.$duoi]); ?>


                                        </a>

                                    </li>

                                    <?php }} ?>

                                </ul>

                            </div>

                            <a href="<?php echo e(asset(@$cate['alias'].'.htm')); ?>" title="<?php echo $cate['name'.$duoi]; ?>" class="effect view-link" title=""><?php echo $xemthem?></a>

                        </div>

                    </div>

                 <?php } ?>

                </div>

            </div>

        </section>

 <?php } elseif($catpro['display'] == 2 && $catpro['views'] == 2 && $catpro['parent_id'] == 0){ ?>         

        <!-------- view new --------->

        <section class="news-page">

            <div class="container">

                <div class="row">

                    <div class="col-md-9">

                        <section class="topnews-index pd-60">

                            <div class="container">

                                <div class="row">

                                    <div class="col-md-8">

                                        <?php

                                        foreach($list_post as $k=>$item){

                                            if($k == 0){

                                        ?>

                                        <div class="news-item relative">

                                            <a href="<?php echo e(asset($item['alias'].'.'.$item['id'].'.html')); ?>" title="<?php echo e($item['name'.$duoi]); ?>" class="effect">

                                                <img src="<?php echo e(asset('upload/product/'.$item['photo'])); ?>" alt="<?php echo e($item['name'.$duoi]); ?>"/>

                                            </a>

                                            <div class="news-abs absolute flex-center">

                                                <div class="news-abs-txt">

                                                    <h6><a href="<?php echo e(asset($item['alias'].'.'.$item['id'].'.html')); ?>" title="<?php echo e($item['name'.$duoi]); ?>"><?php echo e($item['name'.$duoi]); ?></a> </h6>

                                                    <p>Upload: <?php echo e($item['created_at']); ?></p>

                                                </div>

                                            </div>

                                        </div>

                                        <?php }} ?>

                                        <div class="mgt-20">

                                            <div class="row">

                                                <?php

                                                    foreach($list_post as $k=>$item){

                                                    if($k > 0){    

                                                ?>

                                                <div class="col-md-4">

                                                    <div class="news-item">

                                                        <a class="zoom" href="<?php echo e(asset($item['alias'].'.'.$item['id'].'.html')); ?>" title="<?php echo e($item['name'.$duoi]); ?>">

                                                            <img src="<?php echo e(asset('upload/product/'.$item['photo'])); ?>" alt="<?php echo e($item['name'.$duoi]); ?>"/>

                                                        </a>

                                                        <p class="desc"><a href="<?php echo e(asset($item['alias'].'.'.$item['id'].'.html')); ?>" title="<?php echo e($item['name'.$duoi]); ?>"><?php echo e($item['name'.$duoi]); ?> </a> </p>

                                                    </div>

                                                </div>

                                               <?php }} ?>

                                            </div>

                                        </div>

                                    </div>

                                    <div class="col-md-4 no-mobile">

                                        <div class="news-list-ul">

                                            <h5 class="text-uppercase"><a><?= $tintucsukien?></a> </h5>

                                            <ul>

                                                <?php

                                                    foreach($list_noibat as $hot){

                                                ?>

                                                <li><a href="<?php echo e(asset($hot['alias'].'.'.$hot['id'].'.html')); ?>" title="<?php echo e($hot['name'.$duoi]); ?>"><?php echo e($hot['name'.$duoi]); ?></a> </li>

                                                <?php } ?>

                                            </ul>

                                        </div>

                                    </div>

                                </div>

                            </div>

                        </section>

                        <?php

                        

                        foreach($cate2 as $cate){

                            $list=Products::select('name','name_eg','name_uae','name_tai','name_ja','alias','id','mota','mota_eg','mota_uae','mota_tai','mota_ja','photo','created_at','pricesale','price')->where('cate_id',$cate['id'])->where('status',1)->limit(6)->orderBy('id','desc')->get()->toArray();

                       ?> 

                        <section class="news-cate-child">

                            <h1 class="title-cate-child mgt-20">

                                <a class="blue-txt" href="<?php echo e(asset(@$cate['alias'].'.htm')); ?>" title="<?php echo $cate['name'.$duoi]; ?>"><?= $cate['name'.$duoi]?></a>

                            </h1>

                            <div class="news-gr">

                              <?php 

                                foreach($list as $k=>$item){

                                    if($k <= 2){

                              ?>  

                                <div class="news-item mgt-20">

                                    <div class="row">

                                        <div class="col-md-4">

                                            <a class="zoom" href="<?php echo e(asset($item['alias'].'.'.$item['id'].'.html')); ?>" title="<?php echo e($item['name'.$duoi]); ?>">

                                                <img src="<?php echo e(asset('upload/product/'.$item['photo'])); ?>" alt="<?php echo e($item['name'.$duoi]); ?>"/>

                                            </a>

                                        </div>

                                        <div class="col-md-8">

                                            <h5><a href="<?php echo e(asset($item['alias'].'.'.$item['id'].'.html')); ?>" title="<?php echo e($item['name'.$duoi]); ?>" class="font-weight-bold"><?php echo e($item['name'.$duoi]); ?></a> </h5>

                                            <p class="upload">Upload: <?php echo e($item['created_at']); ?></p>

                                            <p class="desc"><?php echo e($item['mota'.$duoi]); ?></p>

                                            <p class="mgt-20"><a href="<?php echo e(asset($item['alias'].'.'.$item['id'].'.html')); ?>" title="<?php echo e($item['name'.$duoi]); ?>" class="font-italic blue-txt">Xem thêm &gt;&gt;</a> </p>

                                        </div>

                                    </div>

                                </div>

                             <?php }} ?>   

                                

                            </div>

                            <ul class="news-plus mgt-20">

                              <?php 

                                foreach($list as $k=>$item){

                                    if($k > 2){

                              ?>

                                <li><a href="<?php echo e(asset($item['alias'].'.'.$item['id'].'.html')); ?>" title="<?php echo e($item['name'.$duoi]); ?>" class="blue-txt font-italic">&gt; <?php echo e($item['name'.$duoi]); ?></a> </li>

                              <?php }} ?>  

                            </ul>

                        </section>

                      <?php } ?>  

                    </div>

                    <div class="col-md-3 no-mobile">

                        <div class="sticky-top">

                          <?php

                            foreach($ads_new as $ads){

                          ?>      

                            <p style="margin-bottom: 10px;"><img src="<?php echo e(asset('upload/hinhanh/'.$ads->photo)); ?>" alt="<?php echo e($ads->name); ?>" title="<?php echo e($ads->name); ?>"/></p>

                          <?php } ?>

                        </div>

                    </div>

                </div>

            </div>

        </section>

<?php } elseif($catpro['display'] == 2 && $catpro['views'] == 3 && $catpro['parent_id'] == 0){ ?> 

      <section class="news-page">

            <div class="container">

                <div class="row">

                     <?php

                         foreach($cate2 as $cate){

                         $list=Products::select('name','name_eg','name_uae','name_tai','name_ja','alias','id','mota','mota_eg','mota_uae','mota_tai','mota_ja','photo','created_at','pricesale','price')->where('cate_id',$cate['id'])->where('status',1)->limit(6)->orderBy('id','desc')->get()->toArray();

                       ?> 

                    <div class="col-md-6">

                        <section class="news-cate-child">

                            <h1 class="title-cate-child title-no"><a class="blue-txt" href="<?php echo e(asset(@$cate['alias'].'.htm')); ?>" title="<?php echo $cate['name'.$duoi]; ?>"><?= $cate['name'.$duoi]?></a></h1>

                            <div class="news-gr">

                               <?php foreach($list as $k=>$item){

                                if($k == 0){ 

                               ?> 

                                <div class="news-item bg-x mgt-20">

                                    <div class="row">

                                        <div class="col-md-6">

                                            <a class="zoom" href="<?php echo e(asset($item['alias'].'.'.$item['id'].'.html')); ?>" title="<?php echo e($item['name'.$duoi]); ?>">

                                                <img src="<?php echo e(asset('upload/product/'.$item['photo'])); ?>" alt="<?php echo e($item['name'.$duoi]); ?>"/>

                                            </a>

                                        </div>

                                        <div class="col-md-6">

                                            <h5><a href="<?php echo e(asset($item['alias'].'.'.$item['id'].'.html')); ?>" title="<?php echo e($item['name'.$duoi]); ?>"class="font-weight-bold">Tuyển dụng chuyên viên tư vấn tại khu vực Hà Nội</a> </h5>

                                            <p class="upload">Upload: <?php echo e($item['created_at']); ?></p>

                                            <p class="desc"><?php echo e($item['name']); ?></p>

                                        </div>

                                    </div>

                                </div>

                              <?php }else{ ?>  

                                <div class="news-item mgt-20">

                                    <div class="row">

                                        <div class="col-md-4">

                                            <a class="zoom" href="<?php echo e(asset($item['alias'].'.'.$item['id'].'.html')); ?>" title="<?php echo e($item['name'.$duoi]); ?>">

                                                <img src="<?php echo e(asset('upload/product/'.$item['photo'])); ?>" alt="<?php echo e($item['name'.$duoi]); ?>"/>

                                            </a>

                                        </div>

                                        <div class="col-md-8">

                                            <h5><a href="<?php echo e(asset($item['alias'].'.'.$item['id'].'.html')); ?>" title="<?php echo e($item['name'.$duoi]); ?>" class="font-weight-bold"><?php echo e($item['name'.$duoi]); ?></a> </h5>

                                            <p class="upload">Upload: <?php echo e($item['created_at']); ?></p>

                                            <p class="desc"><?php echo e($item['name']); ?></p>

                                        </div>

                                    </div>

                                </div>

                             <?php }} ?>  

                            </div>

                            <div class="market-link no-radius"><a href="<?php echo e(asset(@$cate['alias'].'.htm')); ?>" title="<?php echo $cate['name'.$duoi]; ?>" class="title-content">Xem thêm</a> </div>

                        </section>

                    </div>

                 <?php } ?>    

                </div>

            </div>

        </section> 

<?php } elseif($get_view['display'] == 2 && $get_view['views'] == 1 && $catpro['parent_id'] > 0) { ?> 

      <!--- view con thi truong---->     

      <section class="market-cate">

            <div class="container">

                <h1 class="title-cate mgb-20"><?php echo e($catpro['name'.$duoi]); ?></h1>
                <!-- Download  -->
                <a class="download" href="<?php echo e($catpro['alias']); ?>.htm/download/<?php echo e($catpro['doc']); ?>">DOWNLOAD</a>

                <p><img src="<?php echo e(asset('upload/hinhanh/'.$catpro['photo'])); ?>" alt="<?php echo e($catpro['name'.$duoi]); ?>" /> </p>

                <p><?php echo $catpro['mota'.$duoi];?></p>

                 

                <div id="view" class="row">

                   <?php

                    if(empty($_SESSION['min'])){

                         $page=$_SESSION['min'] = 1;

                    }else{

                        $page=$_SESSION['min'] += 1;

                    }

                    $page_cate=$page*12;

                    @$list_post_parent=Products::select('name','name_eg','name_uae','name_tai','name_ja','alias','id','mota','mota_eg','mota_uae','mota_tai','mota_ja','photo','created_at')->where('cate_id',$catpro['id'])->where('status',1)->limit($page_cate)->orderBy('id','desc')->get()->toArray();

                    foreach($list_post_parent as $item){

                   ?>

                    <div class="col-md-3 mgt-20">

                        <div class="news-item">

                            <a href="<?php echo e(asset($item['alias'].'.'.$item['id'].'.html')); ?>" title="<?php echo e($item['name'.$duoi]); ?>" class="zoom">

                                <img src="<?php echo e(asset('upload/product/'.$item['photo'])); ?>" alt="<?php echo e($item['name'.$duoi]); ?>" />

                            </a>

                            <h5><a href="<?php echo e(asset($item['alias'].'.'.$item['id'].'.html')); ?>" title="<?php echo e($item['name'.$duoi]); ?>" class="font-weight-bold"><?php echo e($item['name'.$duoi]); ?></a> </h5>

                            <p class="upload">Upload: <?php echo e($item['created_at']); ?></p>

                        </div>

                    </div>

                   <?php } ?> 

                     <?php 

                       

                      if(count($list_post_parent) >= $page_cate){?>

                        <div style="text-align: center;" class="f_click text-center market-link" data-id="<?php echo e($catpro['id']); ?>"><a style="color: #fff;cursor: pointer;" class="title-content">Xem thêm</a> </div>

                    <?php } ?>

                </div>

              

            </div>

        </section>

<?php } elseif($get_view['display'] == 2 && $get_view['views'] == 2 && $catpro['parent_id'] > 0 || $get_view['display'] == 2 && $get_view['views'] == 3 && $catpro['parent_id'] > 0 ) { ?> 

<!--- view cate_new_child --->

<section class="news-page">

            <div class="container">

                <div class="row">

                    <div class="col-md-9">

                        <section class="news-cate-child">

                            <h1 class="title-cate-child"><a class="blue-txt"><?php echo e($catpro['name'.$duoi]); ?></a></h1>

                            <div class="news-gr">

                              <?php

                                @$list_post_parent=Products::select('name','name_eg','name_uae','name_tai','name_ja','alias','id','mota','mota_eg','mota_uae','mota_tai','mota_ja','photo','created_at')->where('cate_id',$catpro['id'])->where('status',1)->orderBy('id','desc')->paginate(12);

                                foreach($list_post_parent as $k=>$item){

                                if($k == 0){

                              ?>  

                                <div class="news-item mgt-20">

                                    <div class="row">

                                        <div class="col-md-4">

                                             <a href="<?php echo e(asset($item['alias'].'.'.$item['id'].'.html')); ?>" title="<?php echo e($item['name'.$duoi]); ?>" class="zoom">

                                                <img src="<?php echo e(asset('upload/product/'.$item['photo'])); ?>" alt="<?php echo e($item['name'.$duoi]); ?>" />

                                            </a>

                                        </div>

                                        <div class="col-md-8">

                                            <h5><a href="<?php echo e(asset($item['alias'].'.'.$item['id'].'.html')); ?>" title="<?php echo e($item['name'.$duoi]); ?>" class="font-weight-bold"><?php echo e($item['name'.$duoi]); ?></a> </h5>

                                            <p class="upload">Upload: <?php echo e($item['created_at']); ?></p>

                                            <p class="desc"><?php echo e($item['mota'.$duoi]); ?></p>

                                            <p class="mgt-20"><a href="<?php echo e(asset($item['alias'].'.'.$item['id'].'.html')); ?>" title="<?php echo e($item['name'.$duoi]); ?>" class="font-italic blue-txt">Xem thêm &gt;&gt;</a> </p>

                                        </div>

                                    </div>

                                </div>

                              <?php } else { ?>  

                                <div class="news-item mgt-20">

                                    <div class="row">

                                        <div class="col-md-3">

                                            <a href="<?php echo e(asset($item['alias'].'.'.$item['id'].'.html')); ?>" title="<?php echo e($item['name'.$duoi]); ?>" class="zoom">

                                                <img src="<?php echo e(asset('upload/product/'.$item['photo'])); ?>" alt="<?php echo e($item['name'.$duoi]); ?>" />

                                            </a>

                                        </div>

                                        <div class="col-md-9">

                                            <h5><a href="<?php echo e(asset($item['alias'].'.'.$item['id'].'.html')); ?>" title="<?php echo e($item['name'.$duoi]); ?>" class="font-weight-bold"><?php echo e($item['name'.$duoi]); ?></a></h5>

                                            <p class="upload">Upload: <?php echo e($item['created_at']); ?></p>

                                            <p class="desc"><?php echo e($item['mota'.$duoi]); ?></p>

                                        </div>

                                    </div>

                                </div>

                             <?php }} ?> 

                               

                            </div>

                        </section>

                        <section class="pagi">

                            <?php echo $list_post_parent->links();?>

                        </section>

                    </div>

                    <div class="col-md-3">

                        <div class="sticky-top">

                            <div class="child-defe">

                                <h2 class="title-cate-child"><a class="blue-txt"><?php echo $tinmoi;?></a></h2>

                                <div class="news-item mgt-20">

                                   <?php

                                   

                                    $id_arr=array(intval(@$get_view['id']));

                                    @$parent_cate = ProductCate::select('id')->where('parent_id',$get_view['id'])->get()->toArray(); 

                                    foreach($parent_cate as $id){

                                        $id_arr[]=$id['id'];

                                    }

                                   

                                    @$post_new_right=Products::select('name','name_eg','name_uae','name_tai','name_ja','alias','id','mota','mota_eg','mota_uae','mota_tai','mota_ja','photo','created_at')->whereIn('cate_id',$id_arr)->where('status',1)->orderBy('id','desc')->limit(4)->get();

                                    foreach($post_new_right as $k=>$item){

                                    if($k == 0){

                                  ?>  

                                    <a href="<?php echo e(asset($item['alias'].'.'.$item['id'].'.html')); ?>" title="<?php echo e($item['name'.$duoi]); ?>" class="zoom">

                                        <img src="<?php echo e(asset('upload/product/'.$item['photo'])); ?>" alt="<?php echo e($item['name'.$duoi]); ?>" />

                                    </a>

                                    <h5><a href="<?php echo e(asset($item['alias'].'.'.$item['id'].'.html')); ?>" title="<?php echo e($item['name'.$duoi]); ?>" class="font-weight-bold"><?php echo e($item['name'.$duoi]); ?></a> </h5>

                                    <p class="upload">Upload: <?php echo e($item['created_at']); ?></p>

                                    <p class="desc"><?php echo e($item['mota'.$duoi]); ?></p>

                                   <?php }} ?> 

                                    <ul class="mgt-20">

                                        <?php

                                            foreach($post_new_right as $k=>$item){

                                            if($k > 0){

                                        ?>

                                        <li>

                                            <a href="<?php echo e(asset($item['alias'].'.'.$item['id'].'.html')); ?>" title="<?php echo e($item['name'.$duoi]); ?>">

                                                <i class="fa fa-caret-right"></i>

                                                <?php echo e($item['name'.$duoi]); ?>


                                            </a>

                                        </li>

                                        <?php }} ?>

                                    </ul>

                                </div>

                            </div>

                            <?php echo $__env->make('templates.layout.ads', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>

                        </div>

                    </div>

                </div>

            </div>

        </section>

      

<?php }else{ ?>

<!--- view cate = 0 , VB phap luat --->

<section class="news-page">

    <div class="container">

        <div class="row">

            <div class="col-md-9">

                <section class="news-cate-child">

                    <h1 class="title-cate-child"><a class="blue-txt"><?php echo e($catpro['name'.$duoi]); ?></a></h1>

                    <div class="news-gr">

                      <?php

                        @$list_post_parent=Products::select('name','name_eg','name_uae','name_tai','name_ja','alias','id','mota','mota_eg','mota_uae','mota_tai','mota_ja','photo','created_at')->where('cate_id',$catpro['id'])->where('status',1)->orderBy('id','desc')->paginate(12);

                        foreach($list_post_parent as $k=>$item){

                        if($k == 0){

                      ?>  

                        <div class="news-item mgt-20">

                            <div class="row">

                                <div class="col-md-4">

                                     <a href="<?php echo e(asset($item['alias'].'.'.$item['id'].'.html')); ?>" title="<?php echo e($item['name'.$duoi]); ?>" class="zoom">

                                        <img src="<?php echo e(asset('upload/product/'.$item['photo'])); ?>" alt="<?php echo e($item['name'.$duoi]); ?>" />

                                    </a>

                                </div>

                                <div class="col-md-8">

                                    <h5><a href="<?php echo e(asset($item['alias'].'.'.$item['id'].'.html')); ?>" title="<?php echo e($item['name'.$duoi]); ?>" class="font-weight-bold"><?php echo e($item['name'.$duoi]); ?></a> </h5>

                                    <p class="upload">Upload: <?php echo e($item['created_at']); ?></p>

                                    <p class="desc"><?php echo e($item['mota'.$duoi]); ?></p>

                                    <p class="mgt-20"><a href="<?php echo e(asset($item['alias'].'.'.$item['id'].'.html')); ?>" title="<?php echo e($item['name'.$duoi]); ?>" class="font-italic blue-txt">Xem thêm &gt;&gt;</a> </p>

                                </div>

                            </div>

                        </div>

                      <?php } else { ?>  

                        <div class="news-item mgt-20">

                            <div class="row">

                                <div class="col-md-3">

                                    <a href="<?php echo e(asset($item['alias'].'.'.$item['id'].'.html')); ?>" title="<?php echo e($item['name'.$duoi]); ?>" class="zoom">

                                        <img src="<?php echo e(asset('upload/product/'.$item['photo'])); ?>" alt="<?php echo e($item['name'.$duoi]); ?>" />

                                    </a>

                                </div>

                                <div class="col-md-9">

                                    <h5><a href="<?php echo e(asset($item['alias'].'.'.$item['id'].'.html')); ?>" title="<?php echo e($item['name'.$duoi]); ?>" class="font-weight-bold"><?php echo e($item['name'.$duoi]); ?></a></h5>

                                    <p class="upload">Upload: <?php echo e($item['created_at']); ?></p>

                                    <p class="desc"><?php echo e($item['mota'.$duoi]); ?></p>

                                </div>

                            </div>

                        </div>

                     <?php }} ?> 

                       

                    </div>

                </section>

                <section class="pagi">

                    <?php echo $list_post_parent->links();?>

                </section>

            </div>

            <div class="col-md-3">

                <div class="sticky-top">

                    <div class="child-defe">

                        <h2 class="title-cate-child"><a class="blue-txt"><?php echo $tinmoi;?></a></h2>

                        <div class="news-item mgt-20">

                           <?php

                            if($catpro['parent_id']==0){

                                $id_arr=array(intval(@$catpro['id']));

                            }else{

                                $id_arr=array(intval(@$get_view['id']));

                            }

                            

                            @$parent_cate = ProductCate::select('id')->where('parent_id',$get_view['id'])->get()->toArray(); 

                            foreach($parent_cate as $id){

                                $id_arr[]=$id['id'];

                            }

                           

                            @$post_new_right=Products::select('name','name_eg','name_uae','name_tai','name_ja','alias','id','mota','mota_eg','mota_uae','mota_tai','mota_ja','photo','created_at')->whereIn('cate_id',$id_arr)->where('status',1)->orderBy('id','desc')->limit(4)->get();

                            foreach($post_new_right as $k=>$item){

                            if($k == 0){

                          ?>  

                            <a href="<?php echo e(asset($item['alias'].'.'.$item['id'].'.html')); ?>" title="<?php echo e($item['name'.$duoi]); ?>" class="zoom">

                                <img src="<?php echo e(asset('upload/product/'.$item['photo'])); ?>" alt="<?php echo e($item['name'.$duoi]); ?>" />

                            </a>

                            <h5><a href="<?php echo e(asset($item['alias'].'.'.$item['id'].'.html')); ?>" title="<?php echo e($item['name'.$duoi]); ?>" class="font-weight-bold"><?php echo e($item['name'.$duoi]); ?></a> </h5>

                            <p class="upload">Upload: <?php echo e($item['created_at']); ?></p>

                            <p class="desc"><?php echo e($item['mota'.$duoi]); ?></p>

                           <?php }} ?> 

                            <ul class="mgt-20">

                                <?php

                                    foreach($post_new_right as $k=>$item){

                                    if($k > 0){

                                ?>

                                <li>

                                    <a href="<?php echo e(asset($item['alias'].'.'.$item['id'].'.html')); ?>" title="<?php echo e($item['name'.$duoi]); ?>">

                                        <i class="fa fa-caret-right"></i>

                                        <?php echo e($item['name'.$duoi]); ?>


                                    </a>

                                </li>

                                <?php }} ?>

                            </ul>

                        </div>

                    </div>

                    <!---------------->

                        <?php echo $__env->make('templates.layout.ads', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>

                    <!---------------->

                </div>

            </div>

        </div>

    </div>

</section>

<?php } ?>        

        

        <?php echo $__env->make('templates.layout.doitac', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>



<?php $__env->stopSection(); ?>




<?php echo $__env->make('index', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>