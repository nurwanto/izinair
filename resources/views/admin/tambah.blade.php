@extends('app')
@section('title')
	Tambah Pegawai
@endsection
@section('menu')
    <li><a href="{{ URL::to('izinair/admin') }}">home</a></li>
    <li class="active"><a href="{{ URL::to('izinair/admin/manajemen') }}">manajemen</a></li>
@endsection
@section('navigation')
	<ol class="breadcrumb">
	  <li><a href="{{URL::to('/')}}">Home</a></li>
	</ol>
@endsection
@section('content')
	<div class="main"><!-- start main -->
	<div class="container">
		<div class="row contact">			
			<div class="col-md-10">
				<div class="contact-form">
				  <h2>Tambah Pegawai</h2>
					{!! Form::open(['class' => 'form-horizontal', 'url' => 'izinair/admin/manajemen']) !!}
				    	<div class="form-group">
					    	{!! Form::label('NIP','NIP', ['class' => 'control-label col-sm-2', 'style' => 'font-size:14px']) !!}
					      <div class="col-sm-10">
					        {!! Form::text('NIP', null, ['class' => 'form-control']) !!}
					      </div>
					    </div>

					    <div class="form-group">
					    	{!! Form::label('nama','Nama', ['class' => 'control-label col-sm-2', 'style' => 'font-size:14px']) !!}
					      <div class="col-sm-10">
					        {!! Form::text('nama', null, ['class' => 'form-control']) !!}
					      </div>
					    </div>

					    <div class="form-group">
					    	{!! Form::label('username','Username', ['class' => 'control-label col-sm-2', 'style' => 'font-size:14px']) !!}
					      <div class="col-sm-10">
					        {!! Form::text('username', null, ['class' => 'form-control']) !!}
					      </div>
					    </div>

					    <div class="form-group">
					    	{!! Form::label('password','Password', ['class' => 'control-label col-sm-2', 'style' => 'font-size:14px']) !!}
					      <div class="col-sm-10">
					        {!! Form::password('password', null, ['class' => 'form-control', 'type' => 'password']) !!}
					      </div>
					    </div>
			
					    <div class="form-group">        
					      <div class="col-sm-offset-2 col-sm-10">
					        {!! Form::submit('Tambah', ['class' => 'btn btn-default']) !!}
					      </div>
					    </div>
					{!! Form::close() !!}
				</div>
			</div>		
			<div class="clearfix"></div>		
		</div> <!-- end contact -->
	</div>
	</div>
@stop