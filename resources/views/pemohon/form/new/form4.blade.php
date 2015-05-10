@extends('app')
@section('content')
<div class="header_bg"><!-- start header -->
	<div class="container">
		<div class="row header">
		<nav class="navbar" role="navigation">
		  <div class="container-fluid">
		    <!-- Brand and toggle get grouped for better mobile display -->
		    <div class="navbar-header">
		      <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
		        <span class="sr-only">Toggle navigation</span>
		        <span class="icon-bar"></span>
		        <span class="icon-bar"></span>
		        <span class="icon-bar"></span>
		      </button>
		      <a class="navbar-brand" href="{{URL::to('izinair')}}"><img src="{{URL::asset('images/pemkot.jpg')}}" style="width:75px; height:75px" alt="" class="img-responsive"/> </a>
		    </div>
		    <!-- Collect the nav links, forms, and other content for toggling -->
		    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
		      <ul class="menu nav navbar-nav ">
		        <li><a href="{{URL::to('izinair/pemohon')}}">home</a></li>
		        <li><a href="{{URL::to('izinair/pemohon/persyaratan')}}">persyaratan</a></li>
		        <li><a href="{{URL::to('izinair/pemohon/lihat')}}">daftar izin</a></li>
		        <li><a href="{{URL::to('izinair/pemohon/tentang')}}">tentang</a></li>
		        <li><a href="{{URL::to('izinair/pemohon/kontak')}}">kontak kami</a></li>
		      </ul>
		      <form class="navbar-form navbar-right" role="search">
		        <div class="form-group my_search">
		          <input type="text" class="form-control" placeholder="Search">
		        </div>
		        <button type="submit" class="btn btn-default">Search</button>
		      </form>
		    </div><!-- /.navbar-collapse -->
		  </div><!-- /.container-fluid -->
		</nav>
		</div>
		<ol class="breadcrumb">
		  <li><a href="{{URL::to('izinair')}}">Home</a></li>
		  <li class="active">Form</li>
		</ol>
	</div>
</div>
<div class="main"><!-- start main -->
	<div class="container">
		<div class="row contact">			
			<div class="col-md-10">
				<div class="contact-form">
					{!! Form::open(['class' => 'form-horizontal', 'url' => 'izinair/pemohon/daftarizin/4']) !!}
					  	<h2>Data Pemohon</h2>
					    <!-- <form class="form-horizontal" role="form" method="post" action="1"> -->
					    	<div class="form-group">
						    	{!! Form::label('telp','No Telp/ No Hp', ['class' => 'control-label col-sm-2', 'style' => 'font-size:14px']) !!}
						      <div class="col-sm-10">
						        {!! Form::text('telp', null, ['class' => 'form-control']) !!}
						      </div>
						    </div>

						    <div class="form-group">
						    	{!! Form::label('email','Email Pemohon', ['class' => 'control-label col-sm-2', 'style' => 'font-size:14px']) !!}
						      <div class="col-sm-10">
						        {!! Form::text('email', null, ['class' => 'form-control']) !!}
						      </div>
						    </div>

						<h2>Data Izin</h2>
						    <div class="form-group">
						    	{!! Form::label('akta','Akta Pendirian Perusahaan', ['class' => 'control-label col-sm-2', 'style' => 'font-size:14px']) !!}
						      <div class="col-sm-10">
						        {!! Form::file('akta', null, ['class' => 'form-control']) !!}
						      </div>
						    </div>

						    <div class="form-group">
						    	{!! Form::label('no_imb','Nomor IMB', ['class' => 'control-label col-sm-2', 'style' => 'font-size:14px']) !!}
						      <div class="col-sm-10">
						        {!! Form::text('no_imb', null, ['class' => 'form-control']) !!}
						      </div>
						    </div>

						    <div class="form-group">
						    	{!! Form::label('surat_tanah','Surat Tanah', ['class' => 'control-label col-sm-2', 'style' => 'font-size:14px']) !!}
						      <div class="col-sm-10">
						        {!! Form::file('surat_tanah', null, ['class' => 'form-control']) !!}
						      </div>
						    </div>

						    <div class="form-group">
						    	{!! Form::label('domisili','Keterangan Domisili', ['class' => 'control-label col-sm-2', 'style' => 'font-size:14px']) !!}
						      <div class="col-sm-10">
						        {!! Form::file('domisili', null, ['class' => 'form-control']) !!}dari lurah/camat setempat
						      </div>
						    </div>

						    <div class="form-group">
						    	{!! Form::label('keberatan','Pernyataan tidak Keberatan', ['class' => 'control-label col-sm-2', 'style' => 'font-size:14px']) !!}
						      <div class="col-sm-10">
						        {!! Form::file('keberatan', null, ['class' => 'form-control']) !!}
						      </div>
						    </div>

						    <div class="form-group">
						    	{!! Form::label('pelestarian','Pernyataan Pelestarian Alam', ['class' => 'control-label col-sm-2', 'style' => 'font-size:14px']) !!}
						      <div class="col-sm-10">
						        {!! Form::file('pelestarian', null, ['class' => 'form-control']) !!}dari lurah/camat setempat
						      </div>
						    </div>

						    <div class="form-group">
						    	{!! Form::label('no_pbb','No PBB', ['class' => 'control-label col-sm-2', 'style' => 'font-size:14px']) !!}
						      <div class="col-sm-10">
						        {!! Form::text('no_pbb', null, ['class' => 'form-control']) !!}PBB tahun terakhir
						      </div>
						    </div>

						    <div class="form-group">
						    	{!! Form::label('profil','Profil', ['class' => 'control-label col-sm-2', 'style' => 'font-size:14px']) !!}
						      <div class="col-sm-10">
						        {!! Form::file('profil', null, ['class' => 'form-control']) !!}Profil memanjang dan melintang dari saluran baru
						      </div>
						    </div>

						    <div class="form-group">
						    	{!! Form::label('berita','Berita Acara', ['class' => 'control-label col-sm-2', 'style' => 'font-size:14px']) !!}
						      <div class="col-sm-10">
						        {!! Form::file('berita', null, ['class' => 'form-control']) !!}Serah terima lahan saluran lama dan baru 
						      </div>
						    </div>

						    <div class="form-group">
						    	{!! Form::label('dbmp','Rekomendasi dari DBMP', ['class' => 'control-label col-sm-2', 'style' => 'font-size:14px']) !!}
						      <div class="col-sm-10">
						        {!! Form::file('dbmp', null, ['class' => 'form-control']) !!}
						      </div>
						    </div>

						    <div class="form-group">
						    	{!! Form::label('lurah','Rekomendasi dari Lurah/Camat', ['class' => 'control-label col-sm-2', 'style' => 'font-size:14px']) !!}
						      <div class="col-sm-10">
						        {!! Form::file('lurah', null, ['class' => 'form-control']) !!}
						      </div>
						    </div>
					{!! Form::close() !!}<!-- </form> -->
				</div>
			</div>
  		</div>		
  		@if($errors->any())
	      	@foreach($errors as $e)
	      		{{$e}}
	      	@endforeach
	      @endif
  	<div class="clearfix"></div>		
