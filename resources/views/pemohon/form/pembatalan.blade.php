@extends('app')
@section('title')
	Permohonan Pembatalan
@endsection
@section('menu')
    <li><a href="{{URL::to('izinair/pemohon')}}">home</a></li>
    <li><a href="{{URL::to('izinair/pemohon/persyaratan')}}">persyaratan</a></li>
    <li><a href="{{URL::to('izinair/pemohon/daftarizin/1')}}">daftar izin</a></li>
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
					{!! Form::open(['class' => 'form-horizontal', 'files' => true, 'url' => 'izinair/pemohon/daftarizin/1']) !!}
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
						    	{!! Form::label('teknis','Rekomendasi Teknis', ['class' => 'control-label col-sm-2', 'style' => 'font-size:14px']) !!}
						      <div class="col-sm-10">
						        {!! Form::file('teknis', null, ['class' => 'form-control']) !!}dari Dinas Pertambangan dan Energi Propinsi Jawa Barat
						      </div>
						    </div>

						    <div class="form-group">
						    	{!! Form::label('bor','Kepemilikan instalasi bor', ['class' => 'control-label col-sm-2', 'style' => 'font-size:14px']) !!}
						      <div class="col-sm-10">
						        {!! Form::file('bor', null, ['class' => 'form-control']) !!}
						      </div>
						    </div>

						    <div class="form-group">
						    	{!! Form::label('keberatan','Pernyataan tidak keberatan', ['class' => 'control-label col-sm-2', 'style' => 'font-size:14px']) !!}
						      <div class="col-sm-10">
						        {!! Form::file('keberatan', null, ['class' => 'form-control']) !!}dari masyarakat sekitar proyek
						      </div>
						    </div>

						    <div class="form-group">
						    	{!! Form::label('konservasi','Pernyataan konservasi dan Pelestarian Alam', ['class' => 'control-label col-sm-2', 'style' => 'font-size:14px']) !!}
						      <div class="col-sm-10">
						        {!! Form::file('konservasi', null, ['class' => 'form-control']) !!}
						      </div>
						    </div>

						<h2>Data Izin</h2>
							<div class="form-group">
						    	{!! Form::label('alamat','Alamat Lokasi Izin', ['class' => 'control-label col-sm-2', 'style' => 'font-size:14px']) !!}
						      <div class="col-sm-10">
						        {!! Form::textarea('alamat', null, ['class' => 'form-control', 'rows' => '5']) !!}
						      </div>
						    </div>

						    <div class="form-group">
						    	{!! Form::label('luas','Luas Lokasi Izin', ['class' => 'control-label col-sm-2', 'style' => 'font-size:14px']) !!}
						      <div class="col-sm-10">
						        {!! Form::text('luas', null, ['class' => 'form-control', 'placeholder' => 'meter2']) !!}
						      </div>
						    </div>

						    <div class="form-group">
						    	{!! Form::label('usaha','Kegiatan Usaha', ['class' => 'control-label col-sm-2', 'style' => 'font-size:14px']) !!}
						      <div class="col-sm-10">
						        {!! Form::text('usaha', null, ['class' => 'form-control']) !!}
						      </div>
						    </div>
    			
						    <div class="form-group">        
						      <div class="col-sm-offset-2 col-sm-10">
						        {!! Form::submit('Ajukan', ['class' => 'btn btn-default']) !!}
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