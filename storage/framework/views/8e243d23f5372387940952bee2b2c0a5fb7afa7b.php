 <div class="widgetable">

                        <div id="hometab">
                             <?php 
                                $new_post=DB::table("products")->select('name','alias','id','mota','photo','created_at')->where('status',1)->limit(4)->orderBy('id','desc')->get();
                                  $lienket_ads=DB::table('lienket')->select('photo','name','link')->where('status',1)->where('com','quang-cao')->where('display',1)->limit(6)->orderBy('stt','asc')->get();
                                $data_pro = DB::table("product_categories")->select()->where('menu',1)->where('display',1)->where('status',1)->orderBy('pos','asc')->get();
                                foreach($data_pro as $rows){
                                $data_pro2 = DB::table("product_categories")->select()->where('parent_id',$rows->id)->where('status',1)->orderBy('pos','asc')->get();    
                                if(count($data_pro2)>0){
                            ?>
                            
                            <ul id="serinfo-nav">
                                <a href="<?php if($rows->alias != null){?><?php echo e(asset($rows->alias.'.htm')); ?> <?php } else { ?><?php echo e(asset(changeTitle($rows->name.'.htm'))); ?> <?php } ?>" title="<?php echo $rows->name; ?>"><?php echo $rows->name; ?></a>
                            </ul>
                
                            <ul id="serinfo">
                                <?php foreach($data_pro2 as $rows2){
                                ?>
                                <li class="danhmuc-blog">
                                    <a href="<?php if($rows2->alias != null){?><?php echo e(asset($rows2->alias.'.htm')); ?> <?php } else { ?><?php echo e(asset(changeTitle($rows2->name.'.htm'))); ?> <?php } ?>" title="<?php echo $rows2->name; ?>"><?php echo $rows2->name; ?></a>
                                </li>
                               <?php } ?>
                            </ul>
                            <?php }} ?>

                            <div class="pic-sidebar">
                                <?php
                                    foreach($lienket_ads as $ads){
                                ?>
                                <a href="<?php echo $ads->link ;?>"><img src="<?php echo e(asset('upload/hinhanh/'.$ads->photo)); ?>"/></a>
                                <?php } ?>
                            </div>

                            <ul id="serinfo-nav">
                                Bài viết mới
                            </ul>

                            <ul id="serinfo">
                                <li id="serpane1" style="display: list-item;">
                                  <?php foreach($new_post as $rows){?>  
                                    <div class="tab-post item p-border">

                                        <a href="<?php if($rows->alias != null){?><?php echo e(asset($rows->alias.'.htm')); ?> <?php } else { ?><?php echo e(asset(changeTitle($rows->name.'.htm'))); ?> <?php } ?>" title="<?php echo $rows->name; ?>">
                                             <img width="150" height="150" src="<?php echo e(asset('upload/product/'.$rows->photo)); ?>" class="grayscale grayscale-fade wp-post-image" alt="">
                                        </a>


                                        <h4><a href="<?php if($rows->alias != null){?><?php echo e(asset($rows->alias.'.htm')); ?> <?php } else { ?><?php echo e(asset(changeTitle($rows->name.'.htm'))); ?> <?php } ?>" title="<?php echo $rows->name; ?>"><?php echo $rows->name; ?></a></h4>

                                        <p class="meta"></p>


                                        <p class="meta date tranz ">
                                            <?php echo $rows->created_at?></p>

                                    </div>
                                    <?php } ?>
                                </li>

                            </ul>

                        </div>
                        <div style="clear: both;"></div>
                    </div>

                    <div class="facebook-sidebar">

                        <!-- Facebook widget -->

                        <div class="footer-static-content">
                            <div class="fb-page fb_iframe_widget" data-href="<?php echo $setting->links1;?>" data-width="300" data-height="300" data-small-header="false" data-adapt-container-width="true" data-hide-cover="false" data-show-facepile="true" data-show-posts="false" fb-xfbml-state="rendered" fb-iframe-plugin-query="adapt_container_width=true&amp;app_id=263266547210244&amp;container_width=291&amp;height=300&amp;hide_cover=false&amp;href=https%3A%2F%2Fwww.facebook.com%2Fgco.vn%2F&amp;locale=en_US&amp;sdk=joey&amp;show_facepile=true&amp;show_posts=false&amp;small_header=false&amp;width=300"><span style="vertical-align: bottom; width: 291px; height: 214px;"><iframe name="f11f89b68148a88" width="300px" height="300px" frameborder="0" allowtransparency="true" allowfullscreen="true" scrolling="no" title="fb:page Facebook Social Plugin" src="https://www.facebook.com/v2.0/plugins/page.php?adapt_container_width=true&amp;app_id=263266547210244&amp;channel=https%3A%2F%2Fstaticxx.facebook.com%2Fconnect%2Fxd_arbiter%2Fr%2FNh1oH0K63yz.js%3Fversion%3D42%23cb%3Df2fb31f2b4d6b8%26domain%3Dtpl.gco.vn%26origin%3Dhttps%253A%252F%252Ftpl.gco.vn%252Ff35e0b5e71b2b7%26relation%3Dparent.parent&amp;container_width=291&amp;height=300&amp;hide_cover=false&amp;href=https%3A%2F%2Fwww.facebook.com%2Fgco.vn%2F&amp;locale=en_US&amp;sdk=joey&amp;show_facepile=true&amp;show_posts=false&amp;small_header=false&amp;width=300" style="border: none; visibility: visible; width: 291px; height: 214px;" class=""></iframe></span></div>
                        </div>
                        <div style="clear:both;">

                        </div>

                        <!-- #Facebook widget -->
                        <script>
                            (function (d, s, id) {
                                var js, fjs = d.getElementsByTagName(s)[0];
                                if (d.getElementById(id)) return;
                                js = d.createElement(s);
                                js.id = id;
                                js.src = "//connect.facebook.net/en_US/sdk.js#xfbml=1&appId=263266547210244&version=v2.0";
                                fjs.parentNode.insertBefore(js, fjs);
                            }(document, 'script', 'facebook-jssdk'));
                        </script>


                        <div class="clearfix"></div>

                    </div>