<div class="row">
    <div class="col-md-12">
        <!-- Advanced Tables -->
        <div class="panel panel-default">
            <div class="panel-heading">
                Tabel Anggota
                <?php if($showNew): ?>
                <div class="btn-new">
                    <a href="<?php echo e(url('admin/anggota/new/'.$anggotas->first()->team['id'])); ?>">
                        <button class="btn btn-success">
                            New
                        </button>
                    </a>
                    </div>
                <?php endif; ?>
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
                            <?php foreach($anggotas as $anggota): ?>
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
                                    <?php echo $__env->make('admin.actionAnggota', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
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