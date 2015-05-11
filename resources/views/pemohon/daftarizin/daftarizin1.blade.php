@extends('app')
@section('title')
	Izin Air Bawah Tanah
@endsection
@section('menu')
    <li><a href="{{URL::to('izinair/pemohon')}}">home</a></li>
    <li><a href="{{URL::to('izinair/pemohon/persyaratan')}}">persyaratan</a></li>
    <li class="active"><a href="{{URL::to('izinair/pemohon/daftarizin/1')}}">daftar izin</a></li>
    <li><a href="{{URL::to('izinair/pemohon/tentang')}}">tentang</a></li>
@endsection
@section('navigation')
	<ol class="breadcrumb">
	  <li><a href="{{URL::to('izinair/pemohon')}}">Home</a></li>
	  <li class="active"><a href="{{URL::to('izinair/pemohon/daftarizin/1')}}">Daftar Izin</a></li>
	</ol>
@endsection
@section('script')
	<script>
	function showHint(str) {
	    if (str.length == 0) { 
	        document.getElementById("txtHint").innerHTML = "";
	        return;
	    } else {
	        var xmlhttp = new XMLHttpRequest();
	        xmlhttp.onreadystatechange = function() {
	            if (xmlhttp.readyState == 4 && xmlhttp.status == 200) {
	                document.getElementById("txtHint").innerHTML = xmlhttp.responseText;
	            }
	        }
	        xmlhttp.open("GET", "gethint.php?q=" + str, true);
	        xmlhttp.send();
	    }
	}
	</script>
@endsection
@section('content')
<div class="main">
<div class="container">
		<div class="row  footer">
			<div class="contact-form">
				<h2>Daftar Izin Air Bawah Tanah</h2>
			</div>
			<table class="table table-striped table-hover">
	            <thead>
	                <tr>
	                    <th>No</th>                        
	                    <th>Jenis</th>
	                    <th>Status</th>
	                    <th>Masa Berlaku</th>
	                    <th>Aksi</th>
	                </tr>
	            </thead>
	            <tbody>
	            @foreach($form as $form_)
	            	<tr>
	                	<td>{{$form_->id}}</td>
	                	<td>Izin air bawah tanah</td>
	                	<td>{{$form_->status}}</td>
	                	<td>{{$form_->masa_berlaku}}</td>
	        			@if($form_->status == 'selesai')
	                		<td><a href="/izinair/pemohon/pembatalan/1/{{$form_->id}}">batalkan</a></td>
	        			@elseif($form_->status == 'ditolak')
	                		<td><a href="/izinair/pemohon/pengaduan/1/{{$form_->id}}">adukan</a></td>
	                	@else
	                		<td></td>
	        			@endif
	    			</tr>
	   			@endforeach
	            </tbody>
	       </table>
			<div class="clearfix"></div>
		</div>
	</div>
	</div>
@stop