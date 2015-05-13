@extends('app')
@section('title')
	Home
@endsection
@section('menu')
    <li><a href="{{ URL::to('izinair/pemohon') }}">home</a></li>
    <li class="active"><a href="{{ URL::to('izinair/pemohon/persyaratan') }}">persyaratan</a>
    <li><a href="{{ URL::to('izinair/pemohon/daftarizin') }}">daftar izin</a></li>
    <li><a href="{{ URL::to('izinair/pemohon/tentang') }}">tentang</a></li>
@endsection
@section('navigation')
	<ol class="breadcrumb">
	  <li><a href="{{URL::to('izinair/pemohon')}}">Home</a></li>
	  <li class="active"><a href="{{URL::to('izinair/pemohon/persyaratan')}}">Persyaratan</a></li>
	</ol>
@endsection
@section('content')
	<div class="main"><!-- start main -->
	<a>lalalala</a>
	</div>

@stop