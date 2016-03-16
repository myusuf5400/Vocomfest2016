<?php $__env->startSection('title', 'Dashboard Admin Vocomfest 2016'); ?>
<?php $__env->startSection('content'); ?>

<div id="page-wrapper" >
    <div id="page-inner">
        <div class="row">
            <div class="col-md-12">
                <h1 class="page-header">
                    Update Data Peserta Semnas
                    <small>
                        Edit data
                    </small>
                </h1>
            </div>
        </div>
        <!-- /. ROW -->
        <div class="row">
            <div class="col-lg-12">
                <div class="panel panel-default">
                    <div class="panel-heading">
                        Form Edit
                    </div>
                    <div class="panel-body">
                        <?php if(session('status')): ?>
                        <div class="alert alert-success alert-dismissable">
                            <button type="button" class="close" data-dismiss="alert" aria-hidden="true">
                                &times;
                            </button>
                            <strong>
                                Success
                            </strong>
                            <?php echo e(session('status')); ?>

                        </div>
                        <?php endif; ?>
                        <?php foreach($errors->all() as $error): ?>
                        <div class="alert alert-warning alert-dismissable">
                            <button type="button" class="close" data-dismiss="alert" aria-hidden="true">
                                &times;
                            </button>
                            <strong>
                                Whops
                            </strong>
                            <?php echo e($error); ?>

                        </div>
                        <?php endforeach; ?>
                        <div class="row">
                            <div class="col-lg-8 col-lg-offset-2">
                                <form role="form" method="post" action="<?php echo e(url('/admin/semnas/edit/')); ?>">
                                    <input type="hidden" name="id" value="<?php echo e($data->id); ?>">
                                    <div class="form-group">
                                        <label >
                                            Nama
                                        </label>
                                        <input type="text" class="form-control" name="nama" value="<?php echo e($data->nama); ?>" placeholder="Nama">
                                    </div>
                                    <div class="form-group">
                                        <label>
                                            Kategori
                                        </label>
                                        <input type="text" class="form-control" value="<?php if($data->kategori==0): ?> Mahasiswa <?php elseif($data->kategori==1): ?> Pelajar <?php else: ?> Umum <?php endif; ?>" name="kategori" placeholder="Kategori">
                                    </div>
                                    <div class="form-group">
                                        <label >
                                            Status
                                        </label>
                                        <div class="form-group">
                                            <div class="col-md-6">
                                                <input type="radio" name="status" value="0" <?php if($data->
                                                status==0): ?> checked <?php endif; ?> class="ev-cat"/>
                                                <label>
                                                    Belum Teraktivasi
                                                </label>
                                            </div>
                                            <div class="col-md-6">
                                                <input type="radio" name="status" value="1"  <?php if($data->
                                                status==1): ?> checked <?php endif; ?> class="ev-cat"/>
                                                <label >
                                                    Sudah Teraktivasi
                                                </label>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label>
                                            Nomor Telp.
                                        </label>
                                        <input type="text" class="form-control" value="<?php echo e($data->notelp); ?>" name="notelp" placeholder="Nomor Telp.">
                                    </div>
                                    <div class="form-group">
                                        <label >
                                            Email
                                        </label>
                                        <input type="text" class="form-control" value="<?php echo e($data->email); ?>" name="email" placeholder="Email">
                                    </div>
                                    <input type="hidden" value="<?php echo e(csrf_token()); ?>" name="_token" />
                                    <br/>
                                    <br/>
                                    <button type="submit" class="btn btn-default">
                                        Update
                                    </button>
                                </form>
                            </div>
                        </div>
                        <!-- /.row (nested) -->
                    </div>
                    <!-- /.panel-body -->
                </div>
                <!-- /.panel -->
            </div>
            <!-- /.col-lg-12 -->
        </div>
        <footer>
            <p>
                All right reserved. Template by:
                <a href="http://webthemez.com">
                    WebThemez
                </a>
            </p>
        </footer>
    </div>
    <!-- /. PAGE INNER -->
</div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.admin', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>