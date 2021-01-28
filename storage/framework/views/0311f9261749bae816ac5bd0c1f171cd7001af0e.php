   <?php
	$doitac=DB::table("lienket")->select('photo','name','link')->where('status',1)->where('com','doi-tac')->orderBy('stt','asc')->limit(12)->get();
    ?>
      <section class="parten pd-60">

                <div class="container">

                    <h2 class="title-index text-uppercase">Đối tác khách hàng</h2>

                    <ul class="flex-center-between">
                        <?php foreach($doitac as $dt){?>
                        <li class="wow fadeInUp" data-wow-delay="0.4s">

                            <a href="<?php echo e($dt->link); ?>" title="<?php echo e($dt->name); ?>"><img src="<?php echo e(asset('upload/hinhanh/'.$dt->photo)); ?>" alt="<?php echo e($dt->name); ?>" /> </a>

                        </li>
                        <?php } ?>

                    </ul>

                </div>

            </section>