<?php $__env->startSection('content'); ?>
     <!-- /. NAV SIDE  -->
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
                                                <th>Nama</th>
                                                <th>Nomor Telp.</th>
                                                <th>Email</th>
                                                <th>Kategori</th>
                                                <th>Tanggal Buat</th>
                                                <th>Status</th>
                                                <th>Aksi</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <?php $i=1; ?>
                                            <?php foreach($data as $apa): ?>
                                            <tr class="odd gradeX">
                                                <td><?php echo e($i); ?> <?php $i++ ?></td>
                                                <td><?php echo e($apa->nama); ?></td>
                                                <td><?php echo e($apa->notelp); ?></td>
                                                <td class="center"><?php echo e($apa->email); ?></td>
                                                <td class="center">
                                                    <?php if($apa->kategori == 0): ?>
                                                        Mahasiswa
                                                    <?php elseif($apa->kategori == 1): ?>
                                                        Pelajar
                                                    <?php else: ?>
                                                        Umum
                                                    <?php endif; ?>
                                                </td>
                                                <td>
                                                    <?php
                                                        for ($i=0; $i < 10 ; $i++) { 
                                                            echo $apa->created_at[$i];    
                                                        }
                                                    ?>
                                                </td>
                                                <?php if($apa->status): ?>
                                                    <td class="text-center alert-success">
                                                          <span class="glyphicon glyphicon-ok-sign" aria-hidden="true"></span>
                                                    </td>
                                                <?php else: ?>
                                                    <td class="text-center alert-danger">
                                                          <span class="glyphicon glyphicon-info-sign" aria-hidden="true"></span>
                                                    </td>
                                                <?php endif; ?>
                                                <td>
                                                <a href="<?php echo e(url('/admin/semnas/delete')); ?>/<?php echo e($apa->id); ?>">
                                                    <button class="btn btn-xs btn-danger">
                                                        <span class="glyphicon glyphicon-trash"></span>
                                                    </button>
                                                </a>
                                                <a href="<?php echo e(url('/admin/semnas/edit')); ?>/<?php echo e($apa->id); ?>">
                                                    <button class="btn btn-xs btn-warning">
                                                        <span class="glyphicon glyphicon-pencil"></span>
                                                    </button>
                                                </a>
                                                </td>
                                            </tr>
                                            <?php endforeach; ?>
                                            
                                        </tbody>
                                    </table>
                                </div>
                                
                            </div>
                        </div>
                        <!--End Advanced Tables -->
                    </div>
                </div>
            </div>
        </div>
    <!-- /. PAGE INNER  -->
<?php $__env->stopSection(); ?>
       


<?php echo $__env->make('layouts.admin', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>