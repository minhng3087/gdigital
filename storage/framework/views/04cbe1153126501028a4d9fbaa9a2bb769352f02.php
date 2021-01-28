<section class="sidebar left-content col-lg-3 ">
                    
                    <aside>
                        <div class="aside aside-mini-products-list filter">

                            <div class="filter-container">
                                
                                <div class="filter-group">
                                    <div class="filter-group-title filter-group-title--green">
                                        Khoảng giá
                                        <i class="fa-angle-down fa hidden-sm-up f-right"></i>
                                    </div>
                                    <ul>
                                        <li class="filter-item filter-item--check-box filter-item--green">
                                            <a href="<?php echo url('tim-theo-gia?ord=duoi-200000'); ?>">
                                                   <i class="fa fa-genderless" aria-hidden="true"></i>Giá dưới 200,000
                                            </a>
                                        </li>
                                        <li class="filter-item filter-item--check-box filter-item--green">
                                            <a href="<?php echo e(asset('tim-theo-gia?ord=200000-500000')); ?>">
                                                   <i class="fa fa-genderless" aria-hidden="true"></i>Giá từ 200,000 đến 500,000
                                               
                                            </a>
                                        </li>
                                        <li class="filter-item filter-item--check-box filter-item--green">
                                            <a href="<?php echo e(asset('tim-theo-gia?ord=500000-1000000')); ?>">
                                                  <i class="fa fa-genderless" aria-hidden="true"></i>Giá từ 500,000 đến 1,000,000
                                              
                                            </a>
                                        </li>
                                        <li class="filter-item filter-item--check-box filter-item--green">
                                            <a href="<?php echo e(asset('tim-theo-gia?ord=1000000-2000000')); ?>">
                                                   <i class="fa fa-genderless" aria-hidden="true"></i>1,000,000 đến 2,000,000
                                              
                                            </a>
                                        </li>
                                        <li class="filter-item filter-item--check-box filter-item--green">
                                            <a href="<?php echo e(asset('tim-theo-gia?ord=2000000-3000000')); ?>">
                                                <i class="fa fa-genderless" aria-hidden="true"></i>2,000,000 đến 3,000,000
                                               
                                            </a>
                                        </li>
                                        <li class="filter-item filter-item--check-box filter-item--green">
                                                   <i class="fa fa-genderless" aria-hidden="true"></i>3,000,000 đến 4,000,000
                                              
                                            </a>
                                        </li>
                                        <li class="filter-item filter-item--check-box filter-item--green">
                                            <a href="<?php echo e(asset('tim-theo-gia?ord=4000000-5000000')); ?>">
                                                    <i class="fa fa-genderless" aria-hidden="true"></i>4,000,000 đến 5,000,000
                                              
                                            </a>
                                        </li>

                                        <li class="filter-item filter-item--check-box filter-item--green">
                                            <a href="<?php echo e(asset('tim-theo-gia?ord=5000000-10000000')); ?>">
                                                   <i class="fa fa-genderless" aria-hidden="true"></i>5,000,000 đến 10,000,000
                                           
                                            </a>
                                        </li>
                                        <li class="filter-item filter-item--check-box filter-item--green">
                                            <a href="<?php echo e(asset('tim-theo-gia?ord=tren-10000000')); ?>">
                                                    <i class="fa fa-genderless" aria-hidden="true"></i>Giá trên 10,000,000
                                             </a>
                                        </li>
                                    </ul>
                                </div>

                            </div>
                        </div>
                    </aside>


                    <aside class="hidden-lg-down">
                        <div class="aside aside-mini-products-list">
                            <div class="aside-title">
                                <h2>Sản phẩm bán chạy</h2>
                            </div>

                            <div class="aside-content mini-products-list">

                                <?php $product = DB::table('products')->select('id','alias','price','pricesale','photo','mota','name','typephoto','cate_id')->where('hotleft',1)->orderBy('id', 'DESC')->where('status',1)->get(6);
                                foreach($product as $rows){
                                @$catpro = DB::table('product_categories')->select('name','id','alias')->where('id',@$rows->cate_id)->first();
                                ?>
                                <div class="product-item  on-sale">
                                   

                                      <a class="product-img" href="<?php if($rows->alias != null){?><?php echo e(asset(@$catpro->alias.'/'.$rows->alias.'.'.$rows->id.'.html')); ?> <?php } else { ?><?php echo e(asset(@$catpro->alias.'/'.changeTitle($rows->name).'.'.$rows->id.'.html')); ?> <?php } ?>" title="<?php echo e($rows->name); ?>" >
                                        <?php if($rows->typephoto == 0){?>
                                            <img style="padding-top: 20px;" src="<?php echo e(asset($rows->photo)); ?>" alt="<?php echo e($rows->name); ?>" />
                                        <?php }else{  ?>
                                            <img style="padding-top: 20px;" src="<?php echo e(asset('upload/product/'.$rows->photo)); ?>" alt="<?php echo e($rows->name); ?>" />
                                        <?php } ?> 
                                    </a>

                                    <div class="product-info">

                                        <a class="product-name" href="<?php if($rows->alias != null){?><?php echo e(asset(@$catpro->alias.'/'.$rows->alias.'.'.$rows->id.'.html')); ?> <?php } else { ?><?php echo e(asset(@$catpro->alias.'/'.changeTitle($rows->name).'.'.$rows->id.'.html')); ?> <?php } ?>" title="<?php echo e($rows->name); ?>" >
                                           <?php echo e($rows->name); ?> 
                                        </a>
                                        <span class="price">

                                        <?php if($rows->pricesale != null or $rows->price > 0){?>
                                			<?php echo number_format($rows->pricesale)?>₫
                                        <?php }?>    
                                			<del class="sale-price">
                                             <?php if($rows->price != null  or $rows->price > 0){?>
                                    			<?php echo number_format($rows->price)?>₫
                                            <?php }?>   
                                            </del>
                                    
                                
                                		</span>
                                       
                                        
                                    </div>
                                </div>
                            <?php } ?>    
                        
                                




                            </div>
                        </div>
                    </aside>

                </section>