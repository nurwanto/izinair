@extends('app')
@section('title')
	Izin Air Permukaan
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
    <li>{{session('username')}} | <a href="{{ URL::to('/izinair/super_logout')}}">Logout</a></li>
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
				<h2>Izin Air Permukaan</h2>
			</div>
            Akta Kepemilikan Tanah
				<div><a href="{{route('getfile', $izin->akta)}}"><img src="{{route('getfile', $izin->akta)}}"  style="witdh:100px; height:100px" alt=""/></a></div>
			Surat Kepemilikan Tanah
            <div><a href="{{route('getfile', $izin->surat_tanah)}}"><img src="{{route('getfile', $izin->surat_tanah)}}"  style="witdh:100px; height:100px" alt=""/></a></div>
			Keterangan Domisili
            <div><a href="{{route('getfile', $izin->domisili)}}"><img src="{{route('getfile', $izin->domisili)}}"  style="witdh:100px; height:100px" alt=""/></a></div>
			Surat Pernyataan Tidak Keberatan
            <div><a href="{{route('getfile', $izin->keberatan)}}"><img src="{{route('getfile', $izin->keberatan)}}"  style="witdh:100px; height:100px" alt=""/></a></div>
			Pernyataan Pelestarian
            <div><a href="{{route('getfile', $izin->pelestarian)}}"><img src="{{route('getfile', $izin->pelestarian)}}"  style="witdh:100px; height:100px" alt=""/></a></div>
			Data Teknis
            <div><a href="{{route('getfile', $izin->teknis)}}"><img src="{{route('getfile', $izin->teknis)}}"  style="witdh:100px; height:100px" alt=""/></a></div>
			DBMP
            <div><a href="{{route('getfile', $izin->dbmp)}}"><img src="{{route('getfile', $izin->dbmp)}}"  style="witdh:100px; height:100px" alt=""/></a></div>
			Surat Keterangan dari Lurah Setempat
            <div><a href="{{route('getfile', $izin->lurah)}}"><img src="{{route('getfile', $izin->lurah)}}"  style="witdh:100px; height:100px" alt=""/></a></div>
            <div class="col-md-4 grid1_of_3">
                <div class="rd_more1">
                    <a href="javascript:confirmDataTeknis(2, {{$izin->id}})"><button class="btn_style">Valid</button></a>
                </div>
            </div>
            <div class="col-md-4 grid1_of_3">
                <div class="rd_more1">
                    <a href="/izinair/pegawai/validasi/0/2/{{$izin->id}}"><button class="btn_style">Tidak Valid</button></a>
                </div>
            </div>
            <div class="clearfix"></div>
		</div>
	</div>
@stop