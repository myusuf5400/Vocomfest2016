<?php $__env->startSection('title', 'Dashboard Admin Vocomfest 2016'); ?>
<?php $__env->startSection('content'); ?>
	<div id="page-wrapper" >
            <div id="page-inner">
			 <div class="row">
                    <div class="col-md-12">
                        <h1 class="page-header">
                            Tabel Peserta <small>Tabel Peserta</small>
                        </h1>
                    </div>
                </div>
                 <!-- /. ROW  -->
                <div class="row">
                    <div class="col-md-12">
                        <!-- Advanced Tables -->
                        <div class="panel panel-default">
                            <div class="panel-heading">
                                 Tabel Semnas
                            </div>
                            <?php if(session('status')): ?>
                            <div class="alert alert-warning alert-dismissable">
                              <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                              <strong>Well</strong> <?php echo e(session('status')); ?>

                            </div>
                            <?php endif; ?>
                            <div class="panel-body">
                                <div class="table-responsive">
                                    <table class="table table-striped table-bordered table-hover" id="dataTables-example">
                                        <thead>
                                            <tr>
                                                <th>No</th>
                                                <th>Nama Tim</th>
                                                <th>Nama Instansi</th>
                                                <th>Alamat Instansi</th>
                                                <th>Status Email</th>
                                                <th>Status Pembayaran</th>
                                                <th>Aksi</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <?php $i = 1?>
                                            <?php foreach($madc as $tim): ?>
                                            <tr class="odd gradeX">
                                                <td><?php echo e($i++); ?></td>
                                                <td><?php echo e($tim->namateam); ?></td>
                                                <td class="center"><?php echo e($tim->instansi); ?></td>
                                                <td class="center"><?php echo e($tim->alamatinstansi); ?></td>
                                                <td class="center">
                                                	<?php if($tim->ketua->first()['code']==1): ?>
                                                		Sudah terverifikasi
                                                	<?php else: ?>
                                                		Belum terverifivaksi
                                                	<?php endif; ?>
                                                </td>
                                                <td class="center">
                                                	<?php if($tim->ketua->first()['level']==1): ?>
                                                		Sudah bayar
                                                	<?php else: ?>
                                                		Belum belum
                                                	<?php endif; ?>
                                                </td>
                                                <td>
                                                    <form action="<?php echo e(url('admin/madc/'.$tim->id)); ?>" method="POST">
                                                        <?php echo e(csrf_field()); ?>

                                                        <?php echo e(method_field('DELETE')); ?>


                                                        <button>Delete Task</button>
                                                    </form>
                                                </td>
                                            </tr>
                                            <?php endforeach; ?>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <footer><p>All right reserved. Template by: <a href="http://webthemez.com">WebThemez</a></p></footer>
        </div>
    <!-- /. PAGE INNER  -->
    </div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.admin', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>