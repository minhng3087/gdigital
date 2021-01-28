<?php
    $setting = Cache::get('setting');
?>
<!------------------------------------->
<header>

    <section class="header">

        <div class="container">

            <div class="row">

                <div class="col-md-3 col-6">

                    <div class="logo">

                        <a href="<?php echo url('/'); ?>"  title="logo" class="logo-wrapper "><img  src="<?php echo e(asset('upload/hinhanh/'.$setting->photo)); ?>" alt="logo"/></a>

                    </div>

                </div>

                <div class="col-md-9 col-6">

                    <p class="hotline text-right">

                        <span>Tư vấn bán hàng</span>

                        <a href="" title="" class="phone"><?php echo $setting->phone;?></a>

                        <a id="cd-menu-trigger" href="#0" class=""><span class="cd-menu-icon"></span></a>

                    </p>

                    <div class="header-nav visible-desktop">

                        <ul class="flex-center-between">

                       
                                <?php 
                                    $data_pro = DB::table("product_categories")->select()->where('menu',1)->where('status',1)->orderBy('pos','asc')->get();
                                    foreach($data_pro as $rows){
                                        
                                ?>
                                <li>

                                    <a href="<?php if($rows->alias != null){?><?php echo e(asset($rows->alias.'.htm')); ?> <?php } else { ?><?php echo e(asset(changeTitle($rows->name.'.htm'))); ?> <?php } ?>" title="<?php echo $rows->name; ?>"><?php echo $rows->name; ?></a>
                                    
                                </li>
                                <?php } ?>
                                <li><a href="<?php echo e(url('gioi-thieu')); ?>" title="Về chúng tôi">Về chúng tôi</a> </li>
                                <li><a href="<?php echo e(url('lien-he')); ?>" title="Liên hệ">Liên hệ</a> </li>

                          
                        </ul>

                    </div>

                </div>

            </div>

        </div>

    </section>

</header>