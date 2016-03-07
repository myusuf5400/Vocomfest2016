@extends('layouts.admin')
@section('title', 'Dashboard Admin Vocomfest 2016')
@section('content')
	<div id="page-wrapper" >
            <div id="page-inner">
			 <div class="row">
                    <div class="col-md-12">
                        <h1 class="page-header">
                            Tabel Detail Tim {{$anggotas->first()->team['namateam']}} <small>
                            @if($anggotas->first()->team['kategori']==0)
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
                @include('admin.tableAnggota')
                @include('admin.tableFile')
            </div>
            <footer><p>All right reserved. Template by: <a href="http://webthemez.com">WebThemez</a></p></footer>
        </div>
    <!-- /. PAGE INNER  -->
    </div>
@endsection