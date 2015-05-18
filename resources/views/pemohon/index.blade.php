@extends('app')
@section('title')
	Home
@endsection
@section('script')
	<script type="text/javascript">
		$('#logoutLink').click(function(e) {
			$.ajax({
				type: 'get',
				url: 'http://e-gov-bandung.tk/dukcapil/api/public/auth/logout',
				success: function(data) {
				},
				error: function(data) {
					// alert(data);
				}
			});
		})
	</script>
@endsection
@section('menu')
    <li class="active"><a href="{{ URL::to('izinair/pemohon') }}">home</a></li>
    <li><a href="{{ URL::to('izinair/pemohon/persyaratan') }}">persyaratan</a></li>
    <li><a href="{{ URL::to('izinair/pemohon/daftarizin') }}">daftar izin</a></li>
    <li><a href="{{ URL::to('izinair/pemohon/notifikasi') }}">notifikasi</a></li>
    <li>{{Session::get('NIK')}} | <a href="{{url('logout')}}")>Logout</a></li>
@endsection
@section('navigation')
	<div class="row slider text-center">
		<div class="col-md-8">
			<div class="col-md-10 slider_text">
				<h2>Air, sumber kehidupan</h2>
				<div class="col-md-4 grid1_of_3">
					     <div class="rd_more1">
							<a href="{{URL::to('izinair/pemohon/form')}}"><button class="btn_style">ajukan Izin Baru</button></a>
						</div>					
					</div>
			</div>
		</div>
		<div class="col-md-4">
			<div class="slider_img">
				<img src="{{URL::asset('images/pic1.png')}}" alt="" class="img-responsive"/>
			</div>
		</div>
	</div>
@endsection