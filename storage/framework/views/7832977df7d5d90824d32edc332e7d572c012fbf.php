
<?php $__env->startSection('content'); ?>
<div class="container my-2">
    <div class="row">
        <div class="col" style="text-align:left">
            <h2>Cart Item</h2>
        </div>
        <div class="col" style="text-align:right">
            <button class="btn btn-success order-now" onclick="location.href='order_now';">Owder Now</button>
        </div>    
    </div>
</div>
<?php $__currentLoopData = $products; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $product): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
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
            <button class="btn btn-dark remove-to-cart" onclick="location.href='removetocart/<?php echo e($product->cart_id); ?>';">Remove to cart</button>
        </div>
    </div>
</div>
<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layout/master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH P:\wamp\www\eCommerce\resources\views/cartitem.blade.php ENDPATH**/ ?>