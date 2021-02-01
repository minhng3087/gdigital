 <script type="text/javascript">

    $(document).ready(function(){

      $("#key").keyup(function(b){

          inputString = $(this).val();

          if(inputString.trim() !=''){

            $(".autocomplete").show();

            $(".autocomplete").load("backend/catespecification/type-product?key="+encodeURIComponent(inputString));

          }else  {

            $(".autocomplete").hide();

            count_select=0;

          }

      

      });

   

    });

    /*********/

    $(document).ready(function(){

      $("#keyspec").keyup(function(b){

          inputString = $(this).val();

          if(inputString.trim() !=''){

            $(".autocomplete_specification").show();

            $(".autocomplete_specification").load("backend/specification/type-specification?keyspec="+encodeURIComponent(inputString));

          }else  {

            $(".autocomplete_specification").hide();

            count_select=0;

          }

      

      });

   

    });

</script>



<footer class="main-footer">



	<div class="pull-right hidden-xs">



	  <b> mail:nguyengiaminh2k@gmail.com</b>



	</div>



	<strong>Thiết kế web bởi <a>NguyenMinh</a>.</strong> Bản quyền thuộc <?php echo e(url('/')); ?>.



</footer>



