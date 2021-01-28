<?php $__env->startSection('content'); ?>
<?php
    use App\Career;
    $career = new Career;

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
<?php 
    if(Auth::guard('customer')->check()){
        $user = DB::table('users')->select()->where('id',Auth::guard('customer')->user()->id)->get()->first();
    }else{
        $user = DB::table('users')->select()->where('id',Auth::guard('administrator')->user()->id)->get()->first();
    }
?>
<script type="text/javascript">
    function checkedProfile(id){
        hoi= confirm("Bạn có chắc chắn muốn chọn CV này?");
        if (hoi==true) 
            document.location = homeUrl()+"/chon-cv/"+id;
    }
    function RemoveCheckedProfile(id){
        var note = $('#note_cv').val();
        $.ajax({
             url: homeUrl()+'/huy-chon-cv/'+id,
             type: "GET",
             dataType: "html",
             data:{
                note:note,
            },
            success: function(res) {
                if(res =='success'){
                    $("#delete-choose").modal('hide');
                    toastr["success"]("Hủy chọn CV thành công.");
                    
                }else{
                    toastr["error"]("Hủy chọn CV thất bại.");
                }
                
                
            }
        });
    }
    function alertCheckedProfile(id){
        $.ajax({
             url: homeUrl()+'/alert-huy-chon-cv',
             type: "GET",
             dataType: "html",
             data:{
                id:id,
            },
            success: function(res) {
                $('#delete-choose .modal-body').html(res);
                
            }
        });
    }
    
</script>
<div class="cd-main-content">

    <section class="breadcrumb">

        <div class="container">

            <ul class="flex-center-start">

                <li><a href="<?php echo e(asset('')); ?>" title=""><i class="fa fa-home"></i> Trang chủ </a> </li>

                <li><span> Nhà tuyển dụng</span> </li>

            </ul>

        </div>

    </section>
    <section class="civil">

        <div class="container">

            <h1 class="title-cate mgb-20">Danh sách CV</h1>
            
            <div class="cv-filter">
                <form name="frm_search" method="get" action="<?php echo url('tim-kiem-cv'); ?>">
                <div class="row">
                    
                    <div class="col-md-6 flex-center-between find-cv">
                        
                        
                        <span>Tìm CV theo</span>
                        <select class="style-input" name="career">
                            <option value="">-- Ngành nghề --</option>

                            <?php $__currentLoopData = $career_search; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                            <option value="<?php echo e($item['id']); ?>"><?php echo e($career->getNameCareer($item['id'],$duoi)); ?></option>
                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

                        </select>
                        <div class="search">
                                <input type="text" name="txtSearch" placeholder="Tìm tên ứng viên">

                                <button type="submit"><i class="fa fa-search"></i> </button>

                        </div>
                        
                    </div>
                    
                    <!-- <div class="col-md-6 flex-center-end sort-cv">

                        <span>Sắp xếp CV theo</span>

                        <div class="group-checkbox">

                            <label>

                                <input type="radio" name="radi">

                                <span>Mới nhất</span>

                            </label>

                        </div>

                        <div class="group-checkbox">

                            <label>

                                <input type="radio" name="radi">

                                <span>Xem nhiều</span>

                            </label>

                        </div>

                    </div> -->
                    
                </div>
                </form>

            </div>

            <div class="cv-list">

                <div class="row">
                    <?php $__currentLoopData = $result_cv; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <?php $user_profile = DB::table('user_profile')->select()->where('user_id',Auth::guard('customer')->user()->id)->where('profile_id',$item['id'])->where('status',1)->first();?>
                    <div class="col-md-2">

                        <div class="cv-inner text-center">

                            <div class="cv-image-thumb"><img src="<?php echo e(asset('upload/hinhanh/'.$item['photo'])); ?>" alt="" onerror="this.src='<?php echo e(asset('public/images/cv-default.png')); ?>';"  > </div>

                            <p class="cv-name"><?php echo e($item['name']); ?></p>
                            <p><?php echo e($vitri); ?>: <?php echo e($career->getNameCareer($item['career'],$duoi)); ?></p>

                            <div class="cv-action">

                                
                                <?php if(!empty($user_profile)): ?>
                                    <a href="javascript:" class="text-danger" data-toggle="modal" data-target="#delete-choose" onclick="alertCheckedProfile(<?php echo e($item['id']); ?>)" title="">Hủy chọn</a>
                                <?php else: ?>
                                    <a href="javascript:" onclick="checkedProfile(<?php echo e($item['id']); ?>)" title=""><?php echo e($choncv); ?></a>
                                <?php endif; ?>

                               <a href="<?php echo e(asset('xem-cv/'.$item['id'])); ?>"  title=""><?php echo e($xemcv); ?></a>

                            </div>

                        </div>

                    </div>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

                </div>

            </div>

            <?php echo e($result_cv->links()); ?>


        </div>

    </section>
    <?php echo $__env->make('templates.layout.doitac', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>

</div>
<div class="modal fade" id="delete-choose" tabindex="-1" role="dialog" aria-hidden="true">

    <div class="modal-dialog" role="document">

        <div class="modal-content">

            <div class="modal-header">

                <h5 class="modal-title">Hủy chọn CV</h5>

                <button type="button" class="close" data-dismiss="modal" aria-label="Close">

                    <span aria-hidden="true">×</span>

                </button>

            </div>

            <div class="modal-body">

                

            </div>

        </div>

    </div>

</div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('index', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>