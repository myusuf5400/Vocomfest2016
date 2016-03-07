@extends('layouts.admin')
@section('title', 'Dashboard Admin Vocomfest 2016')
@section('content')

<div id="page-wrapper" >
    <div id="page-inner">
        <div class="row">
            <div class="col-md-12">
                <h1 class="page-header">
                    Update Data {{$anggota->
                    nama}}
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
                                <form role="form" method="post" action="{{ url('/admin/anggota/update/') }}">
                                    <input type="hidden" name="id" value="{{$anggota->id}}">
                                    <div class="form-group">
                                        <label for="nama" required>
                                            Nama
                                        </label>
                                        <input type="text" class="form-control" id="nama" name="nama" value="{{ $anggota->nama }}" placeholder="Nama Anggota" required>
                                    </div>
                                    <div class="form-group">
                                        <label for="email">
                                            Email
                                        </label>
                                        <input type="text" class="form-control" id="email" name="email" value="{{ $anggota->email }}" placeholder="Email Anggota" required>
                                    </div>
                                    <div class="form-group">
                                        <label for="notelp">
                                            Nomer Telepon
                                        </label>
                                        <div class="input-group">
                                        <div class="input-group-addon reg-form">
                                                (+62)
                                            </div>
                                        <input type="text" class="form-control" id="notelp" name="notelp" placeholder="No Telepon Anggota" value="{{$anggota->notelp}}" required>
                                        </div>
                                    </div>
                                    <input type="hidden" value="{{ csrf_token() }}" name="_token" />
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