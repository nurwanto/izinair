@extends('app')
@section('title')
	Home
@endsection
@section('menu')
    <li class="active"><a href="{{ URL::to('izinair/admin') }}">home</a></li>
    <li><a href="{{ URL::to('izinair/admin/manajemen') }}">manajemen</a></li>
    <li>{{session('username')}} | <a href="#">Logout</a></li>
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
@stop