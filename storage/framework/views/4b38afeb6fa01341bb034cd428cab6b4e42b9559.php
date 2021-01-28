<?php
    $setting = Cache::get('setting');
?>
  <header>

            <section class="header-top">

                <div class="container">

                    <div class="relative">

                        <div class="row">

                            <div class="col-md-4">

                                <div class="logo">
                                    <a href="<?php echo url('/'); ?>"  title="logo" class="logo-wrapper "><img  src="<?php echo e(asset('upload/hinhanh/'.$setting->photo)); ?>" alt="logo"/></a>
                                    <a id="cd-menu-trigger" href="javascript:void(0)" class=""><span class="cd-menu-icon"></span></a>

                                </div>

                            </div>

                            <div class="col-md-7 flex-center-start">

                                <h2 class="slogan"></h2>

                                <script type="text/javascript">

                                    $(document).ready(function() {

                                        $(".slogan").typedText(

                                            "<?php $setting->address?>"

                                            , "slow");

                                    });

                                </script>

                            </div>

                        </div>

                        <div class="search visible-desktop ">
                           <form class="flex-center-center" method="get" action="<?php echo url('tim-kiem'); ?>" role="search">
                                <input type="text" name="txtSearch" placeholder="Search">
                                <button type="submit"><i class="fa fa-search"></i> </button>
                           </form>

                        </div>

                    </div>

                </div>

            </section>

            <section class="header-nav visible-desktop">

                <div class="container">

                    <div class="relatives">

                        <div class="row">

                            <div class="col-md-6">

                                <ul class="flex-center-between parent-nav">

                                    <li class="active"><a href="<?php echo e(url('/')); ?>" title="Trang chủ">Trang chủ</a> </li>
                                    <?php 
                                        $data_pro = DB::table("product_categories")->select()->where('menu',1)->orderBy('pos','asc')->get();
                                        foreach($data_pro as $rows){
                                        $data_pro2 = DB::table("product_categories")->select()->where('parent_id',$rows->id)->orderBy('pos','asc')->limit(6)->get();    
                                    ?>
                                    <li class="has-child">

                                        <a href="<?php if($rows->alias != null){?><?php echo e(asset($rows->alias.'.htm')); ?> <?php } else { ?><?php echo e(asset(changeTitle($rows->name.'.htm'))); ?> <?php } ?>" title="<?php echo $rows->name; ?>"><?php echo $rows->name; ?></a>
                                        <?php if(count($data_pro2)>0){?>
                                        <div class="nav-child">

                                            <div class="container">
                                                <ul>
                                                    <?php foreach($data_pro2 as $row){?>
                                                        <li><a href="<?php if($row->alias != null){?><?php echo e(asset($row->alias.'.htm')); ?> <?php } else { ?><?php echo e(asset(changeTitle($row->name.'.htm'))); ?> <?php } ?>" title="<?php echo $row->name; ?>"><?php echo $row->name; ?></a></li>
                                                    <?php } ?>
                                                </ul>
                                            </div>

                                        </div>
                                       <?php } ?> 
                                    </li>
                                    <?php } ?>
                                    <li><a href="<?php echo e(url('lien-he')); ?>" title="Liên hệ">Liên hệ</a> </li>

                                </ul>

                            </div>

                        </div>

                    </div>

                </div>

            </section>

        </header>
<!------------------------------------->