<section class="product-detail pd-60">
        <div class="container">
            <div class="row">
                <div class="col-md-3 visible-desktop">
                    <div class="sticky-top">
                            <div class="product-cate">
                                <ul>
                                    <?php if($catpro->views != 4){?>
                                        <?php 
                                            foreach($product_left as $k=>$item_rl){
                                        ?>
                                            <li class="<?php if($k == 0){echo 'active';}?>"><a href="<?php echo e(url($item_rl->alias.'.'.$item_rl->id.'.html')); ?>" title="">
                                                <?php if(!empty($item_rl->photo2)){?>
                                                <img src="<?php echo e(asset('upload/product/'.$item_rl->photo2)); ?>" alt="<?php echo e($item_rl->name); ?>" title="<?php echo e($item_rl->name); ?>"> 
                                                <?php } ?>
                                                <?php echo e($item_rl->name); ?></a> 
                                            </li>
                                        <?php } ?> 
                                    <?php } else {?>
                                        <?php 
                                        
                                            foreach($cate_pr_back_for as $i=>$item_cate){
                                                
                                        ?>
                                            <li class="<?php if($i == 0){echo 'active';}?>"><a href="<?php echo e(url(@$item_cate->alias.'.htm')); ?>" title="<?php echo @$item_cate->name;?>">
                                               <?php if(!empty($item_cate->photo2)){?>
                                                <img src="<?php echo e(asset('upload/product/'.@$item_cate->photo2)); ?>" alt="<?php echo e(@$item_cate->name); ?>" title="<?php echo e(@$item_cate->name); ?>">  
                                                <?php } ?>
                                                <?php echo e(@$item_cate->name); ?></a>
                                            </li>
                                        <?php } ?>   
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
                        <h1 class="title-cate"><?php echo $product_detail->name;?> </h1>
                        <p class="border mg-20"></p>
                        <div class="row">
                            <div class="col-md-12">
                                <div class="product-txt">
                                    <div class="product-index">
                                        <?php echo $product_detail->content;?>
                                    </div>
                                    <p class="mgt-20">
                                        <div class="fb-like" data-href="<?php echo e(asset($product_detail->alias.'.'.$product_detail->id.'.html')); ?>" data-layout="button_count" data-action="like" data-size="small" data-show-faces="true" data-share="true"></div>
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
                        <?php
                             foreach($product_khac as $item_re){
                        ?>
                            <li><a href="<?php echo e(asset($item_re->alias.'.'.$item_re->id.'.html')); ?>" title="<?php echo $item_re->name;?>"><i class="fa fa-youtube-play"></i> <?php echo $item_re->name;?></a> </li>
                        <?php } ?>
                    </ul>
                </div>
            </div>
        </div>
    </div>
    <div class="col-md-3 visible-mobile mg-20">
        <div class="sticky-top">
            <div class="product-cate">
                 <ul>
                    <?php 
                        foreach($product_left as $k=>$item_rl){
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