</div> <!-- end contact -->
</div>
<div class="main"><!-- start main -->
<div class="container">
			<div class="row contact">			
				<div class="col-md-10">
				  <div class="contact-form">
							<h2>Data Izin</h2>

						    <div class="form-group">
						      <label class="control-label col-sm-2" for="surat_tanah" style="font-size:14px">Surat Tanah</label>
						      <div class="col-sm-10">
						        <input type="file" class="form-control" id="surat_tanah">
						      </div>
						    </div>

						    <div class="form-group">
						      <label class="control-label col-sm-2" for="domisili" style="font-size:14px">Keterangan Domisili</label>
						      <div class="col-sm-10">
						        <input type="file" class="form-control" id="domisili">dari lurah/camat setempat
						      </div>
						    </div>

						    <div class="form-group">
						      <label class="control-label col-sm-2" for="keberatan" style="font-size:14px">Pernyataan tidak keberatan</label>
						      <div class="col-sm-10">
						        <input type="file" class="form-control" id="keberatan">dari masyarakat sekitar proyek
						      </div>
						    </div>

						    <div class="form-group">
						      <label class="control-label col-sm-2" for="pelestarian" style="font-size:14px">Pernyataan Pelestarian Alam</label>
						      <div class="col-sm-10">
						        <input type="file" class="form-control" id="pelestarian">
						      </div>
						    </div>

						    <div class="form-group">
						      <label class="control-label col-sm-2" for="no_pbb" style="font-size:14px">Pelunasan PBB</label>
						      <div class="col-sm-10">
						        <input type="file" class="form-control" id="no_pbb">PBB tahun akhir
						      </div>
						    </div>

						    <div class="form-group">
						      <label class="control-label col-sm-2" for="profil" style="font-size:14px">Profil</label>
						      <div class="col-sm-10">
						        <input type="file" class="form-control" id="profil">Profil memanjang dan melintang dari saluran baru
						      </div>
						    </div>

						  	<div class="form-group">
						      <label class="control-label col-sm-2" for="berita" style="font-size:14px">Berita Acara</label>
						      <div class="col-sm-10">
						        <input type="file" class="form-control" id="berita">Serah terima lahan saluran lama dan baru 
						      </div>
						    </div>

						  	<div class="form-group">
						      <label class="control-label col-sm-2" for="dbmp" style="font-size:14px">Rekomendasi dari DBMP</label>
						      <div class="col-sm-10">
						        <input type="file" class="form-control" id="dbmp">
						      </div>
						    </div>

							<div class="form-group">
						      <label class="control-label col-sm-2" for="lurah" style="font-size:14px">Rekomendasi dari Lurah/Camat</label>
						      <div class="col-sm-10">
						        <input type="file" class="form-control" id="lurah"> 
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