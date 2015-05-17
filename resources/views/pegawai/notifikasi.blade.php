@extends('app')
@section('title')
	Notifikasi Pemohon
@endsection
@section('menu')
    <li><a href="{{ URL::to('izinair/pegawai') }}">home</a></li>
    <li class="active"><a href="{{ URL::to('izinair/pegawai/daftarizin') }}">daftar izin</a></li>
@endsection
@section('navigator')
	<ol class="breadcrumb">
	  <li><a href="{{URL::to('izinair/pegawai')}}">Home</a></li>
	  <li class="active">Notifikasi</li>
	</ol>
@endsection
@section('content')
<div class="main"><!-- start main -->
<div class="container">
			<div class="row contact">			
				<div class="col-md-10">
				  <div class="contact-form">
				  	<h2>Notifikasi Pemohon</h2>
					    <form class="form-horizontal" role="form" method="post" action="pegawai/datateknis">
							<div class="form-group">
						      <label class="control-label col-sm-2" for="judul" style="font-size:14px">Judul</label>
						      <div class="col-sm-10">
						        <input type="text" class="form-control" id="id_izin"> 
						      </div>
						    </div>

							<div class="form-group">
						      <label class="control-label col-sm-2" for="no_izin" style="font-size:14px">Nomor Izin</label>
						      <div class="col-sm-10">
						        <input type="text" class="form-control" id="jenis_izin"> 
						      </div>
						    </div>

							<div class="form-group">
						      <label class="control-label col-sm-2" for="isi" style="font-size:14px">Isi</label>
						      <div class="col-sm-10">
						        <textarea class="form-control" rows="5" id="data"></textarea>
						      </div>
						    </div>
    					</div>
			    <div class="form-group">        
			      <div class="col-sm-offset-2 col-sm-10">
			        <button type="submit" class="btn btn-default">Submit</button>
			      </div>
			    </div>
			</form>
		</div>
  		</div>		
  	<div class="clearfix"></div>		
</div> <!-- end contact -->
</div>
</div>
@stop