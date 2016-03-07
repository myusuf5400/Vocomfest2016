@extends('layouts.admin')
@section('title', 'Dashboard Admin Vocomfest 2016')
@section('content')

<div id="page-wrapper" >
    <div id="page-inner">
        <div class="row">
            <div class="col-md-12">
                <h1 class="page-header">
                    Update Data Tim {{$data->
                    namateam}}
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
                        @foreach($errors->
                        all() as $error)
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
                                <form role="form" method="post" action="{{ url('/admin/team/update/') }}">
                                    <input type="hidden" name="id" value="{{$data->id}}">
                                    <div class="form-group">
                                        <label for="namaTeam">
                                            Nama
                                        </label>
                                        <input type="text" class="form-control" id="namaTeam" name="namateam" value="{{ $data->namateam }}" placeholder="Nama Team">
                                    </div>
                                    <div class="form-group">
                                        <label for="kategori">
                                            Kategori
                                        </label>
                                        <div class="form-group">
                                            <div class="col-md-6">
                                                <input type="radio" name="kategori" value="0" id="wdc" @if($data->
                                                kategori==0) checked @endif class="ev-cat"/>
                                                <label for="web">
                                                    Web Design Competition
                                                </label>
                                            </div>
                                            <div class="col-md-6">
                                                <input type="radio" name="kategori" value="1" id="madc" @if($data->
                                                kategori==1) checked @endif class="ev-cat"/>
                                                <label for="madc">
                                                    Mobile Apps Development Competition
                                                </label>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label for="instansi">
                                            Institusi
                                        </label>
                                        <input type="text" class="form-control" id="instansi" value="{{ $data->instansi }}" name="instansi" placeholder="Instansi">
                                    </div>
                                    <div class="form-group">
                                        <label for="instansi">
                                            Alamat Instansi
                                        </label>
                                        <input type="text" class="form-control" id="instansi" value="{{ $data->alamatinstansi }}" name="alamatinstansi" placeholder="Alamat Instansi">
                                    </div>
                                    <div class="form-group">
                                        <label for="status">
                                            Status
                                        </label>
                                        <div class="form-group">
                                            <div class="col-md-6">
                                                <input type="radio" name="level" value="0" id="belum" @if($data->
                                                ketua->level==0) checked @endif class="ev-cat"/>
                                                <label for="belum">
                                                    Belum teraktivasi
                                                </label>
                                            </div>
                                            <div class="col-md-6">
                                                <input type="radio" name="level" value="1" id="sudah" @if($data->
                                                ketua->level==1) checked @endif class="ev-cat"/>
                                                <label for="sudah">
                                                    Teraktivasi
                                                </label>
                                            </div>
                                        </div>
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
</div
@endsection