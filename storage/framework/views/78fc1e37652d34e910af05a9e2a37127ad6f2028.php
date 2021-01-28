   <section class="partner pd-60">

            <div class="container">

                <div class="partner-slider owl-carousel slider-general">
                    <?php
                        $doitac_h = DB::table("lienket")->select()->where('status',1)->where('com','doi-tac')->orderby('stt','asc')->get();
                        foreach($doitac_h as $rows){
                    ?>    
                     <a href="<?= $rows->link;?>"><img src="<?php echo e(asset('upload/hinhanh/'.$rows->photo)); ?>" alt="" title=""> </a>
                    <?php } ?>
                

                </div>

            </div>

        </section>