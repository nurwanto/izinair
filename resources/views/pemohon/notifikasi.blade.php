@extends('app')
@section('title')
	Notifikasi
@endsection
@section('menu')
    <li><a href="{{ URL::to('izinair/pemohon') }}">home</a></li>
    <li><a href="{{ URL::to('izinair/pemohon/persyaratan') }}">persyaratan</a></li>
    <li><a href="{{ URL::to('izinair/pemohon/daftarizin') }}">daftar izin</a></li>
    <li><a href="{{ URL::to('izinair/pemohon/notifikasi') }}">notifikasi</a></li>
    <li class="active">{{session('nik')}} | <a href="{{ URL::to('/izinair/logout')}}")>Logout</a></li>
@endsection
@section('navigation')
	<ol class="breadcrumb">
	  <li><a href="{{URL::to('izinair/pemohon')}}">Home</a></li>
	  <li class="active"><a href="{{URL::to('izinair/pemohon/notifikasi')}}">Notifikasi</a></li>
	</ol>
@endsection
@section('content')
	<div>
		@foreach($notifikasi as $n)
			@if($n->status == "unread")
				<div>
					<a href="/izinair/pemohon/notifikasi/{{$n->jenis_izin}}/{{$n->id_izin}}"> pada izin {{$n->jenis_izin}}</a>
				</div>
			@endif
		@endforeach
	</div>
@stop