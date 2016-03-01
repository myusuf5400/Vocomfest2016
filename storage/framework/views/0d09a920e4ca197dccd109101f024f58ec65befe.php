<?php $__env->startSection('title', 'Dashboard Admin Vocomfest 2016'); ?>
<?php $__env->startSection('content'); ?>
	<div id="page-wrapper" >
            <div id="page-inner">
			 <div class="row">
                    <div class="col-md-12">
                        <h1 class="page-header">
                            Tabel Anggota Tim <?php echo e($data->first()->team['namateam']); ?> <small>
                            <?php if($data->first()->team['kategori']==0): ?>
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
                                            <th>Nama</th>
                                                <th>Email</th>
                                                <th>Nomer Telepon</th>
                                                <th>Posisi</th>
                                                <th>Aksi</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <?php $i = 1?>
                                            <?php foreach($data->reverse() as $anggota): ?>
                                            <tr class="odd gradeX">
                                                <td><?php echo e($i++); ?></td>
                                                <td><?php echo e($anggota->nama); ?></td>
                                                <td><?php echo e($anggota->email); ?></td>
                                                <td><?php echo e($anggota->notelp); ?></td>
                                                <td>
                                                <?php if($anggota->code==null): ?>
                                                    Anggota
                                                <?php else: ?>
                                                    Ketua
                                                <?php endif; ?>
                                                </td>
                                                <td>
                                                    <a href="<?php echo e(url('/admin/delete/').'/'.$anggota->id); ?>">Delete</a>
                                                    <a href="<?php echo e(url('/admin/teams/edit/').'/'.$anggota->id); ?>">Edit</a>
                                                    <a href="<?php echo e(url('/admin/madc/anggota/').'/'.$anggota->id); ?>">Detail</a>
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