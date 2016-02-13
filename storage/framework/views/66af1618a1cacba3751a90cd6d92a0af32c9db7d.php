<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
      <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Free Bootstrap Admin Template : Dream</title>
	<!-- Bootstrap Styles-->
    <link href="<?php echo e(url('assets/css/bootstrap.css')); ?>" rel="stylesheet" />
     <!-- FontAwesome Styles-->
    <link href="<?php echo e(url('assets/css/font-awesome.css')); ?>" rel="stylesheet" />
     <!-- Morris Chart Styles-->
   
        <!-- Custom Styles-->
    <link href="<?php echo e(url('assets/css/custom-styles.css')); ?>" rel="stylesheet" />
     <!-- Google Fonts-->
   <link href='http://fonts.googleapis.com/css?family=Open+Sans' rel='stylesheet' type='text/css' />
     <!-- TABLE STYLES-->
    <link href="<?php echo e(url('assets/js/dataTables/dataTables.bootstrap.css')); ?>" rel="stylesheet" />
</head>
<body>
    <div id="wrapper">
        <?php echo $__env->make('admin.navtop', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
        <!--/. NAV TOP  -->
        <?php echo $__env->make('admin.navside', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
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
                                                <th>status</th>
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
                                                <td class="center"><?php echo e($apa->status); ?></td>
                                                <td>
                                                <a href="<?php echo e(url('/admin/table/semnas/delete')); ?>/<?php echo e($apa->id); ?>">
                                                    <button class="btn btn-xs btn-danger">
                                                        <span class="glyphicon glyphicon-trash"></span>
                                                    </button>
                                                </a>
                                                <a href="<?php echo e(url('/admin/table/semnas/edit')); ?>/<?php echo e($apa->id); ?>">
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
                        <div class="panel panel-default">
                            <div class="panel-heading">
                                 Tabel Team
                            </div>
                            <div class="panel-body">
                                <div class="table-responsive">
                                    <?php $i=1;?>
                                    <table class="table table-bordered table-hover">
                                        <thead>
                                            <tr>
                                                <th>No</th>
                                                <th>nama team</th>
                                                <th>Kategori</th>
                                                <th>Institusi</th>
                                            </tr>
                                        </thead>
                                    <?php if(count($data3) > 0 ): ?>
                                    <?php foreach($data3 as $apa3): ?>
                                       <tr data-toggle="modal" data-target="#myModal<?php echo e($apa3->id); ?>">
                                            <td><?php echo e($i); ?></td><?php $i++ ?>
                                            <td><?php echo e($apa3->namateam); ?></td>
                                            <?php if($apa3->kategori == 0): ?>
                                            <td>WDC</td>
                                            <?php else: ?>
                                            <td>MADC</td>
                                            <?php endif; ?>
                                            <td><?php echo e($apa3->institusi); ?></td>
                                        </tr>   
                                    <?php endforeach; ?>
                                    <?php endif; ?>
                                    </table>
                                </div>
                            </div>
                        </div>
                        <!--End Advanced Tables -->
                    </div>
                </div>
            </div>
            <footer><p>All right reserved. Template by: <a href="http://webthemez.com">WebThemez</a></p></footer>
        </div>
    <!-- /. PAGE INNER  -->
    </div>
    <!-- /. PAGE WRAPPER  -->
    

    <!-- modal -->
    <?php foreach($data3 as $apa3): ?>
        <!-- Modal -->
        <div class="modal fade" id="myModal<?php echo e($apa3->id); ?>" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
          <div class="modal-dialog modal-lg">
            <div class="modal-content">
              <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                <h4 class="modal-title" id="myModalLabel">Data kelompok <?php echo e($apa3->namateam); ?></h4>
              </div>
              <div class="modal-body">
                    <table class="table table-bordered">
                        <thead>
                            <tr>
                                <th>No</th>
                                <th>Nama</th>
                                <th>No telp</th>
                                <th>Email</th>
                                <th>Aksi</th>
                            </tr>
                        </thead>
                        <?php $j=1; ?>
                        <?php foreach($data2 as $apa2): ?>
                        <?php if($apa3->id == $apa2->idteam): ?>
                        <tr>
                            <td>
                                <?php echo e($j); ?> <?php $j++ ?>
                            </td>
                            <td>
                                <?php if($apa2->code != null): ?>
                                <b><?php echo e($apa2->nama); ?></b>
                                <?php else: ?>
                                <?php echo e($apa2->nama); ?>

                                <?php endif; ?>
                            </td>
                            <td>
                                <?php echo e($apa2->notelp); ?>

                            </td>
                            <td>
                                <?php echo e($apa2->email); ?>

                            </td>
                            <td>
                                <a onclick="warning(<?php echo e($apa2->nama); ?>)" href="<?php echo e(url('/admin/table/users/delete')); ?>/<?php echo e($apa2->id); ?>">
                                    <button class="btn btn-xs btn-danger">
                                        <span class="glyphicon glyphicon-trash"></span>
                                    </button>
                                </a>
                                <a href="<?php echo e(url('/admin/table/users/edit')); ?>/<?php echo e($apa2->id); ?>">
                                    <button class="btn btn-xs btn-warning">
                                        <span class="glyphicon glyphicon-pencil"></span>
                                    </button>
                                </a>
                            </td>
                        </tr>
                        <?php endif; ?>
                        <?php endforeach; ?>
                    </table>
              </div>
              <div class="modal-footer">
                <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                <a href="<?php echo e(url('/admin/table/teams/edit/')); ?>/<?php echo e($apa3->id); ?>"><button type="button" class="btn btn-primary">Edit</button></a>
              </div>
            </div>
          </div>
        </div>
        <?php endforeach; ?>

    <!-- jQuery Js -->
    <script src="<?php echo e(url('assets/js/jquery-1.10.2.js')); ?>"></script>
      <!-- Bootstrap Js -->
    <script src="<?php echo e(url('assets/js/bootstrap.min.js')); ?>"></script>
    <!-- Metis Menu Js -->
    <script src="<?php echo e(url('assets/js/jquery.metisMenu.js')); ?>"></script>
     <!-- DATA TABLE SCRIPTS -->
    <script src="<?php echo e(url('assets/js/dataTables/jquery.dataTables.js')); ?>"></script>
    <script src="<?php echo e(url('assets/js/dataTables/dataTables.bootstrap.js')); ?>"></script>
        <script>
            $(document).ready(function () {
                $('#dataTables-example').dataTable();
            });
    </script>
         <!-- Custom Js -->
    <script src="<?php echo e(url('assets/js/custom-scripts.js')); ?>"></script>
    <script type="text/javascript">
    function warning(nama) {
        var alert = 'Apakah anda yakin untuk menghapus data denga nama '+nama+' ?';
        alert(alert);
    }
    </script>
   
</body>
</html>
