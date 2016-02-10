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
                            Setting <small>Setting halaman</small>
                        </h1>
                        <div class="row">
                            <div class="col-md-10 col-md-offset-1">
                                <h3>Buka / Tutup Webiste</h3><br><br>
                                <form role="form" method="post" action="{{ url('admin/setting/post') }}">
                                  <div class="form-group">
                                    <label for="exampleInputEmail1">Status Registrasi</label>
                                    <input type="hidden" name="id" value="1">
                                    <select name="value" class="form-control">
                                      <option value="1">Idup</option>
                                      <option value="0">Mati</option>
                                    </select>
                                  </div>
                                  <div class="form-group">
                                      <label>Alert<small> (Yang di munculkan kalau registrasi di tutup)</small></label>
                                      <textarea class="form-control" name="keterangan" rows="3"></textarea>
                                  </div>
                                  <input type="hidden" value="{{ csrf_token() }}" name="_token">
                                  <button type="submit" class="btn btn-default">Submit</button>
                                </form>
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
      <!-- Custom Js -->
    <script src="{{url('assets/js/custom-scripts.js')}}"></script>
    
   
</body>
</html>
