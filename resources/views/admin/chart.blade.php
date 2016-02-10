<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
      <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Free Bootstrap Admin Template : Dream</title>
	<!-- Bootstrap Styles-->
    <link href="{{url('assets/css/bootstrap.css')}}" rel="stylesheet" />
     <!-- FontAwesome Styles-->
    <link href="{{url('assets/css/font-awesome.css')}}" rel="stylesheet" />
     <!-- Morris Chart Styles-->
    <link href="{{url('assets/js/morris/morris-0.4.3.min.css')}}" rel="stylesheet" />
        <!-- Custom Styles-->
    <link href="{{url('assets/css/custom-styles.css')}}" rel="stylesheet" />
     <!-- Google Fonts-->
   <link href='http://fonts.googleapis.com/css?family=Open+Sans' rel='stylesheet' type='text/css' />
</head>
<body>
    <div id="wrapper">
        @include('admin.navtop')
        <!--/. NAV TOP  -->
        @include('admin.navside')
        <!-- /. NAV SIDE  -->
        <div id="page-wrapper" >
            <div id="page-inner">
			 <div class="row">
                    <div class="col-md-12">
                        <h1 class="page-header">
                            Charts <small>Show up your stats</small>
                        </h1>
                    </div>
                </div> 
                 <!-- /. ROW  -->
             
                <div class="row">  
                    <div class="col-md-6 col-sm-12 col-xs-12">                     
                        <div class="panel panel-default">
                            <div class="panel-heading">
                                Bar Chart
                            </div>
                            <div class="panel-body">
                                <div id="morris-bar-chart"></div>
                            </div>
                        </div>            
                    </div>
                    <div class="col-md-6 col-sm-12 col-xs-12">                     
                        <div class="panel panel-default">
                            <div class="panel-heading">
                                Area Chart
                            </div>
                            <div class="panel-body">
                                <div id="morris-area-chart"></div>
                            </div>
                        </div>            
                    </div> 
                </div>
                 <!-- /. ROW  -->
                <div class="row">                     
                      
                               <div class="col-md-6 col-sm-12 col-xs-12">                     
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            Donut Chart
                        </div>
                        <div class="panel-body">
                            <div id="morris-line-chart"></div>
                        </div>
                    </div>            
                </div>
                      <div class="col-md-6 col-sm-12 col-xs-12">                     
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            Line Chart
                        </div>
                        <div class="panel-body">                            
							<div id="morris-donut-chart"></div>
                        </div>
                    </div>            
                </div> 
                
           </div>
                 <!-- /. ROW  -->
				 <footer><p>All right reserved. Template by: <a href="http://webthemez.com">WebThemez</a></p></footer>
				</div>
             <!-- /. PAGE INNER  -->
            </div>
         <!-- /. PAGE WRAPPER  -->
        </div>
     <!-- /. WRAPPER  -->
    <!-- JS Scripts-->
    <!-- jQuery Js -->
    <script src="{{url('assets/js/jquery-1.10.2.js')}}"></script>
      <!-- Bootstrap Js -->
    <script src="{{url('assets/js/bootstrap.min.js')}}"></script>
    <!-- Metis Menu Js -->
    <script src="{{url('assets/js/jquery.metisMenu.js')}}"></script>
     <!-- Morris Chart Js -->
     <script src="{{url('assets/js/morris/raphael-2.1.0.min.js')}}"></script>
    <script src="{{url('assets/js/morris/morris.js')}}"></script>
      <!-- Custom Js -->
    <script src="{{url('assets/js/custom-scripts.js')}}"></script>
</body>
</html>
