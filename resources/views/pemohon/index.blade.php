@extends('app')
@section('title')
	Home
@endsection
@section('menu')
    <li class="active"><a href="{{ URL::to('izinair/pemohon') }}">home</a></li>
    <li><a href="{{ URL::to('izinair/pemohon/persyaratan') }}">persyaratan</a></li>
    <li><a href="{{ URL::to('izinair/pemohon/daftarizin') }}">daftar izin</a></li>
    <li><a href="{{ URL::to('izinair/pemohon/tentang') }}">tentang</a></li>
@endsection
@section('navigation')
	<div class="row slider text-center">
		<div class="col-md-8">
			<div class="col-md-10 slider_text">
				<h2>Air, sumber kehidupan</h2>
			</div>
		</div>
		<div class="col-md-4">
			<div class="slider_img">
				<img src="images/pic1.png" alt="" class="img-responsive"/>
			</div>
		</div>
	</div>
@endsection
@section('content')
	<div class="main"><!-- start main -->
	<div class="container main">
		<div class="row grids_of_3">
					<div class="col-md-4 grid1_of_3">
					     <div class="rd_more1">
							<a href="{{URL::to('izinair/pemohon/form')}}"><button class="btn_style">ajukan Izin Baru</button></a>
						</div>					
					</div>
					<div class="col-md-4 grid1_of_3">
					      <div class="rd_more1">
							<a href="{{URL::to('izinair/pemohon/form/perpanjangan')}}"><button class="btn_style">ajukan perpanjangan izin</button></a>
						</div>					
					</div>
					<div class="col-md-4 grid1_of_3">
					     <div class="rd_more1">
							<a href="{{URL::to('izinair/pemohon/form/pembatalan')}}"><button class="btn_style">Ajukan Permohonan Pembatalan Izin</button></a>
						</div>	
					</div>
					<div class="col-md-4 grid1_of_3">
					     <div class="rd_more1">
							<a href="{{URL::to('izinair/pemohon/form/pengaduan')}}"><button class="btn_style">ajukan Aduan Penolakan</button></a>
						</div>	
					</div>
				    <div class="clearfix"></div>
		</div>
	</div>
	</div>
@stop