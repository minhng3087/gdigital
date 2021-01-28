<?php
    use App\ProductCate;
    use App\Products;
    
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
   
  if(empty($_SESSION['min'])){
     $page=$_SESSION['min'] = 1;
  }else{
    $page=$_SESSION['min'] += 1;
  }
  $page_cate=$page*12;
  
   @$catpro = ProductCate::select()->where('id',$_GET['area_id'])->first();
?>
 <?php
    @$list_post_parent=Products::select('name','name_eg','name_uae','name_tai','alias','id','mota','mota_eg','mota_uae','mota_tai','photo','created_at')->where('cate_id',$catpro['id'])->where('status',1)->limit($page_cate)->orderBy('id','desc')->get()->toArray();
    foreach($list_post_parent as $item){
   ?>
    <div class="col-md-3 mgt-20">
        <div class="news-item">
            <a href="<?php echo e(asset(changeTitle($item['name'.$duoi]).'.'.$item['id'].'.html')); ?>" title="<?php echo e($item['name'.$duoi]); ?>" class="zoom">
                <img src="<?php echo e(asset('upload/product/'.$item['photo'])); ?>" alt="<?php echo e($item['name'.$duoi]); ?>" />
            </a>
            <h5><a href="<?php echo e(asset(changeTitle($item['name'.$duoi]).'.'.$item['id'].'.html')); ?>" title="<?php echo e($item['name'.$duoi]); ?>" class="font-weight-bold"><?php echo e($item['name'.$duoi]); ?></a> </h5>
            <p class="upload">Upload: <?php echo e($item['created_at']); ?></p>
        </div>
    </div>
   <?php } ?> 
 <?php echo $_SESSION['min']; if(count($list_post_parent) >= $page_cate){?>
        <div class="f_click text-center market-link" data-id="<?php echo e($catpro['id']); ?>"><a style="color: #fff;cursor: pointer;" class="title-content">Xem thêm</a> </div>
    <?php } ?>