<?php $__env->startSection('title', 'Dashboard Tim Vocomfest 2016'); ?>
<?php $__env->startSection('content'); ?>
<body>
	<div class="se-pre-con"></div>
	<?php echo $__env->make('user.nav', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
	<div class="container pd-bt-20 akun">
		<ol class="breadcrumb">
			<li><a href="<?php echo e(url('/')); ?>">Home</a></li>
			<li><a href="<?php echo e(url('/user')); ?>"><?php echo e(Auth::user()->team->namateam); ?> Dashboard</a></li>
			<li class="active">Upload Proposal</li>
		</ol>
		<div class="row">
			<div class="col-md-12" id="upload">
				<h3 class="text-center separator">
                    UPLOAD PROPOSAL
                </h3>
                <hr class="bord greeny"/>
                <div class="container">
				<div class="col-md-6" style="padding-top : 70px ;">
					<div class="container-message">
						<?php if(session('error')): ?>
	                    <br/>
	                    <div class="alert alert-danger">
	                        <ul>
	                            <li><?php echo e(session('error')); ?></li> 
	                        </ul>
	                    </div>
	                <?php endif; ?>
	                <?php if(session('message')): ?>
	                    <br/>
	                    <div class="alert alert-success">
	                        <ul>
	                            <li><?php echo e(session('message')); ?></li> 
	                        </ul>
	                    </div>
	                <?php endif; ?>
					</div>
					<?php echo $transloadit; ?>

						<div class="form-group">
							<div class="col-md-10 col-md-offset-1">
								<input type="file" name="upload" class="form-control" style="border-radius : 0 ; box-shadow : 0px ;" required>
							</div>
							<input type="text" value="<?php echo e($server); ?>" name="server" style="display:none">
							<input type="text" value="2" name="tipe" style="display:none">
						</div>
						<div class="form-group">
							<div class="col-md-10 col-md-offset-1">
								<input type="submit" value="UPLOAD" class="btn btn-learn"/>
							</div>
						</div>
					</form>
				</div>
				<div class="col-md-6">
					<blockquote class="ketentuan">
						<p class="big">
							<h3 class="strong">Ketentuan Upload File</h3>
							<ol>
								<li>Format file adalah .pdf</li>
								<li>Format nama file adalah Nama_tim(spasi)Nama_aplikasi</li>
								<li>Batas upload file proposal adalah 17 Maret 2016 pukul 21.00 WIB.</li>
							</ol>
						</p>
					</blockquote>
				</div>
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