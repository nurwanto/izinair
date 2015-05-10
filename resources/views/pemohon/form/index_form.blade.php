@extends('app')
@section('title')
	Form
@endsection
@section('menu')
    <li><a href="{{URL::to('izinair')}}">home</a></li>
    <li><a href="{{URL::to('izinair/pemohon/persyaratan')}}">persyaratan</a></li>
    <li><a href="{{URL::to('izinair/pemohon/lihat')}}">daftar izin</a></li>
    <li><a href="{{URL::to('izinair/pemohon/tentang')}}">tentang</a></li>
@endsection
@section('navigation')
	<ol class="breadcrumb">
	  <li><a href="{{URL::to('izinair')}}">Home</a></li>
	  <li class="active">Form</li>
	</ol>
@endsection
@section('content')
	<div class="main"><!-- start main -->
	<div class="container main">
	<div class="row grids_of_3">
					<div class="col-md-4 grid1_of_3">
						  <h2>izin pengelolaan air bawah tanah</h2>
						  <img src="{{URL::asset('images/icon1.png')}}" class="img-responsive"/>
						  <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
					     <div class="rd_more1">
							<a href="{{URL::to('izinair/pemohon/form/new/1')}}"><button class="btn_style">view more</button></a>
						</div>					
					</div>
					<div class="col-md-4 grid1_of_3">
						<h2>izin pengambilan air permukaan</h2>
						  <img src="{{URL::asset('images/icon2.png')}}" class="img-responsive"/>
						  <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
					      <div class="rd_more1">
							<a href="{{URL::to('izinair/pemohon/form/new/2')}}"><button class="btn_style">view more</button></a>
						</div>					
					</div>
					<div class="col-md-4 grid1_of_3">
						<h2>izin pembuangan air buangan ke sumber air</h2>
						  <img src="{{URL::asset('images/icon3.png')}}" class="img-responsive"/>
						  <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
					     <div class="rd_more1">
							<a href="{{URL::to('izinair/pemohon/form/new/3')}}"><button class="btn_style">view more</button></a>
						</div>	
					</div>
					<div class="col-md-4 grid1_of_3">
						<h2>izin perubahan alur, bentuk, dimensi, dan kemiringan dasar saluran/sungai</h2>
						  <img src="{{URL::asset('images/icon1.png')}}" class="img-responsive"/>
						  <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
					     <div class="rd_more1">
							<a href="{{URL::to('izinair/pemohon/form/new/4')}}"><button class="btn_style">view more</button></a>
						</div>	
					</div>
				    <div class="clearfix"></div>
		</div>
		</div>
	</div>

@stop