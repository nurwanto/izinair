@extends('app')
@section('title')
	Permohonan Pembatalan
@endsection
@section('menu')
    <li><a href="{{URL::to('izinair')}}">home</a></li>
    <li><a href="{{URL::to('izinair/pemohon/persyaratan')}}">persyaratan</a></li>
    <li><a href="{{URL::to('izinair/pemohon/lihat')}}">daftar izin</a></li>
    <li><a href="{{URL::to('izinair/pemohon/tentang')}}">tentang</a></li>
    <li><a href="{{URL::to('izinair/pemohon/kontak')}}">kontak kami</a></li>
@endsection
@section('navigation')
	<ol class="breadcrumb">
	  <li><a href="{{URL::to('izinair')}}">Home</a></li>
	  <li class="active">Form</li>
	</ol>
@endsection
@section('content')
<div class="main"><!-- start main -->
<div class="container">
			<div class="row contact">			
				<div class="col-md-10">
				  <div class="contact-form">
				  	<h2>Data Pemohon</h2>
					    <form class="form-horizontal" role="form">

						    <div class="form-group">
						      <label class="control-label col-sm-2" for="telp" style="font-size:14px">No Telp/ No HP</label>
						      <div class="col-sm-10">
						        <input type="text" class="form-control" id="telp">
						      </div>
						    </div>

							<div class="form-group">
							    <label class="control-label col-sm-2" for="email" style="font-size:14px">Email Pemohon</label>
							    <div class="col-sm-10">
							      <input type="email" class="form-control" id="email">
							    </div>
							</div>

						  	<div class="form-group">
						      <label class="control-label col-sm-2" for="teknis" style="font-size:14px">Rekomendasi Teknis</label>
						      <div class="col-sm-10">
						        <input type="file" class="form-control" id="teknis">dari Dinas Pertambangan dan Energi Propinsi Jawa Barat
						      </div>
						    </div>

						  	<div class="form-group">
						      <label class="control-label col-sm-2" for="bor" style="font-size:14px">Kepemilikan instalasi bor</label>
						      <div class="col-sm-10">
						        <input type="file" class="form-control" id="bor">
						      </div>
						    </div>
							<div class="form-group">
						      <label class="control-label col-sm-2" for="keberatan" style="font-size:14px">Pernyataan tidak keberatan</label>
						      <div class="col-sm-10">
						        <input type="file" class="form-control" id="keberatan">dari masyarakat sekitar proyek
						      </div>
						    </div>

							<div class="form-group">
						      <label class="control-label col-sm-2" for="konservasi" style="font-size:14px">Pernyataan Konservasi dan Pelestarian Alam</label>
						      <div class="col-sm-10">
						        <input type="file" class="form-control" id="konservasi">
						      </div>
						    </div>

						<h2>Data Izin</h2>
							<div class="form-group">
						      <label class="control-label col-sm-2" for="alamat" style="font-size:14px">Alamat Lokasi Izin</label>
						      <div class="col-sm-10">
						        <textarea class="form-control" rows="5" id="alamat"></textarea>
						      </div>
						    </div>

						    <div class="form-group">
						      <label class="control-label col-sm-2" for="luas" style="font-size:14px">Luas Lokasi Izin</label>
						      <div class="col-sm-10">
						        <input type="text" class="form-control" id="luas" placeholder="meter2"> 
						      </div>
						    </div>

							<div class="form-group">
						      <label class="control-label col-sm-2" for="usaha" style="font-size:14px">Kegiatan Usaha</label>
						      <div class="col-sm-10">
						        <input type="text" class="form-control" id="usaha"> 
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