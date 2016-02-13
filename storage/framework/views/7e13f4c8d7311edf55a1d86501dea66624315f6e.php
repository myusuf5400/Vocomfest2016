<?php $__env->startSection('title', 'Seminar Nasional'); ?>
<?php $__env->startSection('content'); ?>
<body>
    <div class="se-pre-con">
    </div>
    <header>
        <nav id="main-nav" class="navbar navbar-default def-style">
            <?php echo $__env->make('navbar', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
        </nav>
    </header>
    <div class="container event-details">
        <div class="col-md-1">
        </div>
        <div class="col-md-10">
            <img src="<?php echo e(url('assets/img/web_semnas.jpg')); ?>" class="img-responsive coming-semnas-details"/>
        </div>
    </div>
    <footer class="footer-bottom">
        <div class="copy">
            <div class="container">
                <div class="row">
                    <div class="col-sm-12 pd-bt-5">
                        <p class="text-center copyright">
                            Vocomfest &copy; 2016. Built with love by Vocomfest Technical Support
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </footer>
    <?php $__env->stopSection(); ?>
    <?php $__env->startSection('script'); ?>
    <!-- JS Here -->
    <script type="text/javascript" src="<?php echo e(url('assets/js/vocomfest.js')); ?>">
    </script>
    <?php $__env->stopSection(); ?>
    <?php $__env->startSection('stylesheet'); ?>
    <!-- CSS Here -->
    <link rel="stylesheet" type="text/css" href="<?php echo e(url('assets/css/vocomfest.css')); ?>"/>
    <?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>