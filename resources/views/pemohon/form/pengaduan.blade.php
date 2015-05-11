@extends('app')
@section('title')
	Pengaduan
@endsection
@section('menu')
    <li><a href="{{URL::to('izinair/pemohon')}}">home</a></li>
    <li><a href="{{URL::to('izinair/pemohon/persyaratan')}}">persyaratan</a></li>
    <li><a href="{{URL::to('izinair/pemohon/daftarizin')}}">daftar izin</a></li>
    <li><a href="{{URL::to('izinair/pemohon/tentang')}}">tentang</a></li>
@endsection
@section('navigation')
	<ol class="breadcrumb">
	  <li><a href="{{URL::to('izinair/pemohon')}}">Home</a></li>
	  <li class="active">Form</li>
	</ol>
@endsection
@section('content')
<div class="main"><!-- start main -->
<div class="container">
			<div class="row contact">
								
				<div class="col-md-8">
				  <div class="contact-form">
				  	<h2>Pengaduan</h2>
					    <form method="post" action="contact-post.html">
					    	<div>
						    	<span>no surat izin</span>
						    	<span><select class="form-control" id="sel1">
						    	<option></option>
						    	@foreach($form1 as $value)
							        <option>{{{ $value->id }}}</option>
							    @endforeach
							      </select></span>
						    </div>
						   <div>
						   		<span><input type="submit" value="ajukan pengaduan"></span>
						  </div>
					    </form>
				    </div>
  				</div>		
  				<div class="clearfix"></div>		
		  </div> <!-- end contact -->
</div>
</div>
@stop