@extends('layouts.admin')
@section('title', 'Dashboard Admin Vocomfest 2016')
@section('content')
    <div id="page-wrapper" >
            <div id="page-inner">
             <div class="row">
                    <div class="col-md-12">
                        <h1 class="page-header">
                            Tabel Tim <small>MADC</small>
                        </h1>
                    </div>
                </div>
                 <!-- /. ROW  -->
                <div class="row">
                    <div class="col-md-12">
                        <!-- Advanced Tables -->
                        <div class="panel panel-default">
                            <div class="panel-heading">
                                 Tabel Semnas
                            </div>
                            @if(session('status'))
                            <div class="alert alert-warning alert-dismissable">
                              <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                              <strong>Well</strong> {{ session('status') }}
                            </div>
                            @endif
                            <div class="panel-body">
                                <div class="table-responsive">
                                    <table class="table table-striped table-bordered table-hover" id="dataTables-example">
                                        <thead>
                                            <tr>
                                                <th>No</th>
                                                <th>Nama Tim</th>
                                                <th>Email Tim</th>
                                                <th>Nama Instansi</th>
                                                <th>Status Email</th>
                                                <th>Status Pembayaran</th>
                                                <th>Aksi</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <?php $i = 1?>
                                            @foreach($madc as $tim)
                                            <tr class="odd gradeX">
                                                <td>{{ $i++}}</td>
                                                <td>{{$tim->namateam}}</td>
                                                <td>{{$tim->ketua()->first()['email']}}</td>
                                                <td class="center">{{$tim->instansi}}</td>
                                                <td class="center">
                                                    @if($tim->ketua()->first()['code']==1)
                                                        Sudah terverifikasi
                                                    @else
                                                        Belum terverifikasi
                                                    @endif
                                                </td>
                                                <td class="center">
                                                    @if($tim->ketua()->first()['level']==1)
                                                        Sudah diaktivasi
                                                    @else
                                                        <form action="{{ url('admin/team/aktivasi/'.$tim->id) }}" method="POST">
                                                        {{ csrf_field() }}

                                                        <button class="btn btn-success">Aktivasi</button>
                                                        </form>
                                                    @endif
                                                </td>
                                                <td>
                                                    @include('admin.actionTeam')
                                                </td>
                                            </tr>
                                            @endforeach
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    <!-- /. PAGE INNER  -->
    </div>
@endsection