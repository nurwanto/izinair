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
					{!! Form::open(['class' => 'form-horizontal', 'url' => 'izinair/pemohon/daftarizin/2']) !!}
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
						    	{!! Form::label('teknis','Proposal Teknis', ['class' => 'control-label col-sm-2', 'style' => 'font-size:14px']) !!}
						      <div class="col-sm-10">
						        {!! Form::file('teknis', null, ['class' => 'form-control']) !!}kebutuhan dan penggunaan air
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
@stop