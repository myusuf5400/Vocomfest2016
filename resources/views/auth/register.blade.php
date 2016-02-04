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
                           @if (count($errors) > 0)
                                <div class="alert alert-danger">
                                    <ul>
                                        @foreach ($errors->all() as $error)
                                            <li>{{ $error }}</li>
                                        @endforeach
                                    </ul>
                                </div>
                            @endif
                            <form class="form-horizontal" role="form" method="POST" action="{{ url('/register') }}">
                                {!! csrf_field() !!}
                                <div class="form-group mg-t-15">
                                    <div class="col-md-6">
                                        <input type="text" name="namaketua" class="form-control reg-form" placeholder="Nama Ketua" required/>
                                    </div>
                                    <div class="col-md-6">
                                        <input type="email" name="emailketua" class="form-control reg-form" placeholder="Email Ketua" required/>
                                    </div>
                                </div>
                                <div class="form-group">
									<div class="col-md-6">
										<input type="text" name="username" class="form-control reg-form" placeholder="Username" required/>
									</div>
                                    <div class="col-md-6">
                                        <div class="input-group">
                                            <div class="input-group-addon reg-form">
                                                (+62)
                                            </div>
                                            <input type="number" class="form-control reg-form" id="hp" name="notelp" placeholder="Nomor HP" required/>
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <div class="col-md-6">
                                        <input type="password" name="password" class="form-control reg-form" placeholder="Password" required/>
                                    </div>
                                    <div class="col-md-6">
                                        <input type="password" name="password_confirmation" class="form-control reg-form" placeholder="Confirm Password" required/>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <div class="col-md-6">
                                        <input type="radio" name="kategori" value="0" id="kategori" checked class="ev-cat">
                                        <label for="web">
                                            Web Design Competition
                                        </label>
                                    </div>
                                    <div class="col-md-6">
                                        <input type="radio" name="kategori" value="1" id="kategori" class="ev-cat">
                                        <label for="madc">
                                            Mobile Apps Development Competition
                                        </label>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <div class="col-md-6">
                                        <input type="text" name="namateam" class="form-control reg-form" placeholder="Nama Tim" required/>
                                    </div>
                                    <div class="col-md-6">
                                        <input type="text" name="institusi" class="form-control reg-form" placeholder="Asal Instansi" required/>
                                    </div>
                                </div>
                                <h4>
                                    Member Team Data
                                </h4>
                                <div class="form-group" id="mem1">
                                    <div class="col-md-4">
                                        <input type="text" name="anggota[0][nama]" class="form-control reg-form" placeholder="Nama Anggota"/>
                                    </div>
                                    <div class="col-md-4">
                                        <input type="email" name="anggota[0][email]" class="form-control reg-form" placeholder="Email Anggota"/>
                                    </div>
                                    <div class="col-md-4">
                                        <div class="input-group">
                                            <div class="input-group-addon reg-form">
                                                (+62)
                                            </div>
                                            <input type="number" class="form-control reg-form" id="hp" name="anggota[0][notelp]" placeholder="Nomor HP"/>
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group" id="mem2">
                                    <div class="col-md-4">
                                        <input type="text" name="anggota[1][nama]" class="form-control reg-form" placeholder="Nama Anggota"/>
                                    </div>
                                    <div class="col-md-4">
                                        <input type="email" name="anggota[1][email]" class="form-control reg-form" placeholder="Email Anggota"/>
                                    </div>
                                    <div class="col-md-4">
                                        <div class="input-group">
                                            <div class="input-group-addon reg-form">
                                                (+62)
                                            </div>
                                            <input type="number" class="form-control reg-form" id="hp" name="anggota[1][notelp]" placeholder="Nomor HP"/>
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group" id="mem3">
                                    <div class="col-md-4">
                                        <input type="text" name="anggota[2][nama]" class="form-control reg-form" placeholder="Nama Anggota"/>
                                    </div>
                                    <div class="col-md-4">
                                        <input type="email" name="anggota[2][email]" class="form-control reg-form" placeholder="Email Anggota"/>
                                    </div>
                                    <div class="col-md-4">
                                        <div class="input-group">
                                            <div class="input-group-addon reg-form">
                                                (+62)
                                            </div>
                                            <input type="number" class="form-control reg-form" id="hp" name="anggota[2][notelp]" placeholder="Nomor HP"/>
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
                        <div role="tabpanel" class="tab-pane fade" id="semnas">
							@if (count($errors) > 0)
								<div class="alert alert-danger">
									<ul>
										@foreach ($errors->all() as $error)
											<li>{{ $error }}</li>
										@endforeach
									</ul>
								</div>
							@endif
                            <form role="form" class="form-horizontal">
                                <div class="form-group mg-t-15">
                                    <div class="col-md-6">
                                        <input type="text" name="nama" class="form-control reg-form" placeholder="Nama Lengkap"/>
                                    </div>
                                    <div class="col-md-6">
                                        <input type="email" name="email" class="form-control reg-form" placeholder="Alamat Email"/>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <div class="col-md-6">
                                        <div class="input-group">
                                            <div class="input-group-addon reg-form">
                                                (+62)
                                            </div>
                                            <input type="number" class="form-control reg-form" id="hp" name="notelp" placeholder="Nomor HP"/>
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
                                <em>info@vocomfest.com</em>
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
                <a href="{{url('/')}}">
                    back home?
                </a>
                Or you already have accout?
                <a href="{{url('/login')}}">
                    Login here.
                </a>
            </p>
        </div>
    </div>
    <!-- /container -->
    @endsection
