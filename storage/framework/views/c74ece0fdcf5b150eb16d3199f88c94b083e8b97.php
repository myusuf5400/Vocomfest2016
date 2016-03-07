<?php $__env->startSection('title', 'Dashboard Admin Vocomfest 2016'); ?>
<?php $__env->startSection('content'); ?>
	<div id="page-wrapper" >
            <div id="page-inner">
			 <div class="row">
                    <div class="col-md-12">
                        <h1 class="page-header">
                            Tabel Detail Tim <?php echo e($anggotas->first()->team['namateam']); ?> <small>
                            <?php if($anggotas->first()->team['kategori']==0): ?>
                                <?php $tipe = 'wdc';?>
                                WDC
                            <?php else: ?>
                                <?php $tipe = 'madc';?>
                                MADC
                            <?php endif; ?>
                            </small>
                        </h1>
                    </div>
                </div>
                 <!-- /. ROW  -->
                <?php echo $__env->make('admin.tableAnggota', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
                <?php echo $__env->make('admin.tableFile', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
            </div>
            <footer><p>All right reserved. Template by: <a href="http://webthemez.com">WebThemez</a></p></footer>
        </div>
    <!-- /. PAGE INNER  -->
    </div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.admin', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>