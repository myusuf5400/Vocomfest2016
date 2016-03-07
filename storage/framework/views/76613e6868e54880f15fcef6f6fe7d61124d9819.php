<?php $__env->startSection('title', 'Login'); ?>
<?php $__env->startSection('content'); ?>
<body class="login">
    <div class="se-pre-con">
    </div>
    <div class="container">
        <form class="form-signin" role="form" method="POST" action="<?php echo e(url('/login')); ?>">
            <?php echo csrf_field(); ?>

            <input type="text" name="code" value="0" style="visibility:hidden"/>
            <div class="form-signin-heading" style="text-align:center;">
                <img src="assets/img/logo.png" class="logo-big"/>
            </div>
            <?php if(session('error')): ?>
                                    <br/>
                                    <div class="alert alert-danger">
                                        <ul>
                                            <li><?php echo session('error'); ?></li> 
                                        </ul>
                                    </div>
                                <?php endif; ?>
            <?php if(count($errors) > 0): ?>
                <div class="alert alert-danger">
                    <ul>
                        <?php foreach($errors->all() as $error): ?>
                            <li><?php echo e($error); ?></li>
                        <?php endforeach; ?>
                    </ul>
                </div>
            <?php endif; ?>
            <h4 class="form-signin-heading">
                Login to Vocomfest
            </h4>
            <label for="inputEmail" class="sr-only">
                Email
            </label>
            <input type="text" name="email" id="inputEmail" class="form-control" placeholder="Email Ketua" required autofocus value="<?php echo e(old('email')); ?>" />
            <label for="inputPassword" class="sr-only">
                Password
            </label>
            <input type="password" name="password" id="inputPassword" class="form-control" placeholder="Password" required/>
            <label for="inputPassword" class="sr-only">
                Category
            </label>
            <div class="checkbox">
                <label>
                    <input type="checkbox" name="remember" <?php if(old('remember')): ?> checked <?php endif; ?> />
                    Remember me
                </label>
            </div>
            <button class="btn btn-lg btn-success btn-block btn-login" type="submit">
                LOG IN
            </button>
            <p class="text-center">
                Forgot password?
                <a href="<?php echo e(url('/password/reset')); ?>">
                    Click here!
                </a>
            </p>
            <p class="text-center">
                Don't have account?
                <a href="<?php echo e(url('/register')); ?>">
                    Register!
                </a>
                or
                <a href="<?php echo e(url('/')); ?>">
                    back to home?
                </a>
            </p>
        </form>
    </div>
    <?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.auth', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>