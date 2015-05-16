@extends('app')
@section('title')
	Izin Perubahan Alur, Bentuk, Dimensi, dan Kemiringan Dasar Saluran/Sungai
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
				<h2>Izin Perubahan Alur, Bentuk, Dimensi, dan Kemiringan Dasar Saluran/Sungai</h2>
			</div>
				<div><a href="{{route('getfile', $izin->akta)}}"><img src="{{route('getfile', $izin->akta)}}"  style="witdh:100px; height:100px" alt=""/></a></div>
				<div><a href="{{route('getfile', $izin->surat_tanah)}}"><img src="{{route('getfile', $izin->surat_tanah)}}"  style="witdh:100px; height:100px" alt=""/></a></div>
				<div><a href="{{route('getfile', $izin->domisili)}}"><img src="{{route('getfile', $izin->domisili)}}"  style="witdh:100px; height:100px" alt=""/></a></div>
				<div><a href="{{route('getfile', $izin->keberatan)}}"><img src="{{route('getfile', $izin->keberatan)}}"  style="witdh:100px; height:100px" alt=""/></a></div>
				<div><a href="{{route('getfile', $izin->pelestarian)}}"><img src="{{route('getfile', $izin->pelestarian)}}"  style="witdh:100px; height:100px" alt=""/></a></div>
				<div><a href="{{route('getfile', $izin->profil)}}"><img src="{{route('getfile', $izin->profil)}}"  style="witdh:100px; height:100px" alt=""/></a></div>
				<div><a href="{{route('getfile', $izin->berita)}}"><img src="{{route('getfile', $izin->berita)}}"  style="witdh:100px; height:100px" alt=""/></a></div>
				<div><a href="{{route('getfile', $izin->dbmp)}}"><img src="{{route('getfile', $izin->dbmp)}}"  style="witdh:100px; height:100px" alt=""/></a></div>
				<div><a href="{{route('getfile', $izin->lurah)}}"><img src="{{route('getfile', $izin->lurah)}}"  style="witdh:100px; height:100px" alt=""/></a></div>
			<div class="clearfix"></div>
		</div>
	</div>
@stop