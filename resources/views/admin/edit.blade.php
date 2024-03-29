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
                            Forms Page <small>Edit data</small>
                        </h1>
                    </div>
                </div> 
                 <!-- /. ROW  -->
              <div class="row">
                <div class="col-lg-12">
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            Form Edit
                        </div>
                        <div class="panel-body">
                            @foreach($errors->all() as $error)
                            <div class="alert alert-warning alert-dismissable">
                              <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                              <strong>Whops</strong> {{ $error }}
                            </div>
                            @endforeach
                            <div class="row">
                                <div class="col-lg-8 col-lg-offset-2">
                                @foreach($data as $apa)
                                    <form role="form" method="post" action="{{ url('/admin/table/semnas/update/') }}/{{ $apa->id }}">
                                      <div class="form-group">
                                        <label for="nama">Nama</label>
                                        <input type="text" class="form-control" id="nama" name="nama" value="{{ $apa->nama }}" placeholder="Nama">
                                      </div>
                                      <div class="form-group">
                                        <label for="no_telp">No. Telp</label>
                                        <input type="text" class="form-control" id="no_telp" value="{{ $apa->notelp }}" name="notelp" placeholder="No. Telp">
                                      </div>
                                      <div class="form-group">
                                        <label for="Email">Email</label>
                                        <input type="email" class="form-control" id="Email" value="{{ $apa->email }}" name="email" placeholder="Email">
                                      </div>
                                      <div class="form-group">
                                        <label for="status">Status</label>
                                        <input type="text" class="form-control" id="status" name="status" value="{{ $apa->status }}" placeholder="ID team" value="">
                                      </div>
                                      <input type="hidden" value="{{ csrf_token() }}" name="_token" >
                                      <br><br>
                                      <button type="submit" class="btn btn-default">Submit</button>
                                    </form>
                                @endforeach
                                </div>
                            </div>
                            <!-- /.row (nested) -->
                        </div>
                        <!-- /.panel-body -->
                    </div>
                    <!-- /.panel -->
                </div>
                <!-- /.col-lg-12 -->
            </div>
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
