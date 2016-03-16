@extends('layouts.admin')

@section('content')
     <!-- /. NAV SIDE  -->
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
                                                <th>Nama</th>
                                                <th>Nomor Telp.</th>
                                                <th>Email</th>
                                                <th>Kategori</th>
                                                <th>Tanggal Buat</th>
                                                <th>Status</th>
                                                <th>Aksi</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <?php $i=1; ?>
                                            @foreach($data as $apa)
                                            <tr class="odd gradeX">
                                                <td>{{ $i }} <?php $i++ ?></td>
                                                <td>{{$apa->nama}}</td>
                                                <td>{{$apa->notelp}}</td>
                                                <td class="center">{{$apa->email}}</td>
                                                <td class="center">
                                                    @if($apa->kategori == 0)
                                                        Mahasiswa
                                                    @elseif($apa->kategori == 1)
                                                        Pelajar
                                                    @else
                                                        Umum
                                                    @endif
                                                </td>
                                                <td>
                                                    <?php
                                                        for ($i=0; $i < 10 ; $i++) { 
                                                            echo $apa->created_at[$i];    
                                                        }
                                                    ?>
                                                </td>
                                                @if($apa->status)
                                                    <td class="text-center alert-success">
                                                          <span class="glyphicon glyphicon-ok-sign" aria-hidden="true"></span>
                                                    </td>
                                                @else
                                                    <td class="text-center alert-danger">
                                                          <span class="glyphicon glyphicon-info-sign" aria-hidden="true"></span>
                                                    </td>
                                                @endif
                                                <td>
                                                <a href="{{ url('/admin/semnas/delete') }}/{{ $apa->id }}">
                                                    <button class="btn btn-xs btn-danger">
                                                        <span class="glyphicon glyphicon-trash"></span>
                                                    </button>
                                                </a>
                                                <a href="{{ url('/admin/semnas/edit') }}/{{ $apa->id }}">
                                                    <button class="btn btn-xs btn-warning">
                                                        <span class="glyphicon glyphicon-pencil"></span>
                                                    </button>
                                                </a>
                                                </td>
                                            </tr>
                                            @endforeach
                                            
                                        </tbody>
                                    </table>
                                </div>
                                
                            </div>
                        </div>
                        <!--End Advanced Tables -->
                    </div>
                </div>
            </div>
        </div>
    <!-- /. PAGE INNER  -->
@endsection
       

