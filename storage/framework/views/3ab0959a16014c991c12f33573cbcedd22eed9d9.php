<section class="project-detail pd-60">
        <div class="container">
            <h1 class="title-cate"><?php echo e($product_detail->name); ?> </h1>
            <p class="border mg-20"></p>
            <div class="row">
                <div class="col-md-9">
                    <div class="gallery clearfix">
                        
                        <?php 
                            $imagesrows=DB::table('product_image')->where('product_id',$product_detail->id)->select()->get();
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
                <div class="col-md-3">
                    <div class="sticky-top">
                        <div class="pj-info">
                            <p><?php echo $product_detail->mota; ?></p>
                        </div>
                        <p class="mg-20"><div class="fb-like" data-href="<?php echo e(asset($product_detail->alias.'.'.$product_detail->id.'.html')); ?>" data-layout="button_count" data-action="like" data-size="small" data-show-faces="true" data-share="true"></div></p>
                    </div>
                </div>
            </div>
            <div class="pj-text">
                <h5><span>Thông tin dự án</span></h5>
                <div class="product-index">
                    <?php echo $product_detail->content; ?>
                </div>
            </div>
            <div class="pj-related">
                <h2 class="title-cate">Dự án cùng nhóm</h2>
                <p class="border mg-20"></p>
                <!----------------->
                
                 <div class="project-slider owl-carousel">

                     <?php
                         foreach($product_khac as $item_re){
                    ?>
                  
                    <div class="item">
                        <div class="item-prj">
                            <figure>
                                <a href="<?php echo e(asset($item_re->alias.'.'.$item_re->id.'.html')); ?>" title="<?php echo $item_re->name;?>" class="center-block zoom" target="_self" >
                                    <img src="<?php echo e(asset('upload/product/'.$item_re->photo)); ?>" alt="<?php echo $item_re->name;?>"/>
                                </a>
                                <figcaption>
                                    <h5>
                                        <a href="<?php echo e(asset($item_re->alias.'.'.$item_re->id.'.html')); ?>" title="<?php echo $item_re->name;?>" target="_self" ><?php echo $item_re->name;?></a></h5>
                                    <div class="desc">
                                        <div class="autoCutStr_120"><?php echo _substr($item_re->name,250);?></div>
                                    </div>
                                    <a class="viewMore" href="<?php echo e(asset($item_re->alias.'.'.$item_re->id.'.html')); ?>" title="<?php echo $item_re->name;?>" target="_self" >Xem dự án <i class="fa fa-angle-right"></i></a>
                                </figcaption>
                            </figure>
                        </div>
                    </div>
                  <?php } ?> 

                </div>
                
                <!---------------->
              
            </div>
        </div>
    </section>