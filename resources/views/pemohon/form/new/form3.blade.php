@extends('app')
@section('title')
	Form
@endsection
@section('menu')
    <li><a href="{{URL::to('izinair/pemohon')}}">home</a></li>
    <li><a href="{{URL::to('izinair/pemohon/persyaratan')}}">persyaratan</a></li>
    <li><a href="{{URL::to('izinair/pemohon/daftarizin/1')}}">daftar izin</a></li>
    <li><a href="{{URL::to('izinair/pemohon/tentang')}}">tentang</a></li>
@endsection
@section('navigator')
	<ol class="breadcrumb">
	  <li><a href="{{URL::to('izinair/pemohon')}}">Home</a></li>
	  <li class="active">Form</li>
	</ol>
@endsection
@section('content')
	<div class="main"><!-- start main -->
		<div class="container">
			<div class="row contact">			
				<div class="col-md-10">
					<div class="contact-form">
						{!! Form::open(['class' => 'form-horizontal', 'files' => true, 'url' => 'izinair/pemohon/daftarizin/3']) !!}
						  	<h2>Data Pemohon</h2>
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
							        {!! Form::text('no_pbb', null, ['class' => 'form-control']) !!}tahun terakhir
							      </div>
							    </div>

							    <div class="form-group">
							    	{!! Form::label('teknis','Proposal Teknis', ['class' => 'control-label col-sm-2', 'style' => 'font-size:14px']) !!}
							      <div class="col-sm-10">
							        {!! Form::file('teknis', null, ['class' => 'form-control']) !!}rencana volume air yang akan dibuang
							      </div>
							    </div>

							    <div class="form-group">
							    	{!! Form::label('dbmp','Rekomendasi dari DBMP', ['class' => 'control-label col-sm-2', 'style' => 'font-size:14px']) !!}
							      <div class="col-sm-10">
							        {!! Form::file('dbmp', null, ['class' => 'form-control']) !!}
							      </div>
							    </div>

							    <div class="form-group">
							    	{!! Form::label('bplh','Rekomendasi dari BPLH', ['class' => 'control-label col-sm-2', 'style' => 'font-size:14px']) !!}
							      <div class="col-sm-10">
							        {!! Form::file('bplh', null, ['class' => 'form-control']) !!}
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