
<?php $__env->startSection('content'); ?>
<div class="container jumbotron my-2">
  <div class="box login-box">
    <form action="sign_up" method="post"> <?php echo csrf_field(); ?>
        <div class="form-group">
            <label for="exampleInputPassword1">Username</label>
            <input type="text" name="username" class="form-control" id="exampleInputPassword1" placeholder="Username">
        </div>
        <div class="form-group">
            <label for="exampleInputEmail1">Email address</label>
            <input type="email" name="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter email">
            <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>
        </div>
        <div class="form-group">
            <label for="exampleInputPassword1">Password</label>
            <input type="password" name="password" class="form-control" id="exampleInputPassword1" placeholder="Password">
        </div>
        <button type="submit" class="btn btn-primary">Submit</button>
    </form>
  </div>
</div>
<style>
.container {
    display: flex;
    justify-content: center;
}
.jumbotron {
    color: white;
    background-color: #2c3034;
}
.login-box{
    width: 55%;
}
</style>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layout/master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH P:\wamp\www\eCommerce\resources\views/sign_up.blade.php ENDPATH**/ ?>