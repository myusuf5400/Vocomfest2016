@extends('layouts.app')
@section('title', 'Seminar Nasional')
@section('content')
<body>
    <div class="se-pre-con">
    </div>
    <header>
        <nav id="main-nav" class="navbar navbar-default def-style">
            @include('navbar')
        </nav>
    </header>
    <div class="container event-details">
        <div class="col-md-1">
        </div>
        <div class="col-md-10">
            <img src="{{url('assets/img/web_semnas.jpg')}}" class="img-responsive coming-semnas-details"/>
        </div>
    </div>
    <footer class="footer-bottom">
        <div class="copy">
            <div class="container">
                <div class="row">
                    <div class="col-sm-12 pd-bt-5">
                        <p class="text-center copyright">
                            Vocomfest &copy; 2016. Built with love by Vocomfest Technical Support
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </footer>
    @endsection
    @section('script')
    <!-- JS Here -->
    <script type="text/javascript" src="{{url('assets/js/vocomfest.js')}}">
    </script>
    @endsection
    @section('stylesheet')
    <!-- CSS Here -->
    <link rel="stylesheet" type="text/css" href="{{url('assets/css/vocomfest.css')}}"/>
    @endsection
