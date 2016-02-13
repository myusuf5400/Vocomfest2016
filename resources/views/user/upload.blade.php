@extends('layouts.app')
@section('title', 'Upload')
@section('content')
<div>

    {!!$transloadit!!}
    <input name="server" type="text" value="{!!$server!!}" style="display:none">
    <input name="example_upload" type="file"/>
    <input type="submit" value="Upload"/>
</form>
</div>
@endsection

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
					<p class="text-center big strong">Petunjuk Teknis Lomba WDC/MADC</p>
					<p class="text-center"><a href="#" class="btn btn-learn"><i class="icon-download"></i>&nbsp;<strong>DOWNLOAD</strong></a></p>
				</aside>
				<div class="col-md-8">
					<h3>Welcome, Nama Tim</h3>
					<p>You are registered in Mobile Apps Develompent Competition/Web Design Competition. Here is the complete brief of the competition. You may read it carefully to build the right apps/web so you can win this competition. Have you see our <a href="{{url('/')}}#timeline" target="_blank">timeline?</a></p>
					<p>And we remind you to not forget <a href="#upload">upload your file!</a></p>
				</div>
			</div>
			<div class="col-md-12" id="upload">
				<h3 class="text-center separator">
                    UPLOAD FILE
                </h3>
                <hr class="bord greeny"/>
				<div class="col-md-6" style="padding-top : 70px ;">
					{!!$transloadit!!}
					    <input name="server" type="text" value="{!!$server!!}" style="display:none">
					    <input name="example_upload" type="file"/>
						<div class="form-group">
							<div class="col-md-10 col-md-offset-1">
								<input type="file" name="upload" class="form-control" style="border-radius : 0 ; box-shadow : 0px ;">
							</div>
						</div>
						<div class="form-group">
							<div class="col-md-10 col-md-offset-1">
								<input type="submit" value="UPLOAD" class="btn btn-learn"/>
							</div>
						</div>
					</form>
				</div>
				<div class="col-md-6">
					<h3 class="strong">Ketentuan Upload File</h3>
					<blockquote>
						<p class="big">
							<ol>
								<li>1. File yang akan diupload berformat file *.zip</li>
								<li>2. Format nama file adalah MADC/WDC_NamaTim</li>
								<li>3. Batas upload file adalah xx Maret 2016</li>
							</ol>
						</p>
					</blockquote>
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
