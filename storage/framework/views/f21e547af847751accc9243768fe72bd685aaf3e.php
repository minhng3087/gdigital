<?php

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
<p class="cv-of">
  <img src="<?php echo e(asset('public/images/plus/i-star-v.png')); ?>" alt="" title="">
  <span class="font-weight-bold"> <?php echo e($profile->name); ?></span><?php if($career->getNameCareer($profile->career,$duoi)): ?>   -   <?php echo e($career->getNameCareer($profile->career,$duoi)); ?> <?php endif; ?></p>

<p>Lý do hủy</p>

<textarea name="note_cv" id="note_cv"></textarea>

<button onclick="RemoveCheckedProfile(<?php echo e($user_profile->id); ?>)" class="btn-delete">HỦY CV</button>