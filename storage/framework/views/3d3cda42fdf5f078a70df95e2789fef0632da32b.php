<?php
    $setting = Cache::get('setting');
    
?>
<!--------------------------------------------------------------->
 <footer class="relative">

            <section class="footer-top">

                <div class="container">

                    <div class="row">

                        <div class="col-md-3">

                              <a class="mb-center" href="<?php echo url('/'); ?>"  title="logo"><img  src="<?php echo e(asset('upload/hinhanh/'.$setting->photo3
                              
                              
                              )); ?>" alt="logo"/></a>
                      

                        </div>

                          <?php $data_pro = DB::table("product_categories")->select()->where('display',2)->orderBy('stt','asc')->limit(3)->get();
                            foreach($data_pro as $rows){
                            $pos = DB::table("products")->select()->where('display',2)->where('cate_id',$rows->id)->orderBy('stt','asc')->limit(4)->get();
                          ?>
                          
                            <div class="col-md-3 col-6">
    
                                <div class="footer-item">
    
                                    <h4 class="text-uppercase"><?php echo e($rows->name); ?></h4>
    
                                    <ul>
                                        <?php foreach($pos as $row){
                                            if(count($row) <= 1){    
                                        ?>
                                            
                                            <li><a href="<?php if($row->alias != null){?><?php echo e(asset($row->alias.'.htm')); ?> <?php } else { ?><?php echo e(asset(changeTitle($row->name).'.htm')); ?> <?php } ?>" title="<?php echo e($row->name); ?>"><?php echo e($row->name); ?></a> </li>
                                        <?php } else { ?>
                                            <li><a href="<?php if($row->alias != null){?><?php echo e(asset($row->alias.'.'.$row->id.'.html')); ?> <?php } else { ?><?php echo e(asset(changeTitle($row->name).'.'.$row->id.'.html')); ?> <?php } ?>" title="<?php echo e($row->name); ?>"><?php echo e($row->name); ?></a> </li>
                                        <?php } } ?>
                                        <?php if($rows->id == 14){?>
                                            <li><a>Hotline: <?php echo $setting->phone?></a> </li>
                                            <li><a href="<?php echo e(url('lien-he')); ?>" title="Liên hệ">Liên hệ</a> </li>
                                        <?php } ?>
                                    </ul>
    
                                </div>
    
                            </div>
                        <?php } ?>
                    </div>

                </div>

            </section>

            <section class="footer-bot">

                <div class="container">

                    <div class="footer-add">

                        <div class="row">

                            <div class="col-md-3 order">

                                <div class="social">

                                    <h3 class="text-uppercase">liên kết với chúng tôi</h3>

                                    <p class="borr"><span></span></p>

                                    <ul class="flex-center-between">

                                        <li><a href="<?php echo $setting->links1?>" title=""><img src="<?php echo e(asset('public/images/face.png')); ?>" alt="" title=""> </a> </li>

                                        <li><a href="<?php echo $setting->links2?>" title=""><img src="<?php echo e(asset('public/images/tw.png')); ?>" alt="" title=""> </a> </li>

                                        <li><a href="<?php echo $setting->links3?>" title=""><img src="<?php echo e(asset('public/images/ins.png')); ?>" alt="" title=""> </a> </li>

                                        <li><a href="<?php echo $setting->links4?>" title=""><img src="<?php echo e(asset('public/images/you.png')); ?>" alt="" title=""> </a> </li>

                                        <li><a href="<?php echo $setting->links5?>" title=""><img src="<?php echo e(asset('public/images/google.png')); ?>" alt="" title=""> </a> </li>

                                    </ul>

                                </div>

                            </div>

                            <div class="col-md-9">

                                <div class="address">

                                    <?php echo $setting->content;?>

                                </div>

                            </div>

                        </div>

                    </div>

                </div>

            </section>

            <section class="copyright text-center">

                <div class="container">

                    <span><?php echo $setting->copyright;?></span>

                </div>

            </section>

        </footer>

        <nav id="cd-lateral-nav" class=" visible-mobile">

            <div class="search">

                <form class="flex-center-center">

                    <input type="text" placeholder="Search">

                    <button type="submit"><i class="fa fa-search"></i> </button>

                </form>

            </div>

            <ul class="cd-navigation nav-dropdown">

                 <li class="active"><a href="<?php echo e(url('/')); ?>" title="Trang chủ">Trang chủ</a> </li>

             <?php 
                    $data_pro = DB::table("product_categories")->select()->where('menu',1)->orderBy('pos','asc')->get();
                    foreach($data_pro as $rows){
                    $data_pro2 = DB::table("product_categories")->select()->where('parent_id',$rows->id)->orderBy('pos','asc')->limit(6)->get();    
                ?>
                <li class="item-has-children">

                     <a href="<?php if($rows->alias != null){?><?php echo e(asset($rows->alias.'.htm')); ?> <?php } else { ?><?php echo e(asset(changeTitle($rows->name.'.htm'))); ?> <?php } ?>" title="<?php echo $rows->name; ?>"><?php echo $rows->name; ?></a>
                    
                   
                     <?php if(count($data_pro2)>0){?>
                      <span class="arrow"><img src="<?php echo e(asset('public/images/cd-arrow.svg')); ?>"/></span>
                    <ul class="sub-menu">
                        <?php foreach($data_pro2 as $row){?>
                            <li><a href="<?php if($row->alias != null){?><?php echo e(asset($row->alias.'.htm')); ?> <?php } else { ?><?php echo e(asset(changeTitle($row->name.'.htm'))); ?> <?php } ?>" title="<?php echo $row->name; ?>"><?php echo $row->name; ?></a></li>
                        <?php } ?>

                    </ul>
                     <?php } ?>
                </li>
                <?php } ?>
                <li><a href="<?php echo e(url('lien-he')); ?>" title="Liên hệ">Liên hệ</a> </li>

            </ul>

        </nav>


<!---------------------------------------------------------------->


<?php echo $setting->codechat  ?>

<?php  echo $setting->analytics  ?>
 <!--Link js-->
<script type="text/javascript" src="<?php echo e(asset('public/js/bootstrap.min.js')); ?>"></script>
<script type="text/javascript" src="<?php echo e(asset('public/js/owl.carousel.min.js')); ?>"></script>
<script type="text/javascript" src="<?php echo e(asset('public/js/wow.min.js')); ?>"></script>
<script type="text/javascript" src="<?php echo e(asset('public/js/jquery.typedtext.js')); ?>"></script>
<script type="text/javascript" src="<?php echo e(asset('public/js/private.js')); ?>"></script>