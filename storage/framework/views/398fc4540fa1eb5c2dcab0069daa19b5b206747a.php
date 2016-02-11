<?php $__env->startSection('title', 'Akun'); ?>
<?php $__env->startSection('content'); ?>
	Nama Tim : <?php echo e($user->nama); ?><br/>
	Email ketua : <?php echo e($user->email); ?><br/>
	Email ketua : <?php echo e($user->institusi); ?><br/>
	Email ketua : <?php echo e($user->email); ?><br/>
	<?php echo e($user->team); ?>



<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>