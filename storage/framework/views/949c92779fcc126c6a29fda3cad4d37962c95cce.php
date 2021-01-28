<?php $__env->startSection('title', $title); ?>

<?php $__env->startSection('keyword', $keyword); ?>

<?php $__env->startSection('description', $description); ?>

<?php $__env->startSection('content'); ?>
 
<?php
    $setting = Cache::get('setting');
    if($catpro->display <= 1){
 
?>

    <div class="container builder woocommerce padding-b30">


        <div class="mp-wrap">


            <div class="container container_pad">
                <div class="col-md2 ">
                    <ol class="breadcrumb breadcrumb-arrow hidden-sm hidden-xs">

                        <li><a href="" target="_self">Trang chủ</a></li>


                        <li><a href="" target="_self"><?php echo $catpro->name?></a></li>


                    </ol>
                </div>
            </div>

            <div class="main-collection">

                <div class="sidebar-colletion">
                    <?php echo $__env->make('templates.layout.left', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
                   
                    <div style="display: none; width: 340px; height: 243px; float: none;"></div>


                </div>

                <ul class="folio mpbox col3 current products-resize core-collection">

                  <?php foreach($list_post as $rows){?>  
                    <li>
                        <div class="item post tranz  product-resize">
                            <div class="imgwrap image-resize">

                             
                                 <a href="<?php echo e(asset($rows->alias.'.'.$rows->id.'.html')); ?>" title="<?php echo $rows->name; ?>">
                                     <img  src="<?php echo e(asset('upload/product/'.$rows->photo)); ?>" class="tranz grayscale grayscale-fade wp-post-image"alt="">
                                </a>
                                <a class="rad hoverstuff hoverstuff-link" href="<?php echo e(asset($rows->alias.'.'.$rows->id.'.html')); ?>"><i class="fa fa-info-circle"></i></a>
                                <div class="gia-pro-coll">
                                    <?php if($rows->pricesale>0){?>
                                    <span><?php echo number_format($rows->pricesale)?>₫</span>
                                    <del><?php echo number_format($rows->price)?>₫</del>
                                    <?php }else{ ?>
                                    <span><?php echo number_format($rows->price)?>₫</span>
                                    <?php } ?>
                                </div>
                            </div>


                            <div class="item_inn tranz">

                                <h2><a href="<?php echo e(asset($rows->alias.'.'.$rows->id.'.html')); ?>" title="<?php echo $rows->name; ?>"><?php echo $rows->name; ?></a></h2>
                                <p class="teaser tranz">
                                   <?php echo $rows->mota;?>
                                </p>

                            </div><!-- end .item_inn -->


                        </div>

                    </li>
                    <!-- end post -->
                 <?php } ?>   
                    <!-- end post -->

                </ul><!-- end latest posts section-->

              
                    <?php echo $list_post->links();?>


            </div>
            <div class="clearfix"></div>

            <!-- end latest -->

        </div>

    </div>
 

<!--------------  End product ----------------------->
<?php }elseif($catpro->display == 2){ 
 if(count($list_post)>1){    
?>

<!-------- post ------------->    
 <div class="single single-post postid-471 single-format-standard upper">
        <div class="wrapper classic-header">

            <div class="container container_pad" style="padding-top: 50px;">
                <div class="col-md2 ">
                    <ol class="breadcrumb breadcrumb-arrow hidden-sm hidden-xs">

                        <li><a href="<?php echo e(url('/')); ?>" target="_self">Trang chủ</a></li>


                        <li><a href="" target="_self"><?php echo $catpro->name?></a></li>


                    </ol>
                </div>
            </div>
            <div class="container container_alt">

                <div id="core">

                    <div class="post-471 post type-post status-publish format-standard has-post-thumbnail hentry category-news tag-iframe tag-timelapse tag-video">

                        <div class="postbarRight">

                            <div id="content" class="eightcol-cont first">

                                <div class="blogger index_blogger aq_row">
                                    
                                   <?php foreach($list_post as $rows){?> 
                                    <div class="item normal tranz ghost p-border post-1118 post type-post status-publish format-standard has-post-thumbnail hentry category-news tag-politics tag-quote">

                                        <div class="entryhead">

                                            <div class="imgwrap">

                                                <a href="<?php echo e(asset($rows->alias.'.'.$rows->id.'.html')); ?>" title="<?php echo $rows->name; ?>">
                                                     <img  width="344" height="320"  src="<?php echo e(asset('upload/product/'.$rows->photo)); ?>" class="standard grayscale grayscale-fade wp-post-image"/>
                                                </a>
                                            </div>

                                        </div><!-- end .entryhead -->

                                        <div class="item_inn tranz">


                                            <div class="meta_full_wrap p-border">


                                                <p class="meta meta_full ">
                                                    <span class="post-date updated"><i class="icon-clock"></i> 	<?php echo $rows->created_at?> </span>
                                                </p>

                                            </div>

                                            <h2 class="posttitle"><a href="<?php echo e(asset($rows->alias.'.'.$rows->id.'.html')); ?>" title="<?php echo $rows->name; ?>"><?php echo $rows->name; ?></a></h2>

                                            <div class="entry">


                                                <p class="teaser"><?php echo $rows->mota;?></p>
                                            </div>


                                            <p class="meta_more">
                                                <a href="<?php echo e(asset($rows->alias.'.'.$rows->id.'.html')); ?>" title="<?php echo $rows->name; ?>">Đọc thêm</a>
                                            </p>

                                        </div><!-- end .item_inn -->

                                    </div>
                                  <?php } ?>  

                                    <!-- end post -->

                                </div><!-- end latest posts section-->

                                <div class="clearfix"></div>

                               <?php echo $list_post->links();?>


                            </div>
                                
                            <div id="sidebar" class="fourcol woocommerce">


                                <?php echo $__env->make('templates.layout.left', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
                                <div style="display: none; width: 340px; height: 243px; float: none;"></div>
                            </div><!-- #sidebar -->
                        </div><!-- end .sidebar_opt -->
                    </div>
                </div>
            </div><!-- /.container -->
        </div>
    </div>
<?php }else{
$product_vt=DB::table("products")->select()->where('display',2)->where('cate_id',$catpro->id)->orderBy('stt','asc')->first();    
?>
  <!--count ==0 -->
       <div class="single single-post postid-471 single-format-standard upper">
                <div class="wrapper classic-header">
        
                    <div class="container container_pad" style="padding-top: 50px;">
                        <div class="col-md2 ">
                            <ol class="breadcrumb breadcrumb-arrow hidden-sm hidden-xs">
        
                                <li><a href="<?php echo e(url('/')); ?>" target="_self">Trang chủ</a></li>
        
        
                                <li><a href="" target="_self"><?php echo $product_vt->name?></a></li>
        
        
                            </ol>
                        </div>
                    </div>
                    <div class="container container_alt">
        
                        <div id="core">
        
                            <div class="post-471 post type-post status-publish format-standard has-post-thumbnail hentry category-news tag-iframe tag-timelapse tag-video">
        
                                <div class="postbarRight">
        
                                    <div id="content" class="eightcol-cont first">
                                        <div class="blogger aq_row">


                                    <div class="item normal tranz p-border ghost post-471 post type-post status-publish format-standard has-post-thumbnail hentry category-news tag-iframe tag-timelapse tag-video">

                                        <div class="heading">


                                            <p class="meta date tranz ">
                                                <?php echo $product_vt->created_at;?>    </p>

                                            <div class="clearfix"></div>

                                            <h1 class="entry-title"><?php echo $product_vt->name;?></h1>


                                        </div>

                                        <div class="item_inn tranz f-border ">

                                            <div class="entry" itemprop="text">
                                                <?php echo $product_vt->content;?>
                                                
                                            </div><!-- end .entry -->
                                            <div class="clearfix"></div>

                                        </div><!-- end .item_inn -->

                                    </div><!-- end .item .ghost -->
                                </div>
                                        
        
                                        <div class="clearfix"></div>
        
                                     
        
                                    </div>
                                        
                                    <div id="sidebar" class="fourcol woocommerce">
        
        
                                        <?php echo $__env->make('templates.layout.left', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
                                        <div style="display: none; width: 340px; height: 243px; float: none;"></div>
                                    </div><!-- #sidebar -->
                                </div><!-- end .sidebar_opt -->
                            </div>
                        </div>
                    </div><!-- /.container -->
                </div>
            </div>

<?php } ?>

<?php } ?>


<?php $__env->stopSection(); ?>


<?php echo $__env->make('index', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>