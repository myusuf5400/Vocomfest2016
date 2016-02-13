<?php $__env->startSection('title', 'Dashboard Tim Vocomfest 2016'); ?>
<?php $__env->startSection('content'); ?>
<body>
	<div class="se-pre-con"></div>
	<?php echo $__env->make('user.nav', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
	<div class="container pd-bt-20 akun">
		<ol class="breadcrumb">
			<li><a href="<?php echo e(url('/')); ?>">Home</a></li>
			<li class="active"><?php echo e(Auth::user()->team->namateam); ?> Dashboard</li>
		</ol>
		<div class="row">
			<div class="col-md-12">
				<aside class="col-md-4 upload pd-bt-40">
					<p class="text-center big strong">Petunjuk Teknis Lomba WDC </p>
					<p class="text-center"><a href="#" class="btn btn-learn"><i class="icon-download"></i>&nbsp;<strong>DOWNLOAD</strong></a></p>
				</aside>
				<div class="col-md-8">
					<h3>Selamat datang, <?php echo e(Auth::user()->team->namateam); ?></h3>
					<p>Kamu telah terdaftar pada Web Design Competition (WDC). Ini adalah panduan lengkap dari kompetisi tersebut. Bacalah dengan teliti agar tim kamu dapat memenangkan kompetisi.
					<p>Dan jangan lupa upload file web kamu <a href="<?php echo e(url('/user/upload')); ?>">disini</a></p>
				</div>
			</div>
		</div>
	</div>
	<footer class="footer-bottom">
		<div class="copy">
			<div class="container">
				<div class="row">
					<div class="col-sm-12 pd-bt-5">
						<p class="text-center copyright">Vocomfest &copy; 2016. Built with love by Vocomfest Technical Support</p>	
					</div>
				</div>
			</div>
		</div>
	</footer>
</body>

<?php $__env->stopSection(); ?>

<?php $__env->startSection('stylesheet'); ?>
    <link rel="stylesheet" type="text/css" href="<?php echo e(url('assets/css/vocomfest.css')); ?>">
<?php $__env->stopSection(); ?>

<?php $__env->startSection('script'); ?>
    <script type="text/javascript" src="<?php echo e(url('assets/js/vocomfest.js')); ?>"></script>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>