@extends('app')
@section('title')
	Validasi Izin
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
    <li><a href="{{ URL::to('izinair/pegawai/daftarizin') }}">daftar izin</a></li>
@endsection
@section('navigation')
	<ol class="breadcrumb">
	  <li><a href="{{URL::to('izinair/pegawai')}}">Home</a></li>
	  <li class="active">Validasi</li>
	</ol>
@endsection
@section('content')
<div class="main">
<div class="container main">
<div class="row grids_of_3">
				<div class="col-md-4 grid1_of_3">
					  <h2>Setuju</h2>
					  <img src="images/icon1.png" class="img-responsive"/>
				     <div class="rd_more1">
						<a href="javascript:confirmDataTeknis(1, {{$value->id}})"><button class="btn_style">Valid</button></a>
					</div>					
				</div>
				<div class="col-md-4 grid1_of_3">
					<h2>tidak setuju</h2>
					  <img src="images/icon2.png" class="img-responsive"/>
				      <div class="rd_more1">
						<a href="/izinair/pegawai/validasi/0/{{$jenis}}/{{$id}}"><button class="btn_style">tidak valid</button></a>
					</div>					
				</div>
			    <div class="clearfix"></div>
	</div>
	</div>
</div>
@stop