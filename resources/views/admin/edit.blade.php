
@extends('layouts.admin')
@section('title', 'Dashboard Admin Vocomfest 2016')
@section('content')

<div id="page-wrapper" >
    <div id="page-inner">
        <div class="row">
            <div class="col-md-12">
                <h1 class="page-header">
                    Update Data Peserta Semnas
                    <small>
                        Edit data
                    </small>
                </h1>
            </div>
        </div>
        <!-- /. ROW -->
        <div class="row">
            <div class="col-lg-12">
                <div class="panel panel-default">
                    <div class="panel-heading">
                        Form Edit
                    </div>
                    <div class="panel-body">
                        @if(session('status'))
                        <div class="alert alert-success alert-dismissable">
                            <button type="button" class="close" data-dismiss="alert" aria-hidden="true">
                                &times;
                            </button>
                            <strong>
                                Success
                            </strong>
                            {{ session('status') }}
                        </div>
                        @endif
                        @foreach($errors->all() as $error)
                        <div class="alert alert-warning alert-dismissable">
                            <button type="button" class="close" data-dismiss="alert" aria-hidden="true">
                                &times;
                            </button>
                            <strong>
                                Whops
                            </strong>
                            {{ $error }}
                        </div>
                        @endforeach
                        <div class="row">
                            <div class="col-lg-8 col-lg-offset-2">
                                <form role="form" method="post" action="{{ url('/admin/semnas/edit/') }}">
                                    <input type="hidden" name="id" value="{{$data->id}}">
                                    <div class="form-group">
                                        <label >
                                            Nama
                                        </label>
                                        <input type="text" class="form-control" name="nama" value="{{ $data->nama }}" placeholder="Nama">
                                    </div>
                                    <div class="form-group">
                                        <label>
                                            Kategori
                                        </label>
                                        <input type="text" class="form-control" value="@if($data->kategori==0) Mahasiswa @elseif($data->kategori==1) Pelajar @else Umum @endif" name="kategori" placeholder="Kategori">
                                    </div>
                                    <div class="form-group">
                                        <label >
                                            Status
                                        </label>
                                        <div class="form-group">
                                            <div class="col-md-6">
                                                <input type="radio" name="status" value="0" @if($data->
                                                status==0) checked @endif class="ev-cat"/>
                                                <label>
                                                    Belum Teraktivasi
                                                </label>
                                            </div>
                                            <div class="col-md-6">
                                                <input type="radio" name="status" value="1"  @if($data->
                                                status==1) checked @endif class="ev-cat"/>
                                                <label >
                                                    Sudah Teraktivasi
                                                </label>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label>
                                            Nomor Telp.
                                        </label>
                                        <input type="text" class="form-control" value="{{ $data->notelp }}" name="notelp" placeholder="Nomor Telp.">
                                    </div>
                                    <div class="form-group">
                                        <label >
                                            Email
                                        </label>
                                        <input type="text" class="form-control" value="{{ $data->email }}" name="email" placeholder="Email">
                                    </div>
                                    <input type="hidden" value="{{ csrf_token() }}" name="_token" />
                                    <br/>
                                    <br/>
                                    <button type="submit" class="btn btn-default">
                                        Update
                                    </button>
                                </form>
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
        <footer>
            <p>
                All right reserved. Template by:
                <a href="http://webthemez.com">
                    WebThemez
                </a>
            </p>
        </footer>
    </div>
    <!-- /. PAGE INNER -->
</div>
@endsection
