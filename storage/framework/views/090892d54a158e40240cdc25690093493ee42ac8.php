<?php $__env->startSection('content'); ?>

<?php $__env->startSection('controller','Tag'); ?>

<?php $__env->startSection('action','List'); ?>

 
<script type="text/javascript">

  $(document).ready(function() {

    $("#chonhet").click(function(){

      var status=this.checked;

      $("input[name='chon']").each(function(){this.checked=status;})

    });

    

    $("#xoahet").click(function(){

      var listid="";

      $("input[name='chon']").each(function(){

        if (this.checked) listid = listid+","+this.value;

        })

      listid=listid.substr(1);   //alert(listid);

      if (listid=="") { alert("Bạn chưa chọn mục nào"); return false;}

      hoi= confirm("Bạn có chắc chắn muốn xóa?");

      if (hoi==true) document.location = homeUrl()+"/backend/tag/"+listid+"/deleteList";

    });

  });

</script>





<!-- Main content -->

<section class="content">

  <div class="row">

    <div class="col-xs-12">

      <div class="box">
        <?php echo $__env->make('backend.messages_error', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
        <div class="box-body">
           <table id="example1" class="table table-bordered table-striped"> 
                <thead>
                  <tr>
                    <th style="width: 20px;"><input type="checkbox" name="chonhet" class="minimal" id="chonhet" /></th>
                    <th class="text-center with_dieuhuong">Stt</th>
                    <th>Tiêu đề</th>
                    <th class="text-center with_dieuhuong">Sửa</th>
                   
                  </tr>
                </thead>
                <tbody>

                       <?php $__currentLoopData = $tags; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $i=>$item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    
                          <tr>
                          <td><input type="checkbox" name="chon" id="chon" value="<?php echo e($item->id); ?>" class="chon" /></td>
                            <td><?php echo $i; ?></td>
                            <td><?php echo $item->name; ?></td>
                             <td>
                             <a href="<?php echo URL::route('backend.tag.edit','id='.$item->id); ?>"> <i class="fa fa-pencil" aria-hidden="true"></i> Sửa </a>
                             </td>
                          
                          </tr>
                      <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

            </tbody>

          </table>

         <?php echo e($tags->links()); ?>


        </div><!-- /.box-body -->

        <div class="box-footer col-md-12">

          <div class="row">

            <div class="col-md-6">

              <button type="button" id="xoahet" class="btn btn-success">Xóa hết</button>

              <input type="button" value="Thoát" onclick="javascript:window.location='backend'" class="btn btn-danger" />



            </div>

          </div>

        </div>

      </div><!-- /.box -->

    </div><!-- /.col -->

  </div><!-- /.row -->

</section><!-- /.content -->

<?php $__env->stopSection(); ?>


<?php echo $__env->make('backend.master', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>