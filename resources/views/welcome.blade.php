@extends('layouts.app')
@section('title', 'Vocomfest 2016')
@section('content')
<body>
    <div class="se-pre-con">
    </div>
    <header class="header" id="home">
        <div class="cover-overlay">
            @include('navbar')
            <div class="container capti">
                <div id="owl-example" class="owl-carousel">
                    <div>
                        <div class="caption-box">
                            <div class="caption pd-bt-10 pd-lr-30 pull-right">
                                <h1>
                                    WELCOME TO VOCOMFEST!
                                </h1>
                            </div>
                        </div>
                        <div class="caption-box">
                            <div class="subcap pd-bt-5 pd-lr-10 pull-right">
                                <h3>
                                    Vocational Computer Festival 2016
                                </h3>
                            </div>
                        </div>
                    </div>
                    <div>
                        <div class="caption-box">
                            <div class="caption pd-bt-10 pd-lr-30 pull-right">
                                <h1>
                                    Our Biggest Event This Year!
                                </h1>
                            </div>
                        </div>
                        <div class="caption-box">
                            <div class="subcap pd-bt-5 pd-lr-10 pull-right">
                                <h3>
                                    Presented by Himakomsi UGM
                                </h3>
                            </div>
                        </div>
                    </div>
                    <div>
                        <div class="caption-box">
                            <div class="caption pd-bt-10 pd-lr-30 pull-right">
                                <h1>
                                    Make a Great Experience!
                                </h1>
                            </div>
                        </div>
                        <div class="caption-box">
                            <div class="subcap pd-bt-5 pd-lr-10 pull-right">
                                <h3>
                                    National Seminar And Competitions
                                </h3>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </header>
    @include('about')
    @include('events')
    @include('timeline')
    @include('testimoni')
    @include('sponsor')
    <footer>
        @include('contact')
        <div class="copy wow animated fadeInUp">
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
    @section('stylesheet')
        <link rel="stylesheet" type="text/css" href="{{url('assets/css/vocomfest.css')}}">
    @endsection

    @section('script')
        <script type="text/javascript" src="{{url('assets/js/vocomfest.js')}}"></script>
        <script type="text/javascript">
    // change style of navbar
    $(window).scroll(function(){
        if($(document).scrollTop() > 300){
            $("nav").addClass("def-style navbar-fixed-top animated slideInDown") ;
        }else{
            $("nav").removeClass("def-style navbar-fixed-top animated slideInDown") ;
        }
    }) ;

    new WOW().init() ;

    // smothen when scroll
    $(function() {
      $('a[href*=#]:not([href=#])').click(function() {
        if (location.pathname.replace(/^\//,'') == this.pathname.replace(/^\//,'') && location.hostname == this.hostname) {
          var target = $(this.hash);
          target = target.length ? target : $('[name=' + this.hash.slice(1) +']');
          if (target.length) {
            $('html,body').animate({
              scrollTop: target.offset().top
            }, 1000);
            return false;
          }
        }
      });
    });

    $(document).ready(function(){
        // nice scroll
        $("html").niceScroll({
            cursorcolor : 'rgba(0,0,0,0.5)',
            cursorwidth : '7px',
            cursorborder : 'none',
            cursorborderradius : '0px' ,
            zindex : '101'
        }) ;

        // carousel
        $("#owl-example").owlCarousel({
            autoPlay : 4000,
            navigation : false,
            singleItem : true,
            slideSpeed : 400,
            paginationSpeed : 500,
            autoHeight : false
        }) ;

        $("#testi").owlCarousel({
            autoPlay : 4000,
            navigation : false,
            singleItem : true,
            slideSpeed : 400,
            paginationSpeed : 500,
            autoHeight : false
        }) ;
    }) ;
	$(document).ready(function(){
	    $('.nav a').on('click', function(){
	    	if (window.innerWidth <= 768) {
	    	$('.navbar-toggle').click() //bootstrap 3.x by Richard
			}
		});
	}) ;
    </script>
    @endsection
