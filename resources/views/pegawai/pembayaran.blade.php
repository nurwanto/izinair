@extends('app')
@section('title')
	Pembayaran
@endsection
@section('menu')
    <li><a href="{{ URL::to('izinair/pegawai') }}">home</a></li>
    <li class="active"><a href="{{ URL::to('izinair/pegawai/daftarizin') }}">daftar izin</a></li>
@endsection
@section('navigation')
	<ol class="breadcrumb">
	  <li><a href="{{URL::to('izinair/pegawai')}}">Home</a></li>
	  <li class="active">validasi</a></li>
	</ol>
@endsection
@section('content')
	<div class="container">
		<div class="row  footer">
			<div class="contact-form">
				<h2>Pembayaran</h2>
			</div>
				@foreach($pembayaran as $p)
					<div><a href="{{route('getfile', $p->bukti)}}"><img src="{{route('getfile', $p->bukti)}}"  style="witdh:100px; height:100px" alt=""/></a></div>
				
					<div class="col-md-4 grid1_of_3">
					     <div class="rd_more1">
							<a href="/izinair/pegawai/pembayaran/1/{{$p->id}}"><button class="btn_style">Benar</button></a>
						</div>	
					</div>
					<div class="col-md-4 grid1_of_3">
					     <div class="rd_more1">
							<a href="/izinair/pegawai/pembayaran/0/{{$p->id}}"><button class="btn_style">Tidak Benar</button></a>
						</div>	
					</div>
				@endforeach
			<div class="clearfix"></div>
		</div>
	</div>
@stop