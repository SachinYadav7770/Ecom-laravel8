
<?php $__env->startSection('content'); ?>

<div class="container my-4">
    <div class="row">
        <div class="clo-lg-4 fixed">
            <div class="product-left-col">
                <img src="<?php echo e($product->gallery); ?>" class="detail-product-img" alt="<?php echo e($product->name); ?>">
            </div>
        </div> 
        <div class="clo-lg-8 scrollit">
            <div class="product-right-col">
                <div class="product-name">
                <span class="product-name-span"><?php echo e($product->name); ?></span> <span class="product-category"><sub><?php echo e($product->category); ?></sub></span>
                </div>
                <div class="product-description">
                <h4><?php echo e($product->description); ?></h4>
                </div>
                <div class="product-price">
                <span class="cur-sign">&#8377;</span>
                <span class="price"><?php echo e($product->price); ?></span>
                <span class="price-ex">/-</span>
                </div>
                <span>
                <form action="/eCommerce/addtocart" method="post" style="display: inline;"> <?php echo csrf_field(); ?>
                <input type="hidden" name="product_id" value="<?php echo e($product->id); ?>">
                <input  class="btn btn-primary add-to-card" type="submit" value="Add to card" name="add_to_card">
                </form>
                </span>
                <span>
                <form action="/eCommerce/buynow" method="post" style="display: inline;"> <?php echo csrf_field(); ?>
                <input type="hidden" name="product_id" value="<?php echo e($product->id); ?>">
                <input  class="btn btn-primary buy-now" type="submit" value="Buy Now" name="buy_now">
                </form>
                </span>
            </div>
        </div> 
    </div>
</div>

<style>
.product-left-col .detail-product-img{
    max-height: 420px;
    max-width: 700px;
}
</style>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layout/master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH P:\wamp\www\eCommerce\resources\views/detail.blade.php ENDPATH**/ ?>