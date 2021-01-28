<?php
    use App\ProductCate;
  
     if(@$_SESSION['lang'] == 'vi'){
       $duoi = '';  
       @include('lang/vi.php');
    } elseif(@$_SESSION['lang'] == 'eg'){
       $duoi = '_eg'; 
       @include('lang/eg.php');
    } elseif(@$_SESSION['lang'] == 'uae'){
       $duoi = '_uae';
       @include('lang/uae.php');
    } elseif(@$_SESSION['lang'] == 'tai'){
       $duoi = '_tai';
       @include('lang/tai.php');
    }else{
       $duoi = ''; 
       @include('lang/vi.php');      
    }
   
?>
<!--------------------------------------------------------------->
  <footer>
        <section class="footer">
            <div class="company">
                <div class="container">
                    <div class="row">
                        <div class="col-md-8 flex-center">
                            <div class="logo-footer visible-desktop">
                             <a href="<?php echo url('/'); ?>">
                                <img  src="<?php echo e(asset('upload/hinhanh/'.$setting['photo3'])); ?>"/>
                            </a>
                            </div>
                            <div class="company-info">
                                <div class="flex-center">
                                    <span class="visible-mobile">
                                        <a href="<?php echo url('/'); ?>">
                                            <img  src="<?php echo e(asset('upload/hinhanh/'.$setting['photo3'])); ?>"/>
                                        </a>
                                    </span>
                                    
                                </div>
                                <?php echo $setting['content'.$duoi];?>
                            </div>
                        </div>
                        <div class="col-md-4 flex-center-end">
                            <div class="company-contact">
                                <div class="social text-right">
                                    <a href="<?php echo $setting['links1'];?>" title="facebook" class="fa fa-facebook inflex-center-center"></a>
                                    <a href="<?php echo $setting['links2'];?>" title="twitter" class="fa fa-twitter inflex-center-center"></a>
                                    <a href="<?php echo $setting['links3'];?>" title="youtube" class="fa fa-youtube inflex-center-center"></a>
                                    <a href="<?php echo $setting['links4'];?>" title="google" class="fa fa-google-plus inflex-center-center"></a>
                                </div>
                                <div class="hotline-footer flex-center-end">
                                    <img src="<?php echo e(asset('public/images/icon/icon-hotline.png')); ?>" alt="" title="">
                                    <a href="tel:<?php echo $setting['phone'];?>" title=""><?php echo $setting['phone'];?></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="copyright">
                <div class="container">
                    <div class="row">
                        <div class="col-md-9 flex-center">
                            <p><?php echo $setting['copyright'];?></p>
                        </div>
                        <div class="col-md-3">
                            <p class="text-right">
                                <span>Design by</span>
                                <a href="https://gco.vn/" title="Gco group"><img src="<?php echo e(asset('public/images/logo/logo-gco.png')); ?>" alt="gco"/></a>
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </footer>



<!---------------------------------------------------------------->
  <a href="#" id="back-to-top" title="Back to top" class="show">

        <i class="fa fa-angle-double-up"></i>

    </a>



    <!--Menu on mobile-->

    <nav id="cd-lateral-nav">

        <div class="search">

            <form class="flex-center-center" method="get" action="<?php echo url('tim-kiem'); ?>">    
                <input type="text" name="txtSearch" placeholder="<?php echo $tukhoa;?>">
                <input type="text" placeholder="Tìm ki?m">

                <button type="submit"><i class="fa fa-search"></i> </button>

            </form>

        </div>

         <ul class="cd-navigation nav-dropdown">

            <li><a href="<?php echo e(url('/')); ?>" title="<?= $home ?>"><?= $home?></a> </li>

            <li class="item-has-children">

                <a href="<?php echo e(url('gioi-thieu')); ?>" title="<?= $about ?>"><?= $about ?></a>

                <span class="arrow"><img src="<?php echo e(asset('public/images/icon/cd-arrow.svg')); ?>"/></span>

                <ul class="sub-menu">

                    <li><a href="<?php echo e(url('thu-vien-anh')); ?>" title=""><?= $thuvienanh ?></a> </li>

                </ul>

            </li>

             <?php 
                    $data_pro = ProductCate::select()->where('menu',1)->where('status',1)->get()->toArray();
                   
                    foreach($data_pro as $rows){
                        @$data_pro2 = ProductCate::select()->where('parent_id',$rows['id'])->where('status',1)->orderBy('pos','asc')->get()->toArray();
                   
               ?>
               <li class="item-has-children">

                    <a href="<?php echo e(asset($rows['alias'].'.htm')); ?>" title="<?php echo $rows['name'.$duoi]; ?>"><?php echo $rows['name'.$duoi]?></a>
                    <span class="arrow"><img src="<?php echo e(asset('public/images/icon/cd-arrow.svg')); ?>"/></span>
                    <?php if(count($data_pro2)>0){?>
                     <ul class="sub-menu">
                        <?php foreach($data_pro2 as $rows2){  ?>
                             <li><a href="<?php echo e(asset($rows2['alias'].'.htm')); ?>" title="<?php echo $rows2['name'.$duoi]?>"><?= $rows2['name'.$duoi]?></a></li>
                        <?php } ?> 
                    </ul>
                    <?php } ?>     
                </li>
               <?php } ?> 
                <li><a href="<?php echo e(url('video')); ?>" title="<?php echo $video;?>"><?php echo $video;?></a> </li>

                <li><a href="<?php echo e(url('lien-he')); ?>" title="<?php echo $lienhe?>"><?php echo $lienhe?></a> </li>

        </ul>

    </nav>
<!------------------>
<?php echo $setting['codechat']  ?>

<?php  echo $setting['analytics']  ?>

<!--Menu Maker-->
<script type="text/javascript">
 $(".f_click").click(function(){
      var cate_id=$(this).attr('data-id');
        $.ajax({
            url: 'view',
            type: 'get',
            dataType:"html",
            data: {area_id: cate_id},
            success: function (data){
                $("#view").html(data);
            }
        });
    }); 
</script>