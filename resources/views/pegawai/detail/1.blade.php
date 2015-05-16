@extends('app')
@section('title')
	Izin Air Bawah Tanah
@endsection
@section('script')
	<script>
		function confirmDataTeknis(jenis, id) {
		    if (confirm("Apakah Anda ingin mengisi data teknis?") == true) {
		        location.href = "/izinair/pegawai/validasi/1/"+jenis+"/"+id+"/"+"1";
		    } else {
		        location.href = "/izinair/pegawai/validasi/1/"+jenis+"/"+id+"/"+"0";
		    }
		}
	</script>
@endsection
@section('menu')
    <li><a href="{{ URL::to('izinair/pegawai') }}">home</a></li>
    <li class="active"><a href="{{ URL::to('izinair/pegawai/daftarizin') }}">daftar izin</a></li>
@endsection
@section('navigation')
	<ol class="breadcrumb">
	  <li><a href="{{URL::to('izinair/pegawai')}}">Home</a></li>
	  <li class="active"><a href="{{URL::to('izinair/pegawai/daftarizin')}}">daftar izin</a></li>
	</ol>
@endsection
@section('content')
	<div class="container">
		<div class="row  footer">
			<div class="contact-form">
				<h2>Izin Air Bawah Tanah</h2>
			</div>
				<div><a href="{{route('getfile', $izin->teknis)}}"><img src="{{route('getfile', $izin->teknis)}}"  style="witdh:100px; height:100px" alt=""/></a></div>
				<div><a href="{{route('getfile', $izin->bor)}}"><img src="{{route('getfile', $izin->bor)}}"  style="witdh:100px; height:100px" alt=""/></a></div>
				<div><a href="{{route('getfile', $izin->keberatan)}}"><img src="{{route('getfile', $izin->keberatan)}}"  style="witdh:100px; height:100px" alt=""/></a></div>
				<div><a href="{{route('getfile', $izin->konservasi)}}"><img src="{{route('getfile', $izin->konservasi)}}"  style="witdh:100px; height:100px" alt=""/></a></div>
				<div class="col-md-4 grid1_of_3">
				     <div class="rd_more1">
						<a href="javascript:confirmDataTeknis(1, {{$izin->id}})"><button class="btn_style">Valid</button></a>
					</div>	
				</div>
				<div class="col-md-4 grid1_of_3">
				     <div class="rd_more1">
						<a href="/izinair/pegawai/validasi/0/1/{{$izin->id}}"><button class="btn_style">Tidak Valid</button></a>
					</div>	
				</div>
			<div class="clearfix"></div>
		</div>
	</div>
@stop