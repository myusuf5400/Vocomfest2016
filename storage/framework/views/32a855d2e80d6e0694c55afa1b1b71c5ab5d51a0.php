<?php $__env->startSection('title', 'Dashboard Admin Vocomfest 2016'); ?>
<?php $__env->startSection('content'); ?>

<div id="page-wrapper" >
    <div id="page-inner">
        <div class="row">
            <div class="col-md-12">
                <h1 class="page-header">
                    Update Data Tim <?php echo e($data->
                    namateam); ?>

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
                                <form role="form" method="post" action="<?php echo e(url('/admin/team/update/')); ?>/<?php echo e($data->id); ?>">
                                    <div class="form-group">
                                        <label for="namaTeam">
                                            Nama
                                        </label>
                                        <input type="text" class="form-control" id="namaTeam" name="namateam" value="<?php echo e($data->namateam); ?>" placeholder="Nama Team">
                                    </div>
                                    <div class="form-group">
                                        <label for="kategori">
                                            Kategori
                                        </label>
                                        <div class="form-group">
                                            <div class="col-md-6">
                                                <input type="radio" name="kategori" value="0" id="wdc" <?php if($data->
                                                kategori==0): ?> checked <?php endif; ?> class="ev-cat"/>
                                                <label for="web">
                                                    Web Design Competition
                                                </label>
                                            </div>
                                            <div class="col-md-6">
                                                <input type="radio" name="kategori" value="1" id="madc" <?php if($data->
                                                kategori==1): ?> checked <?php endif; ?> class="ev-cat"/>
                                                <label for="madc">
                                                    Mobile Apps Development Competition
                                                </label>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label for="instansi">
                                            Institusi
                                        </label>
                                        <input type="text" class="form-control" id="instansi" value="<?php echo e($data->instansi); ?>" name="instansi" placeholder="Instansi">
                                    </div>
                                    <div class="form-group">
                                        <label for="instansi">
                                            Alamat Instansi
                                        </label>
                                        <input type="text" class="form-control" id="instansi" value="<?php echo e($data->alamatinstansi); ?>" name="alamatinstansi" placeholder="Alamat Instansi">
                                    </div>
                                    <div class="form-group">
                                        <label for="status">
                                            Status
                                        </label>
                                        <div class="form-group">
                                            <div class="col-md-6">
                                                <input type="radio" name="level" value="0" id="belum" <?php if($data->
                                                ketua->level==0): ?> checked <?php endif; ?> class="ev-cat"/>
                                                <label for="belum">
                                                    Belum teraktivasi
                                                </label>
                                            </div>
                                            <div class="col-md-6">
                                                <input type="radio" name="level" value="1" id="sudah" <?php if($data->
                                                ketua->level==1): ?> checked <?php endif; ?> class="ev-cat"/>
                                                <label for="sudah">
                                                    Teraktivasi
                                                </label>
                                            </div>
                                        </div>
                                    </div>
                                    <input type="hidden" value="<?php echo e(csrf_token()); ?>" name="_token" />
                                    <br/>
                                    <br/>
                                    <button type="submit" class="btn btn-default">
                                        Submit
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