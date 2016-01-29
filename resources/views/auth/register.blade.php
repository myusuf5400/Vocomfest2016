@extends('layouts.auth')
@section('title', 'Register')
@section('content')
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
                        <li role="presentation" class="active">
                            <a href="#comp" aria-controls="comp" role="tab" data-toggle="tab">
                                Competitions
                            </a>
                        </li>
                        <li role="presentation">
                            <a href="#semnas" aria-controls="semnas" role="tab" data-toggle="tab">
                                Seminar Nasional
                            </a>
                        </li>
                    </ul>
                    <!-- Tab panes -->
                    <div class="tab-content">
                        <div role="tabpanel" class="tab-pane fade in active" id="comp">
                           <form class="form-horizontal" role="form" method="POST" action="{{ url('/register') }}">
                            {!! csrf_field() !!}
                                <div class="form-group mg-t-15">
                                    <div class="col-md-6">
                                        <input type="text" name="ketua" class="form-control reg-form" placeholder="Nama Ketua"/>
                                    </div>
                                    <div class="col-md-6">
                                        <input type="text" name="email" class="form-control reg-form" placeholder="Email Ketua"/>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <div class="col-md-6">
                                        <input type="text" name="user" class="form-control reg-form" placeholder="Username"/>
                                    </div>
                                    <div class="col-md-6">
                                        <input type="text" name="no" class="form-control reg-form" placeholder="Nomor HP"/>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <div class="col-md-6">
                                        <input type="text" name="pass" class="form-control reg-form" placeholder="Password"/>
                                    </div>
                                    <div class="col-md-6">
                                        <input type="text" name="re-pass" class="form-control reg-form" placeholder="Confirm Password"/>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <div class="col-md-6">
                                        <input type="radio" name="event" value="web" id="web" checked class="ev-cat"/>
                                        <label for="web">
                                            Web Design Competition
                                        </label>
                                    </div>
                                    <div class="col-md-6">
                                        <input type="radio" name="event" value="madc" id="madc" class="ev-cat"/>
                                        <label for="madc">
                                            Mobile Apps Development Competition
                                        </label>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <div class="col-md-6">
                                        <input type="text" name="tim" class="form-control reg-form" placeholder="Nama Tim"/>
                                    </div>
                                    <div class="col-md-6">
                                        <input type="text" name="asal" class="form-control reg-form" placeholder="Asal Instansi"/>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <div class="col-md-6">
                                        <input type="text" name="tim" class="form-control reg-form" placeholder="Nama Tim"/>
                                    </div>
                                    <div class="col-md-6">
                                        <input type="text" name="asal" class="form-control reg-form" placeholder="Asal Instansi"/>
                                    </div>
                                </div>
                                <h4>
                                    Member Team Data
                                </h4>
                                <div class="form-group" id="mem1">
                                    <div class="col-md-4">
                                        <input type="text" name="member1" class="form-control reg-form" placeholder="Nama Anggota"/>
                                    </div>
                                    <div class="col-md-4">
                                        <input type="email" name="member1_email" class="form-control reg-form" placeholder="Email Anggota"/>
                                    </div>
                                    <div class="col-md-4">
                                        <input type="number" name="member1_hp" class="form-control reg-form" placeholder="No HP Anggota"/>
                                    </div>
                                </div>
                                <div class="form-group" id="mem2">
                                    <div class="col-md-4">
                                        <input type="text" name="member2" class="form-control reg-form" placeholder="Nama Anggota"/>
                                    </div>
                                    <div class="col-md-4">
                                        <input type="email" name="member2_email" class="form-control reg-form" placeholder="Email Anggota"/>
                                    </div>
                                    <div class="col-md-4">
                                        <input type="number" name="member2_hp" class="form-control reg-form" placeholder="No HP Anggota"/>
                                    </div>
                                </div>
                                <div class="form-group" id="mem3">
                                    <div class="col-md-4">
                                        <input type="text" name="member3" class="form-control reg-form" placeholder="Nama Anggota"/>
                                    </div>
                                    <div class="col-md-4">
                                        <input type="email" name="member3_email" class="form-control reg-form" placeholder="Email Anggota"/>
                                    </div>
                                    <div class="col-md-4">
                                        <input type="number" name="member3_hp" class="form-control reg-form" placeholder="No HP Anggota"/>
                                    </div>
                                </div>
                                <!--
                                    <div class="form-group">
                                        <div class="col-md-12">
                                            <textarea class="form-control reg-text" name="desc_tim" placeholder="Deskripsi Tim">
                                            </textarea>
                                            <span id="helpBlock" class="help-block">
                                                Data yang perlu dimasukkan adalah Nama Anggota, No. HP Anggota, dan Email Anggota
                                            </span>
                                        </div>
                                    </div>
                                -->
                                <div class="form-group">
                                    <div class="col-md-3">
                                        <input type="submit" value="REGISTER" class="btn btn-success btn-reg"/>
                                    </div>
                                </div>
                            </form>
                        </div>
                        <div role="tabpanel" class="tab-pane fade" id="semnas">
                            <form role="form" class="form-horizontal">
                                <div class="form-group mg-t-15">
                                    <div class="col-md-6">
                                        <input type="text" name="nama" class="form-control reg-form" placeholder="Nama Lengkap"/>
                                    </div>
                                    <div class="col-md-6">
                                        <input type="text" name="email" class="form-control reg-form" placeholder="Alamat Email"/>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <div class="col-md-6">
                                        <div class="input-group">
                                            <div class="input-group-addon reg-form">
                                                (+62)
                                            </div>
                                            <input type="number" class="form-control reg-form" id="hp" name="hp" placeholder="Nomor HP"/>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <select class="form-control reg-form">
                                            <option>
                                                Mahasiswa
                                            </option>
                                            <option>
                                                Pelajar
                                            </option>
                                            <option>
                                                Umum
                                            </option>
                                        </select>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <div class="col-md-3">
                                        <input type="submit" value="REGISTER" class="btn btn-success btn-reg"/>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
                <aside class="col-md-3">
                    <div id="compete">
                        <blockquote>
                            <p class="small">
                                Mobile Apps Development
                            </p>
                            <p class="small">
                                <strong>
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
                                info@vocomfest.com
                            </p>
                        </blockquote>
                    </div>
                    <div id="seminar">
                        <blockquote>
                            <p class="small">
                                Seminar Nasional
                            </p>
                            <p class="small">
                                <strong>
                                    MBAYAR
                                </strong>
                                <br/>
                                Tunggu ya :*
                            </p>
                        </blockquote>
                    </div>
                </aside>
            </div>
        </div>
        <div class="col-md-12 pd-bt-10">
            <p class="text-center">
                Want to
                <a href="index.html">
                    back home?
                </a>
                Or you already have accout?
                <a href="login.html">
                    Login here.
                </a>
            </p>
        </div>
    </div>
    <!-- /container -->
   
    @endsection
