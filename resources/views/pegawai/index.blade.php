@extends('app')
@section('title')
	Home
@endsection
@section('menu')
    <li class="active"><a href="{{ URL::to('izinair/pegawai') }}">home</a></li>
    <li><a href="{{ URL::to('izinair/pegawai/daftarizin') }}">daftar izin</a></li>
    <li>{{session('username')}} | <a href="{{ URL::to('/izinair/super_logout')}}">Logout</a></li>
@endsection
@section('navigation')
	<div class="row slider text-center">
		<div class="col-md-8">
				<div class="col-md-10 slider_text">
					<h2>Air, sumber kehidupan</h2>
					<h3>!----!</h3>
				</div>
			</div>
			<div class="col-md-4">
				<div class="slider_img">
					<img src="{{URL::asset('images/pic1.png')}}" alt="" class="img-responsive"/>
				</div>
			</div>
	</div>
@endsection
@section('content')
<div class="main"><!-- start main -->
<div class="container main">
	<div class="row grids_of_3">
				<div class="col-md-4 grid1_of_3">
					  <!-- <h2>validasi izin</h2>
					  <img src="images/icon1.png" class="img-responsive"/>
					  <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p> -->
				     <div class="rd_more1">
						<a href="{{URL::to('izinair/pegawai/validasi')}}"><button class="btn_style">validasi izin</button></a>
					</div>					
				</div>
				<div class="col-md-4 grid1_of_3">
				      <div class="rd_more1">
						<a href="{{URL::to('izinair/pegawai/datateknis')}}"><button class="btn_style">data teknis</button></a>
					</div>					
				</div>
				<div class="col-md-4 grid1_of_3">
				     <div class="rd_more1">
						<a href="{{URL::to('izinair/pegawai/notifikasi')}}"><button class="btn_style">notifikasi pemohon</button></a>
					</div>	
				</div>
			    <div class="clearfix"></div>
	</div>
</div>
</div>
@stop