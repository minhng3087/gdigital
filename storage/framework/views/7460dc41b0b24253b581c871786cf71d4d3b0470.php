
<?php $__env->startSection('title', $title); ?>
<?php $__env->startSection('keyword', $keyword); ?>
<?php $__env->startSection('description', $description); ?>
<?php $__env->startSection('img_share', $img_share); ?>
<?php $__env->startSection('content'); ?>
<?php
   
    use App\Setting;  

     $setting = Setting::select()->where('id',1)->get()->first();

    if(@$_SESSION['lang'] == 'vi'){
       $duoi = '';  
       @include('lang/vi.php');
    }elseif(@$_SESSION['lang'] == 'eg'){
       $duoi = '_eg'; 
       @include('lang/eg.php');
    }elseif(@$_SESSION['lang'] == 'uae'){
       $duoi = '_uae';
       @include('lang/uae.php');
    }elseif(@$_SESSION['lang'] == 'tai'){
       $duoi = '_tai';
       @include('lang/tai.php');
    }elseif(@$_SESSION['lang'] == 'ja'){
       $duoi = '_ja';
       @include('lang/ja.php');
    }else{
       $duoi = ''; 
       @include('lang/vi.php');      
    }

?>

        <section class="breadcrumb">

            <div class="container">

                <ul class="flex-center-start">

                    <li><a href="" title=""><i class="fa fa-home"></i> <?= $home?> </a> </li>

                    <li><span><?= $lienhe?></span> </li>

                </ul>

            </div>

        </section>

        <section class="contact">

            <div class="container">

                <h1 class="title-cate"><?= $lienhe?></h1>

                <div class="row">

                    <div class="col-md-8">

                        <p class="border mg-20"></p>

                        <div class="company">

                            <?php echo $setting['content'.$duoi];?>

                        </div>

                         <form action="<?php echo e(url('lien-he')); ?>" method="POST" class="form-contact">

                           <input type="hidden" name="_token" value="<?php echo csrf_token(); ?>"/>
                            <input  readonly="" name="ngonngu" value="<?php echo $duoi;?>" type="hidden">
                            

                            <div class="row">

                                <div class="col-md-6">

                                    <label><?= $hoten?> <span>(*)</span></label>

                                    <input required="" name="name" type="text">

                                </div>

                                <div class="col-md-6">

                                    <label><?= $dienthoai?></label>

                                    <input required="" name="phone" type="text">

                                </div>

                                <div class="col-md-6">

                                    <label>Email <span>(*)</span></label>

                                    <input required="" name="email" type="text">

                                </div>

                                <div class="col-md-6">

                                    <label><?= $diachi?></label>

                                    <input name="address" type="text">

                                </div>

                                <div class="col-md-6">

                                    <label><?= $tieude?>:</label>

                                    <input name="title" type="text">

                                </div>

                                <div class="col-md-12">

                                    <label><?= $noidung?></label>

                                    <textarea name="content"></textarea>

                                </div>

                            </div>

                            <button type="submit"><?php echo $guilienhe;?></button>

                        </form>

                    </div>

                    <div class="col-md-4">

                        <div class="map">

                            <?php echo $setting['maps']?>

                        </div>

                    </div>

                </div>

            </div>

        </section>

<?php echo $__env->make('templates.layout.doitac', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>



<?php $__env->stopSection(); ?>




<?php echo $__env->make('index', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>