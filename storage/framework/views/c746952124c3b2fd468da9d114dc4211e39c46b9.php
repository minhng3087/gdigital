<?php $__env->startSection('title', $title); ?>

<?php $__env->startSection('keyword', $keyword); ?>



<?php $__env->startSection('description', $description); ?>



<?php $__env->startSection('img_share', $img_share); ?>

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

?>

<div class="cd-main-content">



        <section class="topnews-index pd-60">



            <div class="container">



                <div class="row">



                    <div class="col-md-6">

                        <?php

                            foreach($post_new as $k=>$item){

                            if($k == 0){    

                        ?>

                            <div class="news-item relative">

    

                                <a href="<?php echo e(asset($item['alias'].'.'.$item['id'].'.html')); ?>" title="<?php echo e($item['name'.$duoi]); ?>" class="effect" >

    

                                    <img src="<?php echo e(asset('upload/product/'.$item['photo'])); ?>" alt="<?php echo e($item['name'.$duoi]); ?>" />

    

                                </a>

    

                                <div class="news-abs absolute flex-center">

    

                                    <span><img src="<?php echo e(url('public/images/logo/logo-sm.png')); ?>" alt="" title=""> </span>

    

                                    <div class="news-abs-txt">

    

                                        <h6><a href="<?php echo e(asset($item['alias'].'.'.$item['id'].'.html')); ?>" title="<?php echo e($item['name'.$duoi]); ?>"><?php echo e($item['name'.$duoi]); ?></a> </h6>

    

                                        <p>Upload: <?php echo $item['created_at']?></p>

    

                                    </div>

    

                                </div>

    

                            </div>

                        <?php }} ?>

                        <div class="mgt-20">



                            <div class="row">

                                <?php

                                    foreach($post_new as $k=>$item){

                                    if($k > 0){    

                                ?>

                                <div class="col-md-4">



                                    <div class="news-item">



                                        <a href="<?php echo e(asset($item['alias'].'.'.$item['id'].'.html')); ?>" title="<?php echo e($item['name'.$duoi]); ?>" class="zoom" >

    

                                            <img src="<?php echo e(asset('upload/product/'.$item['photo'])); ?>" alt="<?php echo e($item['name'.$duoi]); ?>" />

            

                                        </a>



                                        <p class="desc"><a href="<?php echo e(asset($item['alias'].'.'.$item['id'].'.html')); ?>" title="<?php echo e($item['name'.$duoi]); ?>"><?php echo e($item['name'.$duoi]); ?></a> </p>



                                    </div>



                                </div>

                               <?php }} ?>     

                            </div>



                        </div>



                    </div>



                    <div class="col-md-3 col-12">



                        <div class="news-list-ul">



                            <h5 class="text-uppercase"><a><?= $tintucsukien?></a> </h5>



                            <ul>



                                <?php

                                    foreach($post_hot as $k=>$item){
 

                                ?>

                                <li> <a href="<?php echo e(asset($item['alias'].'.'.$item['id'].'.html')); ?>" title="<?php echo e($item['name'.$duoi]); ?>" ><?php echo e($item['name'.$duoi]); ?></a> </li>

                                <?php } ?>    

                            </ul>



                        </div>



                    </div>



                    <div class="col-md-3 no-mobile">



                        <?php echo $videos_home->link?>

                        

                        <?php 

                            foreach($ads_home as $ads){

                        ?>

                            <p class="mgt-10 visible-desktop"><a href="<?= $ads->link;?>" title="<?= $ads->name;?>"><img src="<?php echo url('upload/hinhanh/'.$ads->photo)?>" alt="<?= $ads->name;?>" title="<?= $ads->name;?>"/></a> </p>

                        <?php } ?>        

               



                    </div>



                </div>



            </div>



        </section>



        <section class="strength pd-60">



            <div class="container">



                <h1 class="text-uppercase text-center mgb-20"><span><?= $themanh;?></span></h1>



                <div class="row">



                    <?php foreach($lisst_themanh as $item_tm){ ?> 

                    <div class="col-md-3 col-6 mgt-20">



                        <div class="strength-item text-center">



                            <p><img src="<?php echo e(asset('upload/hinhanh/'.$item_tm['photo'])); ?>" alt="<?= $item_tm['name']?>" title="<?= $item_tm['name']?>"/> </p>



                            <h4 class="mg-20"><span class="counter"><?= $item_tm['name']?></span> %</h4>



                            <p><?= $item_tm['mota'.$duoi]?></p>



                        </div>



                    </div>

                    <?php } ?>        



                </div>



            </div>



        </section>

        <?php 

            $data_pro = ProductCate::select()->where('status',1)->where('home',1)->get()->toArray();

             foreach($data_pro as $rows){

                 $ids=array();

                 @$data_pro2 = ProductCate::select('id')->where('parent_id',$rows['id'])->where('status',1)->orderBy('pos','asc')->get()->toArray();   

                 foreach($data_pro2 as $id){

                    $ids[]=$id['id'];

                 } 

                $post_laodong=Products::select('name','name_eg','name_uae','name_tai','name_ja','id','alias','photo','created_at')->whereIn('cate_id',$ids)->where('status',1)->orderBy('stt','desc')->limit(8)->get()->toArray();

               

        ?>

            <section class="news-list pd-60">

    

                <div class="container">

    

                    <h5 class="text-uppercase font-weight-bold"><?= $rows['name'.$duoi]?></h5>

    

                    <div class="row">

                      <?php foreach($post_laodong as $item){?>  

                        <div class="col-md-3 mgt-20">

    

                            <div class="news-item">

    

                                <a href="<?php echo e(asset($item['alias'].'.'.$item['id'].'.html')); ?>" title="<?php echo e($item['name'.$duoi]); ?>" class="zoom" >

    

                                    <img src="<?php echo e(asset('upload/product/'.$item['photo'])); ?>" alt="<?php echo e($item['name'.$duoi]); ?>" />

    

                                </a>

    

                                <h5><a href="<?php echo e(asset($item['alias'].'.'.$item['id'].'.html')); ?>" title="<?php echo e($item['name'.$duoi]); ?>" class="font-weight-bold"><?php echo e($item['name'.$duoi]); ?></a> </h5>

    

                                <p class="upload">Upload: <?php echo $item['created_at']?></p>

    

                            </div>

    

                        </div>

                     <?php } ?>   

                    </div>

    

                </div>

    

            </section>

        <?php } ?>    

        

        

     <?php echo $__env->make('templates.layout.doitac', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>



    </div>





<?php $__env->stopSection(); ?>




<?php echo $__env->make('index', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>