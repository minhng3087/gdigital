<?php $__env->startSection('title', $title); ?>

<?php $__env->startSection('keyword', $keyword); ?>

<?php $__env->startSection('description', $description); ?>

<?php $__env->startSection('content'); ?>
 <?php
    use App\ProductCate;
    use App\Products;
    
?>

<?php
    $setting = Cache::get('setting');
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
   $setting = Cache::get('setting');
?>
    <!-- view thi truong lao dong -->
    <div class="cd-main-content">
        <section class="breadcrumb">
            <div class="container">
                <ul class="flex-center-start">
                    <li><a href="<?php echo e(url('/')); ?>" title=""><i class="fa fa-home"></i> Trang chủ </a> </li>
                 
                    <li><span> <?php echo $video;?> </span> </li>
                </ul>
            </div>
        </section>
        <section class="video">
            <div class="container">
                <h1 class="title-cate">Video</h1>
                 <div class="row">
                    <?php
                    foreach($list_post as $item){
                      
                    ?>
                     <?php
                        $min=$item['link'];
                        $embedCode = "$min";
                        preg_match('/src="([^"]+)"/', $embedCode, $match);
                         
                        // Extract video url from embed code
                        $videoURL = $match[1];
                        $urlArr = explode("/",$videoURL);
                        $urlArrNum = count($urlArr);
                         
                        // YouTube video ID
                        $youtubeVideoId = $urlArr[$urlArrNum - 1];
                         
                        // Generate youtube thumbnail url
                        $thumbURL = 'http://img.youtube.com/vi/'.$youtubeVideoId.'/0.jpg';
                      
                      
                    ?>
                    <div class="col-md-4 mgt-20">
                        <div class="video-item relative">
                            <a href="<?php echo e(asset(changeTitle($item['name'.$duoi]).'.'.$item['id'].'.html')); ?>" title="<?php echo e($item['name'.$duoi]); ?>" class="effect">
                                <?php echo '<img src="'.$thumbURL.'"/>' ?>
                            </a>
                            <span class="video-abs absolute"><img src="<?php echo e(asset('public/images/icon/icon-video.png')); ?>" alt="" title=""> </span>
                        </div>
                    </div>
                    <?php } ?>
                </div>
                <div class="market-link no-radius"><?php echo $list_post->links();?> </div>
            </div>
        </section>      
  </div>      
    
        
        <?php echo $__env->make('templates.layout.doitac', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
<?php $__env->stopSection(); ?>

    
    
    
<?php echo $__env->make('index', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>