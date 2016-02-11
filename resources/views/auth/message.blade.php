@extends('layouts.auth')
@section('title', 'Registrasi')
@section('content')

<body style="background : #F1F2F7;">
    <div class="se-pre-con">
    </div>
    <div class="container">
        <div class="row">
            <div class="col-md-4 col-md-offset-4 pd-bt-25">
                <img src="{{url('assets/img/logo.png')}}" class="logo-big" alt="Vocomfest 2016" title="Vocomfest 2016"/>
            </div>
            <div class="col-md-12" style="background : #fff ; border-radius : 3px ; padding-top : 15px ;">
                <blockquote class="message">
                    <p>
                        Selamat
                    </p>
                    <p>
                        {{session('message')}}
                    </p>
                    <p>
                        Terima Kasih
                    </p>
                </blockquote>
            </div>
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
    <!-- /container -->
    @endsection
