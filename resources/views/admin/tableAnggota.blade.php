@extends('layouts.admin')
@section('title', 'Dashboard Admin Vocomfest 2016')
@section('content')
	<div id="page-wrapper" >
            <div id="page-inner">
			 <div class="row">
                    <div class="col-md-12">
                        <h1 class="page-header">
                            Tabel Anggota Tim {{$data->first()->team['namateam']}} <small>
                            @if($data->first()->team['kategori']==0)
                                <?php $tipe = 'wdc';?>
                                WDC
                            @else
                                <?php $tipe = 'madc';?>
                                MADC
                            @endif
                            </small>
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
                                            <th>Nama</th>
                                                <th>Email</th>
                                                <th>Nomer Telepon</th>
                                                <th>Posisi</th>
                                                <th>Aksi</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <?php $i = 1?>
                                            @foreach($data->reverse() as $anggota)
                                            <tr class="odd gradeX">
                                                <td>{{$i++}}</td>
                                                <td>{{$anggota->nama}}</td>
                                                <td>{{$anggota->email}}</td>
                                                <td>{{$anggota->notelp}}</td>
                                                <td>
                                                @if($anggota->code==null)
                                                    Anggota
                                                @else
                                                    Ketua
                                                @endif
                                                </td>
                                                <td>
                                                    <a href="{{url('/admin/delete/').'/'.$anggota->id}}">Delete</a>
                                                    <a href="{{url('/admin/teams/edit/').'/'.$anggota->id}}">Edit</a>
                                                    <a href="{{url('/admin/madc/anggota/').'/'.$anggota->id}}">Detail</a>
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