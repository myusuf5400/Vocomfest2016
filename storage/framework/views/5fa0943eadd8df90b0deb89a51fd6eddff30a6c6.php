<?php $__env->startSection('title', 'Dashboard Admin Vocomfest 2016'); ?>
<?php $__env->startSection('content'); ?>

<div id="page-wrapper" >
    <div id="page-inner">
        <div class="row">
            <div class="col-md-12">
                <h1 class="page-header">
                    Update Data <?php echo e($data->
                    nama); ?>

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
                        <?php foreach($errors->
                        all() as $error): ?>
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
                                <form role="form" method="post" action="<?php echo e(url('/admin/anggota/update/')); ?>">
                                    <input type="hidden" name="id" value="<?php echo e($data->id); ?>">
                                    <div class="form-group">
                                        <label for="nama" required>
                                            Nama
                                        </label>
                                        <input type="text" class="form-control" id="nama" name="nama" value="<?php echo e($data->nama); ?>" placeholder="Nama Anggota" required>
                                    </div>
                                    <div class="form-group">
                                        <label for="email">
                                            Email
                                        </label>
                                        <input type="text" class="form-control" id="email" name="email" value="<?php echo e($data->email); ?>" placeholder="Email Anggota" required>
                                    </div>
                                    <div class="form-group">
                                        <label for="notelp">
                                            Nomer Telepon
                                        </label>
                                        <div class="input-group">
                                        <div class="input-group-addon reg-form">
                                                (+62)
                                            </div>
                                        <input type="text" class="form-control" id="notelp" name="notelp" placeholder="No Telepon Anggota" value="<?php echo e(substr($data->notelp,2)); ?>" required>
                                        </div>
                                    </div>
                                    <input type="hidden" value="<?php echo e(csrf_token()); ?>" name="_token" />
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
</div
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.admin', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>