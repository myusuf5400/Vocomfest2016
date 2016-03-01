@extends('layouts.admin')
@section('title', 'Dashboard Admin Vocomfest 2016')
@section('content')
        <div id="page-wrapper">
            <div id="page-inner">


                <div class="row">
                    <div class="col-md-12">
                        <h1 class="page-header">
                            Dashboard <small>Admin Vocomfest 2016</small>
                        </h1>
                    </div>
                </div>
                <!-- /. ROW  -->

                <div class="row">
                    <div class="col-md-3 col-sm-12 col-xs-12">
                    <a href="{{url('admin/wdc')}}">
                        <div class="panel panel-primary text-center no-boder bg-color-green">
                            <div class="panel-body">
                                <i class="glyphicon glyphicon-phone" style="font-size: 150px;"></i>
                                <h3>{{$stat['wdc']}}</h3>
                            </div>
                            <div class="panel-footer back-footer-green">
                                WDC

                            </div>
                        </div>
                        </a>
                    </div>
                    <div class="col-md-3 col-sm-12 col-xs-12">
                        <a href="{{url('admin/madc')}}">
                        <div class="panel panel-primary text-center no-boder bg-color-blue">
                            <div class="panel-body">
                                <i class="glyphicon glyphicon-globe" style="font-size: 150px;"></i>
                                <h3>{{$stat['madc']}}</h3>
                            </div>
                            <div class="panel-footer back-footer-blue">
                                MADC

                            </div>
                        </div>
                        </a>
                    </div>
                    <!-- <div class="col-md-3 col-sm-12 col-xs-12">
                        <div class="panel panel-primary text-center no-boder bg-color-red">
                            <div class="panel-body">
                                <i class="fa fa fa-comments fa-5x"></i>
                                <h3>15,823 </h3>
                            </div>
                            <div class="panel-footer back-footer-red">
                                Comments

                            </div>
                        </div>
                    </div>
                    <div class="col-md-3 col-sm-12 col-xs-12">
                        <div class="panel panel-primary text-center no-boder bg-color-brown">
                            <div class="panel-body">
                                <i class="fa fa-users fa-5x"></i>
                                <h3>36,752 </h3>
                            </div>
                            <div class="panel-footer back-footer-brown">
                                No. of Visits

                            </div>
                        </div>
                    </div> -->
                </div>

                <!-- /. ROW  -->
                <footer><p>All right reserved. Template by: <a href="http://webthemez.com">WebThemez</a></p></footer>
            </div>
            <!-- /. PAGE INNER  -->
        </div>
  @endsection
