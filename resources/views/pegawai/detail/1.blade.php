@extends('app')
@section('title')
	Daftar Izin
@endsection
@section('script')
	<script>
		function confirmDataTeknis(id) {
		    if (confirm("Apakah Anda ingin mengisi data teknis?") == true) {
		        location.href = "/izinair/admin/manajemen/hapus/"+id;
		    } else {
		        
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
				<div><img src="{{route('getfile', $izin->teknis)}}"  alt=""/>{{Storage::get($izin->teknis)}}</div>
			<div class="clearfix"></div>
		</div>
	</div>
@stop