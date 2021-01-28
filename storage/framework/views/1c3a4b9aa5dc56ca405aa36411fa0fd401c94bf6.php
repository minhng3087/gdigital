<?php $__env->startSection('content'); ?>





<style type="text/css">

#signup-box {

    width: 320px;

    margin: 0 auto;

    background: #fcfcfc;

    border-radius: 3px;

    margin-top: 40px;

    border: 1px solid #e1e1e1;

    padding: 0 15px;

}

@media  only screen and (min-width: 768px)

{

#signup-box {

    width: 480px;

    padding: 0 30px;

    padding-bottom: 30px;

}

}

@media  only screen and (min-width: 480px)

{

#signup-box {

    width: 400px;

    padding: 0 30px;

    padding-bottom: 30px;

}

}











</style>





<div class="container">

    <div id="signup-box">

        <ul style="text-align: center;padding: 50px;">

            <?php echo $__env->make('backend.messages_error', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>

         </ul>   

    </div><!--  end sign-up-box -->

</div>



<?php $__env->stopSection(); ?>




<?php echo $__env->make('layerpass', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>