@extends('layouts.app')
@section('title', 'Dashboard Tim Vocomfest 2016')
@section('content')
<body>
	<div class="se-pre-con"></div>
	@include('user.nav')
	<div class="container pd-bt-20 akun">
		<ol class="breadcrumb">
			<li><a href="{{url('/')}}">Home</a></li>
			<li><a href="{{url('/user')}}">{{Auth::user()->team->namateam}} Dashboard</a></li>
			<li class="active">Upload Proposal</li>
		</ol>
		<div class="row">
			<div class="col-md-12" id="upload">
				<h3 class="text-center separator">
                    UPLOAD PROPOSAL
                </h3>
                <hr class="bord greeny"/>
                <div class="container">
				<div class="col-md-6" style="padding-top : 70px ;">
					{!!$transloadit!!}
						<div class="form-group">
							<div class="col-md-10 col-md-offset-1">
								@if (session('error'))
				                    <br/>
				                    <div class="alert alert-danger">
				                        <ul>
				                            <li>{{session('error')}}</li> 
				                        </ul>
				                    </div>
				                @endif
				                @if (session('message'))
				                    <br/>
				                    <div class="alert alert-success">
				                        <ul>
				                            <li>{{session('message')}}</li> 
				                        </ul>
				                    </div>
				                @endif
							</div>
						</div>
						<div class="form-group">
							<div class="col-md-10 col-md-offset-1">
								<input type="file" name="upload" class="form-control" style="border-radius : 0 ; box-shadow : 0px ;" required>
							</div>
							<input type="text" value="{{$server}}" name="server" style="display:none">
							<input type="text" value="2" name="tipe" style="display:none">
						</div>
						<div class="form-group">
							<div class="col-md-10 col-md-offset-1">
								<input type="submit" value="UPLOAD" class="btn btn-learn"/>
							</div>
						</div>
					</form>
				</div>
				<div class="col-md-6">
					<blockquote class="ketentuan">
						<p class="big">
							<h3 class="strong">Ketentuan Upload File</h3>
							<ol>
								<li>Format file adalah .pdf</li>
								<li>Format nama file adalah Nama_tim(spasi)Nama_aplikasi</li>
								<li>Batas upload file proposal adalah 17 Maret 2016 pukul 21.00 WIB.</li>
							</ol>
						</p>
					</blockquote>
				</div>
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