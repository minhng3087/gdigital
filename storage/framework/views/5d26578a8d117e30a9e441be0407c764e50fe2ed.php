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
                            <li><?php echo e(@$catpro->name); ?></li>
                            <li><?php echo e($product_detail->name); ?></li>

                        </ul>

                    </div>

                </div>

            </section>

            <section class="news-detail pd-60">

                <div class="container">

                    <div class="row">

                        <div class="col-md-9">

                            <h2><?php echo e($product_detail->name); ?></h2>

                            <p class="time">Ngày tháng: <?php echo e($product_detail->created_at); ?></p>

                            <?php echo $product_detail->content;?>
                            <p>
                                <div id="fb-root"></div>
                                <script>(function(d, s, id) {
                                  var js, fjs = d.getElementsByTagName(s)[0];
                                  if (d.getElementById(id)) return;
                                  js = d.createElement(s); js.id = id;
                                  js.src = 'https://connect.facebook.net/vi_VN/sdk.js#xfbml=1&version=v2.11&appId=465991187129638';
                                  fjs.parentNode.insertBefore(js, fjs);
                                }(document, 'script', 'facebook-jssdk'));</script>
                                <div class="fb-comments" data-href="<?php if($product_detail->alias != null){?><?php echo e(asset($product_detail->alias.'.'.$product_detail->id.'.html')); ?> <?php } else { ?><?php echo e(asset(changeTitle($product_detail->name).'.'.$product_detail->id.'.html')); ?> <?php } ?>" data-width="100%" data-numposts="5"></div>
                             </p>



                            <div class="news-related">

                                <h5>Các tin liên quan</h5>

                                <ul>
                                    <?php $__currentLoopData = $product_khac; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $rows): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>     
                                            
                                            <li><a href="<?php if($rows->alias != null){?><?php echo e(asset($rows->alias.'.'.$rows->id.'.html')); ?> <?php } else { ?><?php echo e(asset(changeTitle($rows->name).'.'.$rows->id.'.html')); ?> <?php } ?>" title="<?php echo e($rows->name); ?>"><?php echo e($rows->name); ?> </a> </li>
                                     
                                     <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?> 
                                    
                                </ul>

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
                                     $post_new = DB::table('products')->select()->where('status',1)->where('display',2)->orderby('id','desc')->take(1)->first();
                                     $post1_new = DB::table('products')->select()->where('status',1)->where('display',2)->orderby('id','desc')->skip(1)->take(5)->get();
                                     ?>       
                                    <h3>Mới nhất</h3>
                                     <?php if(!empty($post_new->photo)){?>   
                                      <a class="zoom img-news" href="<?php if($post_new->alias != null){?><?php echo e(asset($post_new->alias.'.'.$post_new->id.'.html')); ?> <?php } else { ?><?php echo e(asset(changeTitle($post_new->name).'.'.$post_new->id.'.html')); ?> <?php } ?>" title="<?php echo e($post_new->name); ?>">
                                          <img src="<?php echo e(asset('upload/product/'.$post_new->photo)); ?>" alt="<?php echo e($post_new->name); ?>" /> 
                                             <span class="bor"></span>
                                      </a>
                                      <?php } ?>
                                    <div class="pd-15">
                                    
                                      
                                        <h4>

                                            <a href="<?php if($post_new->alias != null){?><?php echo e(asset($post_new->alias.'.'.$post_new->id.'.html')); ?> <?php } else { ?><?php echo e(asset(changeTitle($post_new->name).'.'.$post_new->id.'.html')); ?> <?php } ?>" title="<?php echo e($post_new->name); ?>"><?php echo e($post_new->name); ?></a>

                                        </h4>

                                        <p class="time">

                                            Ngày tháng: <?php echo $post_new->created_at;?>

                                        </p>

                                        <p><?php echo _substr("$post_new->mota",300);?></p>

                                        <ul>
                                            <?php
                                            foreach($post1_new as $new){
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