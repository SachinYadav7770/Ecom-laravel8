
<?php $__env->startSection('content'); ?>
<div class="container my-2">
    <div class="row">
        <div class="col" style="text-align:left">
            <h2>Cart Items</h2>
        </div>
        <div class="col" style="text-align:right">
            <button class="btn btn-success order-now" onclick="location.href='order_now';">Owder Now</button>
        </div>    
    </div>
</div>
<?php $__currentLoopData = $myorder; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $product): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
<div class="container my-2">
    <div class="row item-box">
        <div class="col-sm-4">
            <div class="product-left-col">
                <img src="<?php echo e($product->gallery); ?>" class="product-img" alt="<?php echo e($product->name); ?>">
            </div>
        </div>
        <div class="col-sm-4">
            <div class="product-name">
                <span class="product-name-span"><?php echo e($product->name); ?></span> <span class="product-category"><sub><?php echo e($product->category); ?></sub></span>
            </div>
            <div class="product-description">
                <h4><?php echo e($product->description); ?></h4>
            </div>
        </div>
        <div class="col-sm-4">
            <div class="product-price">
                <span class="cur-sign">&#8377;</span>
                <span class="price"><?php echo e($product->price); ?></span>
                <span class="price-ex">/-</span>
            </div>
        </div>
    </div>
</div>
<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
<style>
.product-price , .product-name{
    font-weight: 600;
}
.cur-sign , .product-name-span{
    font-size: xx-large;
}
.price , .product-category{
    font-size: larger;
}
.product-left-col .product-img{
    max-height: 420px;
    max-width: 146px;
}
.scrollit {
        margin-left:30px;
        max-width: 35%;
}
.item-box{
    border: 1px solid rgba(0,0,0,.15);
    padding: 25px;
}
</style>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layout/master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH P:\wamp\www\eCommerce\resources\views/myorder.blade.php ENDPATH**/ ?>