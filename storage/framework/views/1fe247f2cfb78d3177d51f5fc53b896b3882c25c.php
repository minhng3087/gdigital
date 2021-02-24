<div class="item">
    <div class="avarta">
        <a href="<?php echo e(route('home.single.product', $item->slug)); ?>"><img src="<?php echo e($item->image); ?>" class="img-fluid" width="100%" alt=""></a>
        <div class="abs">
            <ul class="list-inline text-center">
                <li class="list-inline-item"><a href="" data-toggle="modal" class="modal-product" data-target="#myModal"><img src="<?php echo e(__BASE_URL__); ?>/images/zoom.png" class="img-fluid" alt=""></a></li>
                <li class="list-inline-item"><a href=""><img src="<?php echo e(__BASE_URL__); ?>/images/vote.png" class="img-fluid" alt=""></a></li>
            </ul>
        </div>
    </div>
    <div class="info">
        <div class="cate"><?php echo e($item->Brand->name); ?></div>
        <h3><a href="<?php echo e(route('home.single.product', $item->slug)); ?>" class="robo-bold"><?php echo e($item->name); ?></a></h3>
        <div class="vote">
                <i class="fa fa-star"></i>
                <i class="fa fa-star"></i>
                <i class="fa fa-star"></i>
                <i class="fa fa-star"></i>
                <i class="fa fa-star-o"></i>
            </div>
        <div class="desc">
            <?php echo e($item->sort_desc); ?>

        </div>
        <div class="price"><?php echo e(number_format($item->regular_price,0, '.', '.')); ?>đ</div>
        <div class="btn-add"><a href="">Thêm vào giỏ hàng</a></div>
    </div>
</div><?php /**PATH C:\xampp\htdocs\m\resources\views/frontend/components/product-3.blade.php ENDPATH**/ ?>