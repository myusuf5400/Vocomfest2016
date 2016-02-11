<?php $__env->startSection('title', 'Seminar Nasional'); ?>
<?php $__env->startSection('content'); ?>
<div class="se-pre-con"></div>
<div class="container">
	<img src="<?php echo e(url('assets/img/web_semnas.jpg')); ?>" width="100%">
</div> <!-- /container -->
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>