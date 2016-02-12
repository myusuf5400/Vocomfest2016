<?php $__env->startSection('title', 'Registrasi'); ?>
<?php $__env->startSection('content'); ?>
<body style="background : #F1F2F7;">
    <div class="se-pre-con">
    </div>
    <div class="container">
        <div class="row">
            <div class="col-md-4 col-md-offset-4 pd-bt-25">
                <img src="assets/img/logo.png" class="logo-big" alt="Vocomfest 2016" title="Vocomfest 2016"/>
            </div>
            <div class="col-md-12" style="background : #fff ; border-radius : 3px ; padding-top : 15px ;">
                <div class="col-md-9" id="tab-event">
                    <!-- Nav tabs -->
                    <ul class="nav nav-tabs" role="tablist">
                        <li role="presentation" <?php if(count($errors->semnas) == 0): ?> class="active" <?php endif; ?>>
                            <a href="#comp" aria-controls="comp" role="tab" data-toggle="tab">
                                Competitions
                            </a>
                        </li>
                        <li role="presentation"  <?php if(count($errors->semnas) > 0): ?> class="active" <?php endif; ?>>
                            <a href="#semnas" aria-controls="semnas" role="tab" data-toggle="tab">
                                Seminar Nasional
                            </a>
                        </li>
                    </ul>
                    <!-- Tab panes -->
                    <div class="tab-content">
                        <div role="tabpanel" class="tab-pane fade <?php if(count($errors->semnas) == 0): ?> in active <?php endif; ?>" id="comp">
                           <?php if(count($errors) > 0): ?>
                                <br/>
                                <div class="alert alert-danger">
                                    <ul>
                                        <?php foreach($errors->all() as $error): ?>
                                            <li><?php echo e($error); ?></li>
                                        <?php endforeach; ?>
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
                            
                            <form class="form-horizontal" role="form" method="POST" action="<?php echo e(url('/register')); ?>">
                                <?php echo csrf_field(); ?>

                                <div class="form-group mg-t-15">
                                    <div class="col-md-6">
                                        <input type="text" name="namateam" class="form-control reg-form" placeholder="Nama Tim" value="<?php echo e(old('namateam')); ?>" required/>
                                    </div>
                                    <div class="col-md-6">
                                        <input type="email" name="emailketua" class="form-control reg-form" placeholder="Email Ketua" value="<?php echo e(old('emailketua')); ?>" required/>
                                    </div>
                                </div>
                                    <div class="form-group">
                                    <div class="col-md-6">
                                        <input type="password" name="password" class="form-control reg-form" placeholder="Password" required/>
                                    </div>
                                    <div class="col-md-6">
                                        <input type="password" name="password_confirmation" class="form-control reg-form" placeholder="Ketik Ulang Password" required/>
                                    </div>
                                </div>
                                <div class="form-group">
									<div class="col-md-6">
                                        <input type="text" name="instansi" class="form-control reg-form" placeholder="Asal Instansi" value="<?php echo e(old('instansi')); ?>" required/>
                                    </div>
                                    <div class="col-md-6">
                                        <input type="text" name="alamatinstansi" class="form-control reg-form" placeholder="Alamat Instansi" value="<?php echo e(old('alamatinstansi')); ?>" required/>
                                    </div>
                                </div>
                            
                                <div class="form-group">
                                    <div class="col-md-6">
                                        <input type="radio" name="kategori" value="0" id="wdc" <?php if(old('kategori')==0): ?> checked <?php endif; ?> class="ev-cat">
                                        <label for="web">
                                            Web Design Competition
                                        </label>
                                    </div>
                                    <div class="col-md-6">
                                        <input type="radio" name="kategori" value="1" id="madc" <?php if(old('kategori')==1): ?> checked <?php endif; ?> class="ev-cat">
                                        <label for="madc">
                                            Mobile Apps Development Competition
                                        </label>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <div class="col-md-6">
                                        <input type="text" name="namaketua" class="form-control reg-form" placeholder="Nama Ketua" value="<?php echo e(old('namaketua')); ?>" required/>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="input-group">
                                            <div class="input-group-addon reg-form">
                                                (+62)
                                            </div>
                                            <input type="number" class="form-control reg-form" id="hp" name="notelp" placeholder="Nomer Handphone" value="<?php echo e(old('notelp')); ?>" required/>
                                        </div>
                                    </div>
                                </div>
                                <h4>
                                    Member Team Data
                                </h4>
                                <div class="form-group" id="mem1">
                                    <div class="col-md-4">
                                        <input type="text" name="anggota[0][nama]" class="form-control reg-form" placeholder="Nama Anggota" value="<?php echo e(old('anggota.0.nama')); ?>"/>
                                    </div>
                                    <div class="col-md-4">
                                        <input type="email" name="anggota[0][email]" class="form-control reg-form" placeholder="Email Anggota" value="<?php echo e(old('anggota.0.email')); ?>"/>
                                    </div>
                                    <div class="col-md-4">
                                        <div class="input-group">
                                            <div class="input-group-addon reg-form">
                                                (+62)
                                            </div>
                                            <input type="number" class="form-control reg-form" id="hp" name="anggota[0][notelp]" placeholder="Nomer Handphone" value="<?php echo e(old('anggota.0.notelp')); ?>"/>
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group" id="mem2">
                                    <div class="col-md-4">
                                        <input type="text" name="anggota[1][nama]" class="form-control reg-form" placeholder="Nama Anggota" value="<?php echo e(old('anggota.1.nama')); ?>"/>
                                    </div>
                                    <div class="col-md-4">
                                        <input type="email" name="anggota[1][email]" class="form-control reg-form" placeholder="Email Anggota" value="<?php echo e(old('anggota.1.email')); ?>"/>
                                    </div>
                                    <div class="col-md-4">
                                        <div class="input-group">
                                            <div class="input-group-addon reg-form">
                                                (+62)
                                            </div>
                                            <input type="number" class="form-control reg-form" id="hp" name="anggota[1][notelp]" placeholder="Nomer Handphone" value="<?php echo e(old('anggota.1.notelp')); ?>"/>
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group" id="mem3">
                                    <div class="col-md-4">
                                        <input type="text" name="anggota.2.nama" class="form-control reg-form" placeholder="Nama Anggota" value="<?php echo e(old('anggota[2][nama]')); ?>"/>
                                    </div>
                                    <div class="col-md-4">
                                        <input type="email" name="anggota.2.email" class="form-control reg-form" placeholder="Email Anggota" value="<?php echo e(old('anggota[2][email]')); ?>"/>
                                    </div>
                                    <div class="col-md-4">
                                        <div class="input-group">
                                            <div class="input-group-addon reg-form">
                                                (+62)
                                            </div>
                                            <input type="number" class="form-control reg-form" id="hp" name="anggota[2][notelp]" placeholder="Nomer Handphone" value="<?php echo e(old('anggota.2.notelp')); ?>"/>
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <div class="col-md-3">
                                        <input type="submit" value="REGISTER" class="btn btn-success btn-reg"/>
                                    </div>
                                </div>
                            </form>
                        </div>
                        <div role="tabpanel" class="tab-pane fade <?php if(count($errors->semnas) > 0): ?> in active <?php endif; ?>" id="semnas">
                            <img src="<?php echo e(url('assets/img/web_semnas.jpg')); ?>" class="img-responsive coming-semnas">
                        </div>
                    </div>
                </div>
                <aside class="col-md-3 strong">
                    <div id="compete">
                        <blockquote>
                            <p class="small">
                                Mobile Apps Development Competition
                            </p>
                            <p class="small">
                                <strong class="vr">
                                    FREE
                                </strong>
                                <br/>
                                Untuk Mahasiswa S1/D4/D3/D2/D1
                                <br/>
                                Max. 4 orang
                            </p>
                        </blockquote>
                        <blockquote>
                            <p class="small">
                                Web Design
                            </p>
                            <p class="small">
                                <strong>
                                    75.000/tim
                                </strong>
                                <br/>
                                Untuk Siswa SLTA
                                <br/>
                                Max. 3 orang
                            </p>
                        </blockquote>
                        <blockquote>
                            <p class="small">
                                Bukti pembayaran, kirim ke :
                                <br/>
                                <em>madc@vocomfest.com</em>
                            </p>
                        </blockquote>
                    </div>
                </aside>
            </div>
        </div>
        <div class="col-md-12 pd-bt-10">
            <p class="text-center">
                Want to
                <a href="<?php echo e(url('/')); ?>">
                    back home?
                </a>
                Or you already have accout?
                <a href="<?php echo e(url('/login')); ?>">
                    Login here.
                </a>
            </p>
        </div>
    </div>
    <!-- /container -->
    <?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.auth', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>