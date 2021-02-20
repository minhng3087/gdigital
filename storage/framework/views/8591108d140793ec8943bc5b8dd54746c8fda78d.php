
<div class="modal-body">
    <button type="button" class="close" data-dismiss="modal">&times;</button>
    <div class="preview">
        <div class="row">
            <div class="col-md-6 col-sm-6">
                <div class="slide-thumbs">
                    <div class="avarta" style="border: 1px solid #ddd;"><img class="" src="<?php echo e(@$product->image); ?>" class="img-fluid" width="100%" alt="<?php echo e(@$product->name); ?>"></div>
                </div>
            </div>
            <div class="col-md-6 col-sm-6">
                <div class="info-prev">
                    <div class="cate">
                        <h1><?php echo e(@$product->name); ?> </h1>
                        <div class="vote">
                            <i class="fa fa-star"></i>
                            <i class="fa fa-star"></i>
                            <i class="fa fa-star"></i>
                            <i class="fa fa-star"></i>
                            <i class="fa fa-star-o"></i>
                        </div>	
                        <div class="price"><?php echo e(number_format($product->regular_price,0, '.', '.')); ?>đ</div>
                        <div class="desc">
                            <?php echo e(@$product->sort_desc); ?>

                        </div>
                        <div class="quantity-add">
                            <ul class="list-inline">
                                <li class="list-inline-item">
                                    <div class="quantity">
                                        <span class="mont">Số lượng:</span>
                                        <div class="number-spinner">
                                            <input type="text" class="pl-ns-value" value="10" maxlength="5">
                                        </div>
                                    </div>
                                </li>
                                <li class="list-inline-item">
                                    <div class="add-cart"><a href="">Thêm vào giỏ hàng</a></div>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<?php /**PATH C:\xampp\htdocs\m\resources\views/frontend/components/modal-product.blade.php ENDPATH**/ ?>