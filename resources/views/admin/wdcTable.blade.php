@extends('layouts.admin')
@section('title', 'Dashboard Admin Vocomfest 2016')
@section('content')
	<div id="page-wrapper" >
            <div id="page-inner">
			 <div class="row">
                    <div class="col-md-12">
                        <h1 class="page-header">
                            Tabel Peserta <small>Tabel Peserta</small>
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
                                            @foreach($wdc as $tim)
                                            <tr class="odd gradeX">
                                                <td>{{ $i++}}</td>
                                                <td>{{$tim->namateam}}</td>
                                                <td>{{$tim->ketua()->first()['email']}}</td>
                                                <td class="center">{{$tim->instansi}}</td>
                                                <td class="center">
                                                	@if($tim->ketua()->first()['code']==1)
                                                		Sudah terverifikasi
                                                	@else
                                                		Belum terverifivaksi
                                                	@endif
                                                </td>
                                                <td class="center">
                                                	@if($tim->ketua()->first()['level']==1)
                                                		Sudah diaktivasi
                                                	@else
                                                		<a href="{{url('/admin/aktivasi/').'/'.$tim->id}}">Aktivasi</a>
                                                	@endif
                                                </td>
                                                <td>
                                                    <ul class="action">
                                                    <li>
                                                    <form action="{{ url('admin/team/delete/'.$tim->id) }}" method="POST">
                                                    {{ csrf_field() }}
                                                    {{ method_field('DELETE') }}

                                                    <button class="btn btn-danger">Hapus</button>
                                                    </form>
                                                    </li>
                                                    <li>
                                                    <form action="{{ url('admin/team/edit/'.$tim->id) }}" method="POST">
                                                    {{ csrf_field() }}

                                                    <button class="btn btn-warning">Edit</button>
                                                    </form>
                                                    </li>
                                                    <li>
                                                    <form action="{{ url('admin/wdc/anggota/'.$tim->id) }}" method="POST">
                                                    {{ csrf_field() }}
                                                    <button class="btn btn-info">Detail</button>
                                                    </form>
                                                    </li>
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
            <footer><p>All right reserved. Template by: <a href="http://webthemez.com">WebThemez</a></p></footer>
        </div>
    <!-- /. PAGE INNER  -->
    </div>
@endsection