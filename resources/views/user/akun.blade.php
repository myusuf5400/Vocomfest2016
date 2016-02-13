@extends('layouts.app')
@section('title', 'Dashboard Tim Vocomfest 2016')
@section('content')
<body>
	<div class="se-pre-con"></div>
	@include('user.nav')
	<div class="container pd-bt-20 akun">
		<ol class="breadcrumb">
			<li><a href="{{url('/')}}">Home</a></li>
			<li class="active">{{Auth::user()->team->namateam}} Dashboard</li>
		</ol>
		<div class="row">
			<div class="col-md-12">
				<aside class="col-md-4 upload pd-bt-40">
					<p class="text-center big strong">Petunjuk Teknis Lomba @if(Auth::user()->team->kategori==0)WDC @else MADC @endif </p>
					<p class="text-center"><a href="#" class="btn btn-learn"><i class="icon-download"></i>&nbsp;<strong>DOWNLOAD</strong></a></p>
				</aside>
				<div class="col-md-8">
					<h3>Selamat datang, {{Auth::user()->team->namateam}}</h3>
					<p>Kamu telah terdaftar pada @if(Auth::user()->team->kategori==0)Web Design Competition (WDC). @else Mobile Apps Dev Competition (MADC). @endif Ini adalah panduan lengkap dari kompetisi tersebut. Bacalaha dengan teliti agar tim kamu dapat memenangkan kompetisi.
					@if(Auth::user()->team->kategori==1)<p>Dan jangan lupa upload proposal kamu <a href="{{url('/user/upload')}}">disini</a></p>
					@endif
				</div>
			</div>
		</div>
	</div>
	<footer class="footer-bottom">
		<div class="copy">
			<div class="container">
				<div class="row">
					<div class="col-sm-12 pd-bt-5">
						<p class="text-center copyright">Vocomfest &copy; 2016. Built with love by Vocomfest Technical Support</p>	
					</div>
				</div>
			</div>
		</div>
	</footer>
</body>

@endsection

@section('stylesheet')
    <link rel="stylesheet" type="text/css" href="{{url('assets/css/vocomfest.css')}}">
@endsection

@section('script')
    <script type="text/javascript" src="{{url('assets/js/vocomfest.js')}}"></script>
@endsection