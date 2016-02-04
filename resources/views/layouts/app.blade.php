<!DOCTYPE html>
<html lang="en">
    <head>
        <!-- META for optimize the web -->
        <meta charset="UTF-8"/>
        <meta http-equiv="X-UA-Compatible" content="IE-Edge"/>
        <meta name="viewport" content="width=device-width, initial-scale=1"/>
        <meta name="description" content="Vocational Computer Festival (Vocomfest) adalah lomba tahunan yang diselenggarakan oleh HIMAKOMSI UGM yang terdiri dari lomba web design untuk SLTA, lomba mmobile apps untuk mahasiswa, dan ditutup dengan sebuah seminar nasional."/>
        <meta name="author" content="Vocomfest 2016 Techincal Support"/>
        <meta name="keywords" content="Lomba web, lomba mobile apps, lomba IT, UGM, Himakomsi, Vocomfest, Vocomfest 2016"/>
        <meta name="robots" content="index,follow"/>
        <meta name="Copyright" content="Vocomfest 2016 adalah website buatan Tim TS Vocomfest 2016"/>
        <title>
            @yield('title')
        </title>
        <!-- CSS Here -->
        <link rel="stylesheet" type="text/css" href="assets/css/vocomfest.css"/>
        <link rel="stylesheet" type="text/css" href="{{asset('/assets/css/timeline.css')}}"/>
    </head>
    @yield('content')
    <script type="text/javascript" src="assets/js/vocomfest.js">
    </script>
	<script type="text/javascript" src="{{asset('/assets/js/main.js')}}"></script>
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
    </script>
</body>
</html>
